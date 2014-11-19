<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="../../assets/ico/favicon.ico">
        <title>Blox Lobby</title>
        
        <!-- Bootstrap core -->
        <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
        <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>

        <!-- Custom for this template -->
        <link href="lobby.css" rel="stylesheet">
        <link href="signin.css" rel="stylesheet">
        <script src="lobby.js"></script>
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
			          <a class="navbar-brand" href="signin.php">
			            <img id="custom-brand" src="images/cinder-block-logo.png">
			          </a>
			        </div>
			        <div class="navbar-collapse collapse" id="center-buttons">
			          <form class="navbar-form navbar-right" role="form">
			        <div class="navbar-collapse collapse">
			          <ul class="nav navbar-nav navbar-right">
                <li><a href="#" id="nav-color">My Profile</a></li>
                <li><a href="#" id="nav-color">Signout</a></li>
              </ul>

			        </div> 
			      </div>
			    </div>
			</div>

<!--         <nav class="navbar navbar-default" role="navigation">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">BLOX</a>
            </div>

              <ul class="nav navbar-nav navbar-right">
                <li><a href="#">My Profile</a></li>
                <li><a href="#">Signout</a></li>
              </ul>
          </div>
        </nav> -->





        <div class="container-fluid" id="lobby-board-container">
       
        <div id="lobby-title">
            <h1>Welcome to the Lobby</h1>
            <h2>123 Ben-Yehuda Street, Tel Aviv</h2>
        </div>
            
		<div class="row-fluid">
			<div class="col-xs-12 board-col">
				<div class="announcement-box">
					<h4 id="notice-board">Notice Board</h4>


					<div class="row" id="accordion">
					  <div class="col-xs-10 board-announcement">
						  <div class="announcement-panel">

							  <div class="panel panel-default col-xs-2 announcement-date">
								<div class="panel-body">
								  March 31
								</div>
							  </div>

							  <div class="panel panel-default col-xs-8 announcement-message">
								<div class="panel-body">
								  <a href="#">Shutting off water supply from 3pm to 4pm </a>
								</div>
							  </div>

						  </div>
							<div class="avatar col-xs-1">
							  <img src="avatar2.jpg" alt="..." class="img-circle">
							<p>Adam</p>
						  </div>
					  </div>
					  </div>

					  <div class="row">
					  <div class="col-xs-10 board-announcement">

						  <div class="announcement-panel">

							  <div class="panel panel-default col-xs-2 announcement-date">
								<div class="panel-body">
								  April 5
								</div>
							  </div>

							  <div class="panel panel-default col-xs-8 announcement-message">
								<div class="panel-body">
								  <a href="#">Construction on roof this Thursday from 9am to 11pm</a>
								</div>
							  </div>
							<div class="avatar col-xs-1">
							  <img src="avatar1.jpg" alt="..." class="img-circle">
							<p>Elana</p>
						  </div>

						  </div>
						</div>
					  </div>  




					</div>
				</div>
			</div>
		</div>

		<div class="row-fluid">
			<div class="col-md-8 board-col community-col">
				<div class="community-box">
					<a href="#"><h4>Community</h4></a>
					  <div class="panel-group" id="accordion">
						<div class="panel panel-default">
						  <div class="panel-heading smaller">
							<h4 class="panel-title">
							  <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
								28/6: Need Babysitter
							  </a>
							</h4>
						  </div>
						  <div id="collapseOne" class="panel-collapse collapse in">
							<div class="panel-body">
								Looking for babysitter for Wednesday nights. 
							</div>
						  </div>
						</div>
						<div class="panel panel-default">
						  <div class="panel-heading smaller">
							<h4 class="panel-title">
							  <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
								Need Dog-Walker
							  </a>
							</h4>
						  </div>
						  <div id="collapseTwo" class="panel-collapse collapse">
							<div class="panel-body">
								I have two dogs that need to be walked!  
							</div>
						  </div>
						</div>
						<div class="panel panel-default">
						  <div class="panel-heading smaller">
							<h4 class="panel-title">
							  <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
								Interested in playing Monopoly?
							  </a>
							</h4>
						  </div>
						  <div id="collapseThree" class="panel-collapse collapse">
							<div class="panel-body">
								I love board games, come play with me!
							</div>  
							</div>
						  </div>
						</div>
					  </div>

					  <div id="who_panel">
					  	  <button type="submit" class="btn btn-default who_button" data-toggle="modal" data-target="#myModal"><h4>Discover who lives in my building!</h4></button>
					  </div>
				</div>


				
				
			<div class="col-md-4 board-col payment">
				<div class="board-box">
					<a href"#"><h4>Open Payments</h4></a>
					<div class="content-box">
						<form class="form" action="/charge" method="POST">
						  <div class="checkboxes">
						  <label class="checkbox"><input onclick="payClick(this)" type="checkbox" name="monthly" value="120" autocomplete="off"> Monthly fee: &nbsp; 120 NIS</label>
						  <label class="checkbox"><input onclick="payClick(this)" type="checkbox" name="pool" value="100" autocomplete="off">  New Pool Table: &nbsp; 100 NIS</label>
						  <label class="checkbox"><input onclick="payClick(this)" type="checkbox" name="garage" value="40" autocomplete="off"> Picnic food: &nbsp; 40 NIS</label>
						</div>
			
            <script src="https://checkout.stripe.com/checkout.js"></script>

            <button class="btn btn-primary" id="customButton">Pay via card</button>

            <script>
              var handler = StripeCheckout.configure({
                key: "pk_test_pTr70f5dGChHLKAUSMAUn2sI",
                image: "/images/logo.png",
                token: function(token) {
                  // Use the token to create the charge with a server-side script.
                  // You can access the token ID with `token.id`
                }
              });
              
              document.getElementById('customButton').addEventListener('click', function(e) {
                // Open Checkout with further options
                var total = document.getElementById("paymentTotal").value
                handler.open({
                  name: 'Blox',
                  description: 'Paying to Va\'ad Bayit',
                  currency: 'ILS',
                  amount: total*100
                });
                e.preventDefault();
              });
            </script>

						 &nbsp; &nbsp;
						 <input id="paymentTotal" type="text" name="paymentTotal" size="5" autocomplete="off" align="right" value="0" readonly > &nbsp; NIS
					</form>
					<script language="JavaScript" type="text/javascript">
					  var total = document.getElementById("paymentTotal")
					  function payClick(caller){
					    if(caller.checked){
					      total.value = total.value*1 + caller.value*1
					    } else {
					      total.value = total.value*1 - caller.value*1
					    }
					  }
					</script>
					</div>
				</div>
			</div>
			
			<div class="col-md-4 board-col">
				<div class="board-box" id="voting-box">
					<a href="#"><h4>Voting</h4></a>
					<!-- Carousel
					================================================== -->
					<div id="myCarousel" class="carousel slide">
					  <!-- Indicators -->
					  <ol class="carousel-indicators box-carousel-indicators">
					    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					    <li data-target="#myCarousel" data-slide-to="1"></li>
					    <li data-target="#myCarousel" data-slide-to="2"></li>
					  </ol>
					  <div class="carousel-inner carousel-border">
					    <div class="item active">
					      <div class="vote">
					        <div class="content-box">
					      	<h5><b>What day should the board meeting for the Va'ad Habayit be held?</b></h5>
					      	<div class="radios" align="center">
										<label class="radio"><input type="radio" name="group1" value="M"> Monday</label>
										<label class="radio"><input type="radio" name="group1" value="T"> Tuesday</label>
										<label class="radio"><input type="radio" name="group1" value="W"> Wednesday</label>
									</div>
									</div>
									<button type="submit" class="btn btn-success vote-button">Vote</button>
					      </div>
					    </div>
					    <div class="item">
					      <div class="vote">
					        <div class="content-box">
					      	<h5><b>Should the pool be renovated?</b></h5>
					      	<div class="radios" align="center">
										<label class="radio"><input type="radio" name="group1" value="Yes"> Yes</label>
										<label class="radio"><input type="radio" name="group1" value="No"> No</label>
									</div>
									</div>
									<button type="submit" class="btn btn-success vote-button">Vote</button>
					      </div>
					    </div>
					    <div class="item">
					      <div class="vote">
					        <div class="content-box">
					      	<h5><b>Should smoking be prohibited near the apartment building entrance?</b></h5>
					      	<div class="radios" align="center">
										<label class="radio"><input type="radio" name="group1" value="Yes"> Yes</label>
										<label class="radio"><input type="radio" name="group1" value="No"> No</label>
										<label class="radio"><input type="radio" name="group1" value="Children"> Around chidren</label>
									</div>
									</div>
									<button type="submit" class="btn btn-success vote-button">Vote</button>
					      </div>
					    </div>
					  </div>
					  <!-- Controls -->
					  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
						  <span class="glyphicon glyphicon-chevron-left"></span>
					  </a>
					  <a class="right carousel-control" href="#myCarousel" data-slide="next">
						  <span class="glyphicon glyphicon-chevron-right"></span>
					  </a>
					</div>
					<!-- /.carousel -->
				</div>
			</div>

			<div class="col-md-4 board-col">
				<div class="board-box">
					<a href="#"><h4>Upcoming Events</h4></a>

					 <div id="community-carousel" class="carousel slide" data-ride="carousel">
					 	<!-- Indicators -->
					  <ol class="carousel-indicators box-carousel-indicators">
						  <li data-target="#community-carousel" data-slide-to="0" class="active"></li>
						  <li data-target="#community-carousel" data-slide-to="1"></li>
						  <li data-target="#community-carousel" data-slide-to="2"></li>
					  </ol>
					  <!-- Wrapper for slides -->
					  <div class="carousel-inner carousel-border">
						<div class="item active">
						<div class="event">
							<div class="content-box">
								<p>27.6.2014 @ 12:00</p>
								<a class ='event-link' href="#">Barbecue on the Roof</a>
								<p> Posted by Andy Stallon </p>
							</div>
						</div>
						</div>
						<div class="item">
						<div class="event">
							<div class="content-box">
								<p class>30.6.2014 @ 09:00</p>
								<a class ='event-link' href="#">Car Wash</a>
								<p> Posted by Sarah Mitchell </p>
							</div>
						</div>
						</div>
						<div class="item">
						<div class="event">
							<div class="content-box">
								<p class=>4.7.2014 @ 18:00</p>
								<a class ='event-link' href="#">Meeting the Neighbors</a>
								<p> Posted by Julian Wang </p>
							</div>
						</div>
					  </div>

					  <!-- Controls -->
					  <a class="left carousel-control" href="#community-carousel" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
					  </a>
					  <a class="right carousel-control" href="#community-carousel" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
					  </a>
					 </div>
				</div>
			</div>
		</div>



		  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						  <div class="modal-dialog">
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						        <h4 class="modal-title" id="myModalLabel">Who Lives in My Building?</h4>
						      </div>
						      <div class="modal-body fluid-grid">


							<div class="row-fluid">

						        <div class="who_person_container col-md-2">
						        	<div class="who_person_components_container">
							        	<div class="who_person_name who_person_component center-block">
							        		<h3>Adam</h3>
							        	</div>
							        	<div class="who_person_avatar who_person_component center-block">
							        		<p><img src="avatar2.jpg" alt="..." class="img-circle"></p>
							        	</div>
							        	<div class="who_person_bio who_person_component center-block">
							        		<p>Hi! My name is Adam and I have two dogs. I like television, movies, and ice cream. Knock on my door and say hi!</p>
							        	</div>
							       	</div>
							       	<div class="who_person_contact_container">
							       		<p><a href="mailto:acole9@gmail.com">Message Me!</a></p>
							       	</div>
						        </div>

						   

						          <div class="who_person_container col-md-2">
						        	<div class="who_person_components_container">
							        	<div class="who_person_name who_person_component center-block">
							        		<h3>Elana/h3>
							        	</div>
							        	<div class="who_person_avatar who_person_component center-block">
							        		<p><img src="avatar2.jpg" alt="..." class="img-circle"></p>
							        	</div>
							        	<div class="who_person_bio who_person_component center-block">
							        		<p>Hey everyone! I'm Elana and I really love the outdoors two dogs. I like television, movies, and ice cream. Knock on my door and say hi!</p>
							        	</div>
							       	</div>
							       	<div class="who_person_contact_container">
							       		<p><a href="mailto:acole9@gmail.com">Message Me!</a></p>
							       	</div>
						        </div>

  <div class="who_person_container col-md-2">
						        	<div class="who_person_components_container">
							        	<div class="who_person_name who_person_component center-block">
							        		<h3>Adam</h3>
							        	</div>
							        	<div class="who_person_avatar who_person_component center-block">
							        		<p><img src="avatar2.jpg" alt="..." class="img-circle"></p>
							        	</div>
							        	<div class="who_person_bio who_person_component center-block">
							        		<p>Hi! My name is Adam and I have two dogs. I like television, movies, and ice cream. Knock on my door and say hi!</p>
							        	</div>
							       	</div>
							       	<div class="who_person_contact_container">
							       		<p><a href="mailto:acole9@gmail.com">Message Me!</a></p>
							       	</div>
						        </div>


  <div class="who_person_container col-md-2">
						        	<div class="who_person_components_container">
							        	<div class="who_person_name who_person_component center-block">
							        		<h3>Adam</h3>
							        	</div>
							        	<div class="who_person_avatar who_person_component center-block">
							        		<p><img src="avatar2.jpg" alt="..." class="img-circle"></p>
							        	</div>
							        	<div class="who_person_bio who_person_component center-block">
							        		<p>Hi! My name is Adam and I have two dogs. I like television, movies, and ice cream. Knock on my door and say hi!</p>
							        	</div>
							       	</div>
							       	<div class="who_person_contact_container">
							       		<p><a href="mailto:acole9@gmail.com">Message Me!</a></p>
							       	</div>
						        </div>


  <div class="who_person_container col-md-2">
						        	<div class="who_person_components_container">
							        	<div class="who_person_name who_person_component center-block">
							        		<h3>Adam</h3>
							        	</div>
							        	<div class="who_person_avatar who_person_component center-block">
							        		<p><img src="avatar2.jpg" alt="..." class="img-circle"></p>
							        	</div>
							        	<div class="who_person_bio who_person_component center-block">
							        		<p>Hi! My name is Adam and I have two dogs. I like television, movies, and ice cream. Knock on my door and say hi!</p>
							        	</div>
							       	</div>
							       	<div class="who_person_contact_container">
							       		<p><a href="mailto:acole9@gmail.com">Message Me!</a></p>
							       	</div>
						        </div>


  <div class="who_person_container col-md-2">
						        	<div class="who_person_components_container">
							        	<div class="who_person_name who_person_component center-block">
							        		<h3>Adam</h3>
							        	</div>
							        	<div class="who_person_avatar who_person_component center-block">
							        		<p><img src="avatar2.jpg" alt="..." class="img-circle"></p>
							        	</div>
							        	<div class="who_person_bio who_person_component center-block">
							        		<p>Hi! My name is Adam and I have two dogs. I like television, movies, and ice cream. Knock on my door and say hi!</p>
							        	</div>
							       	</div>
							       	<div class="who_person_contact_container">
							       		<p><a href="mailto:acole9@gmail.com">Message Me!</a></p>
							       	</div>
						        </div>


  <div class="who_person_container col-md-2">
						        	<div class="who_person_components_container">
							        	<div class="who_person_name who_person_component center-block">
							        		<h3>Adam</h3>
							        	</div>
							        	<div class="who_person_avatar who_person_component center-block">
							        		<p><img src="avatar2.jpg" alt="..." class="img-circle"></p>
							        	</div>
							        	<div class="who_person_bio who_person_component center-block">
							        		<p>Hi! My name is Adam and I have two dogs. I like television, movies, and ice cream. Knock on my door and say hi!</p>
							        	</div>
							       	</div>
							       	<div class="who_person_contact_container">
							       		<p><a href="mailto:acole9@gmail.com">Message Me!</a></p>
							       	</div>
						        </div>


  <div class="who_person_container col-md-2">
						        	<div class="who_person_components_container">
							        	<div class="who_person_name who_person_component center-block">
							        		<h3>Adam</h3>
							        	</div>
							        	<div class="who_person_avatar who_person_component center-block">
							        		<p><img src="avatar2.jpg" alt="..." class="img-circle"></p>
							        	</div>
							        	<div class="who_person_bio who_person_component center-block">
							        		<p>Hi! My name is Adam and I have two dogs. I like television, movies, and ice cream. Knock on my door and say hi!</p>
							        	</div>
							       	</div>
							       	<div class="who_person_contact_container">
							       		<p><a href="mailto:acole9@gmail.com">Message Me!</a></p>
							       	</div>
						        </div>


  <div class="who_person_container col-md-2">
						        	<div class="who_person_components_container">
							        	<div class="who_person_name who_person_component center-block">
							        		<h3>Adam</h3>
							        	</div>
							        	<div class="who_person_avatar who_person_component center-block">
							        		<p><img src="avatar2.jpg" alt="..." class="img-circle"></p>
							        	</div>
							        	<div class="who_person_bio who_person_component center-block">
							        		<p>Hi! My name is Adam and I have two dogs. I like television, movies, and ice cream. Knock on my door and say hi!</p>
							        	</div>
							       	</div>
							       	<div class="who_person_contact_container">
							       		<p><a href="mailto:acole9@gmail.com">Message Me!</a></p>
							       	</div>
						        </div>






						     </div>




						      </div>


						   <!--    <div class="modal-footer">
						        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						        <button type="button" class="btn btn-primary">Save changes</button>
						      </div> -->

						    </div>
						  </div>
						</div>

    </body>
</html>
