<?php

class Classpath {
	private $server = "localhost";
	private $user = "walte924";
	private $pass = "Panda1";
	private $database = "walte924_rezguide";
	
	function __construct(){
		mysql_connect($this->server,$this->user,$this->pass);
		mysql_select_db($this->database);
	}
	
	public function fetchpath($startClass, $endClass){
		$count = 0;
		
		$fetchStartZone = "SELECT * FROM tbl_zones, tbl_classrooms, tbl_zonesclassrooms WHERE tbl_zones.zones_id = tbl_zonesclassrooms.zones_id AND tbl_classrooms.classrooms_id = tbl_zonesclassrooms.classrooms_id AND tbl_classrooms.classrooms_number ='{$startClass}'";
		$fetchEndZone = "SELECT * FROM tbl_zones, tbl_classrooms, tbl_zonesclassrooms WHERE tbl_zones.zones_id = tbl_zonesclassrooms.zones_id AND tbl_classrooms.classrooms_id = tbl_zonesclassrooms.classrooms_id AND tbl_classrooms.classrooms_number ='{$endClass}'";
		//echo $fetchStartZone;
		
		$startZone = mysql_query($fetchStartZone);
		$endZone = mysql_query($fetchEndZone);
		//echo $startZone;
		
		$startArray = mysql_fetch_array($startZone);
		$endArray = mysql_fetch_array($endZone);
		
		$pathStart = $startArray['zones_name'];
		$pathEnd = $endArray['zones_name'];
		//echo $pathStart;
		//echo $pathEnd;
		
		//generate JSON Array from php query
		$pathString = "SELECT * FROM tbl_paths WHERE tbl_paths.paths_startZone = '{$pathStart}' AND tbl_paths.paths_endZone = '{$pathEnd}'";
		//echo $pathString;
		
		$pathQuery = mysql_query($pathString);
		$num_rows = mysql_num_rows($pathQuery);
		echo "[";
		while($result = mysql_fetch_assoc($pathQuery)){
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
		$count = 0;
		$allString = "SELECT * FROM tbl_steps";
		$allQuery = mysql_query($allString);
		$num_rows = mysql_num_rows($allQuery);
		echo "[";
		while($result = mysql_fetch_assoc($allQuery)){
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