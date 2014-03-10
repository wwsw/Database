document.write( 

            '<!--Navigation Bar-->'+
  '<nav class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation">'+
  '<div class="container">'+
  '<div class="container-fluid">'+
    '<!-- Brand and toggle get grouped for better mobile display -->'+
    '<div class="navbar-header">'+
      '<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">'+
        '<span class="sr-only">Toggle navigation</span>'+
        '<span class="icon-bar"></span>'+
        '<span class="icon-bar"></span>'+
        '<span class="icon-bar"></span>'+
      '</button>'+
      //TODO change this to just index.html for home page
      '<a class="navbar-brand" href="../index.html">Hellooooooo!</a>'+
    '</div>'+

    '<!-- Collect the nav links, forms, and other content for toggling -->'+
    '<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">'+
      '<ul class="nav navbar-nav">'+

        '<li><a href="register.html">Register</a></li>'+
      '</ul>'+
      
      '<ul class="nav navbar-nav navbar-right">'+

      '<form class="navbar-form navbar-right" role="search">'+
        '<div class="form-group">'+
          '<input type="text" class="form-control" placeholder="Search">'+
        '</div>'+
        //'<input type="image" src="img/search.png" width="5%" height="5%" class="btn btn-default">'+
        '<button type="submit" class="btn btn-default">Search</button>'+
      '</form>'+

      '</ul>'+



  '</div><!-- /.navbar-collapse -->'+
  '</div><!-- /.container-fluid -->'+
'</div>'+
'</nav>'
);