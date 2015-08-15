<!DOCTYPE>
<html lang="en">
	<head>
		<meta name="viewport" content="initial-scale=1.0, user-scalable=yes" />
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link type="text/css" rel="stylesheet" href="css/stylesheet.css" />
		<script type="text/javascript" src="js/jquery.min.js" id="jquery"></script>
		<script type="text/javascript" src="js/jquery-ui.min.js" id="jquery"></script>
		<script type="text/javascript" src="js/jquery.slimscroll.min.js" id="jquery"></script>
		<script type="text/javascript" src="js/lol.js"></script>
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
				<a class="navbar-brand" href="index.html" style="padding-left:5px;margin-left:0px;"><font color="white">mitra</font></a>
			</div>
			<div id="search-option" class="hidden-sm hidden-md hidden-lg">
				<div class="collapse navbar-collapse no-border" id="search-bar" style="background-color:white">
					<form class="navbar-form navbar-left col-sm-12 col-xs-12" role="search">
						<div class="row">
							<div class="col-xs-9 col-sm-9">
								<input type="text" id='#search_mob' class="form-control" placeholder="Search for jobs..."></input>
							</div>
							<button type="submit" onclick='search_clicked();' 'href=javascript;' class="btn btn-success col-xs-3 col-sm-3">Search</button>
						</div>
					</form>
				</div>
			</div>
			<div class="hidden-sm hidden-md hidden-lg">
				<div class="collapse navbar-collapse no-border" id="find-nearby" style="background-color:white; z-index:1;">
					<ul class="dropdown-menu visible-xs visible-sm col-xs-12 col-sm-12">
						<li><a onclick='restaurants_selected();' href='javascript:;'><span class="glyphicon glyphicon-cutlery"></span> Restaurants</a></li>
						<li class="divider"></li>
						<li><a onclick='coffeeshop_selected();' href='javascript:;'><span class="glyphicon glyphicon-glass"></span> Coffee Shops</a></li>
						<li class="divider"></li>
						<li><a onclick='bars_selected();' href='javascript:;'><span class="glyphicon glyphicon-filter"></span> Bars</a></li>
						<li class="divider"></li>
						<li><a onclick='sports_selected();' href='javascript:;'><span class="glyphicon glyphicon-picture"></span> Sports</a></li>
						<li class="divider"></li>
						<li><a onclick='shopping_selected();' href='javascript:;'><span class="glyphicon glyphicon-shopping-cart"></span> Shopping</a></li>
					</ul>
				</div>
			</div>
			<div class="hidden-sm hidden-md hidden-lg">
				<div class="collapse navbar-collapse no-border" id="discover" style="background-color:white; z-index:1;">
					<ul class="dropdown-menu visible-xs visible-sm col-xs-12 col-sm-12">
						<li><a onclick="compute_carbon_footprint();" href="javascript:;"><span class="glyphicon glyphicon-cutlery"></span> Compute Carbon Footprint</a></li>
						<li class="divider"></li>
						<li><a onclick="plot_graph();" href="javascript:;"><span class="glyphicon glyphicon-glass"></span> Plot Carbon Footprints</a></li>
						<li class="divider"></li>
						<li><a href="heat_map.html"><span class="glyphicon glyphicon-filter"></span> Frequently visited</a></li>
					</ul>
				</div>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-globe"></span>  Discover <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a onclick="compute_carbon_footprint();" href="javascript:;"><span class="glyphicon glyphicon-cutlery"></span> Compute Carbon Footprint</a></li>
							<li class="divider"></li>
							<li><a onclick="plot_graph();" href="javascript:;"><span class="glyphicon glyphicon-glass"></span> Plot Carbon Footprints</a></li>
							<li class="divider"></li>
							<li><a href="heat_map.html"><span class="glyphicon glyphicon-filter"></span> Frequently visited</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-screenshot"></span>  Find Nearby <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a onclick='restaurants_selected();' href='javascript:;'><span class="glyphicon glyphicon-cutlery"></span> Restaurants</a></li>
							<li class="divider"></li>
							<li><a onclick='coffeeshop_selected();' href='javascript:;'><span class="glyphicon glyphicon-glass"></span> Coffee Shops</a></li>
							<li class="divider"></li>
							<li><a onclick='bars_selected();' href='javascript:;'><span class="glyphicon glyphicon-filter"></span> Bars</a></li>
							<li class="divider"></li>
							<li><a onclick='sports_selected();' href='javascript:;'><span class="glyphicon glyphicon-picture"></span> Sports</a></li>
							<li class="divider"></li>
							<li><a onclick='shopping_selected();' href='javascript:;'><span class="glyphicon glyphicon-shopping-cart"></span> Shopping</a></li>
						</ul>
					</li>
				</ul>
				<form class="navbar-form navbar-left col-sm-12 col-xs-12" role="search">
					<div class="row">
						<div class="col-xs-9 col-sm-9">
							<input type="text" id='#search_web' href='javascript:;' class="form-control" placeholder="Search places..."></input>
						</div>
						<button type="submit" onclick='search_clicked();' href='javascript:;' class="btn btn-default col-xs-3 col-sm-3">Search</button>
					</div>
				</form>
			</div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
		<!--Header ends here-->
		<!--Content starts here-->
		<br/>
		<br/>
		<br/>
		<div id="nav-drawer" class="drawer">
			<br/>
			<br/>
			<br/>
			<div id="qod" onclick="topic('inspirational');" class="drawer-options">
				<span class="glyphicon glyphicon-chevron-right"></span>
				Quote of the day
			</div>
			<div id="random" onclick="topic('sarcastic');" class="drawer-options">
				<span class="glyphicon glyphicon-chevron-right"></span>
				Random
			</div>
			<div id="business" onclick="topic('life');" class="drawer-options">
				<span class="glyphicon glyphicon-chevron-right"></span>
				Business
			</div>
			<div id="bhagwad_gita" onclick="topic('success');" class="drawer-options">
				<span class="glyphicon glyphicon-chevron-right"></span>
				Bhagwad Gita
			</div>
			<div id="buddha" onclick="topic('artificial_intelligence');" class="drawer-options">
				<span class="glyphicon glyphicon-chevron-right"></span>
				Buddha
			</div>
			<div id="chanakya" onclick="topic(qod);" class="drawer-options">
				<span class="glyphicon glyphicon-chevron-right"></span>
				Chanakya
			</div>
			<div id="funny" onclick="topic(qod);" class="drawer-options">
				<span class="glyphicon glyphicon-chevron-right"></span>
				Funny Quotes
			</div>
			<div id="humor" onclick="topic(qod);" class="drawer-options">
				<span class="glyphicon glyphicon-chevron-right"></span>
				Humor
			</div>
			<div id="inspirational" onclick="topic(qod);" class="drawer-options">		
				<span class="glyphicon glyphicon-chevron-right"></span>
				Inspirational
			</div>
			<div id="life" onclick="topic(qod);" class="drawer-options">
				<span class="glyphicon glyphicon-chevron-right"></span>
				Life
			</div>
			<div id="love" onclick="topic(qod);" class="drawer-options">
				<span class="glyphicon glyphicon-chevron-right"></span>
				Love
			</div>
			<div id="music" onclick="topic(qod);" class="drawer-options">
				<span class="glyphicon glyphicon-chevron-right"></span>
				Music
			</div>
			<div id="movies" onclick="topic(qod);" class="drawer-options">
				<span class="glyphicon glyphicon-chevron-right"></span>
				Movies
			</div>
			<div id="poetry" onclick="topic(qod);" class="drawer-options">
				<span class="glyphicon glyphicon-chevron-right"></span>
				Poetry
			</div>
			<div id="sarcastic" onclick="topic(qod);" class="drawer-options">
				<span class="glyphicon glyphicon-chevron-right"></span>
				Sarcastic
			</div>
			<div id="success" onclick="topic(qod);" class="drawer-options">
				<span class="glyphicon glyphicon-chevron-right"></span>
				Success
			</div>
			<div id="women" onclick="topic(qod);" class="drawer-options">
				<span class="glyphicon glyphicon-chevron-right"></span>
				Women
			</div>
			<div id="wisdom" onclick="topic(qod);" class="drawer-options">
				<span class="glyphicon glyphicon-chevron-right"></span>
				Wisdom
			</div>
		</div>
		<div class="container" id="content">
		<center><h3>Register</h3></center>
	    <form action="registration_process.php" method="post">
			<div class="form-group">
				<label for="username">User Name</label>
				<input type="text" class="form-control" id="username" placeholder="Enter User Name">
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" class="form-control" id="password" placeholder="Enter Password">
			</div>
			<div class="form-group">
				<label for="confirmPassword">Confirm Password</label>
				<input type="password" class="form-control" id="conformPassword" placeholder="Confirm Password">
			</div>
			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" class="form-control" id="name" placeholder="Enter Name">
			</div>
			<div class="form-group">
				<label for="phone">Phone Number</label>
				<input type="text" class="form-control" id="phone" placeholder="Enter Mobile Number">
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" class="form-control" id="email" placeholder="Enter Email Address">
			</div>
			<div class="form-group">
				<label for="address">Address</label>
				<textarea class="form-control" rows="4" id="address" placeholder="Enter Address"></textarea>
			</div>
			<button type="submit" class="btn btn-primary">Register</button>
			</form>
		</div>
		<!--Content ends here-->
		<script type="text/javascript">
			window.jQuery || document.write('<script 			src="../../assets/js/vendor/jquery.min.js"><\/script>')
		</script>
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	</body>
</html>