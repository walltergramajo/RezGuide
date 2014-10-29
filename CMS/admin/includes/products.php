<?php

	require_once('init.php');
	
	function getProduct($id) {
		
		$prodstring = "SELECT * FROM tbl_product WHERE product_id = {$id}";
		$prodquery = mysql_query($prodstring);
		
		
		if($prodquery) {
			$found_product = mysql_fetch_array($prodquery);
			return $found_product;
		}else{
			$message = "There was a problem setting up this product, please try again later.";
			return $message;
		}
	}
	
	function createProduct($firstname, $lastname, $program, $number, $email, $phone, $address, $image, $points, $notifications, $balance, $fb, $tw, $ln) {
		$img = "default.jpg";
		$prodstring = "INSERT INTO tbl_students VALUES(NULL,'{$firstname}','{$lastname}', '{$number}','{$email}','{$phone}','{$address}','{$image}','{$points}','{$notifications}','{$balance}','{$fb}','{$tw}','{$ln}')";
		$prodquery = mysql_query($prodstring);
		if($prodquery){
			redirect_to("cms_add_student_pg2.php");
		}else{
			redirect_to("cms_main.php");
			$message = "There was a problem setting up this Product, please try again later.";
			return $message;
		}			
	}
	
	function createComplaint($studentNum, $type, $date, $building, $roomNum, $content, $category) {
		$prodstring = "INSERT INTO tbl_notices VALUES(NULL,'{$studentNum}','{$type}', '{$date}','{$building}','{$roomNum}','{$content}','{$category}')";
		$prodquery = mysql_query($prodstring);
		if($prodquery){
			redirect_to("cms_add_notice_main.php");
		}else{
			redirect_to("cms_main.php");
			$message = "There was a problem setting up this Product, please try again later.";
			return $message;
		}			
	}
	
	function createNews($file, $location, $date, $time, $name, $desc, $category) {
		$prodstring = "INSERT INTO tbl_news VALUES(NULL,'{$file}','{$location}', '{$date}','{$time}','{$name}','{$desc}','{$category}')";
		$prodquery = mysql_query($prodstring);
		if($prodquery){
			redirect_to("cms_add_news_main.php");
		}else{
			redirect_to("cms_main.php");
			$message = "There was a problem setting up this Product, please try again later.";
			return $message;
		}			
	}
	
	function editProduct($id, $name, $desc, $num, $image, $price) {
	
		$updatestring = "UPDATE tbl_product SET product_name='{$name}', product_desc='{$desc}', product_num='{$num}',product_image='{$image}', product_price='{$price}' WHERE product_id=$id";
		$updatequery = mysql_query($updatestring);
		
		if($updatequery){
			redirect_to("admin_index.php");
		}else{
			$message = "There was a problem setting up this product, please try again later.";
			return $message;	
		}
	}

	function deleteProduct($id) {
		$delstring = "DELETE FROM tbl_product WHERE product_id={$id}";
		$delquery = mysql_query($delstring);
		
		if($delquery){
			redirect_to("../admin_index.php");
		}else{
			$message = "There was a problem deleting this product, please try again later.";
			echo $message;
		}
	}

?>