<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>DyESTIL</title>
	<meta name="keywords" content="HTML5 Template">
	<meta name="description" content="Wokiee - Responsive HTML5 Template">
	<meta name="author" content="wokiee">
	<link rel="shortcut icon" href="{{asset('favicon.ico')}}">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="{{asset('vendor/css/theme.css')}}">
</head>
<body>
<div id="loader-wrapper">
	<div id="loader">
		<div class="dot"></div>
		<div class="dot"></div>
		<div class="dot"></div>
		<div class="dot"></div>
		<div class="dot"></div>
		<div class="dot"></div>
		<div class="dot"></div>
	</div>
</div>
@include("frontend.layout.header")
<div id="tt-pageContent">
	@yield('content')
</div>
	@include("frontend.layout.footer")
</div>
	@include("frontend.scripts.js")
</body>
</html>