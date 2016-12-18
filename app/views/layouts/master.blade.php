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

	$(document).keyup(function(event) {
		var input = event.which;
		if(input == 74) {
			console.log("Menu Opened");
		}
	});
});
</script>
</body>
</html>