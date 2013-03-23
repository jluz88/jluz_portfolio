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

	var CatsModel = Backbone.Model.extend({});
	
	var CatsColl = Backbone.Collection.extend({
		model:CatsModel,
		url:'/v1/cats'
	});

	var catsColl = new CatsColl;

	var CatsItemView = Backbone.View.extend({

		tagName:'tr',

		template: _.template($('#tpl_cats_item').html()),
		
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
	
	var CatsAppView = Backbone.View.extend({
		
		el:'#container',
	
		initialize: function(){
			this.listenTo(catsColl, 'add', this.addOne);
			this.listenTo(catsColl, 'reset', this.addAll);
			this.listenTo(catsColl, 'all', this.render);
			
			catsColl.fetch();
			
		},
		
		events: {
			'click #cat_add'     : 'create',
			'keypress #cat_name' : 'addOnEnter'
		},
	
		render: function(){
			
		},

		addOne: function(catModel){
			
			var catsItemView = new CatsItemView({model:catModel});
			
			this.$('#cat_list').append( catsItemView.render().el );
			
		},

		addAll: function(){
			catsColl.each(this.addOne, this);
		},
		
		addOnEnter: function(e){
			if(e.keyCode == 13) this.create();
		},
		
		create: function(){
			
			catsColl.create({title: $('#cat_name').val()});
			
			$('#cat_name').val('');
		}
		
	});

	var catsAppView = new CatsAppView;
	
});
