<?php

class Classpath {
	// private $server = "localhost";
	// private $user = "walte924";
	// private $pass = "Panda1";
	// private $database = "walte924_rezguide";
	private $server = "localhost";
	private $user = "root";
	private $pass = "root";
	private $database = "db_rezguide";
	private $port = "8888";
	
	function __construct(){
		$link = mysqli_connect("localhost","root","root","db_rezguide","8888");
		//mysql_select_db();
	}
	
	public function fetchpath($startClass, $endClass){
		$link = mysqli_connect($this->server,$this->user,$this->pass,$this->database,$this->port);
		$count = 0;
		
		$fetchStartZone = "SELECT * FROM tbl_zones, tbl_classrooms, tbl_zonesclassrooms WHERE tbl_zones.zones_id = tbl_zonesclassrooms.zones_id AND tbl_classrooms.classrooms_id = tbl_zonesclassrooms.classrooms_id AND tbl_classrooms.classrooms_number ='{$startClass}'";
		$fetchEndZone = "SELECT * FROM tbl_zones, tbl_classrooms, tbl_zonesclassrooms WHERE tbl_zones.zones_id = tbl_zonesclassrooms.zones_id AND tbl_classrooms.classrooms_id = tbl_zonesclassrooms.classrooms_id AND tbl_classrooms.classrooms_number ='{$endClass}'";
		//echo $fetchStartZone;
		
		$startZone = mysqli_query($link,$fetchStartZone);
		$endZone = mysqli_query($link,$fetchEndZone);
		//echo $startZone;
		
		$startArray = mysqli_fetch_array($startZone);
		$endArray = mysqli_fetch_array($endZone);
		
		$pathStart = $startArray['zones_name'];
		$pathEnd = $endArray['zones_name'];
		//echo $pathStart;
		//echo $pathEnd;
		
		//generate JSON Array from php query
		$pathString = "SELECT * FROM tbl_paths WHERE tbl_paths.paths_startZone = '{$pathStart}' AND tbl_paths.paths_endZone = '{$pathEnd}'";
		//echo $pathString;
		
		$pathQuery = mysqli_query($link,$pathString);
		$num_rows = mysqli_num_rows($pathQuery);
		echo "[";
		while($result = mysqli_fetch_assoc($pathQuery)){
			$jsonResult = json_encode($result);
			$count++;
			if($count==$num_rows){
				echo $jsonResult;
			}else{
				echo $jsonResult.",";
			}
		}
		echo "]";
	}
	
	public function fetchsteps(){
		$link = mysqli_connect($this->server,$this->user,$this->pass,$this->database,$this->port);
		$count = 0;
		$allString = "SELECT * FROM tbl_steps";
		$allQuery = mysqli_query($link,$allString);
		$num_rows = mysqli_num_rows($allQuery);
		echo "[";
		while($result = mysqli_fetch_assoc($allQuery)){
			$jsonResult = json_encode($result);
			$count++;
			if($count==$num_rows){
				echo $jsonResult;
			}else{
				echo $jsonResult.",";
			}
		}
		echo "]";
	}
} 