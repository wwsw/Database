<?php
	if(!isset($_SESSION)) {
		session_start();
	}

	include "connection.php";

	$id=$_GET["id"];

		$image=mysql_query("SELECT id,post_photo FROM Post
			WHERE post_id=$_SESSION[user_id] AND id=$id");

		$imageFetch=mysql_fetch_array($image);

		header("Content-type: image/jpeg");

		echo $imageFetch["post_photo"];

	mysql_close($connection);
?>
