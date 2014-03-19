<!DOCTYPE html>
<html lang="en">
  <head>

<script type='text/javascript' src='../Libraries/jquery-1.9.1.js'></script>
<?php
  include "../php/header.php";

  list($year,$month,$day)=explode("-",$userProfileFetch["user_birthday"]);

?>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/bootstrap.css" rel="stylesheet">
    <script type='text/javascript' src='../js/bootstrap.min.js'></script>
    <title>Hellooooooo! - Edit Profile</title>
  </head>

<body>

<div class="page" data-role="page">
  <center>
    <br>
    <br>
    <h3><font color="gray">Edit Profile</font></h3>
  <form method="post" action="../php/updateProfile.php" name="updateProfile">

    <div class="row">
        <input type="text" name="firstname" value="<?= $userProfileFetch['user_firstname'] ?>">
        <input type="text" name="surname" size="20" value="<?= $userProfileFetch['user_surname'] ?>"><p>
    </div>

    <div>
      <?php
        if($userProfileFetch["user_gender"]=='Male'){
          echo '<input type="radio" name="gender" value="Male" checked> Male';
          echo '<input type="radio" name="gender" value="Female"> Female<p>';
        }
        else{
          echo '<input type="radio" name="gender" value="Male"> Male';
          echo '<input type="radio" name="gender" value="Female" checked> Female<p>';
        }
      ?>
    </div>

    <p>Date of birth:</p>
      <div id="dob">
        <script> 
        function yearList() {
            var year="<?php echo $year; ?>";
            var yearString = '';
            yearString += '<select required name="year">';
            yearString += '<option disabled selected stle="display: none;">'+year+'</option>';

            for (var i = 2014; i > 1900; i--) {
                yearString += '<option value="' + i + '"">' + i + '</option>';
            }

            yearString += '</select>';

            return yearString;
        }

        function monthList() {
            var month="<?php echo $month; ?>";
            var months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sept", "Oct", "Nov", "Dec"];

            var monthString = '';
            monthString += '<select required name="month">';
            monthString += '<option disabled selected style="display:none;">'+month+'</option>';

            for (var j = 0; j < months.length; j++) {

                if (j <= 8) {
                    monthString += '<option value="0' + (j+1) + '">' + months[j] + '</option>';
                } else {
                    monthString += '<option value="' + (j+1) + '">' + months[j] + '</option>';
                }
            }

            monthString += '</select>';
            return monthString;
        }

        function dayList() {
          var day="<?php echo $day; ?>";
            var dayString = '';
            dayString += '<select required name="day">';
            dayString += '<option disabled selected stle="display: none;">'+day+'</option>';

            for (var i = 1; i < 32; i++) {

                if (i < 10) {
                    dayString += '<option value="0' + i + '">' + i + '</option>';
                } else {
                    dayString += '<option value="' + i +'">' + i + '</option>';
                }
            }

            dayString += '</select>';

            return dayString;
        } 

            
        document.getElementById("dob").innerHTML=yearList() + monthList() + dayList();

        </script>
      </div>
      <br>

      <div class="row">
        <input type="text" name="study" value="<?= $userProfileFetch['user_study'] ?>" placeholder="Study">
        <input type="text" name="work" size="20" value="<?= $userProfileFetch['user_work'] ?>" placeholder="Work">
        <br>

     </div>

      <br>
       <input type="password" name="password1" size="30" placeholder="Password"><br>
        <font color="gray"><i>Passwords must be at least 6 characters long, and contain one or more numbers.</i></font><p>
      <input type="password" name="password2" size="30" placeholder="Re-enter Password"><p>
      <br>

      <input class="btn btn-lg btn-primary btn-block" type="submit" value="Update" name="reditProfile" style="width: 20%;">

  </form>
  </center>
</div>


  </body>
</html>