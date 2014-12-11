  <script src="<?php echo base_url(); ?>js/vendor/jquery.js"></script>
  <script src="<?php echo base_url(); ?>js/jquery-ui-1.10.4.custom/js/jquery-ui-1.10.4.custom.js"></script> <!--For Calendar-->
  <script>
		$( "#datePicker" ).datepicker({ altField: "#actualDate", dayNamesMin: ['S', 'M', 'T', 'W', 'T', 'F', 'S'] });
	</script>
  <script>
	  $(document).bind("mobileinit", function(){
      $.mobile.changePage.allowSamePageTransition = true;
    });
  </script>
  <script type="text/javascript">
    baseUrl = "<?php echo base_url(); ?>";
  </script>
  <script src="<?php echo base_url(); ?>js/mainClassPath.js" type="text/javascript"></script>  
  <script src="<?php echo base_url(); ?>js/foundation.min.js"></script>
  <script src="<?php echo base_url(); ?>js/foundation/foundation.js"></script>
	<script src="<?php echo base_url(); ?>js/foundation/foundation.dropdown.js"></script>
  <script src="<?php echo base_url(); ?>js/foundation/foundation.accordion.js"></script>
  <script src="<?php echo base_url(); ?>js/foundation/foundation.reveal.js"></script>
  <script src="<?php echo base_url(); ?>js/createPaths.js"></script>
  <script>
    $(document).foundation();
  </script>
</body>
</html>