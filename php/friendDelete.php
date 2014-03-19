<?php
if(!isset($_SESSION)){
    session_start();
}
	
		include "connection.php";

		$friendDelete=mysql_query("DELETE FROM Friend
			WHERE (user=(SELECT user_id FROM Account WHERE user_email='$_SESSION[user_email]')
			AND friend=(SELECT user_id FROM Account WHERE user_email='$_SESSION[friend_email]'))
		OR (user=(SELECT user_id FROM Account WHERE user_email='$_SESSION[friend_email]')
			AND friend=(SELECT user_id FROM Account WHERE user_email='$_SESSION[user_email]'))");

		if($friendDelete){
			echo "<script>history.back();</script>";
		}
		else{
			echo "Deletion failed ";
		}

		mysql_close();	
?>