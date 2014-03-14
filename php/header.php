<!-- var x = 1;
if (x = 1) {
  var string = "Hellooooooo!";
}

function ifLoggedIn() {
  //takes from database user login status
}

function getName() {
  var currentID = 1;
  var currentName = "";
  currentName += nameCompare(currentID);

  return currentName;
}

function nameCompare(currentID) {

  //TODO retrieve names and relative IDs from database
  var names = ["Wendy Wong", "Blah Bleh", "Bleh Blah"];
  var userIDs = [1, 2, 3];
  var count = 0;

  //loop through IDs to find relative name
  while (count < userIDs.length) {
    if (currentID == userIDs[count]) {
      return names[count];
    } else {
      count++;
    }
  }
}

function notification() {

  var random = Math.floor(Math.random()*11);
  return random;

} -->




<!--Navigation Bar-->
  <nav class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation">
  <div class="container">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="homeFeed.php">  
      Hellooooooo! 
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      <li><a href="notifications.php">

      <!--Notifications-->
      <script type="text/javascript">
        function notification() {
          var random = Math.floor(Math.random()*11);
          return random;
        }

        document.write(notification());
      </script>

      </a></li>


        <li class="active"><a href="profile.php">
        <!--USER NAME-->
        Wendy Wong 
        </a></li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="friendslist.php">Your Friends</a></li>
            <li><a href="photos.php">Your Photos</a></li>
            <li><a href="circles.php">Your Circles</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>        


        <li><a href="messages.php">Messages
          <script type="text/javascript">
            document.write(notification());
          </script>
        </a></li>

      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Settings<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="editProfile.php">Edit Profile</a></li>
            <li><a href="#">Option</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </li>

      <form class="navbar-form navbar-right" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <!--input type="image" src="img/search.png" width="5%" height="5%" class="btn btn-default"-->
        <button type="submit" class="btn btn-default">Search</button>
      </form>

      </ul>



  </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</div>
</nav>