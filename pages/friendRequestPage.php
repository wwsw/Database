<?php
if(!isset($_SESSION)){
    session_start();
	}

    function getFriendRequest($requestID){

	    $request=mysql_query("SELECT user_id,user_firstname,user_surname,user_study,user_work FROM user
	      WHERE user_id=$requestID");

	    $requestFetch=mysql_fetch_array($request);

	    return $requestFetch;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
<script type='text/javascript' src='../Libraries/jquery-1.9.1.js'></script>

<?php
include "../php/header.php";
?>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="../css/bootstrap.css" rel="stylesheet">
  <link href="../css/friendProfilePage.css" rel="stylesheet">
  <link href="../css/popupWindow.css" rel="stylesheet"> 
  <script type='text/javascript' src='../js/bootstrap.min.js'></script>
  <title>Hellooooooo!</title>

</head>
<body>
	<div style="margin-left: 35%;"><h2>Friend requests</h2></div>
	<?php
		include "../php/connection.php";

	 	$friendRequestID=mysql_query("SELECT user FROM Friend
          WHERE friend=$_SESSION[user_id]
          AND user NOT IN (SELECT friend FROM Friend WHERE user=$_SESSION[user_id])");

		while($friendRequestIDFetch=mysql_fetch_array($friendRequestID)){
			$display=getFriendRequest($friendRequestIDFetch["user"]);

			  echo "<div class='notification'>";
			  echo "<div class='profile-box'>";
    	      echo "<div id='box-displaypic'><img src='../img/profileimg.png' width=90px></div>";
              echo "<div id='box-text'>";
              echo ("<a href='friendProfilePage.php?name=".$display['user_id']."'>".$display['user_firstname']." ".$display['user_surname']."</a><br>");
              echo "$display[user_work]<br>";
              echo "$display[user_study]<br>";
              echo "<a href='friendProfilePage.php?name=".$display['user_id']."'><button class='btn' id='box-button' type='button'>Go to Profile!</button></a>";
              echo "</div></div>";
              echo "</div>";
		}

	?>
</body>
</html>