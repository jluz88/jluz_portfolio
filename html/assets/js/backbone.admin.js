$(function(){

	var pr = function(someVar){
		console.log(someVar);
	}
	var pre = function(someVar){
		console.log(someVar);
		return false;
	}
		
		// var makeSortable = function(){
			// $( "#sortable" ).sortable({
		      // placeholder: "ui-state-highlight"
		    // });
		    // $( "#sortable" ).disableSelection();
		// }
		
		/**
		 * Categories
		 */
		
		// var Cats = {
			// Models: {},
			// Collections: {},
			// Views: {},
			// Templates:{}
		// }

		var CatsModel = Backbone.Model.extend({
			url:'/v1/cats'
		});
		
		var CatsColl = Backbone.Collection.extend({
			model:CatsModel,
			url:'/v1/cats'
		});
		
		var catsColl = new CatsColl;
		
		var CatsView = Backbone.View.extend({
			el: '#container',
			
			initialize: function(){
				
				this.listenTo(this.model, 'change', this.render);
				
			},
			
			template: _.template($('#tpl_cats').html()),
			
			events: {
				//'click .sortable' : 'alertClick',
				//'dblclick .sortable' : 'alertDblClick',
				'click #cat_add'     : 'addCat',
				'keypress #cat_name' : 'addCatOnEnter'
			},
			
			alertDblClick: function(){
				alert('Double Click works!');	
			},
			
			addCat: function(){
				
				var catName   = $('#cat_name').val();
				
				if(catName == ''){
					alert('Enter a Title!');
					return false;
				}
				
				var catsModel = new CatsModel({title: catName});
				
				if( catsModel.save({title: catName}) ){
					this.render();
				}
			},
			
			addCatOnEnter: function(e){
				if(e.keyCode == 13) this.addCat();
			},
			
			render: function(){
				
				var self = this;
				
				catsColl.fetch({
					success: function(cats){
						self.$el.html(self.template({
							users: cats.models
						}));
					}
				});
				
				
				// this.$el.html(this.template(this.model.toJSON()));
				
				//var that = this;
				//var catsCall = new CatsColl();
				
				//catsCall.fetch({
					//success: function(users){
						
						//var tpl = _.template($('#tpl_cats').html(),{users: users.models});
						//pr(that.template);
						//	that.$el.html(tpl);
						
				//	//}
				//});
			}
		});
		/**
		 * END Categories
		 */
		
		/**
		 * Routes
		 */
		// Define Routes
		var Router = Backbone.Router.extend({
			routes:{
				'' : 'home',
				'cats': 'cats'
			},
			home : function(){
				//alert('This is the home page!');
			},
			cats: function(){
				var catColl = new CatsColl();
				var catView = new CatsView({model:catColl});
				catView.render();
			}
			
		});
		
		var app = new Router();
		
		Backbone.history.start();
		
		// Home Page
		// var router  = new Router();
	// 	
		// router.on('route:home', function(){
	// 		
		// });
		
		// Categories
		//var catView = new CatsView();
		
		// router.on('route:cats', function(){
			// catView.render();
		// });
		
		/**
		 * END Routes
		 */
		
		

	
	
});
