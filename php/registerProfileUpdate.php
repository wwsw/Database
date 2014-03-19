<?php
	if(!isset($_SESSION)) {
		session_start();
	}
?>
<script type="text/javascript">
	function homeFeedPage(){
		window.location.href = "../pages/homeFeed.php";
	}
	function notImage(){
		alert("Please upload an image.");
	}
</script>

<?php
	include "connection.php";

	$file=$_FILES['photo']['tmp_name'];

	$photo=addslashes(file_get_contents($_FILES['photo']['tmp_name']));
	$photo_name=addslashes($_FILES['photo']['name']);
	$photo_size=getimagesize($_FILES['photo']['tmp_name']);

	if($photo_size==FALSE){
		echo "<script>notImage();history.back();</script>";
	}
	
	else{
		$photoUpload=mysql_query("UPDATE User 
			SET user_photo='$photo'
			WHERE user_id=(SELECT user_id FROM Account WHERE user_email='$_SESSION[user_email]')")
			or die("Problem uploading");
	
	$profileUpdate=mysql_query("UPDATE User,Account
		SET user_study=trim('$_POST[study]'),user_work=trim('$_POST[work]')
		WHERE user_email='$_SESSION[user_email]' AND Account.user_id=User.user_id");
	
	if($profileUpdate && $photoUpload){
		echo "<script>homeFeedPage();</script>";
	}
	else{
		echo "Update fail!";
	}
}
	mysql_close();

?>