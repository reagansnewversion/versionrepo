$(document).ready(function() {
	var status = "Closed";
	$(document).keyup(function(event) {
		var input = event.which;
		if(input == 74) {
			if(status == "Closed") {
				$(".menu").css('opacity', 1);
				$("body").css("overflow", "hidden");
				status = "Open";
			} else {
				$(".menu").css('opacity', 0);
				$("body").css("overflow", "auto");
				status = "Closed";
			}
		}
	});
});