<!DOCTYPE html>
<html>
<head>
	<title>New Version</title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/css/version.css">
	@yield('top-script')
	 @if (Session::has('successMessage'))
            <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
        @endif
        @if (Session::has('errorMessage'))
            <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
        @endif
</head>
<body>
@yield('content')
<script type="text/javascript" src="/js/jquery.js">
</script>
@yield('bottom-script')
</body>
</html>