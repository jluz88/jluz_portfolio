<div class="large-12 columns">
	<h1>Categories</h1>
</div>
<div class="large-8 columns">
	<input type="text" id="cat_name" name="cat_name" placeholder="Add Category">
</div>
<div class="large-4 columns">
	<!-- <a href="#" id="cat_add" class="button postfix radius" onclick="return false;">Add</a> -->
</div>
<div class="large-12 columns">		
	<!-- <ul id="cat_list"></ul> -->
	
	<table class="large-8 columns">
	  <thead>
	    <tr>
	      <th width="300">Title</th>
	      <th width="100">&nbsp;</th>
	    </tr>
	  </thead>
	  <tbody id="cat_list"></tbody>
	</table>
	   
</div>
	
<script type="text/template" id="tpl_cats_item">
	<td>
      	<label class="view"><%- title%></label>
    	<input class="edit" type="text" value="" />
	</td>
    <td><a class="delete">Delete</a></td>
</script>

<script type="text/template" id="tpl_cats">
	<div class="view">
      <label><%= title %></label>
      <a class="destroy"></a>
    </div>
    <input class="edit" type="text" value="<%title %>" />
</script>