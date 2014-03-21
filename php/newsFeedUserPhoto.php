<?php
session_start();


	include "connection.php";
		$user=$_SESSION["post_id"];
		$SQL="SELECT user_photo FROM User WHERE user_id=$user";
		$image=mysql_query($SQL);

		$imageFetch=mysql_fetch_array($image);

		header("Content-type: image/jpeg");

		echo $imageFetch["user_photo"];

	mysql_close($connection);
?>