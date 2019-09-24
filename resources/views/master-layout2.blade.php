<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Quỹ bảo vệ môi trường Việt Nam</title>
	<base href="{{asset('')}}">
	<link rel="icon" type="" href="images/favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">


	{{-- FRAMEWORK CSS --}}
	<link rel="stylesheet" type="text/css" href="library/OwlCarousel2/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="library/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" href="css/ct.css">
	{{-- YOUR CSS --}}
	<link rel="stylesheet" type="text/css" href="css/chung.css">
	<link rel="stylesheet" type="text/css" href="css/all.css">
	<link rel="stylesheet" href="css/left_style.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
</head>
<body>
@include('header2')
@yield('content')

@include('footer2')

	{{-- FRAMEWORK JS --}}
	<script src="library/OwlCarousel2/owl.carousel.min.js"></script>
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="library/bootstrap/js/bootstrap.min.js"></script>
	<script src="library/fontawesome/js/all.min.js"></script>
	<script src="js/owl.carousel.min.js" type="text/javascript"></script>
	<script src="js/slide.js" type="text/javascript"></script>
</body>
</html>