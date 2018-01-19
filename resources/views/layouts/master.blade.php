<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="../assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>@yield('title') - Flat Mate</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
    <link href=" {{ URL::to('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href=" {{ URL::to('assets/css/material-kit.css') }}" rel="stylesheet"/>

</head>

<body class="signup-page">

	<nav class="navbar navbar-transparent navbar-absolute">
    	@include('layouts.navbar')
    </nav>

    <div class="wrapper">
    
		<div class="header header-filter" style="background-image: url(' {{ URL::to('assets/img/city.jpg') }} '); background-size: cover; background-position: top center;">

		<div class="container">

		@yield('content')

		</div>

		@include('layout.footer')

		</div>

    </div>


</body>
	<!--   Core JS Files   -->
	<script src=" {{ URL::to('assets/js/jquery.min.js') }}" type="text/javascript"></script>
	<script src=" {{ URL::to('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
	<script src=" {{ URL::to('assets/js/material.min.js') }}"></script>

	<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
	<script src=" {{ URL::to('assets/js/nouislider.min.js') }}" type="text/javascript"></script>

	<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
	<script src=" {{ URL::to('assets/js/bootstrap-datepicker.js') }}" type="text/javascript"></script>

	<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
	<script src=" {{ URL::to('assets/js/material-kit.js') }}" type="text/javascript"></script>

</html>
