<?php
if(!isset($_SESSION)){
    session_start();
}

	include "connection.php";

	$friendRequest=mysql_query("INSERT INTO Friend(user,friend)
		VALUES (
			(SELECT user_id FROM Account WHERE user_email='$_SESSION[user_email]'),
			(SELECT user_id FROM Account WHERE user_email='$_SESSION[friend_email]')
			)");

	if($friendRequest){
		echo "<script>history.back();</script>";
	}
	else{
		echo "Friend request failed";
	}

	mysql_close();
?>