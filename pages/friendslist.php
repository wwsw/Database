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
    <title>Hellooooooo! - Friends</title>

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

<div id="friend-result-list">
<table>
<?php
$name = array("Wendy", "Leo", "Blah", "Bleh", "Meeeh", "Booo");
$work = array("Student", "Student", "Google", "Student", "Blah Blah", "Boooo!");
$study = array("UCL", "KCL", "RHUL", "UCL", "UCL", "Boo");
$frndtotal = count($name);
$br = "<br>";

#if greater than 0, and odd number
if (($frndtotal > 0) && (($frndtotal%2) != 0)) {
  

  #up to the max even number
  for ($i = 0; $i < $frndtotal; $i++) { 
 
    
    if ($i == $frndtotal) { #if last item

      echo "<tr><td>";
      echo "<div class='profile-box' id='search-result'>";
      echo "<div id='box-displaypic'><img src='../img/profileimg.png' width=30%></div>";
      echo "<div id='box-text'>";
      echo $name[$frndtotal] . $br . $work[$frndtotal] . $br . $study[$frndtotal] . $br;
      echo "<a href='friendProfilePage.php'><button class='btn' id='box-button' type='button' name='Accept'>View Profile</button></a>";
      echo "</div></div>";
      echo '</td></tr>';

    } elseif (($i == 0) || (($i%2) == 0)) {  # if 0 (1st item), even

      echo "<tr>";
      echo "<td>";
      echo "<div class='profile-box' id='search-result'>";
      echo "<div id='box-displaypic'><img src='../img/profileimg.png' width=30%></div>";
      echo "<div id='box-text'>";
      echo $name[$i] . $br . $work[$i] . $br . $study[$i] . $br;
      echo "<a href='friendProfilePage.php'><button class='btn' id='box-button' type='button' name='Accept'>View Profile</button></a>";
      echo "</div></div>";
      echo '</td>';

    } elseif (($i%2) != 0) { #if even: right side
      echo "<td>";
      echo "<div class='profile-box' id='search-result'>";
      echo "<div id='box-displaypic'><img src='../img/profileimg.png' width=30%></div>";
      echo "<div id='box-text'>";
      echo $name[$i] . $br . $work[$i] . $br . $study[$i] . $br;
      echo "<a href='friendProfilePage.php'><button class='btn' id='box-button' type='button' name='Accept'>View Profile</button></a>";
      echo "</div></div>";
      echo '</td>';
      echo "</tr>";
    }
  
  }

} else {

    for ($i = 0; $i < $frndtotal; $i++) { 

      if (($i == 0) || (($i%2) == 0)) {  # if 0 (1st item), even

      echo "<tr>";
      echo "<td>";
      echo "<div class='profile-box' id='search-result'>";
      echo "<div id='box-displaypic'><img src='../img/profileimg.png' width=30%></div>";
      echo "<div id='box-text'>";
      echo $name[$i] . $br . $work[$i] . $br . $study[$i] . $br;
      echo "<a href='friendProfilePage.php'><button class='btn' id='box-button' type='button' name='Accept'>View Profile</button></a>";
      echo "</div></div>";
      echo '</td>';

    } elseif (($i%2) != 0) { #if even: right side
      echo "<td>";
      echo "<div class='profile-box' id='search-result'>";
      echo "<div id='box-displaypic'><img src='../img/profileimg.png' width=30%></div>";
      echo "<div id='box-text'>";
      echo $name[$i] . $br . $work[$i] . $br . $study[$i] . $br;
      echo "<a href='friendProfilePage.php'><button class='btn' id='box-button' type='button' name='Accept'>View Profile</button></a>";
      echo "</div></div>";
      echo '</td>';
      echo "</tr>";
    }

  }

}


?>
</table>
</div>

</div>


  </body>
</html>