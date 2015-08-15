<!DOCTYPE>
<html lang="en">
	<head>
		<meta name="viewport" content="initial-scale=1.0, user-scalable=yes" />
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"/>
		<link rel="stylesheet" href="css/stylesheet.css" />
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
		<div class="container" id="content">
		<center><h3>Job Postings</h3></center>
	  
		</div> 
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!--Content ends here-->
		<script type="text/javascript">
			window.jQuery || document.write('<script 			src="../../assets/js/vendor/jquery.min.js"><\/script>')
		</script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		
		<script src="js/lol.js"></script>
		<script src="js/data_manipulation.js"></script>
	</body>
</html>