<?php
if(!isset($_SESSION)){
    session_start();
}

	include "connection.php";

	$userRequest=mysql_query("INSERT INTO Friend(user,friend)
		VALUES (
			(SELECT user_id FROM Account WHERE user_email='$_SESSION[user_email]'),
			(SELECT user_id FROM Account WHERE user_email='$_SESSION[friend_email]')
			)");

	if($userRequest){
		echo "<script>history.back();</script>";
	}
	else{
		echo "Friend request failed";
	}

	mysql_close();
?>