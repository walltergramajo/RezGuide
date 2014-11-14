//Javascript Document

var events = [ 
    { Title: "Five K for charity", Date: new Date("11/17/2014") }, 
    { Title: "Dinner", Date: new Date("10/25/2014") }, 
    { Title: "Meeting with manager", Date: new Date("10/01/2014") }
];
//var events = [];
var rezGuideCalendar, arrayOutput;

function initCal(){
	rezGuideCalendar = document.querySelector('#datepicker tbody');
	arrayOutput = document.querySelector('#eventArrayOutput');
	getCalendarData();
}

function getDayData(date){

	var eventArray = $.getJSON('calendar/day/'+date, function(data){
		for(i=0;i<data.length;i++){
			arrayOutput.innerHTML += data[i]['events_title'];
		}
	});

	console.log(eventArray);
}

function getCalendarData(){

	var eventArray = $.getJSON('calendar/events_calendar', function(data){
		for(i=0;i<data.length;i++){
			arrayOutput.innerHTML += '<p>'+data[i]['events_title']+'</p>';
			events.push({
				Title: data[i]['events_title'],
				Day: new Date(data[i]['events_caldate'])
			});
		}
		//console.log(events);
	}).done(function(){highlightEventDates();});
	
}

function highlightEventDates(){
	console.log(events);
	$("#datepicker").datepicker({
	    beforeShowDay: function(date) {
	        console.log('working');
	        var result = [true, '', null];
	        var matching = $.grep(events, function(event) {
	            return event.Date.valueOf() === date.valueOf();
	        });
	        
	        if (matching.length) {
	            result = [true, 'highlight', null];
	        }
	        return result;
	    },
	    onSelect: function(dateText) {
	        var date,
	            selectedDate = new Date(dateText),
	            i = 0,
	            event = null;
	        
	        while (i < events.length && !event) {
	            date = events[i].Date;

	            if (selectedDate.valueOf() === date.valueOf()) {
	                event = events[i];
	            }
	            i++;
	        }
	        if (event) {
	            alert(event.Title);
	        }
	    }
	});
}

//window.addEventListener('load',initCal,false);