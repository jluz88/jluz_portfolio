<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<?$this->load->view('partials/admin/head')?>
</head>
<body>

<header class="tpl_top_nav top-nav">

	<nav class="tpl_top_nav_inner">
	    <a href="<?=base_url()?>" class="left"><h1 class="logo">Test</h1></a>
	
	    <ul class="nav-bar right">
	    <?foreach($cats as $cat):?>
	      <li class="<?=($this->uri->segment(1) == $cat->slug)?'active':''?>"><a href="<?=base_url($cat->slug)?>"><?=$cat->link?></a></li>
	    <?endforeach?>
	      <li class="<?=($this->uri->segment(1) == 'contact')?'active':''?>"><a href="<?=base_url('contact')?>">Contact</a></li>
	    </ul>
	</nav>
	
</header>


<div class="tpl_body">
	<div id="content" class="row twelve columns centered">
	
		<?=($template['body'] ? $template['body'] : '')?>
	
	</div>
	<ul class="breadcrumbs" style="position: fixed; z-index: 20; bottom: 3px; right:0;">
		<?if($this->uri->segment(1)):?>
		<li><a href="javascript:history.go(-1)">&lt;&lt; Back</a></li>
		<?endif?>
	  	<li><a href="#">Top</a></li>
	</ul>
</div>
<footer  id="" class="row twelve columns tpl_footer">
    <div>
        This is the footer.
    </div>
</footer>
  
<script>
// $(window).load(function(){
  // $("#featured").orbit();
// });
</script> 
  
</body>
</html>