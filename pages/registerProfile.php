<html>
<head>

    <link href="../css/bootstrap.css" rel="stylesheet">
    <script type='text/javascript' src='../Libraries/jquery-1.11.0.min.js'></script>
    <script type='text/javascript' src='../js/bootstrap.min.js'></script>

<?php
include "../php/registerHeader.php";
?>

    
<title>Hellooooooo!</title>
</head>
<body>

<div style="text-align:center;" data-role="content">

<div style="padding-left:30px; padding-right:30px;">
<div class="btn-group btn-group-justified">
  <div class="btn-group">
    <button type="button" class="btn btn-default" disabled>1. Create Account</button>
  </div>
  <div class="btn-group">
    <button type="button" class="btn btn-default" style="background-color: #D8D8D8;"><b>2. Profile Details</b></button>
  </div>
</div>
</div>

<p>
    <!--TODO change when creating new edit profile page-->
	<form method="post" action="../php/profileUpdate.php" name="registration">

	<h3 style="text-align:center;"><font color="gray">2. Create Profile</font></h3> <p>

    <!--label style="display:block;text-align:center">First name:</label-->

    <!-- Name Input -->
    <!-- class="form-control" -->
    <div class="row">
        <input type="text" name="study" placeholder="Study" required>
        <input type="text" name="work" size="20" placeholder="Work" required>
        <p>
    </div>
    <!--label style="display:block;text-align:center">Gender:</label>
    <div style="text-align:center"><input type="text" name="gender" size="30"></div>
    <label style="display:block;text-align:center">Age:</label>
    <div style="text-align:center"><input type="text" name="age" size="30"--></div>

    <!--label style="display:block;text-align:center">Study:</label>
    <div style="text-align:center"><input type="text" name="study" size="30"></div>
    <label style="display:block;text-align:center">Work:</label>
    <div style="text-align:center"><input type="text" name="work" size="30"></div-->
    <br>
	<center>
    <input class="btn btn-lg btn-primary btn-block" type="submit" value="Next (Nearly There!)" name="register" style="width: 30%;">
    <br>
    <a href="homeFeed.php">Or skip</a>
  </center>
  </p>
	</form>



</div>


</body>
</html>