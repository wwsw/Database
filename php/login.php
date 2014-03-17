<?php
	session_start();
?>

<script type="text/javascript">
	function loginFailure(){
		alert("Please check your acount or password!");
	}

	function homeFeedPage(){
		window.location.href = "../pages/homeFeed.php";
	}

</script>

<?php
	include "connection.php";

	$email=mysql_query("SELECT user_email FROM Account WHERE user_email=trim('$_POST[email]')");
	$emailCheck=mysql_fetch_array($email);

	if($emailCheck){
		$password=mysql_query("SELECT user_password FROM Account WHERE user_password=md5('$_POST[password]') AND user_email=trim('$_POST[email]')");
		$passwordCheck=mysql_fetch_array($password);
			
       	if($passwordCheck){

       		$_SESSION["email"]=$emailCheck["user_email"];
       		
       		echo "<script>homeFeedPage();</script>"; 			
        }
       	else{
        	echo "<script>loginFailure();history.back();</script>";
        }			
	}

	else{
		echo "<script>loginFailure();history.back();</script>";
	}
	mysql_close();

?>