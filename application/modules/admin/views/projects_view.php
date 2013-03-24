	<style type="text/css">
		/*#cat_list li{
			list-style: none;
		}*/
		#project_list .edit{
			display: none;
		}
		.delete{
			cursor: pointer;
		}
	</style>
	
	
	<div class="large-12 columns">
		<h1>Projects</h1>
	</div>
	<div class="large-8 columns">
		<input type="text" id="project_name" name="project_name" placeholder="Add Project">
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
		  <tbody id="project_list"></tbody>
		</table>
	</div>
	
	<script type="text/template" id="tpl_projects_item">
		<td>
	      	<label class="view"><%- title%></label>
	    	<input class="edit" type="text" value="" />
    	</td>
	    <td><a href="#" class="delete">Delete</a></td>
	</script>