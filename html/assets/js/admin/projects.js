$(function(){
	
	/**
	 * Debug Functions
	 */
	var l = function(someVar){
		console.log(someVar);
	}
	
	/**
	 * Categories
	 */

	var ProjectsModel = Backbone.Model.extend({});
	
	var ProjectsColl = Backbone.Collection.extend({
		model:ProjectsModel,
		url:'/v1/projects'
	});

	var projectsColl = new ProjectsColl;

	var ProjectsItemView = Backbone.View.extend({

		tagName:'tr',

		template: _.template($('#tpl_projects_item').html()),
		
		events:{
			'dblclick .view' : 'edit',
			'click .delete'  : 'clear',
			'blur .edit'     : 'close',
			'keypress .edit' : 'updateOnEnter'
		},

		initialize: function(){
			this.listenTo(this.model, 'change', this.render);
			this.listenTo(this.model, 'destroy', this.remove);
		},
	
		render: function(){
			
			this.$el.html(this.template(this.model.toJSON()));

			return this;
		},
		
		edit: function(){
			this.$el.find(".view").hide();
			this.$el.find(".delete").hide();
			this.$el.find(".edit").show().focus().val(this.model.get('title'));
		},
		
		close: function(){
			var value = this.$el.find('.edit').val();
			var currentTitle = this.model.get('title');
			
			if(!value){
				this.clear();
			}else if(value == currentTitle){
				this.$el.find(".view").show();
				this.$el.find(".edit").hide();
				this.$el.find(".delete").show();
			}else{
				this.model.save({'title': value});
			}
		},
		
		updateOnEnter: function(e){
			if(e.keyCode == 13){
				this.close();
			}
		},
		
		clear: function(){
			this.model.destroy();
		}

	});
	
	var ProjectsAppView = Backbone.View.extend({
		
		el:'#container',
	
		initialize: function(){
			this.listenTo(projectsColl, 'add', this.addOne);
			this.listenTo(projectsColl, 'reset', this.addAll);
			this.listenTo(projectsColl, 'all', this.render);
			
			projectsColl.fetch();
			
		},
		
		events: {
			'click #project_add'     : 'create',
			'keypress #project_name' : 'addOnEnter'	
		},
	
		render: function(){
			
		},

		addOne: function(catModel){
			
			var projectsItemView = new ProjectsItemView({model:catModel});
			
			this.$('#project_list').append( projectsItemView.render().el );
			
		},

		addAll: function(){
			projectsColl.each(this.addOne, this);
		},
		
		addOnEnter: function(e){
			if(e.keyCode == 13) this.create();
		},
		
		create: function(){
			
			projectsColl.create({title: $('#project_name').val()});
			
			$('#project_name').val('');
		}
		
	});

	var projectsAppView = new ProjectsAppView;
	
});
