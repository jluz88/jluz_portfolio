<style type="text/css">
	.sortable{
		cursor:move;
	}
	
	.ui-sortable-helper{
		border:1px solid orange;
		background:#fff;
	}
	
	.ui-state-highlight{
		height:30px;
	}
	
</style>
<div>
	<h1>Categories</h1>
	
	<div class="row collapse">
	    <div class="small-10 columns">
	      <input type="text" placeholder="Enter Category Name">
	    </div>
	    <div class="small-2 columns">
	      <a href="#" class="button prefix">Add</a>
	    </div>
	</div>
	
	<table>
	  <thead>
	    <tr>
	      <th width="200">Title</th>
	      <th>Edit</th>
	      <th width="150">Delete</th>
	    </tr>
	  </thead>
	  <tbody id="sortable" class="sortable">
	    <tr class="ui-state-default">
	      <td>Web</td>
	      <td><a href="#">Edit</a></td>
	      <td><a href="#">Delete</a></td>
	    </tr>
	    <tr class="ui-state-default">
	      <td>Facebook</td>
	      <td><a href="#">Edit</a></td>
	      <td><a href="#">Delete</a></td>
	    </tr>
	    <tr class="ui-state-default">
	      <td>Other</td>
	      <td><a href="#">Edit</a></td>
	      <td><a href="#">Delete</a></td>
	    </tr>
	  </tbody>
	</table>
	
</div>
