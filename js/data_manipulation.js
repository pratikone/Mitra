function loadContent(){
	for(i = 1; i< jobs.length; i++){
		var newDiv = document.createElement("div");
		var backgroundClass = "bg";
		newDiv.id = "div"+i;
		newDiv.innerHTML = "<blockquote><p>" +
		Job : jobs[i].job_name + "<br/>" +
		Description : jobs[i].job_desc + " <br/>" +
		Address : jobs[i].job_address + "<br/>" +
		jobs[i].job_min_cost + "<br/>" +
		jobs[i].job_max_cost + "<br/>" +
		jobs[i].job_people_req + "<br/>" +
		jobs[i].job_expiry_time + "<br/>" +
		jobs[i].language_name + "<br/>" +
		jobs[i].name + "<br/>" +
		jobs[i].phone + "<br/>" +
		jobs[i].email + "<br/>" +
		jobs[i].address + "<br/>" + 
		jobs[i].job_type_name + " </p></blockquote>";
		$("#content").append(newDiv);
		$("#content div:last-child").addClass("bg ");
	}
};

loadContent();