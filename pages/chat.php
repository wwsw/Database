<?php
if(!isset($_SESSION)){
    session_start();
}


if(strpos($_SERVER['REQUEST_URI'],"/pages/chat.php?name=0")===0){
  echo "<style> #chat-page { visibility: hidden; }</style>";
  echo "<div id='default-box'>Please select a conversation from your inbox.<p> If there are no existing conversations, you can select a friend from the Friends tab.";
  echo "</div>";
} else {
  $friendID=$_GET['name'];
  $_SESSION["receiver"]=$friendID; 
}

  include "../php/connection.php";
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
    

    <script type='text/javascript' src='../js/bootstrap.min.js'></script>

    <!-- Chat scripts-->

    <script type='text/javascript' src='../js/chat.js'></script>
    <link href="../css/chat.css" rel="stylesheet">
    <link href="../css/bootstrap.css" rel="stylesheet">

    <title>Hellooooooo! - Circles</title>

  </head>
  <body>

<style>
  
  #chat-page {
    background-color: rgba(255, 255, 255, 0.5);
    margin-left: 30%;
    margin-right: 10px;
    padding-top: 5px;
    padding-bottom: 5px;
    padding-left: 3px;
    padding-right: 3px;
    position: fixed;
    width: 60%;
  }

    #default-box {
    background-color: rgba(255, 255, 255, 0.5);
    margin-left: 30%;
    margin-right: 10px;
    padding-top: 5px;
    padding-bottom: 5px;
    padding-left: 3px;
    padding-right: 3px;
    position: fixed;
    width: 60%;
  }

#leftcolumn {
  float: left;
  overflow: auto;
  width: 27%;
  /*border: 1px solid black;
  margin-left: -100%;*/
  /*background: #C8FC98;*/

  background-color: rgba(255, 255, 255, 0.5);
  margin-left: 10px;
  padding-left: 10px;
  padding-right: 10px;
  padding-bottom: 10px;
}

</style>

<div class="page" data-role="page">

<div id="leftcolumn">

  <script type="text/javascript">
    $('#myTab a').click(function (e) {
      e.preventDefault()
      $(this).tab('show')
    })

    $('#myTab a:first').tab('show')

  </script>

<ul class="nav nav-tabs">
  <li class="active"><a href="#inbox" data-toggle="tab">Inbox</a></li>
  <li><a href="#friends" data-toggle="tab">Friends</a></li>
</ul>
<p>

<!-- Tab panes -->
<div class="tab-content">

      <!-- INBOX LIST -->
  <div class="tab-pane fade in active" id="inbox">
    <table>
    <?php

    function uniqueFetch(){
      include "../php/connection.php";
      $unique = mysql_query("SELECT user_id,user_firstname, user_surname FROM User WHERE user_id IN(SELECT DISTINCT sender FROM Message WHERE receiver = $_SESSION[user_id] AND user_id NOT IN(SELECT sender FROM Message WHERE sender =$_SESSION[user_id]))") or die("<p>UniqueID fetch failed.</p>");
        $arrayUnique = array();
        while ($uniqueFetch = mysql_fetch_array($unique)) {
            array_push($arrayUnique, $uniqueFetch);
        }
       return $arrayUnique;
     }    

      $uniqueFetch = uniqueFetch();

      $tdtrOpen = "<tr><td>";
      $tdtrClose = "<hr></td></tr>";
      $image = "<img src='../img/profileimg.png' width=20%/>";
      $link = "<a href='chat.php?name=";

      foreach ($uniqueFetch as $i) {
         echo $tdtrOpen . $image . $link . $i["user_id"] . "'>" . $i["user_firstname"] . " " . $i["user_surname"] . "</a>" . $tdtrClose;
      }
    ?>

  </table>
  </div>

