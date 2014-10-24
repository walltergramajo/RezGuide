<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Animation Test</title>
<link rel="stylesheet" href="css/foundation.css" />
<link href="css/style.css" rel="stylesheet" type="text/css">
<script src="js/vendor/modernizr.js"></script>
<link rel="shortcut icon" href="img/favicon.ico" />
<script type="text/javascript" src="js/progresscircle.min.js"></script>
</head>

<body>
    <div class="row">
        <div class="small-6 small-centered columns text-center" id="buttonTest">
        	<canvas id="buttonCanvas" class="text-center" width="200" height="100" style=" position:absolute; z-index:1; left:25%; "></canvas>
            <p id="buttonText" class="text-center header" width="200" height="100" style=" position:absolute; left:39.5%; margin-top: 7.5%; z-index:0;"> Sample</p>
        </div>
    </div>
    
<script>
	var fill;
	var p3 =1;
	var p4=0;
	function init(){
		var buttonCanvas = document.getElementById('buttonCanvas');
		
		
		var button = new ProgressCircle({
		canvas: buttonCanvas,
		arcWidth: 5,
		gapWidth: -.05,
		minRadius: 40
		
		});
		button.addEntry({
		fillColor: 'rgba(0, 0, 0, 0.5)',
		progressListener: function() {
        return p3; // between 0 and 1
    	}
		});
		button.addEntry({
		fillColor: 'rgba(102,204,204,.5)',
		progressListener: function() {
        return p4; // between 0 and 1
    	}
		});
		button.start(60);
		buttonCanvas.addEventListener('mouseover', fillBorder, false);
		buttonCanvas.addEventListener('mouseout', hideBorder, false);
		
	}
	function hideBorder(){
	clearInterval(fill);
	fill =setInterval(removeBorder,10);
	}
	function removeBorder(){
		if(p4 <= 0.01){
			clearInterval(fill);
		}
		
		p4 -= .01;
	}
	function fillBorder(){
		clearInterval(fill);
		fill =setInterval(createBorder,10);
	}
	function createBorder(){
		if(p4 >= 1){
			clearInterval(fill);
		}
		p4 += .01;
	}
window.onload = init();
</script>
<script src="js/vendor/jquery.js"></script>
<script src="js/foundation.min.js"></script>
<script>
   $(document).foundation();
</script>

</body>
</html>
