<script>
	function ajaxSearch() {
		var xmlhttp,
			searchField = document.querySelector("#nameSearch"),
			input_data = searchField.value,
			resultslist = document.querySelector("#searchresults"),
			post_data = "search_data=" + input_data,
			returndata;

		if (window.XMLHttpRequest) {
	        // code for IE7+, Firefox, Chrome, Opera, Safari
	        xmlhttp = new XMLHttpRequest();
	    } else {
	        // code for IE6, IE5
	        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	    }

	    xmlhttp.onreadystatechange = function() {
	        if (xmlhttp.readyState == 4 ) {
	           if(xmlhttp.status == 200){
	                	//returndata = JSON.parse(xmlhttp.responseText);
	                	returndata = xmlhttp.responseText;
	                	if(input_data.length === 0){
	                		resultslist.style.display = "none";
						}else{
							resultslist.style.display = "block";
							resultslist.innerHTML = returndata;
		        //         	for(i=0 ; i < returndata.length ; i++){
		        //         		resultslist.innerHTML = '<div class="row"><div class="small-12 columns"><div class="divider"></div></div></div><div class="row"><div class="small-3 columns"><div class="edit">';
		        //         		resultslist.innerHTML += '<a href="<?php echo base_url(); ?>index.php/<?php echo $controller_uri; ?>/<?php echo $function_uri; ?>/edit/
		        //         		resultslist.innerHTML += '<li class="option">' + returndata[i].students_firstname +' '+ returndata[i].students_lastname + '</li>';
						    // }
						}
	           }else if(xmlhttp.status == 400) {
	              alert('There was an error 400')
	           }else{
	               alert('something else other than 200 was returned')
	           }
	        }
	    }

	    xmlhttp.open("POST", "<?php echo site_url('livesearch/autocomplete'); ?>", true);
	    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	    xmlhttp.send(post_data);


	}
</script>