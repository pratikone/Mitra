<!DOCTYPE>
<?php
include("header.php");

?>
		<!--Content starts here-->
		<br/>
		<br/>
		<br/>
		<div class="container" id="content">
		<center><h3>Register</h3></center>
	    <form action="registration_process.php" method="post">
			<div class="form-group">
				<label for="username">User Name</label>
				<input type="text" class="form-control" id="username" name="username"  placeholder="Enter User Name">
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
			</div>
			<div class="form-group">
				<label for="confirmPassword">Confirm Password</label>
				<input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password">
			</div>
			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
			</div>
			<div class="form-group">
				<label for="phone">Phone Number</label>
				<input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Mobile Number">
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" class="form-control" id="email" name="email" placeholder="Enter Email Address">
			</div>
			<div class="form-group">
				<label for="address">Address</label>
				<textarea class="form-control" rows="4" id="address" name="address" placeholder="Enter Address"></textarea>
			</div>
			<input type="submit" class="btn btn-primary" value="Submit"></input>
			</form>
		</div> 
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!--Content ends here-->
		<script type="text/javascript">
			window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')
		</script>
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	</body>
</html>