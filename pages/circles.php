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

    <title>Hellooooooo! - Circles</title>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type='text/javascript' src='../js/bootstrap.min.js'></script>

<div class="page" data-role="page">

<style>
  #circle-page {
    padding: 1px 10px 10px 10px;
    margin-left: 25%;
    margin-right: 25%;
    background-color: rgba(255, 255, 255, 0.5);
  }

</style>

  <script type="text/javascript">
    $('#myTab a').click(function (e) {
      e.preventDefault()
      $(this).tab('show')
    })

    $('#myTab a:first').tab('show')

  </script>

<div id="circle-page">

  <h3>Your Circles</h3>
<ul class="nav nav-tabs">
  <li class="active"><a href="#family" data-toggle="tab">Family</a></li>
  <li><a href="#work" data-toggle="tab">Work</a></li>
  <li><a href="#study" data-toggle="tab">Study</a></li>
</ul>
<p>

<!-- Tab panes -->
<div class="tab-content">

      <!-- INBOX LIST -->
  <div class="tab-pane fade in active" id="family">
    <center>
    <table>
    <?php

    function uniqueFetch(){
      include "../php/connection.php";
      $unique = mysql_query("SELECT user_id,user_firstname, user_surname FROM User WHERE user_id IN(SELECT DISTINCT sender FROM Message WHERE receiver = $_SESSION[user_id] AND user_id NOT IN(SELECT sender FROM Message WHERE sender =$_SESSION[user_id]))") or die("<p>No conversations to display.</p>");
        $arrayUnique = array();
        while ($uniqueFetch = mysql_fetch_array($unique)) {
            array_push($arrayUnique, $uniqueFetch);
        }
       return $arrayUnique;
     }    

      $uniqueFetch = uniqueFetch();

      if (count($uniqueFetch) == 0) {
        echo "You have no conversations to display.";
      } else {

      $tdtrOpen = "<tr><td>";
      $tdtrClose = "<hr></td></tr>";
      $image = "<img src='../img/profileimg.png' width=20% style='padding-right: 2px;'/>";
      $link = "<a href='chat.php?name=";

      foreach ($uniqueFetch as $i) {
         echo $tdtrOpen . $image . $link . $i["user_id"] . "'>" . $i["user_firstname"] . " " . $i["user_surname"] . "</a>" . $tdtrClose;
      }
    }
    ?>

  </table>
</center>
  </div>

<!-- FRIEND LIST -->
  <div class="tab-pane fade" id="work">
    <center>
    <table>

      <?php 

      function friendFetch(){
        include "../php/connection.php";
        $friend = mysql_query("SELECT user_id, user_firstname, user_surname FROM User WHERE user_id IN (SELECT friend FROM friend WHERE user = $_SESSION[user_id])") or die("<p>Could not fetch activity.</p>");
          $arrayFriend = array();
          while ($friendFetch = mysql_fetch_array($friend)) {
              array_push($arrayFriend, $friendFetch);
          }
         return $arrayFriend;
      }

      $friendFetch = friendFetch();

      foreach ($friendFetch AS $i) {
        echo "<tr><td>";
        echo "<a href='chat.php?name=" . $i["user_id"] . "'>" . $i["user_firstname"] . " " . $i["user_surname"] . "</a><hr>";
        echo "</td></tr>";
      }
    


        ### Current selected friend ###


        // $a = 6;
        // echo "<tr><td>";
        // echo "<a href='chat.php?name=" . $a . "'>" . $friendFetch["user_firstname"] . " " . $friendFetch["user_surname"] . "</a><hr>";
        // echo "</td></tr>";        

      ?>
      
    </table>
  </center>

  </div>  

<!-- STUDY LIST -->
  <div class="tab-pane fade" id="study">
    <center>
    <table>

      <?php 

      function studyFetch(){
        include "../php/connection.php";
        $friend = mysql_query("SELECT user_id, user_firstname, user_surname FROM User WHERE user_id IN (SELECT friend FROM friend WHERE user = $_SESSION[user_id])") or die("<p>Could not fetch activity.</p>");
          $arrayFriend = array();
          while ($friendFetch = mysql_fetch_array($friend)) {
              array_push($arrayFriend, $friendFetch);
          }
         return $arrayFriend;
      }

      $friendFetch = studyFetch();

      foreach ($friendFetch AS $i) {
        echo "<tr><td>";
        echo "<a href='chat.php?name=" . $i["user_id"] . "'>" . $i["user_firstname"] . " " . $i["user_surname"] . "</a><hr>";
        echo "</td></tr>";
      }
    


        ### Current selected friend ###


        // $a = 6;
        // echo "<tr><td>";
        // echo "<a href='chat.php?name=" . $a . "'>" . $friendFetch["user_firstname"] . " " . $friendFetch["user_surname"] . "</a><hr>";
        // echo "</td></tr>";        

      ?>
      
    </table>
  </center>

  </div>  
  
</div>

</div>
</div>


  </body>
</html>