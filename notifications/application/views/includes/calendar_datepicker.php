<script src="<?php echo base_url(); ?>js/jquery-1.10.2.js"></script>
<script src="<?php echo base_url(); ?>js/jquery-ui-1.10.4.custom.js"></script>
<script src="<?php echo base_url(); ?>js/jquery.nicescroll.js"></script>
<script>
	 $(function() {
		$( "#datepicker" ).datepicker();
	});

	$(document).ready(

    function() {

        $("#eventList").niceScroll({cursorcolor:"#00F"}); 
   	 });
</script>