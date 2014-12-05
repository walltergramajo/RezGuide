// JavaScript Document
// ClassPath functions
var pathsArray, steps, text, output, destinationHeader;
var stepsArray = new Array();

function classPathInit(){
	startButton = document.querySelector("#classPathStart");
	startButton.addEventListener("click",createPath,false);
	destinationHeader = document.querySelector("#destinationRoom");
}

function createPath(){
	console.log("logging");
	var start = document.querySelector("#start").value;
	var end = document.querySelector("#end").value;
	console.log(start);
	destinationHeader.innerHTML = end;
	
	pathArray = $.getJSON('../includes/caller.php?tag=paths&begin='+start+'&end='+end, function(data){
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
	console.log(pathArray);
}

window.addEventListener("load",classPathInit,false); 