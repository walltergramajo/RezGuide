// JavaScript Document
// ClassPath functions
var pathsArray, steps, text, output, destinationHeader;
var stepsArray = new Array();
var pathStart = null;
var pathEnd = null;

function classPathInit(){
	// startButton = document.querySelector("#classPathStart");
	// startButton.addEventListener("click",createPath,false);
	textPath = document.querySelector("#textGuideSection");
	textPath.addEventListener("load",createPath,false);

	destinationHeader = document.querySelector("#destinationRoom");

	startInput1 = document.querySelector("#startPoint");
	startInput2 = document.querySelector("#start");

	startInput1.addEventListener("change",function(){pathStart = this.value; storeClassrooms();},false);
	startInput2.addEventListener("change",function(){pathStart = this.value; storeClassrooms();},false);
}

function storeClassrooms(){
	if(Modernizr.localstorage){
		localStorage['start'] = pathStart;
		localStorage['end'] = pathEnd;
		localStorage['stored'] = true;
	}else{
		alert('classpath unavailable');
	}
}

function createPath(){
	//console.log("logging");
	// var start = document.querySelector("#start").value;
	// var end = document.querySelector("#end").value;
	var start = localStorage['start'];
	var end = localStorage['end'];
	//console.log(start);
	destinationHeader.innerHTML = end;
	
	pathArray = $.getJSON('includes/caller.php?tag=paths&begin='+start+'&end='+end, function(data){
		output = document.querySelector("#guideScroll .row");
		steps = data[0]['paths_stepSet'];
		console.log(steps);
		stepsArray = steps.split(",");
		console.log(stepsArray);
		output.innerHTML = "";
		for(i=0;i<stepsArray.length;i++){
			
			if(stepsArray[i] == "1"){
				text = "Turn Right";
			}
			if(stepsArray[i] == "2"){
				text = "Turn Left";
			}
			if(stepsArray[i] == "3"){
				text = "Go Straight";
			}
			
			output.innerHTML += '<div class="textGuideBg" onClick="highlightLink(this);"><div class="small-10 columns"><h3 class="directionText">'+text+'</h3><div class="checkboxFive"><input type="checkbox" /><label for="checkboxFiveInput"></label></div></div></div>';
		}
		
		console.log(output);
	});
	//console.log(pathArray);
}

window.addEventListener("load",classPathInit,false); 