// JavaScript Document

//Global variables
var botImg, botImg1, fOut, fIn, opacity, eventCal, months, year, pointsEntry, entryArrow, events, day;

months = ["January", "Feburary", "March", "April","May","June", "July","August","September","October","November","December"];
function init(){
	
	//load bottom menu images into a array
	botImg = document.getElementsByClassName('botImg');
	botImg1 = document.getElementsByClassName('botImg1');
	
	if(window.location.href.indexOf("calendarJquery.html") != -1) {
		//load events from the Calendar
		
		prepareEvents(); 
	
		
	}
	if(window.location.href.indexOf("points.html") != -1) {
		pointsEntry = document.getElementsByClassName("pointsEntry");
		for(var i =0;i < pointsEntry.length;i++){
			prepareMiniPoints(i);
		}
	}
	if(window.location.href.indexOf("pd_notices_complains.html") != -1 
		|| window.location.href.indexOf("pd_notices_maintenance.html") != -1 
		|| window.location.href.indexOf("pd_notices_warnings.html") != -1 
		|| window.location.href.indexOf("fsu.html") != -1
		|| window.location.href.indexOf("generalInfo.html") != -1
		|| window.location.href.indexOf("news.html") != -1){
		entryArrow = document.getElementsByClassName('accordionTitle');
		for(var i =0;i < entryArrow.length;i++){
			prepareArrows(i);
		}
	}
	if(window.location.href.indexOf("calendar.html") != -1) {
		//load events from the Calendar
		eventCal = document.querySelectorAll(".event");
		for( var i=0; i <eventCal.length; i++){
			fillEvents(i);
		}
	}
}
function prepareArrows(i){
	entryArrow[i].addEventListener("mouseover", function(){swapArrow(i);}, false);
	entryArrow[i].addEventListener("mouseout", function(){revertArrow(i);}, false);
	//entryArrow[i].addEventListener("click", function(){highlightAccordion(i); },false);
}
function swapArrow(i){
	var arrowImage = document.getElementsByClassName('accordionDropDownIcon');
	
	arrowImage[i].innerHTML = '<img src="img/accordionArrowDownHover.png" alt="Click For more Information.">';
}
function revertArrow(i){
	var arrowImage = document.getElementsByClassName('accordionDropDownIcon');
	
	arrowImage[i].innerHTML = '<img src="img/accordionArrowDown.png" alt="Click For more Information.">';
}
function prepareMiniPoints(i){
	pointsEntry[i].addEventListener("mouseover", function(){swapMiniPoints(i);}, false);
	pointsEntry[i].addEventListener("mouseout", function(){revertMiniPoints(i);}, false);
}
function swapMiniPoints(i){
	var pointsMiniImage = document.getElementsByClassName('pointsMiniImage');
	var accordionLink = document.getElementsByClassName('accordionLink');
	
	pointsMiniImage[i].src = 'img/pointsMiniHover.png';
	
	accordionLink[i].style.borderLeft =" 15px solid #518d84";
    accordionLink[i].style.color= "#fff";
	accordionLink[i].style.backgroundImage = "url('../img/accordionArrow.png') no-repeat center left";
	accordionLink[i].style.backgroundColor = "#74cabd";
}
function revertMiniPoints(i){
	console.log("REVERT HIT!");
	var pointsMiniImage = document.getElementsByClassName('pointsMiniImage');
	
	pointsMiniImage[i].src = 'img/pointsMini.png';
}
function prepareEvents(){
	days = document.querySelectorAll("tbody a");
	
	console.log("EVENT HIT! Day is " + (days[0]));
	//Events is a array which holds the dates of certain events, once month functionality is worked in, this needs to become a multiarray
	events = [1, 5, 12, 20, 21, 31];
	
	//compare the date to the dates of event, factoring in that arrays start at 0
	for(var i = 0; i <=(days.length-1);i++){
		for(var l = 0; l <=(events.length-1);l++){
			if((i+1) ==(events[l])){
				console.log("EVENT HIT! Day is " + (days[i]+1));
				days[i].style.border = "2px solid #74cabd";
			}
		}
		
	}
	
}
function highlightAccordion(i){
	var accordion = document.querySelectorAll('.accordionLink');
	console.log(i + ' Clicked!');
	
	//Reset all accordion links to default style
	for(var counter = 0; counter <= (accordion.length - 1); counter++){
		accordion[counter].style.backgroundColor = "#fff";
	 	accordion[counter].style.borderLeft =" 15px solid #74cabd";
      	accordion[counter].style.color= "#518d84";
	}
	accordion[i].style.borderLeft =" 15px solid #518d84";
    accordion[i].style.color= "#fff";
	accordion[i].style.backgroundImage = "url('../img/accordionArrow.png') no-repeat center left";
	accordion[i].style.backgroundColor = "#74cabd";
}
function fillEvents(i){
	var tmp = i;
	eventCal[tmp].addEventListener("click",function(){openSideBar(tmp+ 1);}, false);
	eventCal[tmp].addEventListener("mouseout",function(){closeSideBar(tmp+ 1);}, false);
}
//Open the side bar on the calendar section when a date is pressed by adding the active class to the current events info
function openSideBar(i){
	console.log("CLICK HIT!" + i);
	var sideEvent = document.getElementById("panel"+i);
	sideEvent.className += "active";
	sideEvent.style.backgroundColor ="#518d84";
	sideEvent.style.color = "#fff";
	sideEvent.style.borderLeft ="10px solid #74cabd";
	
}
function closeSideBar(i){
	console.log("Off HIT!" + i);
	var sideEvent = document.getElementById("panel"+i);
	sideEvent.className = "content";
}
//swap the selected bottom menu image to it's darker version
function swapDark(i){
	console.log(i);
	var temp = new Array();
	temp = botImg.item(i).src.split('img/');
	console.log(temp);
	botImg.item(i).src = temp[0]+ 'img/' + (temp[1].substring(0,(temp[1].length-4)) +"Hover.png");
	console.log(botImg.item(i).src);
}
//swap the selected bottom menu image to it's Lighter version
function swapLight(i){
	console.log(i);
	var temp = new Array();
	temp = botImg.item(i).src.split('img/');
	console.log(temp);
	botImg.item(i).src = temp[0]+ 'img/' + (temp[1].substring(0,(temp[1].length-9)) +".png");
	console.log(botImg.item(i).src);
}

