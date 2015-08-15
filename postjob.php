<!DOCTYPE>
<html lang="en">
	<head>
		<meta name="viewport" content="initial-scale=1.0, user-scalable=yes" />
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link type="text/css" rel="stylesheet" href="css/stylesheet.css" />
		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
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
		<center><h3>Post Job</h3></center>
	    <form action="registration_process.php" method="post">
			<div class="form-group">
				<label for="jobTitle">Job Title</label>
				<input type="text" class="form-control" id="jobTitle" name="jobTitle" placeholder="Enter Job Title">
			</div>
			<div class="form-group">
				<label for="jobDescription">Job Description</label>
				<textarea class="form-control" rows="5" id="jobDescription" name="jobDesciption" placeholder="Enter Job Description"></textarea>
			</div>
			<div class="form-group">
				<label for="price">Price (Money)</label>
				<div class="row">
					<div class="col-md-3">
						<input type="number" class="form-control" id="minPrice" name ="minPrice" placeholder="Minimum Price">&nbsp;
					</div>
					<div class="col-md-1">
						to
					 </div>
					<div class="col-md-3">
						<input type="number" class="form-control" id="maxPrice" name="maxPrice" placeholder="Maximum Price">
					</div>
				</div>
			</div>
			<div class="form-group">
				<label for="startDate">Start Date</label>
				<input type="text" class="form-control" id="startDatepicker" name="startDatePicker"></input>
			</div>
			<div class="form-group">
				<label for="endDate">End Date</label>
				<input type="text" class="form-control" id="endDatePicker" name="endDatePicker"></input>
			</div>
			<!--### Selector js code needed-->			
			<div class="form-group">
				<label for="category">Job category</label>
				<input type="selector" class="form-control" id="category" placeholder="Select category">
			</div>
			<div class="form-group">
				<label for="peopleRequired">Number of people required</label>
				<input type="number" class="form-control" id="peopleRequired" name="peopleRequired" placeholder="Minimum Price">
			</div>
			<div class="form-group">
				<label for="language">Language requirement</label>
				<input type="text" class="form-control" id="language" name="language" placeholder="Select Language">
			</div>
			<div class="checkbox">
				<label for="instant"><input type="checkbox" value="" id="instant" name="instant"><b>Instant</b></label>
			</div>
			<br/>
			<input type="submit" class="btn btn-primary" value="submit"></input>
			</form>
		</div>
		<!--Content ends here-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script type="text/javascript">
			window.jQuery || document.write('<script 			src="../../assets/js/vendor/jquery.min.js"><\/script>');
		</script>
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<script src="https://code.jquery.com/ui/1.11.3/jquery-ui.min.js"></script>
		<script type="text/javascript">
			$(function () {
                $('#startDatePicker').datepicker({
					dateFormat : 'dd/mm/yy'
				});
				$('#endDatePicker').datepicker({
					dateFormat : 'dd/mm/yy'
				});
            });
		</script>
	</body>
</html>