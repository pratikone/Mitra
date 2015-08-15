function loadContent(){
	for(i = 0; i< jobs.length; i++){
		var newDiv = document.createElement("div");
		//var backgroundClass = "bg";
		newDiv.id = "div"+i;
		newDiv.innerHTML = ""+
		"<div class='panel panel-primary'> "+
		"<div class='panel-body'>		   "+
		"Job : " + jobs[i].job_name + "<br/> "+ 
		"</div>	<div class='panel-footer'>" + 
		"Description : " + jobs[i].job_desc + " <br/>" +
		"Address : " + jobs[i].job_address + "<br/>" +
		"Min cost : " + jobs[i].job_min_cost + "<br/>" +
		"Max cost : " + jobs[i].job_max_cost + "<br/>" +
		"Job requirement : " +jobs[i].job_people_req + "<br/>" +
		"Expiry date : " + jobs[i].job_expiry_time + "<br/>" +
		"Language requirement : " + jobs[i].language_name + "<br/>" +
		"Posted by : " + jobs[i].name + "<br/>" +
		"Phone : " + jobs[i].phone + "<br/>" +
		"Email : " + jobs[i].email + "<br/>" +
		"Job Address : " + jobs[i].address + "<br/>" + 
		"Category : " + jobs[i].job_type_name + 
		"</div> </div>" ;
		$("#content").append(newDiv);
		//$("#content div:last-child").addClass("bg ");
	}
};
