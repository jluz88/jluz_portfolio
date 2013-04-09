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
    <!-- <p><img src="http://placehold.it/800x600" /></p> -->
 
    <!-- Any anchor with this class will close the modal. This also inherits certain styles, which can be overriden. -->
    <a href="#" class="close-reveal-modal">&times;</a>
  </div>
	
  <script src="<?=base_url()?>assets/js/jquery.js"></script>
  <script src="<?=base_url()?>assets/js/jquery_ui.js"></script>
  <script src="<?=base_url()?>assets/js/underscore.js"></script>
  <script src="<?=base_url()?>assets/js/backbone.js"></script>
  <script src="<?=base_url()?>assets/foundation/js/foundation.min.js"></script>

  <script>
    $(document).foundation();
  </script>
  
	<?if($this->uri->segment(2)):?>
  		<script src="<?=base_url()?>assets/js/admin/<?=$this->uri->segment(2)?>.js"></script>
	<?endif?>
  
</body>
</html>