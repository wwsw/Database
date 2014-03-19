<?php
if(!isset($_SESSION)){
    session_start();
}

	include "connection.php";

	$circleUpdate=mysql_query("UPDATE Friend SET circle='$_POST[circle]'
		WHERE (user=(SELECT user_id FROM Account WHERE user_email='$_SESSION[user_email]')
		AND friend=(SELECT user_id FROM Account WHERE user_email='$_SESSION[friend_email]'))")
		or die("Circle update failed");

	if($circleUpdate){
		echo "<script>history.back();</script>";
	}
	mysql_close();
?>