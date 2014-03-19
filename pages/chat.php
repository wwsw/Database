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
    <script type='text/javascript' src='../js/bootstrap.min.js'></script>

    <!-- Chat scripts-->
    <link href="../css/chat.css" rel="stylesheet">
    <script type='text/javascript' src='../js/chat.js'></script>


    <title>Hellooooooo! - Circles</title>

  </head>
  <body>

<style type="text/css">
  
  #chat-page {
    background-color: rgba(255, 255, 255, 0.5);
    margin-left: 20px;
    margin-right: 20px;
  }

</style>

<div class="page" id="chat-page" data-role="page">


<ul class="chat-thread">
  <li>Are we meeting today?</li>
  <li>yes, what time suits you?</li>
  <li>I was thinking after lunch, I have a meeting in the morning</li>
</ul>

<form class="chat-window">
  <input class="chat-window-message" name="chat-window-message" type="text" autocomplete="off" autofocus />
</form>

</div>


  </body>
</html>