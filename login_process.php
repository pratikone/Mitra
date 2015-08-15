<html>

<head>
	<title>MITRA - A friend who helps you , in jobs and more</title>
	
</head>

<body>

<?php



echo "We wil we will rock you";




function login(){

	$user = $_POST["number"];
	$password = $_POST["password"];
	$res1 = validate( $user )
	$res2 = validate( $password )

	if($res1 == false || $res2 == false){
		die("Cannot login");
		return;
	}

	//db call
	$sql = "SELECT * FROM table_name WHERE username='".$mysqli->mysqli_real_escape_string($user)."' AND password='".$mysqli->mysqli_real_escape_string($password)."'";
	$result = $mysqli->query(   $sql);
	if ($result->num_rows > 1 ) 
		die("Multiple db entries by this number");
	if ($result->num_rows < 1 ) 
		die("No db entry exists by this number");

	//here means only 1 entry with such user and password exists. SUCCESS
    // output data of each row
    // $row = $result->fetch_assoc());
    // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";

    //if some session already exists
    if (session_status() <> PHP_SESSION_NONE) {
 	    // remove all session variables
		session_unset(); 

		// destroy the session 
		session_destroy(); 
	}


	session_start();

}



function getJobCard( $id, $display ){

	//database call code

	$jobTitle = "";
	$jobDescription = "";

	if($display)
		displayJobCard();

}


function  getNextJobCards( $count){

	if( $count <0)
		echo "error";

	for( $i=0; $i < $count ; $i++ ){
		//fetch 
		//db call

		getJobCard( 0, true );

	}

}


function postJobtoDb(){


	//get or post 


	//db call api




}

function dbJelCode(){

	$dbObj = " " ; //change it to something logical


	return $dbObj;  //retunr db code
}






?>


</body>


</html>