<?php
	$lncode = "en";
	if(isset($_SESSION['lang'])){
		$lncode = $_SESSION['lang'];
	}
	include("translate.php");
?>
<!DOCTYPE>
<html lang="en">
	<head>
		<meta name="viewport" content="initial-scale=1.0, user-scalable=yes" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
		<link type="text/css" rel="stylesheet" href="css/stylesheet.css" />
		<title>Mitra</title>
		
		
	<head>
	<body>
		<!--Header starts here-->
		<nav class="navbar navbar-default top-nav navbar-fixed-top" role="navigation">
		  <div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle no-border" data-toggle="collapse" data-target="#search-bar">
					<span class="glyphicon glyphicon-chevron-right"></span>  
				</button>
				<button type="button" class="navbar-toggle no-border" data-toggle="collapse" data-target="#find-nearby">
					<span class="glyphicon glyphicon-screenshot"></span>
				</button>
				<button type="button" class="navbar-toggle no-border" data-toggle="collapse" data-target="#discover">
					<span class="glyphicon glyphicon-globe"></span>
				</button>
				<button type="button" class="navbar-toggle no-border pull-left visible-xs visible-sm visible-md visible-lg" data-toggle="collapse" id="drawer" style="margin-right:0px;">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar" style="background-color:white;"></span>
					<span class="icon-bar" style="background-color:white;"></span>
					<span class="icon-bar" style="background-color:white;"></span>
				</button>
				<a class="navbar-brand" href="index.php" style="padding-left:5px;margin-left:0px;"><font color="white"><?php echo translateToLocal($lncode, "mitra"); ?></font></a>
			</div>
			<div id="search-option" class="hidden-sm hidden-md hidden-lg">
				<div class="collapse navbar-collapse no-border" id="search-bar" style="background-color:white">
					<form class="navbar-form navbar-left col-sm-12 col-xs-12" role="search">
						<div class="row">
							<div class="col-xs-9 col-sm-9">
								<input type="text" id='#search_mob' class="form-control" placeholder="Search for jobs..."></input>
							</div>
							<button type="submit" onclick='search_clicked();' 'href=javascript;' class="btn btn-success col-xs-3 col-sm-3"><?php echo translateToLocal($lncode, "Search"); ?></button>
						</div>
					</form>
				</div>
			</div>
			<div class="hidden-sm hidden-md hidden-lg">
				<div class="collapse navbar-collapse no-border" id="find-nearby" style="background-color:white; z-index:1;">
					
				</div>
			</div>
			
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-screenshot"></span> <?php echo translateToLocal($lncode, "Language"); ?> <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href='setlang.php?lang=en'> English</a></li>
							<li class="divider"></li>
							<li><a href='setlang.php?lang=hi'> Hindi</a></li>
							<li class="divider"></li>
							<li><a href='setlang.php?lang=kn'> Kannada</a></li>
							<li class="divider"></li>
						</ul>
					</li>
				</ul>
				<form class="navbar-form navbar-left col-sm-12 col-xs-12" role="search">
					<div class="row">
						<div class="col-xs-9 col-sm-9">
							<input type="text" id='#search_web' href='javascript:;' class="form-control" placeholder="Search for jobs..."></input>
						</div>
						<button type="submit" onclick='search_clicked();' href='javascript:;' class="btn btn-default col-xs-3 col-sm-3"><?php echo translateToLocal($lncode, "Search"); ?></button>
						
					</div>
				</form>
				<ul class="nav navbar-nav" style="margin-left:20px">
					<li>
					<a href='instant_jobs.php' class="btn btn-default btn-danger"><?php echo translateToLocal($lncode, "Instant Jobs"); ?></a>
					</li>
					<li>
					<a href='jobcart.php' class="btn btn-default btn-primary" style="margin-left:20px;">&nbsp;&nbsp; <?php echo translateToLocal($lncode, "All Jobs"); ?> &nbsp;&nbsp;</a>
					</li>
				</ul>
				 <ul class="nav navbar-nav navbar-right">
				  <li><a href="logout.php"><span class="glyphicon glyphicon-off"></span>  <?php echo translateToLocal($lncode, "Logout"); ?></a></li>
				</ul>
				
			</div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
		<!--Header ends here-->
