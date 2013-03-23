<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<?$this->load->view('partials/head')?>
</head>
<body>

<header class="tpl_top_nav">
	<?$this->load->view('partials/header')?>
</header>

<div class="tpl_body">
	<div id="content" class="row twelve columns centered">
	
		<?=($template['body'] ? $template['body'] : '')?>

	</div>
	<ul class="breadcrumbs back_top" style="display:none;">
		<?if($this->uri->segment(1)):?>
		<li><a href="javascript:history.go(-1)">&lt;&lt; Back</a></li>
		<?endif?>
	  	<li><a href="#" id="take_to_top">Top</a></li>
	</ul>
</div>
<footer  id="" class="row twelve columns tpl_footer">
    <?$this->load->view('partials/footer')?>
</footer>
</body>
</html>