<?php
if(!isset($_SESSION)){
    session_start();
}

	include "connection.php";
	$message = $_GET['message'];
	echo $message;

	$sendMessage=mysql_query("INSERT INTO Message(sender,receiver, date, message)
		VALUES (

			(SELECT user_id FROM Account WHERE user_email='$_SESSION[user_email]'),
			(SELECT user_id FROM Account WHERE user_email='$_SESSION[friend_email]'),
			now(),
			'$message'

			#(SELECT user_id FROM Account WHERE user_email='$_SESSION[user_email]'),
			#(SELECT user_id FROM Account WHERE user_email='$_SESSION[friend_email]')
			)");

	if($sendMessage){
	}
	else{
		echo "Friend request failed";
	}

	mysql_close();
?>