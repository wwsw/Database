<?php
	if(!isset($_SESSION)) {
		session_start();
	}

	include "connection.php";

		$image=mysql_query("SELECT user_photo FROM User
			WHERE user_id=$_SESSION[user_id]");

		$imageFetch=mysql_fetch_array($image);

		header("Content-type: image/jpeg");

		echo $imageFetch["user_photo"];

	mysql_close($connection);
?>