function swapDark1(p){
	console.log(p);
	var menu = new Array();
	menu = botImg1.item(p).src.split('img/');
	console.log(menu);
	botImg1.item(p).src = menu[0]+ 'img/' + (menu[1].substring(0,(menu[1].length-4)) +"Hover.png");
	console.log(botImg1.item(p).src);
}
//swap the selected bottom menu image to it's Lighter version
function swapLight1(p){
	console.log(p);
	var menu = new Array();
	menu = botImg1.item(p).src.split('img/');
	console.log(menu);
	botImg1.item(p).src = menu[0]+ 'img/' + (menu[1].substring(0,(menu[1].length-9)) +".png");
	console.log(botImg1.item(p).src);
}

//to add additional input fields
$('#addInput').click(function(){
    $("#duplicater").clone().insertAfter("div#duplicater:last");
});

var highlightLink = function () {
        var active = null, colour = '#518d84', backgroundImage2 = "url('img/selectionArrowGreen.png')";
        if (this.attachEvent) this.attachEvent('onunload', function () {
            active = null;
        });
        return function (element) {
            if ((active != element) && element.style) {
                if (active) active.style.backgroundColor = '';
			
				element.style.backgroundColor = colour;
                active = element;
				
            }
        };
}();

var highlightLink2 = function () {
        var active = null, colour = '#74cabd', backgroundImage2 = "url('img/accordionArrowDown.png')";
        if (this.attachEvent) this.attachEvent('onunload', function () {
            active = null;
        });
        return function (element) {
            if ((active != element) && element.style) {
                if (active) active.style.backgroundColor = '';
				if (active) active.style.color = '';
				
				
				element.style.backgroundColor = colour;
				element.style.color = "#FFF";
                active = element;
				
				
                	$('.directoryContact').addClass('changeColor');
            }
        };
}();

$('.accordionLink').click(function () {
		$('.imgswap').attr("src", '../../img/arrow_off.png');
		$('.imgswap', $(this).parent()).attr("src", '../img/arrow_on.png');	
});

$('.accordionLink').click(function () {
						$('.directoryContact').removeClass('fadein').addClass('fadeout');
						var divC = $('.directoryContact', $(this).parent())
						if ($(divC).hasClass('fadeout'))
        					$(divC).removeClass('fadeout').addClass('fadein');
   							 else
        					$('.directoryContact', $(this).parent()).removeClass('fadein').addClass('fadeout');
							 
								});

