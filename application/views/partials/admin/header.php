<!DOCTYPE html>
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />

  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />

  <title>Admin</title>

  <link rel="stylesheet" href="<?=base_url()?>assets/foundation/css/normalize.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/foundation/css/foundation.css">

  <link rel="stylesheet" href="<?=base_url()?>assets/css/admin/admin_global.css">

  <script src="<?=base_url()?>assets/foundation/js/vendor/custom.modernizr.js"></script>
  <script type="text/javascript">

    var base_url = '<?=base_url()?>';
    
  </script>

</head>
<body>

 <nav class="top-bar">
    <ul class="title-area">
      <!-- Title Area -->
      <li class="name">
        <h1>
          <a href="<?=base_url().'admin'?>">
            Admin
          </a>	
        </h1>
      </li>
      <li class="toggle-topbar menu-icon"><a href="#"><span>&nbsp;</span></a></li>
    </ul>
    <section class="top-bar-section">
        <!-- Right Nav Section -->
        <ul class="right">
          <li class="has-form">
            <a href="#" class="button round">Logout</a>
          </li>
        </ul>
      </section>
  </nav>
  <!-- End Top Bar -->

  <!-- Main Page Content and Sidebar -->
  <div class="row">
    <div class="large-3 columns">
    	<div class="docs section-container accordion" data-section data-options="deep_linking: false">
		  <section class="section">
		    <p class="title"><a href="<?=base_url().'admin/cats'?>">Categories</a></p>
		  </section>
		  <section class="section <?if($this->uri->segment(2) == 'projects'):?>active<?endif?>">
		  	<p class="title"><a href="<?=base_url().'admin/projects'?>">Projects</a></p>
		  </section>
		  <section class="section">
		    <p class="title"><a href="#">Galleries</a></p>
		    <div class="content">
		      <ul class="side-nav">
		        <li><a href="#">Show</a></li>
		        <li><a href="#">Add</a></li>
		      </ul>
		    </div>
		  </section>
		  <section class="section ">
		    <p class="title"><a href="#">Users</a></p>
		    <div class="content">
		      <ul class="side-nav">
		        <li><a href="../">Users</a></li>
		        <li><a href="#">Change PIN</a></li>
		      </ul>
		    </div>
		  </section>
		</div>
    </div>
    <div class="large-9 columns" id="container">