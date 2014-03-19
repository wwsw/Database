<?php
if(!isset($_SESSION)){
    session_start();
}
?>

<script type="text/javascript">
	function searchFailure(){
		alert("No such results!");
	}
</script>

<?php
	include "connection.php";

	$search=mysql_query("SELECT user_firstname,user_surname,user_birthday,user_gender,user_study,user_work,user_email FROM User,Account
		WHERE User.user_id=Account.user_id AND (user_firstname=trim('$_SESSION[searchBar]') OR user_surname=trim('$_SESSION[searchBar]') 
		OR User.user_id=(SELECT user_id FROM Account WHERE user_email=trim('$_SESSION[searchBar]')))
		AND NOT (User.user_id=(SELECT user_id FROM Account WHERE user_email='$_SESSION[user_email]'))");

	mysql_close();
?>