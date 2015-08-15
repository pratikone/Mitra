<?php
session_start();
//echo $_SESSION['userid'];
require_once("db_connection.php");
$location_query = "SELECT * FROM `tbl_job_locations` WHERE location_pincode BETWEEN '560000' AND '570000'";
$location_result = $mysqli->query($location_query);
$job_type_query = "SELECT * FROM tbl_job_types";
$job_type_result = $mysqli->query($job_type_query);
$language_query = "SELECT * FROM tbl_languages";
$language_result = $mysqli->query($language_query);

include("header.php");
?>

		<!--Content starts here-->
		<br/>
		<br/>
		<br/>
		<div class="container" id="content">
		<center><h3>Post Job</h3></center>
	    <form action="postjob_process.php" method="post">
			<div class="form-group">
				<label for="jobTitle">Job Title</label>
				<input type="text" class="form-control" id="jobTitle" name="jobTitle" placeholder="Enter Job Title">
			</div>
			<div class="form-group">
				<label for="jobDescription">Job Description</label>
				<textarea class="form-control" rows="5" id="jobDescription" name="jobDesciption" placeholder="Enter Job Description, job requirements, etc."></textarea>
			</div>
			<div class="form-group">
				<label for="jobAddress">Job Address</label>
				<textarea class="form-control" rows="5" id="jobAddress" name="jobAddress" placeholder="Enter Job Address"></textarea>
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
				<input type="text" class="form-control" id="startDatePicker" name="startDatePicker"></input>
			</div>
			<div class="form-group">
				<label for="endDate">End Date</label>
				<input type="text" class="form-control" id="endDatePicker" name="endDatePicker"></input>
			</div>
			<!--### Selector js code needed-->			
			<div class="form-group">
				<label for="category">Job category</label>
				<select class="form-control" id="category" name="category" placeholder="Select category">
				<?php
					while ($row = $job_type_result->fetch_assoc()) {
						echo "<option value=".$row['job_type_id'].">".$row['job_type_name']."</option>";
					}
				?>
				</select>
			</div>
			<div class="form-group">
				<label for="peopleRequired">Number of people required</label>
				<input type="number" class="form-control" id="peopleRequired" name="peopleRequired" placeholder="Number of people required">
			</div>
			<div class="form-group">
				<label for="language">Language requirement</label>
				<select class="form-control" id="language" name="language" placeholder="Select Language">
					<?php
						while($row = $language_result->fetch_assoc()){
							echo "<option value=".$row['language_id'].">".$row['language_name']."</option>";
						}
					?>
				</select>
			</div>
			<div class="form-group">
				<label for="location">Location</label>
				<select class="form-control" id="location" name="location" placeholder="Location PIN code">
					<?php
						while ($row = $location_result->fetch_assoc()) {
							echo "<option value=".$row['location_id'].">".$row['location_name']."</option>";
						}
					?>
				</select>
			</div>

			<div class="checkbox">
				<label for="instant"><input type="checkbox" id="instant" name="instant"><b>Instant</b></label>
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
					dateFormat : 'dd-mm-yy'
				});
				$('#endDatePicker').datepicker({
					dateFormat : 'dd-mm-yy'
				});
            });
		</script>
	</body>
</html>