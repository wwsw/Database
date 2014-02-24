<?php

	$host="localhost";
	$username="test";
	$password="test";
	$database="Fakebook";
	$table="users";
	
	$connection=mysql_connect("$host","$username","$password");
	$selection=mysql_select_db("$database");
	if(!$connection||!$selection){
		echo"Connected failed";
	}
	else{
		$email=mysql_query("SELECT user_email FROM Account WHERE user_email='$_POST[email]'");
		$emailCheck=mysql_fetch_array($email);
		//echo "$emailCheck[user_email]";
		if($emailCheck){
			$password=mysql_query("SELECT user_password FROM Account WHERE user_password='$_POST[password]' AND user_email='$_POST[email]'");
			$passwordCheck=mysql_fetch_array($password);
			
       		if($passwordCheck){
       			echo "hello!";
       			//$user=mysql_query("SELECT U.user_name FROM User U, Account A WHERE U.user_id=A.user_id");     		
        	}
        	else{
        		echo "The password is not correct!";
        	}
			
		}

		else{
			header("Location: http://localhost:8888/GC06/register.html");
		}
	}

	mysql_close();

	?>