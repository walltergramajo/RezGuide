<script src="<?php echo base_url(); ?>js/jquery-1.10.2.js"></script>
<script src="<?php echo base_url(); ?>js/jquery.nicescroll.js"></script>
<script>
    $(document).ready(

    function() {
        $("<?php echo $scrollTarget; ?>").niceScroll({cursorcolor:"#518d84",cursorwidth: "10px", cursorborder:"none"}); 
    });
</script>