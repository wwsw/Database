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

    <title>Hellooooooo! - Search Results</title>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<style>

#search-result{
  display: block;

}

#box-displaypic {
  position: absolute;
}

#box-text {
  margin-left: 105px;

}

#box-name {

}

#box-work {

}

#box-study {

}

#box-button {
}

#search-result-list {
  position: relative;
  top: 0;
  left: 30%;

}

.profile-box {
  position: absolute;
  display: block;
  background-color: rgba(255, 255, 255, 0.5);
  width: 400px;
  padding-left: 15px;
  padding-right: 30px;
  padding-bottom: 10px;
  padding-top: 10px;
  border-radius: 5px;
  box-shadow: 5px 5px 6px #888888;

}
</style>

  </head>
  <body>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type='text/javascript' src='../js/bootstrap.min.js'></script>

<div class="page" data-role="page">

<div style="margin-left: 30%;"><h2>Search Results</h2></div>

<!--Entire list-->
<div id="search-result-list">

  <!--each seperate profile box-->
  <div class="profile-box" id="search-result">

    <!-- Separate div to display dp on left-->
    <div id="box-displaypic">
      <img src="../img/profileimg.png" width=30%>
    </div>

    <!--Separate div for text on right-->
    <div id="box-text">

      <div id="box-name">
        This is for the user's name.
      </div>

      <div id="box-work">
        This is for the user's work place.
      </div>

      <div id="box-study">
        This is for the user's place of study.
      </div>

      <button class="btn" id="box-button" type="button">View Profile!</button>

    </div>
  </div>

  <p>

  <!--div class="profile-box" id="search-result">

    <div id="box-displaypic">
      <img src="../img/profileimg.png" width=30%>
    </div>

    <div id="box-text">
      <div id="box-name">
        This is for the user's name.
      </div>

      <div id="box-work">
        This is for the user's work place.
      </div>

      <div id="box-study">
        This is for the user's place of study.
      </div>

      <button class="btn" id="box-button" type="button">View Profile!</button>

    </div-->

  </div>


</div>

</div>


  </body>
</html>