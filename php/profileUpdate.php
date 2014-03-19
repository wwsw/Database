<?php
if(!isset($_SESSION)){
    session_start();
}
?>
<script type="text/javascript">
	function homeFeedPage(){
		window.location.href = "../pages/homeFeed.php";
	}
</script>

<?php
	include "connection.php";

	$photoName=$_FILES['photo'];
	$photoTmp=$_FILES['photo']['tmp_name'];
	$photoSize=filesize($photoTmp);
	$photo=addslashes(fread(fopen($photoTmp, "r"), $photoSize));

	$profileUpdate=mysql_query("UPDATE User,Account
		SET user_study=trim('$_POST[study]'),user_work=trim('$_POST[work]')
		WHERE user_email='$_SESSION[user_email]' AND Account.user_id=User.user_id");

	
	if($profileUpdate){
		echo "<script>homeFeedPage();</script>";
	}
	else{
		echo "Update fail!";
	}

	mysql_close();

?>