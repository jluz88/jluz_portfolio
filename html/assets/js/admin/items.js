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
		url: '/v1/projects/21'
	});

	// var ItemsColl = Backbone.Collection.extend({
	// 	model: ProjectModel,
	// 	url: '/v1/items'
	// });

	//var itemsColl = new ItemsColl();

	var ItemView = Backbone.View.extend({

		events: {
			//'click .edit': 'render'
		},

		initialize: function(){
			this.itemModel = new ProjectModel();
			//this.itemModel.fetch();

			l( this.itemModel.get('title') );
		},

		render: function(){

		},

		addOne: function(){

		},

		addAll: function(){

		}

	});

	var runItemView = new ItemView();




});