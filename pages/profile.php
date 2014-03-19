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
    <title>Hellooooooo!</title>

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

<style>

body {
  padding-top: 60px;
}

table, tr {
  /*border: 1px solid black;*/
  width: 100%
}

#maincontainer {
  width: 100%;
  margin: 0 auto;
}

#contentwrapper {
  position: absolute;
  float: left;
  width: 100%;
}

#contentcolumn {
  margin-left: 30%;
  top: 80px;
}

#column-scroll {
  overflow: auto;
}

/**/
#leftcolumn {
  float: left;
  position: fixed;
  overflow: auto;
  width: 30%;
  /*border: 1px solid black;
  margin-left: -100%;*/
  /*background: #C8FC98;*/
}

#username {
  text-indent: 10px;
}

.innertube {
  margin: 10px;
  background-color: rgba(255, 255, 255, 0.5);
}

</style>

<div id="profilemenu" style="position: fixed; ">
<div class="innertube" style="text-align:center;">
<div class="btn-group btn-group-justified">
  <div class="btn-group">
    <a class="btn" type="button" class="btn btn-default" style="border-right:1px solid gray" href="about.php">About</a>
  </div>
  <div class="btn-group">
    <a class="btn" type="button" class="btn btn-default" style="border-right:1px solid gray" href="photos.php">Photos</a>
  </div>
  <div class="btn-group">
    <a class="btn" type="button" class="btn btn-default" style="border-right:1px solid gray" href="friendslist.php">Friends</a>
  </div>
  <div class="btn-group">
    <a class="btn" type="button" class="btn btn-default" href="circles.php">Circles</a>
  </div>
</div>
</div>
</div>

<div class="page" id="maincontainer" data-role="page" style="padding-top:50px;">

<div id="contentwrapper">

<!-- Side Bar -->
<div id="leftcolumn">
<div class="innertube">
<table>
  <tr id="username">
    <th>
      <?php

        echo "$userProfileFetch[user_firstname] $userProfileFetch[user_surname]";

      ?>
    </th>

  </tr>
  <tr>
    <td>
      <center><img src="../img/profileimg.png" style="padding: 10px;" width=150px></center>
    </td>
  </tr>

  <tr>
    <td height=250px>
      <?php

        echo "$userProfileFetch[user_birthday]</br>";
        echo "$userProfileFetch[user_gender]</br>";
        echo "$userProfileFetch[user_study]</br>";
        echo "$userProfileFetch[user_work]</br>";

      ?>
    </td>
  </tr>

</table>

</div>
</div>

  <div id="contentcolumn">
    <div id="column-scroll">

  <div class="innertube">
    <center>This is the profile page.
    <a href="editProfile.php">Update personal details.</a></center>

    <div id="profilefeed">
      <center>This div will contain the feed of the user.

        <script>
        var string = "";
          for (var i = 0; i < 50; i++) {
            string += "blah blah<p>"
          }

          document.write(string);
        </script>

      </center>
    </div>

  </div>
  </div>
</div>

</div>


</div>


  </body>
</html>