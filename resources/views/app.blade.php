<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	@yield('aimeos_header')

	<title>Mlijo Indonesia</title>

	@yield('aimeos_styles')

	<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="<?php echo asset('themes/vagefoods/css/open-iconic-bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo asset('themes/vagefoods/css/animate.css'); ?>">
    
    <link rel="stylesheet" href="<?php echo asset('themes/vagefoods/css/owl.carousel.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo asset('themes/vagefoods/css/owl.theme.default.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo asset('themes/vagefoods/css/magnific-popup.css'); ?>">

    <link rel="stylesheet" href="<?php echo asset('themes/vagefoods/css/aos.css'); ?>">

    <link rel="stylesheet" href="<?php echo asset('themes/vagefoods/css/ionicons.min.css'); ?>">

    <link rel="stylesheet" href="<?php echo asset('themes/vagefoods/css/bootstrap-datepicker.css'); ?>">
    <link rel="stylesheet" href="<?php echo asset('themes/vagefoods/css/jquery.timepicker.css'); ?>">

    
    <link rel="stylesheet" href="<?php echo asset('themes/vagefoods/css/flaticon.css'); ?>">
    <link rel="stylesheet" href="<?php echo asset('themes/vagefoods/css/icomoon.css'); ?>">
    <link rel="stylesheet" href="<?php echo asset('themes/vagefoods/css/style.css'); ?>">

</head>
<body class="goto-here">
	<!--small header-->
	<div class="py-1 bg-primary d-none d-md-block">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">0859-0377-8000</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">info@mlijo.id</span>
					    </div>
					    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
						    <span class="text">Penuhi Kebutuhan Sayur Segar Anda Disini!</span>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
	</div>
	<!--end small header-->
	<!--nav-->
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
			<a class="navbar-brand" href="/">
				<img src="<?php echo asset('files/logo.png');?>" height="30" title="Mlijo Logo">
			</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="/about" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>
			  <li class="nav-item cta cta-colored"><a href="#" class="nav-link"><span class="icon-shopping_cart"></span>[0]</a></li>
			  
			  @if(Auth::guest())
			  <li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Akun</a>
				<div class="dropdown-menu" aria-labelledby="dropdown04">
				  <a class="dropdown-item" href="/login">Login</a>
				  <a class="dropdown-item" href="/register">Register</a>
				</div>
			  </li>
			  @else
			  <li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</a>
				<div class="dropdown-menu" aria-labelledby="dropdown04">
					<a class="dropdown-item" href="{{ route('aimeos_shop_account',['site'=>Route::current()->parameter('site','default'),'locale'=>Route::current()->parameter('locale','en'),'currency'=>Route::current()->parameter('currency','EUR')]) }}" title="Profile">Profile</a>
					<form id="logout" action="/logout" method="POST">{{csrf_field()}}</form><a class="dropdown-item" href="javascript: document.getElementById('logout').submit();">Logout</a>
				</div>
			  </li>
			  @endif
			  @yield('aimeos_head')
			</ul>
	      </div>
	    </div>
	  </nav>
	<!--end nav-->
	  
    <div class="container">
		@yield('aimeos_nav')
		@yield('aimeos_stage')
		@yield('aimeos_body')
		@yield('aimeos_aside')
		@yield('content')
	</div>

	<!-- Scripts -->
	<script type="text/javascript" src="/js/app.js"></script>

	@yield('aimeos_scripts')

	</body>
</html>
