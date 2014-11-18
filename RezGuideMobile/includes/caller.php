<?php
require_once("Classpath.php");

$class = new Classpath();

if($_GET['tag']=='paths'){
	$start = $_GET['begin'];
	$end = $_GET['end'];
	$path = $class->fetchpath($start, $end);
	echo $path;
}

if($_GET['tag']=='steps'){
	$allSteps = $class->fetchsteps();
	echo $allSteps;
}

?>