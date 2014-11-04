// JavaScript Document



//3D Map Highlighting
$('#buildingIcon').click(function () {
	$('.highlightBox1').fadeIn('slow').delay(1500).fadeOut('slow');
});

$('#classroomIcon').click(function () {
	$('.highlightBox2').fadeIn('slow').delay(1500).fadeOut('slow');
});

$('#labsIcon').click(function () {
	$('.highlightBox3').fadeIn('slow').delay(1500).fadeOut('slow');
});

$('#bathroomIcon').click(function () {
	$('.highlightBox4').fadeIn('slow').delay(1500).fadeOut('slow');
});

$('#shoppingIcon').click(function () {
	$('.highlightBox5').fadeIn('slow').delay(1500).fadeOut('slow');
});

$('#shoppingIcon').click(function () {
	$('.highlightBox5').fadeIn('slow').delay(1500).fadeOut('slow');
});

$('#restaurantIcon').click(function () {
	$('.highlightBox6').fadeIn('slow').delay(1500).fadeOut('slow');
});

$('#servicesIcon').click(function () {
	$('.highlightBox7').fadeIn('slow').delay(1500).fadeOut('slow');
});

$('#officesIcon').click(function () {
	$('.highlightBox8').fadeIn('slow').delay(1500).fadeOut('slow');
});

$('#transportationIcon').click(function () {
	$('.highlightBox2').fadeIn('slow').delay(1500).fadeOut('slow');
});

//for highlighted link choice on Selector Page

var highlightLink = function () {
        var active = null, colour = '#65666a', backgroundImage2 = "url('img/selectionArrow.png')";
        if (this.attachEvent) this.attachEvent('onunload', function () {
            active = null;
        });
        return function (element) {
            if ((active != element) && element.style) {
                if (active) active.style.backgroundColor = '';
				if (active) active.style.backgroundImage = '';
				
                element.style.backgroundImage = backgroundImage2;
				element.style.backgroundColor = colour;
				element.style.backgroundRepeat = "no-repeat";
				element.style.backgroundSize = "15px 58px";
                active = element;
				
            }
        }
}();

var highlightLinkSchedule = function () {
    window.console&&console.log("THIS WORKS");
        var active = null, colour = '#65666a';
        if (this.attachEvent) this.attachEvent('onunload', function () {
            active = null;
        });
        return function (element) {
            if ((active != element) && element.style) {
                if (active) active.style.backgroundColor = '';
                if (active) active.style.color = '';
                element.style.color = '#FFF';
				element.style.backgroundColor = colour;
                active = element;
				
            }
        }
}();

var highlightLinkPath = function () {
        var active = null, colour = '#65666a', backgroundImage2 = "url('img/selectionArrow.png')", textcolor = '#FFF';
        if (this.attachEvent) this.attachEvent('onunload', function () {
            active = null;
        });
        return function (element) {
            if ((active != element) && element.style) {
                if (active) active.style.color = '';
                if (active) active.style.backgroundColor = '';
				if (active) active.style.backgroundImage = '';
                
                
                element.style.backgroundImage = backgroundImage2;
				element.style.backgroundColor = colour;
				element.style.backgroundRepeat = "no-repeat";
				element.style.backgroundSize = "20px 75px";
                element.style.color = textcolor;
                active = element;
				
            }
        }
}();

var highlightLinkPoints = function () {
        var active = null, colour= 'rgba(0,0,0,0)', backgroundImage3 = "url('img/selectionArrowGreen.png')";
        if (this.attachEvent) this.attachEvent('onunload', function () {
            active = null;
        });
        return function (element) {
            if ((active != element) && element.style) {
                if (active) active.style.backgroundColor = '';
				if (active) active.style.backgroundImage = '';
				
                element.style.backgroundImage = backgroundImage3;
				element.style.backgroundOrigin = "content-box";
				element.style.backgroundPosition = "4% 2%";
				element.style.zIndex = "101";
				
				element.style.backgroundRepeat = "no-repeat";
				element.style.backgroundSize = "20px 40px";
                active = element;
				
            }
        }
}();
	
//for image upload/preview
function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#imgUpload')
                        .attr('src', e.target.result)
                        .width(150)
                        .height(150);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

function readURL2(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#imgUpload2')
                        .attr('src', e.target.result)
                        .width(150)
                        .height(150);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
		
function readURL3(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#imgUpload3')
                        .attr('src', e.target.result)
                        .width(150)
                        .height(150);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
		
function readURL4(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#imgUpload4')
                        .attr('src', e.target.result)
                        .width(150)
                        .height(150);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
		
		
//to add additional input fields
$('.addInput').click(function(){
    $("#duplicater").clone().insertAfter("div#duplicater:last");
});	



//window.addEventListener("load", init, false);