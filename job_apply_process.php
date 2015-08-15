<html>

<head>
	<title>MITRA - A friend who helps you , in jobs and more</title>
	
</head>

<body>

<?php



echo "We wil we will rock you";


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