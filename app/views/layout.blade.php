<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	{{ HTML::style('includes/pure.css') }}
	{{ HTML::style('css/core.css') }}
	{{ HTML::style('includes/ionicons.css')}}

	<link rel="stylesheet" href="css/core.css">
	<title> @yield('title') </title>
</head>
<body>
	@yield('content')
	{{ HTML::script('includes/jquery.js')}}
	{{ HTML::script('scripts/coredesigns.js')}}
</body>
</html>