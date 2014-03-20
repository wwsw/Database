<?php
if(!isset($_SESSION)){
    session_start();
}
	include "connection.php";

	if(isset($_POST['confirm'])){
		$accept=mysql_query("INSERT INTO Friend(user,friend)
		VALUES (
			(SELECT user_id FROM Account WHERE user_email='$_SESSION[user_email]'),
			(SELECT user_id FROM Account WHERE user_email='$_SESSION[friend_email]'))");

		if($accept){
			echo "<script>history.back();</script>";
		}
		else{
			echo "comfirmation failed!";
		}
	}

	if(isset($_POST['reject'])){
		$reject=mysql_query("DELETE FROM Friend
		WHERE user=(SELECT user_id FROM Account WHERE user_email='$_SESSION[friend_email]')
		AND friend=(SELECT user_id FROM Account WHERE user_email='$_SESSION[user_email]')");

		if($reject){
			echo "<script>history.back();</script>";
		}
		else{
			echo "Rejection failed!";
		}
	}

	mysql_close($connection);
?>