<?php
if(!isset($_SESSION)){
    session_start();
}

	include "connection.php";

    $getCircle=mysql_query("SELECT circle FROM Friend
      WHERE user=(SELECT user_id FROM Account WHERE user_email='$_SESSION[user_email]')
      AND friend=(SELECT user_id FROM Account WHERE user_email='$_SESSION[friend_email]')");

    $getCircleFetch=mysql_fetch_array($getCircle);

    mysql_close();

?>