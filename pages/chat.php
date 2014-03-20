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

<style type="text/css">
  
  #chat-page {
    background-color: rgba(255, 255, 255, 0.5);
    margin-left: 30%;
    margin-right: 10px;
    padding-top: 5px;
    padding-bottom: 5px;
    position: fixed;
    width: 60%;
  }

#leftcolumn {
  float: left;
  overflow: auto;
  width: 25%;
  /*border: 1px solid black;
  margin-left: -100%;*/
  /*background: #C8FC98;*/

  background-color: rgba(255, 255, 255, 0.5);
  margin-left: 10px;
  padding-left: 10px;
  padding-bottom: 10px;
}

hr {
   display: block;
   position: relative;
   padding: 0;
   margin: 8px auto;
   height: 0;
   width: 100%;
   max-height: 0;
   font-size: 1px;
   line-height: 0;
   clear: both;
   border: none;
   border-top: 1px solid #aaaaaa;
   border-bottom: 1px solid #ffffff;
}

</style>

<div class="page" data-role="page">

<div id="leftcolumn">


  <table>
    <tr>
      <h3><b>Inbox: <b></h3>
    </tr>

    <?php

      $names = array("Name 1", "Name 2", "Name 3", "Name 2", "Name 3", "Name 2", "Name 3", "Name 2", "Name 3", "Name 2", "Name 3", "Name 2", "Name 3", "Name 2", "Name 3", "Name 2", "Name 3", "Name 2", "Name 3", "Name 2", "Name 3", "Name 2", "Name 3", "Name 2", "Name 3", "Name 2", "Name 3", "Name 2", "Name 3", "Name 2", "Name 3", "Name 2", "Name 3", "Name 2", "Name 3");
      $namesTotal = count($names);
      $tdtrOpen = "<tr><td>";
      $tdtrClose = "<hr></td></tr>";
      $image = "<img src='../img/profileimg.png' width=20%/>";

      for ($i=0; $i < $namesTotal; $i++) { 
         echo $tdtrOpen . $image . $names[$i] . $tdtrClose;
      }

    ?>

  </table>

</div>

<div id="chat-page">

<form role="search" method="post" action="../php/searchContent.php" style="margin-left: 5px">
        <div class="form-group">
            <input type="text" class="form-control" name="searchBar" placeholder="Search in conversation" style="width: 30%" required><button type="submit" class="btn btn-default" value="Search" name="search">Search</button>
        </div>
        <!--input type="image" src="img/search.png" width="5%" height="5%" class="btn btn-default"-->
      </form>

<ul class="chat-thread">

  <!-- LOOP THROUGH CONVERSATIONS-->
  <li>Are we meeting today?</li>
  <li>yes, what time suits you?</li>
  <li>I was thinking after lunch, I have a meeting in the morning</li>
    <li>Are we meeting today?</li>
  <li>yes, what time suits you?</li>
  <li>I was thinking after lunch, I have a meeting in the morning</li>
</ul>

<center><form class="chat-window" onsubmit="getMessages(); return false;">
  <input id="messageBox" class="chat-window-message" onclick="" name="chat-window-message" type="text" autocomplete="off" placeholder="type your message here..." autofocus />
</form></center>
</div>

</div>


  </body>
</html>