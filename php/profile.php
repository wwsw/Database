<?php
		session_start();
?>
<script type="text/javascript">
	function homeFeedPage(){
		window.location.href = "../html/homeFeed.html";
	}
</script>

<?php
	include "connection.php";

	$profileUpdate=mysql_query("UPDATE User,Account
	SET User.user_study=trim('$_POST[study]'),User.user_work=trim('$_POST[work]')
	WHERE Account.user_email='$_SESSION[email]' AND Account.user_id=User.user_id");

	if($profileUpdate){
		echo "<script>homeFeedPage();</script>";
	}
	else{
		echo "Update fail!";
	}

	mysql_close();

?>