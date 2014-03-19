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
    <link href="../css/statusField.css" rel="stylesheet"> 
    <script type='text/javascript' src='../js/bootstrap.min.js'></script>
    <script type='text/javascript' src='../js/statusUpdate.js'></script>
    
</head>
<body>

<div class="page" data-role="page">

<center>
  <form method="post" action="../php/postUpdate.php" name="updatePost" enctype="multipart/form-data">
    <!-- The border of the post field-->
    <div id="statusBorder">

      <!-- The post field including comment filed, upload button and submit button-->
      <div id="comment">
        <!-- The comment filed-->
        <div>
          <textarea rows="10" name="post_comment" id="comment" placeholder="Comment"></textarea>
        </div>
        <!-- The upload button-->
        <div class="file">
          <span class="glyphicon glyphicon-camera"><input type="file" name="post_photo" class="upload" onChange="readURL(this);"></span>
        </div>
        <!-- The preview of the iimage before upload. -->
        <div id="imagePreview"></div>

        <div>
          <input type="submit" name="submit" value="Post">
        </div>

      </div>
    </div>
  </form>


  <div id="newFeed">
  </div>

</center>


</div>


  </body>
</html>