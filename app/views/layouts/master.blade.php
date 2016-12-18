<!DOCTYPE html>
<html>
<head>
	<title>New Version</title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/css/version.css">
</head>
<body>
@yield('content')
<script type="text/javascript" src="/js/jquery.js">
</script>
<script type="text/javascript">
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
</script>
</body>
</html>