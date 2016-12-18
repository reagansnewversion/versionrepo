$(document).ready(function() {
	var status = "Closed";
	$(document).keyup(function(event) {
		var input = event.which;
		if(input == 74) {
			if(status == "Closed") {
				$(".menu").css('opacity', 1);
				status = "Open";
			} else {
				$(".menu").css('opacity', 0);
				status = "Closed";
			}
		}
	});
});