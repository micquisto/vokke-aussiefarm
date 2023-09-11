<?php
$request = request();
$http_host = $request->server('HTTP_HOST');
$request_scheme = $request->server('REQUEST_SCHEME');
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Kangaroo Tracker</title>
    <link rel="stylesheet" href="{{ asset('aussiefarm/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('aussiefarm/css/tracker.css') }}">
</head>
</head>
<body>
TEST LAYOUT
@yield('content')
</body>
</html>