<!-- FRIEND LIST -->
  <div class="tab-pane fade" id="friends">
    
    <table>

      <?php 

      function friendFetch(){
        include "../php/connection.php";

        $friend = mysql_query("SELECT user_id, user_firstname, user_surname FROM User
          WHERE user_id = $_SESSION[receiver]") or die("<p>Friend fetch failed.</p>");
          $friendFetch = mysql_fetch_array($friend);
         
         return $friendFetch;
      }

      $friendFetch = friendFetch();

      $friendCount = count($friendFetch["user_id"]);
    

        $a = 3;
        echo "<tr><td>";
        echo "<a href='chat.php?name=" . $a . "'>David Johnson [MANUAL]</a><hr>";
        echo "</td></tr>";

        ### Current selected friend ###
        echo "<tr><td>";
        echo "<a href='chat.php?name=" . $friendFetch["user_id"] . "'>" . $friendFetch["user_firstname"] . " " . $friendFetch["user_surname"] . "</a><hr>";
        echo "</td></tr>";

        // $a = 6;
        // echo "<tr><td>";
        // echo "<a href='chat.php?name=" . $a . "'>" . $friendFetch["user_firstname"] . " " . $friendFetch["user_surname"] . "</a><hr>";
        // echo "</td></tr>";        

      ?>
      
    </table>

  </div>  
  
</div>
</div>


<div id="chat-page" >

      <?php 

      echo "<h4><p style='text-align: right; padding-right: 7px;'><a href='friendProfilePage.php?name=" . $friendFetch["user_id"] . "'>" . $friendFetch["user_firstname"] . " " . $friendFetch["user_surname"] . "</a><p></h4><hr>";
      ?>

<form role="search" method="post" action="../php/searchContent.php" style="margin-left: 5px">
        <div class="form-group">
            <input type="text" class="form-control" name="searchBar" placeholder="Search in conversation" style="width: 190px" required><button type="submit" class="btn btn-default" value="Search" name="search">Search</button>
        </div>
        <!--input type="image" src="img/search.png" width="5%" height="5%" class="btn btn-default"-->
      </form>

<div id="chat-thread">
<ul class="chat-thread">

  <?php
    function messageFetch(){
      include "../php/connection.php";
      $message = mysql_query("SELECT sender, receiver, date, message FROM Message
        WHERE (sender = $_SESSION[user_id] AND receiver = $_SESSION[receiver]) OR (sender = $_SESSION[receiver] AND receiver= $_SESSION[user_id]) GROUP BY date") or die("<p>Message fetch failed.</p>");
        $array = array();
        while ($messageFetch = mysql_fetch_array($message)) {
            array_push($array, $messageFetch);
        }
         
       return $array;
     }

     $messageFetch = messageFetch();

     $count = count($messageFetch);
     $friendID = $_SESSION["receiver"];

     #echo $count;
     #echo $friendID;
     #echo $messageFetch["sender"];
  

     foreach ($messageFetch as $j) {

       ### RECEIVER = left ###
       if ($j["sender"] == $friendID) {
        #echo $j["message"]; ###css first
        echo '<li id="receiver">';
        echo $j["message"];
        echo "<p style='text-align: right; font-size: 10px; font-color: 'gray';>" . $j["date"] . "</p>";
        echo "</li>";
       
       } else {
        echo "<li id='sender'>";
        echo $j["message"];
        echo "<p style='text-align: right; font-size: 10px; font-color: 'gray';>" . $j["date"] . "</p>";        
        echo "</li>";
       }
    
      }

  ?>

  <!-- LOOP THROUGH CONVERSATIONS-->
  <!-- <li id="sender">Are we meeting today?</li>
  <li id="sender">yes, what time suits you?</li>
  <li id="receiver">I was thinking after lunch, I have a meeting in the morning</li>
  <li id="sender">Are we meeting today?</li>
  <li id="receiver">yes, what time suits you?</li>
  <li id="receiver">I was thinking after lunch, I have a meeting in the morning</li> -->
</ul>
</div>




<center><form class="chat-window" onsubmit="getMessages(); return false;">
  <input id="messageBox" class="chat-window-message" onSubmit="location.reload()" name="chat-window-message" type="text" autocomplete="off" placeholder="type your message here..." autofocus />
</form></center>
</div>

</div>


  </body>
</html>