<?php
	session_start();

	include "../php/header.php";
?>
<!DOCTYPE html>

<html>
<head>
	<script type='text/javascript' src='../Libraries/jquery-1.9.1.js'></script>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/bootstrap.css" rel="stylesheet">
    <script type='text/javascript' src='../js/bootstrap.min.js'></script>
<title>Hellooooooo!</title>
</head>
<body>

	<?php
		include "../php/connection.php";

		function view(){

			$view=mysql_query("CREATE VIEW FriendsFriend AS
				SELECT user AS id FROM Friend WHERE
				friend=(SELECT user_id FROM Account WHERE user_email='$_SESSION[friend_email]')
				UNION ALL
				SELECT friend AS id FROM Friend WHERE 
				user=(SELECT user_id FROM Account WHERE user_email='$_SESSION[friend_email]')")
				or die("Your friend is a hermit!");
				
			return $view;
		}

		function getFriendsFriend($friendsFriendID){

			$friendsFriend=mysql_query("SELECT user_firstname,user_surname,user_study,user_work,user_email FROM user,Account
				WHERE User.user_id=Account.user_id AND User.user_id=$friendsFriendID") or die("Friend's friend fetch failed.");

			$friendsFriendFetch=mysql_fetch_array($friendsFriend);

			return $friendsFriendFetch;

		}

	?>
	<?php

		if(view()){

			$friendsFriendID=mysql_query("SELECT id FROM FriendsFriend
				GROUP BY id
				HAVING COUNT(*)=2");

			if(mysql_num_rows($friendsFriendID)>0){

				while($friendsFriendIDFetch=mysql_fetch_array($friendsFriendID)){

					$display=getFriendsFriend($friendsFriendIDFetch["id"]);

					if($display){
					echo "<center>";
					echo ("<a href='friendProfilePage.php?name=".$display['user_email']."'>".$display['user_firstname']." ".$display['user_surname']."</a><br>");
				    echo "$display[user_work]<br>";
				    echo "$display[user_study]<br>";
				    echo "<a href='friendProfilePage.php?name=".$display['user_email']."'><button>View Profile!</button></a>";
					echo "</center>";
					}

					else{
						echo "<p>Display error.</p>";
					}
				}	
			}
			else{
				echo "<p>Your friend has no friends.</p>";
			}
		}

		$dropView=mysql_query("DROP VIEW FriendsFriend");

		mysql_close();
	?>


</body>
</html>