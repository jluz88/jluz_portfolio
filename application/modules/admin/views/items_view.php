<div class="large-12 columns">
	<h1 id="the_title"></h1>
</div>
<div class="large-8 columns">
	<input type="text" id="project_name" name="project_name" placeholder="Add Project">
</div>
<div class="large-4 columns">

</div>
<div class="large-12 columns">
	
<!-- 	<table class="large-8 columns">
	  <thead>
	    <tr>
	      <th width="300">Title</th>
	      <th width="100">&nbsp;</th>
	      <th width="100">&nbsp;</th>
	    </tr>
	  </thead>
	  <tbody id="project_list"></tbody>
	</table> -->

</div>

<script type="text/template" id="tpl_projects_item">
	<td>
      	<label class="view"><%- title%></label>
    	<input class="edit" type="text" value="" />
	</td>
	<td>
		<a href="#" class="open">Open</a>
	</td>
    <td>
    	<a href="#" class="delete">Delete</a>
    </td>
</script>