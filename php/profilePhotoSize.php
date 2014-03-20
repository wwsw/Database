<?php
	
	if(!isset($_SESSION)) {
		session_start();
	}

	function photoSize($email){

	include "connection.php";

	$size=mysql_query("SELECT OCTET_LENGTH(user_photo) FROM User
		WHERE user_id =(SELECT user_id FROM Account WHERE user_email='$email')");

	$sizeFetch=mysql_fetch_array($size);

	$imageSize=$sizeFetch["OCTET_LENGTH(user_photo)"];

	return $imageSize;

 }
?>