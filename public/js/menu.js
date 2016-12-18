$(document).ready(function() {
	var status = "Closed";
	$(document).keyup(function(event) {
		var input = event.which;
		if(input == 74) {
			if(status == "Closed") {
				console.log("Menu Opened");
				status = "Open";
			} else {
				console.log("Menu Closed");
				status = "Closed";
			}
		}
	});
});