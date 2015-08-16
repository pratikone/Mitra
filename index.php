<?php
session_start();
$lncode = "en";
if(isset($_SESSION['lang'])){
	$lncode = $_SESSION['lang'];
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <!--<link rel="icon" href="../../favicon.ico">-->

    <title>Mitra</title>

    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Custom styles for this template -->
    <link href="css/cover.css" rel="stylesheet">
			<?php
		include("translate.php");
		?>
		
	
  </head>

  <body>
    <div class="site-wrapper">
      <div class="site-wrapper-inner">
        <div class="cover-container">
        <nav class="navbar navbar-inverse navbar-fixed-top" style="background-color:#009688">
			<div>
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#"><font color="#FFF" size="6px"> <span class="glyphicon glyphicon-user" aria-hidden="true"> </span>
					<span class="glyphicon glyphicon-user" style="margin-left: -13px; zoom:0.6 "  aria-hidden="true"></span></font color="#FFF"><font color = "#FFF" size="10px"> mitra</font></a>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
				<?php
				if (isset($_SESSION['userid'])) {
					echo " <ul class='nav navbar-nav navbar-right'>
				  <li><a href='logout.php' class='btn btn-danger'><span class='glyphicon glyphicon-off'></span>  Logout</a></li>
					</ul> ";
				}
				else{
					echo "<form class='navbar-form navbar-right' action='login_process.php' method='POST'>
						<div class='form-group'>
							<input type='text' placeholder='Username' name='username' class='form-control'>
						</div>
						<div class='form-group'>
							<input type='password' placeholder='Password' name='password' class='form-control'>
						</div>
						<div class='form-group'>
							<input type='submit' class='btn btn-warning' value='Sign In' />
						</div>
						&nbsp;
					</form>
					" ;
				}
				
					
					?>
				</div><!--/.navbar-collapse -->
			</div>
		</nav>
		<br/>
		<br/>
		<br/>
		<div class="inner cover">
            <h1 class="cover-heading">mitra</h1>
            <p class="lead"><?php echo translateToLocal($lncode, 'Your one stop friend to all the employment problems.'); ?></p>
            <p class="lead">
				<a href="#" class="btn btn-lg btn-primary"><?php echo translateToLocal($lncode, 'Take a tour'); ?></a>
				<a href="registration.php" class="btn btn-lg btn-primary"><?php echo translateToLocal($lncode, 'Register'); ?></a>
				<a href="jobcart.php" class="btn btn-lg btn-primary"><?php echo translateToLocal($lncode, 'Job listings');?></a>
            </p>
         </div>
		<div class="mastfoot">
			<div class="inner">    
				<center>
					<a href="#">Home</a> |  
					<a href="#">FAQs</a> | 
					<a href="#">Disclaimer</a> | 
					<a href="#">Contact</a>
					<br/><br/>
					2015 &copy; Mitra
				</center>				
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>