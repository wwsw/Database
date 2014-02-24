<?php

	$host="localhost";
	$username="test";
	$password="test";
	$database="Fakebook";
	
	$connection=mysql_connect("$host","$username","$password");
	$selection=mysql_select_db("$database");
	if(!$connection||!$selection){
		echo"Connected failed";
	}
	else{

		$newUser=getUser();		
		$userInsertion=mysql_query("INSERT INTO User(user_firstname,user_surname,user_gender,user_age,user_study,user_work)
		VALUES ('$newUser[firstname]','$newUser[surname]','$newUser[gender]','$newUser[age]','$newUser[study]','$newUser[work]')");

		$getUserID=mysql_insert_id();

		$accountInsertion=mysql_query("INSERT INTO Account(user_email,user_password,user_id)
		VALUES ('$newUser[email]','$newUser[password]','$getUserID')");

		if($userInsertion&&$accountInsertion){
			echo "Done";
		}

	}
	
	function getUser(){
		$user=array();
		$user["email"]=$_POST["email"];
		$user["password"]=$_POST["password"];
		$user["firstname"]=$_POST["firstname"];
		$user["surname"]=$_POST["surname"];
		$user["gender"]=$_POST["gender"];
		$user["age"]=$_POST["age"];
		$user["study"]=$_POST["study"];
		$user["work"]=$_POST["work"];
		return $user;
	}

	mysql_close();
?>