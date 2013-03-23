</div>
  </div>

  <!-- End Main Content and Sidebar -->

  <!-- Footer -->

  <hr/>	
 
  <footer class="row">
    <div class="large-12 columns">  
          <p>Joseph Luzquinos &copy; <?=date('Y')?></p>
    </div>
  </footer>
 
  <!-- End Footer -->

  <!-- Map Modal -->
 
  <div class="reveal-modal" id="mapModal">
    <h4>Where We Are</h4>
    <p><img src="http://placehold.it/800x600" /></p>
 
    <!-- Any anchor with this class will close the modal. This also inherits certain styles, which can be overriden. -->
    <a href="#" class="close-reveal-modal">&times;</a>
  </div>
	
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/jquery-ui.min.js"></script>
  
  <script src="//cdnjs.cloudflare.com/ajax/libs/underscore.js/1.4.4/underscore-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/backbone.js/0.9.10/backbone-min.js"></script>
  
  <script src="//cdn.jsdelivr.net/foundation/4.0.2/js/foundation/foundation.js"></script>
  <script src="//cdn.jsdelivr.net/foundation/4.0.2/js/foundation/foundation.cookie.js"></script>
  <script src="//cdn.jsdelivr.net/foundation/4.0.2/js/foundation/foundation.alerts.js"></script>
  <script src="//cdn.jsdelivr.net/foundation/4.0.2/js/foundation/foundation.clearing.js"></script>
  <script src="//cdn.jsdelivr.net/foundation/4.0.2/js/foundation/foundation.dropdown.js"></script>
  <script src="//cdn.jsdelivr.net/foundation/4.0.2/js/foundation/foundation.forms.js"></script>
  <script src="//cdn.jsdelivr.net/foundation/4.0.2/js/foundation/foundation.joyride.js"></script>
  <script src="//cdn.jsdelivr.net/foundation/4.0.2/js/foundation/foundation.magellan.js"></script>
  <script src="//cdn.jsdelivr.net/foundation/4.0.2/js/foundation/foundation.orbit.js"></script>
  <script src="//cdn.jsdelivr.net/foundation/4.0.2/js/foundation/foundation.placeholder.js"></script>
  <script src="//cdn.jsdelivr.net/foundation/4.0.2/js/foundation/foundation.reveal.js"></script>
  <script src="//cdn.jsdelivr.net/foundation/4.0.2/js/foundation/foundation.section.js"></script>
  <script src="//cdn.jsdelivr.net/foundation/4.0.2/js/foundation/foundation.tooltips.js"></script>
  <script src="//cdn.jsdelivr.net/foundation/4.0.2/js/foundation/foundation.topbar.js"></script>
  <!-- <script src="<?=base_url().'/assets/js/admin_global.js'?>"></script> -->

  <!-- <script src="<?=base_url().'/assets/js/backbone.admin.js'?>"></script> -->
  <!-- Application Javascript, safe to override -->

  <!-- <script src="//cdn.jsdelivr.net/foundation/4.0.2/js/foundation/index.js"></script> -->
  <script>
      $(document).foundation().foundation('joyride', 'start');
  </script>
  
	<?if($this->uri->segment(2)):?>
  		<script src="<?=base_url()?>assets/js/admin/<?=$this->uri->segment(2)?>.js"></script>
	<?endif?>

  
</body>
</html>