var highlightLink3 = function () {
        var active = null, colour = '#74cabd', Image2 = "url('img/addphotoMiniIconWhite.png')";
        if (this.attachEvent) this.attachEvent('onunload', function () {
            active = null;
        });
        return function (element) {
            if ((active != element) && element.style) {
                if (active) active.style.backgroundColor = '';
				if (active) active.style.color = '';
				
				element.style.backgroundColor = colour;
				element.style.color = "#FFF";
                active = element;
				
            }
			
					
        };
}();




window.onload = init();



/*// JavaScript Document

//Global variables

OLD CODE CAUSING A BREAK IN FUNCTIONALITY. LEFT JUST IN CASE THERE IS A FUNCTION MISSING.

var botImg, fOut, fIn, opacity, eventCal, months, year, pointsEntry, entryArrow, events, day;

months = ["January", "Feburary", "March", "April","May","June", "July","August","September","October","November","December"];
function init(){
	
	//load bottom menu images into a array
	botImg = document.getElementsByClassName('botImg');
	
	if(window.location.href.indexOf("calendarJquery.html") != -1) {
		//load events from the Calendar
		
		prepareEvents();
	
		
	}
	if(window.location.href.indexOf("points.html") != -1) {
		pointsEntry = document.getElementsByClassName("pointsEntry");
		for(var i =0;i < pointsEntry.length;i++){
			prepareMiniPoints(i);
		}
	}
	if(window.location.href.indexOf("pd_notices_complains.html") != -1 
		|| window.location.href.indexOf("pd_notices_maintenance.html") != -1 
		|| window.location.href.indexOf("pd_notices_warnings.html") != -1 
		|| window.location.href.indexOf("fsu.html") != -1
		|| window.location.href.indexOf("generalInfo.html") != -1
		|| window.location.href.indexOf("news.html") != -1){
		entryArrow = document.getElementsByClassName('accordionTitle');
		for(var i =0;i < entryArrow.length;i++){
			prepareArrows(i);
		}
	}
	if(window.location.href.indexOf("calendar.html") != -1) {
		//load events from the Calendar
		eventCal = document.querySelectorAll(".event");
		for( var i=0; i <eventCal.length; i++){
			fillEvents(i);
		}
	}
}
function prepareArrows(i){
	entryArrow[i].addEventListener("mouseover", function(){swapArrow(i);}, false);
	entryArrow[i].addEventListener("mouseout", function(){revertArrow(i);}, false);
	//entryArrow[i].addEventListener("click", function(){highlightAccordion(i); },false);
}
function swapArrow(i){
	var arrowImage = document.getElementsByClassName('accordionDropDownIcon');
	
	arrowImage[i].innerHTML = '<img src="img/accordionArrowDownHover.png" alt="Click For more Information.">';
}
function revertArrow(i){
	var arrowImage = document.getElementsByClassName('accordionDropDownIcon');
	
	arrowImage[i].innerHTML = '<img src="img/accordionArrowDown.png" alt="Click For more Information.">';
}
function prepareMiniPoints(i){
	pointsEntry[i].addEventListener("mouseover", function(){swapMiniPoints(i);}, false);
	pointsEntry[i].addEventListener("mouseout", function(){revertMiniPoints(i);}, false);
}
function swapMiniPoints(i){
	var pointsMiniImage = document.getElementsByClassName('pointsMiniImage');
	var accordionLink = document.getElementsByClassName('accordionLink');
	
	pointsMiniImage[i].src = 'img/pointsMiniHover.png';
	
	accordionLink[i].style.borderLeft =" 15px solid #518d84";
    accordionLink[i].style.color= "#fff";
	accordionLink[i].style.backgroundImage = "url('../img/accordionArrow.png') no-repeat center left";
	accordionLink[i].style.backgroundColor = "#74cabd";
}
function revertMiniPoints(i){
	console.log("REVERT HIT!");
	var pointsMiniImage = document.getElementsByClassName('pointsMiniImage');
	
	pointsMiniImage[i].src = 'img/pointsMini.png';
}
function prepareEvents(){
	days = document.querySelectorAll("tbody a");
	
	console.log("EVENT HIT! Day is " + (days[0]));
	//Events is a array which holds the dates of certain events, once month functionality is worked in, this needs to become a multiarray
	events = [1, 5, 12, 20, 21, 31];
	
	//compare the date to the dates of event, factoring in that arrays start at 0
	for(var i = 0; i <=(days.length-1);i++){
		for(var l = 0; l <=(events.length-1);l++){
			if((i+1) ==(events[l])){
				console.log("EVENT HIT! Day is " + (days[i]+1));
				days[i].style.border = "2px solid #74cabd";
			}
		}
		
	}
	
}
function highlightAccordion(i){
	var accordion = document.querySelectorAll('.accordionLink');
	console.log(i + ' Clicked!');
	
	//Reset all accordion links to default style
	for(var counter = 0; counter <= (accordion.length - 1); counter++){
		accordion[counter].style.backgroundColor = "#fff";
	 	accordion[counter].style.borderLeft =" 15px solid #74cabd";
      	accordion[counter].style.color= "#518d84";
	}
	accordion[i].style.borderLeft =" 15px solid #518d84";
    accordion[i].style.color= "#fff";
	accordion[i].style.backgroundImage = "url('../img/accordionArrow.png') no-repeat center left";
	accordion[i].style.backgroundColor = "#74cabd";
}
function fillEvents(i){
	var tmp = i;
	eventCal[tmp].addEventListener("click",function(){openSideBar(tmp+ 1);}, false);
	eventCal[tmp].addEventListener("mouseout",function(){closeSideBar(tmp+ 1);}, false);
}
//Open the side bar on the calendar section when a date is pressed by adding the active class to the current events info
function openSideBar(i){
	console.log("CLICK HIT!" + i);
	var sideEvent = document.getElementById("panel"+i);
	sideEvent.className += "active";
	sideEvent.style.backgroundColor ="#518d84";
	sideEvent.style.color = "#fff";
	sideEvent.style.borderLeft ="10px solid #74cabd";
	
}
function closeSideBar(i){
	console.log("Off HIT!" + i);
	var sideEvent = document.getElementById("panel"+i);
	sideEvent.className = "content";
}
//swap the selected bottom menu image to it's darker version
function swapDark(i){
	console.log(i);
	var temp = new Array();
	temp = botImg.item(i).src.split('img/');
	console.log(temp);
	botImg.item(i).src = temp[0]+ 'img/' + (temp[1].substring(0,(temp[1].length-4)) +"Hover.png");
	console.log(botImg.item(i).src);
}
//swap the selected bottom menu image to it's Lighter version
function swapLight(i){
	console.log(i);
	var temp = new Array();
	temp = botImg.item(i).src.split('img/');
	console.log(temp);
	botImg.item(i).src = temp[0]+ 'img/' + (temp[1].substring(0,(temp[1].length-9)) +".png");
	console.log(botImg.item(i).src);
}


var highlightLink = function () {
        var active = null, colour = '#518d84', backgroundImage2 = "url('img/selectionArrowGreen.png')";
        if (this.attachEvent) this.attachEvent('onunload', function () {
            active = null;
        });
        return function (element) {
            if ((active != element) && element.style) {
                if (active) active.style.backgroundColor = '';
			
				element.style.backgroundColor = colour;
                active = element;
				
            }
        };
}();

var highlightLink2 = function () {
        var active = null, colour = '#74cabd', backgroundImage2 = "url('img/accordionArrowDown.png')";
        if (this.attachEvent) this.attachEvent('onunload', function () {
            active = null;
        });
        return function (element) {
            if ((active != element) && element.style) {
                if (active) active.style.backgroundColor = '';
				if (active) active.style.color = '';
				
				
				element.style.backgroundColor = colour;
				element.style.color = "#FFF";
                active = element;
				
				
                	$('.directoryContact').addClass('changeColor');
            }
        };
}();

$('.accordionLink').click(function () {
		$('.imgswap').attr("src", 'img/arrow_off.png');
		$('.imgswap', $(this).parent()).attr("src", 'img/arrow_on.png');	
});

$('.accordionLink').click(function () {
						$('.directoryContact').removeClass('fadein').addClass('fadeout');
						var divC = $('.directoryContact', $(this).parent())
						if ($(divC).hasClass('fadeout'))
        					$(divC).removeClass('fadeout').addClass('fadein');
   							 else
        					$('.directoryContact', $(this).parent()).removeClass('fadein').addClass('fadeout');
							 
								});

var highlightLink3 = function () {
        var active = null, colour = '#74cabd', Image2 = "url('img/addphotoMiniIconWhite.png')";
        if (this.attachEvent) this.attachEvent('onunload', function () {
            active = null;
        });
        return function (element) {
            if ((active != element) && element.style) {
                if (active) active.style.backgroundColor = '';
				if (active) active.style.color = '';
				
				element.style.backgroundColor = colour;
				element.style.color = "#FFF";
                active = element;
				
            }
			
					
        };
}();


THIS SEEMS TO THE CAUSE OF THE BREAK
$("input#accept-offer").switchButton({ on_label: "Accept", off_label: "Ignore"
});


window.onload = init();*/