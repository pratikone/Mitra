var jobs = [];


/*
var jobs =
	[
		{
		    "job_id":"10",
			"job_name":"Stenographer",
			"job_desc":"Agriculture related work",
			"job_location":"780288",
			"job_address":"Bangalore",
			"job_type":"1",
			"instant":"0",
			"user_id":"9",
			"language_id":"7",
			"job_max_cost":"1000.00",
			"job_min_cost":"100.00",
			"job_people_req":"3",
			"job_creation_timestamp":"2015-08-16 01:00:44",
			"start_date":"2015-08-17",
			"job_expiry_time":"2015-08-18",
			"language_name":"Kannada",
			"location_id":"780288",
			"location_pincode":"504293",
			"location_name":"Adilabad, Ada ",
			"location_lat":null,
			"location_long":null,
			"profile_id":"1",
			"name":"test",
			"phone":"9886210911",
			"email":"test@test.com",
			"address":"test",
			"photo":null,
			"job_type_id":"1",
			"job_type_name":"Agriculture"
		},
		{
		    "job_id":"10",
			"job_name":"Stenographer",
			"job_desc":"Agriculture related work",
			"job_location":"780288",
			"job_address":"Bangalore",
			"job_type":"1",
			"instant":"0",
			"user_id":"9",
			"language_id":"7",
			"job_max_cost":"1000.00",
			"job_min_cost":"100.00",
			"job_people_req":"3",
			"job_creation_timestamp":"2015-08-16 01:00:44",
			"start_date":"2015-08-17",
			"job_expiry_time":"2015-08-18",
			"language_name":"Kannada",
			"location_id":"780288",
			"location_pincode":"504293",
			"location_name":"Adilabad, Ada ",
			"location_lat":null,
			"location_long":null,
			"profile_id":"1",
			"name":"test",
			"phone":"9886210911",
			"email":"test@test.com",
			"address":"test",
			"photo":null,
			"job_type_id":"1",
			"job_type_name":"Agriculture"
		},
		{
		    "job_id":"10",
			"job_name":"Stenographer",
			"job_desc":"Agriculture related work",
			"job_location":"780288",
			"job_address":"Bangalore",
			"job_type":"1",
			"instant":"0",
			"user_id":"9",
			"language_id":"7",
			"job_max_cost":"1000.00",
			"job_min_cost":"100.00",
			"job_people_req":"3",
			"job_creation_timestamp":"2015-08-16 01:00:44",
			"start_date":"2015-08-17",
			"job_expiry_time":"2015-08-18",
			"language_name":"Kannada",
			"location_id":"780288",
			"location_pincode":"504293",
			"location_name":"Adilabad, Ada ",
			"location_lat":null,
			"location_long":null,
			"profile_id":"1",
			"name":"test",
			"phone":"9886210911",
			"email":"test@test.com",
			"address":"test",
			"photo":null,
			"job_type_id":"1",
			"job_type_name":"Agriculture"
		},
		{
		    "job_id":"10",
			"job_name":"Stenographer",
			"job_desc":"Agriculture related work",
			"job_location":"780288",
			"job_address":"Bangalore",
			"job_type":"1",
			"instant":"0",
			"user_id":"9",
			"language_id":"7",
			"job_max_cost":"1000.00",
			"job_min_cost":"100.00",
			"job_people_req":"3",
			"job_creation_timestamp":"2015-08-16 01:00:44",
			"start_date":"2015-08-17",
			"job_expiry_time":"2015-08-18",
			"language_name":"Kannada",
			"location_id":"780288",
			"location_pincode":"504293",
			"location_name":"Adilabad, Ada ",
			"location_lat":null,
			"location_long":null,
			"profile_id":"1",
			"name":"test",
			"phone":"9886210911",
			"email":"test@test.com",
			"address":"test",
			"photo":null,
			"job_type_id":"1",
			"job_type_name":"Agriculture"
		}
	];
*/	
$.get( 
"get_jobs_process.php" ,
{format: "json"}

).done(function( data ) {
    //console.log( data );
	jobs = JSON.parse(data);
	$("#loading-img").hide();
	//calling from data_manipulation
	loadContent();
  });













