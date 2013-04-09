$(function(){

	/**
	 * Debug Functions
	 */
	var l = function(someVar){
		console.log(someVar);
	};


	/**
	* Items
	*/
	var ProjectModel = Backbone.Model.extend({
		url: '/v1/projects'
	});

	// var ItemsColl = Backbone.Collection.extend({
	// 	model: ProjectModel,
	// 	url: '/v1/items'
	// });	

	//var itemsColl = new ItemsColl();

	var ItemView = Backbone.View.extend({

		el:'#the_title',

		events: {	
			//'click .edit': 'render'
		},

		initialize: function(){
			var selft = this;
			this.itemModel = new ProjectModel();
			this.itemModel.fetch();

			l(this.itemModel);


		},

		render: function(){
			this.$el.html('Hello Testing!');
		},

		addOne: function(){

		},

		addAll: function(){

		}

	});

	var runItemView = new ItemView();




});