<?php
session_start();
include("header.php");
$lncode = "en";
if(isset($_SESSION['lang'])){
	$lncode = $_SESSION['lang'];
}
?>
		<!--Content starts here-->
		<br/>
		<br/>
		<br/>
		<div class="container" id="content">
		<center><h3><?php echo translateToLocal($lncode, 'Job Postings'); ?></h3></center>
			<center><img src="img/ajax_loader_green_512.gif" id="loading-img" /></center>
		</div> 
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!--Content ends here-->
		<script type="text/javascript">
			window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')
		</script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<script src="js/data_manipulation_instant.js" type="text/javascript"></script>
		<script src="js/lol.js" type="text/javascript"></script>
		
	</body>
</html>