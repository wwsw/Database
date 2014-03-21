<!DOCTYPE html>
<html lang="en">
  <head>

<script type='text/javascript' src='../Libraries/jquery-1.9.1.js'></script>
<script type='text/javascript' src='../js/bootstrap.min.js'></script>
<?php
include "../php/header.php";
?>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
<link href="../css/bootstrap.css" rel="stylesheet">

    <title>Hellooooooo! - Activity Log</title>

  </head>
  <body>


<style type="text/css">

  #activitylog {
    background-color: rgba(255, 255, 255, 0.5);
    margin-left: 10%;
    margin-right: 10%;
    margin-bottom: 20px;
  }

</style>

<div class="page" data-role="page">

<div id="activitylog">
  <center>
  <table>

  <?php
    $addedFriend = array("Hello", "Sam", "Amanda", "Leo", "Wendy", "Alice", "Name", "Another Name", "More names", "Another Name", "Name Name");
    $countAddFriend = count($addedFriend);
    # Not used here in example: but in order of date
    $date = array("Day 1", "Day 2", "Day 3");

    for ($i=0; $i < $countAddFriend; $i++) { 
      echo "<tr><td>";
      echo "You became friends with " . $addedFriend[$i] . ".<br>";
      echo "<font color='gray'><p style='text-align: right;'>" . "Day " . $i . "</p></font><p>";
      echo "<hr></td></tr>";
    }

  ?>

</table>
</centeR>

</div>



</div>


  </body>
</html>