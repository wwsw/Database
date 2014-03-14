<?php
	session_start();
?>

<script type="text/javascript">
	function passwordIdentification(){
		alert("Please check it again!\nThe passwords you have typed are not identical!");
	}

	function accountExistence(){
		alert("This email has been registered!");
	}

	function profilePage(){
		window.location.href = "../pages/registerProfile.php";
	}
</script>

<?php
	include "connection.php";

	$email=mysql_query("SELECT user_email FROM Account WHERE user_email='$_POST[email]'");
	$emailCheck=mysql_fetch_array($email);

	// $newUser=getUser();
	if(!$emailCheck){

		if($_POST["password1"]==$_POST["password2"]){	

			$userInsertion=mysql_query("INSERT INTO User(user_firstname,user_surname,user_gender,user_birthday)
			VALUES (trim('$_POST[firstname]'),trim('$_POST[surname]'),'$_POST[gender]','$_POST[year]-$_POST[month]-$_POST[day]')");

			$getInsertID=mysql_insert_id();

			$accountInsertion=mysql_query("INSERT INTO Account(user_email,user_password,user_id)
			VALUES (trim('$_POST[email]'),md5('$_POST[password1]'),'$getInsertID')");

			$_SESSION["email"]=trim($_POST["email"]);

			if($userInsertion&&$accountInsertion){

				echo "<script>profilePage();</script>";
			}
			else{
				echo "Insertion failed";
			}
		}
		else{
			echo "<script>passwordIdentification();history.back();</script>";
		}
	}
	else{
		echo "<script>accountExistence();history.back();</script>";
	}
	
	// function getUser(){
	// 	$user=array();
	// 	$user["email"]=$_POST["email"];
	// 	$user["password1"]=$_POST["password1"];
	// 	$user["password2"]=$_POST["password2"];
	// 	$user["firstname"]=$_POST["firstname"];
	// 	$user["surname"]=$_POST["surname"];
	// 	$user["gender"]=$_POST["gender"];
	// 	$user["age"]=$_POST["age"];
	// 	$user["study"]=$_POST["study"];
	// 	$user["work"]=$_POST["work"];
	// 	return $user;
	// }

	mysql_close();
?>