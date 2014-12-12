<script>
	function ajaxSearch() {
		var xmlhttp,
			searchField = document.querySelector("#nameSearch"),
			input_data = searchField.value,
			suggestionsbox = document.querySelector("#suggestions"),
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
	                	returndata = JSON.parse(xmlhttp.responseText);
	                	if(input_data.length === 0){
	                		suggestionsbox.style.display = "none";
						}else{
							suggestionsbox.style.display = "block";
							suggestionsbox.innerHTML = "<ul>";
		                	for(i=0 ; i < returndata.length ; i++){
		                		suggestionsbox.innerHTML += "<li>" + returndata[i].students_firstname +" "+ returndata[i].students_lastname + "</li>";
						    }
						    suggestionsbox.innerHTML += "</ul>";
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