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
  <table>
    <?php
      include "../php/searchResult.php";

      if(mysql_num_rows($search)>0){
      while($display=mysql_fetch_array($search)){

      echo "<tr><td>";
      echo "<div class='searchResult'>";
      echo "<div class='profile-box'>";
      echo "<div id='box-displaypic'><img src='../img/profileimg.png' width=90px;></div>";
      echo "<div id='box-text'>";
      echo ("<a href='friendProfilePage.php?name=".$display['user_email']."'>".$display['user_firstname']." ".$display['user_surname']."</a><br>");
      echo "$display[user_work]<br>";
      echo "$display[user_study]<br>";
      echo "<a href='friendProfilePage.php?name=".$display['user_email']."'><button class='btn' id='box-button' type='button' >View Profile!</button></a>";
      echo "</div></div>";
      echo "</div>"
      echo "</td></tr>";
    }

  }
  else{
    echo "<script>searchFailure();history.back();</script>";
  }

    ?>

<!--script type="text/javascript">

var names = ['Wendy Wong', 'Blah Bleh', 'Bleh Blah', 'Blah Blah', 'Meeeeeh'];
var work = ['Student', 'Student', 'Google', 'Apple', 'Amazon'];
var study = ['UCL', 'KCL', 'RHUL', 'QMUL', 'SOAS'];
var br = '<br>';
var append = '';
var count = 0;

while (count < 5) {
  append += '<tr><td>';
  append += '<div class="profile-box" id="search-result">';
  append += '<div id="box-displaypic"><img src="../img/profileimg.png" width=30%></div>';
  append += '<div id="box-text">';
  append += names[count] + br + work[count] + br + study[count] + br;
  append += '<button class="btn" id="box-button" type="button">View Profile!</button>';
  append += '</div></div>';
  append += '</td></tr>';

  count++;
}

  document.write(append);
</script-->    

  </table>

  <!--each seperate profile box-->
<!--   <div class="profile-box" id="search-result">

    <!-- Separate div to display dp on left-->
    <!--div id="box-displaypic">
      <img src="../img/profileimg.png" width=30%>
    </div>

    <!--Separate div for text on right-->
    <!--div id="box-text">

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
  </div> -->

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