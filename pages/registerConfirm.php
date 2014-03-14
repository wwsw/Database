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
    <button type="button" class="btn btn-default" disabled>2. Profile Details</button>
  </div>
  <div class="btn-group">
    <button type="button" class="btn btn-default" style="background-color: #D8D8D8;"><b>3. Confirmation</b></button>
  </div>
</div>
</div>

<p>

	<form method="post" action="../php/register.php" name="registration">

	<h3 style="text-align:center;"><font color="gray">3. Confirmation</font></h3><p>

    An e-mail has been sent with a Confirmation Code.<br>
    Please enter this code below.<p>
    <font color="gray">If this doesn't appear in your inbox, try your junk mail. Otherwise, <button>click here</button> to re-send the e-mail.</font>

    <div class="row">
        <input type="text" name="firstname" placeholder="Confirmation Code" required>
    </div>

    
    <br>
	<center><input class="btn btn-lg btn-primary btn-block" type="submit" value="Finish" name="register" style="width: 20%;"></center></p>
	</form>



</div>


</body>
</html>