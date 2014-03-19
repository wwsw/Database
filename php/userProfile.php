<?php
if(!isset($_SESSION)){
    session_start();
}

	include "connection.php";

	$userProfile=mysql_query("SELECT user_firstname,user_surname,user_birthday,user_gender,user_study,user_work FROM User
        WHERE user_id=(SELECT user_id FROM Account WHERE user_email='$_SESSION[user_email]')")
        or die("Fail to fetch the user name.");

    $userProfileFetch=mysql_fetch_array($userProfile);

    mysql_close();
?>