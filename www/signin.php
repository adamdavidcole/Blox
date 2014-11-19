<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Blox Sign In</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
    <script src="signin.js"></script>
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
  </head>

  <body>

<div class="navbar navbar-inverse navbar-fixed-top custom-nav" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">
            <img id="custom-brand" src="images/cinder-block-logo.png">
          </a>
        </div>
        <div class="navbar-collapse collapse" id="center-buttons">
          <form class="navbar-form navbar-right" role="form">
        <div class="navbar-collapse collapse">
          <form class="navbar-form navbar-right" role="form" action="/users/sign_in">
            <div class="form-group">
              <input name="user[username]" type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input name="user[password]" type="password" placeholder="Password" class="form-control">
            </div>
            <button type="button" class="btn btn-success" onClick="location.href='lobby.php'">Log in</button>
          </form>

        </div><!--/.navbar-collapse -->
      </div>
    </div>
</div>


    <div class="container main">  
      <div class="row row1" align="center">

        <div class="col-md-6" id="blurb">
          <h2 class="form-signin-heading" id="title">Welcome to Blox</h2>
          <h4 id="blurb-content"> Meet neighbors. </h4>
          <h4 id="blurb-content"> Get involved. </h4>
          <h4 id="blurb-content"> Build a community. </h4>
           <h5 id="para"> Turn strangers into neighbors and neighbors into friends.
            Share and request needs, 
            gather and make decisions about your apartment,
            and manage your building in a smart way.
          </h5>
    
        </div>

        <div class="col-md-6">
          <form class="form-signin" role="form" action="#users">
            <h2 class="form-signin-heading">Register</h2>
            <input type="name" class="form-control" placeholder="Full Name" required autofocus>
            <input name="user[username]" type="email" class="form-control" placeholder="Email" required> 
            <input name="user[password]" type="password" class="form-control" placeholder="Password" required autofocus>
            <label class="checkbox">
              <input type="checkbox" value="remember-me"> Remember me
            </label>
            <button  class="btn btn-lg btn-primary btn-block" data-toggle="modal" data-target="#myModal" type="submit">Sign up</button>
          </form>
        </div>
      </div>
      <div class="row row2">
        <div class="col-md-6">
    
        </div>
        <div class ="col-md-6" id="paragraph">

        </div>
        
      </div>
<!--       <div class="row row3">
        <img src="images/skyline.png" id="backdrop">
      </div> -->
             <!-- <img src="images/skyline.png" id="backdrop"> -->
      </div>
      <div class="navbar-fixed-bottom" id="black-nav" role="navigation">
      <div class="container">

</div>
    </div> <!-- /container -->

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog id-dialog">
    <div class="modal-content client-modal">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">One more thing to go...</h4>
      </div>
      <div class="row modal-body">
        <div class = "col-md-6 id-input" align="center">
          <h5 id="slim" align="left"> In order to locate and verify your residence, we need your Client ID.
            This number can be found on the top left corner of your local tax bill. 
            Look at the sample to the right for help. 
          </h5>
          <input type="client-id" id="client-input" class="form-control" placeholder="Client ID" required autofocus>  
        </div>
        <div align="center" class = "col-md-6 id-pic">
          <img class="sizeable-img" src="images/client-pic.jpg">  
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Back</button>
        <button type="button" class="btn btn-primary" onClick="location.href='lobby.php'">Continue</button>
      </div>
    </div>
  </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="bootstrap.js"></script>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

  </body>
</html>
