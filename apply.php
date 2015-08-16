<?php

session_start();
if(isset($_SESSION['userid'])){
	$user_id = $_SESSION['userid'];
}
require_once("db_connection.php");
include('header.php');
?>
<!--Content starts here-->
		<br/>
		<br/>
		<br/>
		<div class="container" id="content">
		<center><h3>Apply for Job</h3></center>
	    <form action="process_apply.php" method="post">
			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
			</div>
			<div class="form-group">
				<label for="phone">Phone Number</label>
				<input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Phone Number">
			</div>
			<div class="form-group">
				<label for="phone">Bid Amount</label>
				<input type="text" class="form-control" id="bidAmount" name="bidAmount" placeholder="Enter Bid Amount">
			</div>
			<div class="form-group">
				<label for="message">Message</label>
				<textarea class="form-control" rows="5" id="message" name="message" placeholder="Enter a message, if any, for the job"></textarea>
				<input type="hidden" name="jobId" value="<?php echo $_GET['job_id']; ?>" />
			</div>
			<br/>
			<input type="submit" class="btn btn-primary" value="Apply"></input>
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
	</body>
</html>
