<?php include "includes/index.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>LOWCLASS LINE NOTIFY</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="black" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="/" class="brand-logo"> LOWCLASS </a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Navbar Link</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="#">Navbar Link</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center red-text text-lighten-2"> LINE NOTIFY </h1>
        <div class="row center">
          <h5 class="header col s12 green-text">API LINE แจ้งเตือนไลน์</h5>
        </div>
        <div class="row center">
          <a href="http://lowclass-vpn.ga" id="download-button" class="btn-large waves-effect waves-light purple lighten-1">Get Started</a>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="/img/bg.jpg" alt="Unsplashed background img 1"></div>
  </div>
  <div class="container">
    <div class="section">
      <div class="row-center">
        <div class="col s10 m6">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">send</i></h2>
            <h5 class="center">API LINE</h5>
          		<form class="form-signin" method="POST">
								<div class="col-md-12">
									<div class="panel-body">
										<div class="form-group">
											<label for="email">Email</label>
												<input type="email" name="email" placeholder="Email" class="form-control" required>
												</div>
						
									 <div class="form-group">
											<label for="username"> USERNAME </label>
												<input type="text" name="username" placeholder="Username" class="form-control"required>
										</div>
										
										<div class="form-group">
												<label for="password"> Password </label>
													<input type="password" name="password" placeholder="Password" class="form-control" required>
										</div>
												
										<div class="form-group">
												<label for="password_confirm"> Re-PASSWORD </label>
													<input type="password" name="password_confirm" placeholder="Password Confirm" class="form-control" required>
										</div>
										<div class="form-group">						
													<button type="submit" name="submit" class="btn-large waves-effect waves-light blue lighten-1"><i class="fa fa-lock"></i> SIGN-UP</button><br>
													
										</div>

									</div>
				   			</div>
							</div>														
	          </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="page-footer black">
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="brown-text text-lighten-3" href="http://lowclass-vpn.ga">LOWCLASS</a>
      </div>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  </body>
</html>
