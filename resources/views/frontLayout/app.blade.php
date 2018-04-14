<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title')</title>
	<!-- FONTS ONLINE -->
	<link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet" type="text/css">

	<!--MAIN STYLE-->
	<link href="{{ URL::asset('/frontend/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ URL::asset('/frontend/css/main.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ URL::asset('/frontend/css/style.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ URL::asset('/frontend/css/animate.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ URL::asset('/frontend/css/responsive.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ URL::asset('/frontend/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">



	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
		@yield('content')
	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<script src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>

	<script src="{{ URL::asset('/frontend/js/jquery-1.11.0.min.js') }}"></script> 
	<script src="{{ URL::asset('/frontend/js/wow.min.js') }}"></script> 
	<script src="{{ URL::asset('/frontend/js/bootstrap.min.js') }}"></script> 
	<script src="{{ URL::asset('/frontend/js/jquery.stellar.js') }}"></script> 
	<script src="{{ URL::asset('/frontend/js/jquery.isotope.min.js') }}"></script> 
	<script src="{{ URL::asset('/frontend/js/jquery.flexslider-min.js') }}"></script> 
	<script src="{{ URL::asset('/frontend/js/owl.carousel.min.js') }}"></script> 
	<script src="{{ URL::asset('/frontend/js/jquery.sticky.js') }}"></script> 
	<script src="{{ URL::asset('/frontend/js/own-menu.js') }}"></script> 
	<script src="{{ URL::asset('/frontend/js/main.js') }}"></script>



	@yield('scripts')
	@if(Session::has('message'))
		<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
	@endif
</body>
</html>