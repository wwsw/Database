<?php

  /* The block which displays the user/friend profile page. */
  function echoSideBar(){
    include "../php/userProfile.php";
    echo '<div id="leftcolumn">';
    echo '<div class="innertube">';
    echo '<table>';
      echo '<tr id="username">';
        echo '<th>';

          echo "$userProfileFetch[user_firstname] $userProfileFetch[user_surname]";

        echo '</th>';
      echo '</tr>';

      echo '<tr>';
        echo '<td>';
        include "../php/profilePhotoSize.php";

        $photoSize=photoSize($_SESSION["user_email"]);

         if($photoSize>0){
           echo '<center><img src="../php/userPhoto.php" style="padding: 10px;" width=150px></center>';
         }
         else{
           echo '<center><img src="../img/profileimg.png" style="padding: 10px;" width=150px></center>';
         }
        echo '</td>';
      echo '</tr>';

      echo '<tr>';
        echo '<td height=250px>';
 
        echo "$userProfileFetch[user_birthday]</br>";
        echo "$userProfileFetch[user_gender]</br>";
        echo "$userProfileFetch[user_study]</br>";
        echo "$userProfileFetch[user_work]</br>";

        echo '</td>';
        echo '</tr>';

    echo '</table>';
    echo '</div>';
    echo '</div>';
  }

  function echoNavigationBar(){
    echo '<div id="profilemenu">';
      echo '<div class="innertube" style="text-align:center;">';
        echo '<div class="btn-group btn-group-justified">';
          echo '<div class="btn-group">';
            echo '<a class="btn" type="button" class="btn btn-default" style="border-right:1px solid gray" href="about.php">About</a>';
          echo '</div>';
          echo '<div class="btn-group">';
            echo '<a class="btn" type="button" class="btn btn-default" style="border-right:1px solid gray" href="photos.php">Photos</a>';
          echo '</div>';
          echo '<div class="btn-group">';
            echo '<a class="btn" type="button" class="btn btn-default" style="border-right:1px solid gray" href="#popupWindow">Friends</a>';
          echo '</div>';
          echo '<div class="btn-group">';
            echo '<a class="btn" type="button" class="btn btn-default" href="circles.php">Circles</a>';
          echo '</div>';
        echo '</div>';
      echo '</div>';
    echo '</div>';
  }

    /* Display the feed block when they are friends. */
  function echoFeed(){
    echo '<div id="contentcolumn">';
      echo '<div id="column-scroll">';

        echo '<div class="innertube">';
          echo '<center>This is the profile page.';
          echo '<a href="editProfile.php">Update personal details.</a></center>';

          echo '<div id="profilefeed">';
            echo '<center>This div will contain the feed of the user.';

              echo '<script>';
              echo 'var string = "";';
                echo 'for (var i = 0; i < 50; i++) {';
                  echo 'string += "blah blah<p>"';
                  echo '}';
                echo 'document.write(string);';
              echo '</script>';

            echo '</center>';
          echo '</div>';
        echo '</div>';
      echo '</div>';
  echo '</div>';
  }

  /* The popup window which well display user's/friend's friends. */
  function friendPopupWindow(){

    echo '<div id="popupWindow" class="popupWindowStyle">';
      echo '<div>';
        echo '<div class="closeBar">';
          echo '<a href="javascript:history.back();" title="Close" class="close">X</a>';
        echo '</div>';
        
        echo '</div>';
      echo '</div>';
    echo '</div>';

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

        <!-- Bootstrap -->
  <link href="../css/bootstrap.css" rel="stylesheet">
  <link href="../css/friendProfilePage.css" rel="stylesheet">
  <link href="../css/popupWindow.css" rel="stylesheet"> 
  <script type='text/javascript' src='../js/bootstrap.min.js'></script>
  <title>Hellooooooo!</title>

</head>
<body>

<?php

  echoNavigationBar();
  echo '<div class="page" id="maincontainer" data-role="page">';
  echo '<div id="contentwrapper">';

  echoSideBar();
  echoFeed();
  friendPopupWindow();
  echo '</div>';
  echo '</div>';

?>
</body>
</html>