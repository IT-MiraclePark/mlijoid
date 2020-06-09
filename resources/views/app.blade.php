<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	@yield('aimeos_header')

	<title>Mlijo</title>

	@yield('aimeos_styles')

	<link type="text/css" rel="stylesheet" href='https://fonts.googleapis.com/css?family=Roboto:400,300'>
	<link type="text/css" rel="stylesheet" href="/css/app.css">
	<link
    rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
	crossorigin="anonymous"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.2.0/flexslider-min.css'>
	<link rel="stylesheet" href="{{ asset('packages/aimeos/shop/themes/slider/slider.css') }}">
	<link rel="stylesheet" href="{{ asset('packages/aimeos/shop/themes/elegance/about.css') }}">
	<link rel="stylesheet" href="{{ asset('packages/aimeos/shop/themes/elegance/footer.css') }}">
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css'>
	<link rel='stylesheet' href='https://themify.me/wp-content/themes/themify-v32/themify-icons/themify-icons.css'>
	
</head>
<body>
	<nav class="navbar navbar-expand-sm navbar-light">
		<a class="navbar-brand" href="/">
			<img src="{{ asset('packages/aimeos/shop/themes/elegance/media/mlijo.png') }}" height="30" title="Mlijo Logo">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				@if (Auth::guest())
					<li class="nav-item navbar-text"><a class="nav-link" href="/login">Login</a></li>
					<li class="nav-item navbar-text"><a class="nav-link" href="/register">Register</a></li>
				@else
					<li class="nav-item navbar-text dropdown">
						<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="{{ route('aimeos_shop_account',['site'=>Route::current()->parameter('site','default'),'locale'=>Route::current()->parameter('locale','en'),'currency'=>Route::current()->parameter('currency','EUR')]) }}" title="Profile">Profile</a></li>
							<li><form id="logout" action="/logout" method="POST">{{csrf_field()}}</form><a href="javascript: document.getElementById('logout').submit();">Logout</a></li>
						</ul>
					</li>
				@endif
				<li class="nav-item navbar-text"><a class="nav-link" href="/about">Tentang Mlijo.id</a></li>
			</ul>
			@yield('aimeos_head')
		</div>
	</nav>
    <div class="container">
		@include('layouts/slider')
		@yield('aimeos_nav')
		@yield('aimeos_stage')
		@yield('aimeos_body')
		@yield('aimeos_aside')
		@yield('content')
	</div>

	@include('layouts/footer')
	<!-- Scripts -->
	<script type="text/javascript" src="/js/app.js"></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.2.0/jquery.flexslider-min.js'></script>
	<script src="{{ asset('packages/aimeos/shop/themes/slider/slider.js') }}"></script>
	@yield('aimeos_scripts')

	</body>
</html>
