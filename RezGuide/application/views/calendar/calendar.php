<section class="mainContent">
    <div class="row" id="calendarPage">
        <div class="small-12 columns">
            <div class="small-4 columns text-center">
                <div id="calendarAccordion">
                    <dl class="accordion" data-accordion>
                        <?php //foreach ($events as $row): ?>
                            <!-- <dd>
                                <a href="#panel<?php echo $row->events_id ?>" class="accordionLink" onClick="highlightLink(this);"><?php echo $row->events_title ?><span class="right"><img src="<?php echo base_url(); ?>img/accordionArrowDownHover.png" alt="Click For more Information."></span></a>
                                <div id="panel<?php echo $row->events_id ?>" class="content">
                                    <div class="dividerAccordionTop"></div>
                                    <div class="row eventInfo">
                                        <div class=" small-7 columns text-center" >
                                            <img src="<?php echo base_url(); ?>img/eventNumber.png">
                                        </div>
                                        <div class=" small-5 columns" >
                                            <p class="eventStart"><?php echo $row->events_startdate ?></p>
                                            <p class="eventEnd"><?php echo $row->events_enddate ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="small-12 columns">
                                        <div class="dividerAccordion"></div>
                                    </div>
                                </div>
                            </dd> -->
                        <?php //endforeach; ?>
                    </dl>
                </div>
            </div>
            <div id="datepicker"></div>
        </div>
    </div>
</section>
<?php $this->load->view('templates/footer'); ?>

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

    <script>
	 $(function() {
		$( "#datepicker" ).datepicker({
			inline: true
		});
	});
	</script>
    <script src="<?php echo base_url(); ?>js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
    <script src="<?php echo base_url(); ?>js/main.js"></script>
    <script src="<?php echo base_url(); ?>js/calendar.js"></script>
  </body>
</html>