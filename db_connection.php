$dbserver = "";  
$dbuser = "";
$dbpassword = "";
$dbObj = new mysqli($dbserver, $dbuser, $dbpassword); 
// Check connection
if ($dbObj ->connect_error) {
    die("Connection failed: " . $dbObj->->connect_error);
} 


function postJobtoDb( $array){

	$fields = "";
	$Values = "";
    foreach ($array as $key => $value) { 
        $fields .= $key . ",";   
        $Values .= "'".$value . "'" . ",";    //'Values', is the output
    }

    $fields = substr( $fields, strlen($fields)-1 ); //remove the last comma
    $Values = substr( $Values, strlen($Values)-1 ); //remove the last comma

	$sql = "INSERT INTO DBNAME ($fields)  VALUES ($Values)";

	if ($dbObj->query($sql) === TRUE) {
    echo "New record created successfully";
	} else {
    	die("Error: " . $sql . "<br>" . $dbObj->error);
	}

$dbObj->close();

}

function getDBObject(){
 
	return $dbObj;
	
}


