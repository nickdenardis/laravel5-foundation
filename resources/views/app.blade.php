<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>App</title>

	<link href="/css/app.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	@if (getenv('APP_ENV') == 'local')
		<script src="/js/modernizr.js"></script>
	@else
		<script src="//cdnjs.cloudflare.com/ajax/libs/foundation/5.5.0/js/vendor/modernizr.js"></script>
	@endif
</head>
<body>

<nav class="top-bar" data-topbar role="navigation">
	<ul class="title-area">
		<li class="name">
			<h1><a href="/">App</a></h1>
		</li>
		<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
	</ul>

	<section class="top-bar-section">
		<!-- Right Nav Section -->
		<ul class="right">
			@if (Auth::guest())
				<li><a href="/auth/login">Login</a></li>
				<li><a href="/auth/register">Register</a></li>
			@else
				<li class="has-dropdown">
					<a href="#">{{ Auth::user()->name }} <span class="caret"></span></a>
					<ul class="dropdown">
						<li><a href="/auth/logout">Logout</a></li>
					</ul>
				</li>
			@endif
		</ul>

		<!-- Left Nav Section -->
		<ul class="left">
			<li><a href="/about">About</a></li>
		</ul>
	</section>
</nav>

<div class="row">
	<div class="large-12 columns">
		@include('flash::message')
	</div>
</div>

@yield('content')

<!-- Scripts    -->
@if (getenv('APP_ENV') == 'local')
	<script src="/js/jquery.min.js"></script>
	<script src="/js/foundation.min.js"></script>
@else
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/foundation/5.5.0/js/foundation.min.js"></script>
@endif

<script>
	$(document).ready(function(){
		$(document).foundation();
		$('#flash-overlay-modal').foundation('reveal', 'open');
	});
</script>

@yield('footer')
</body>
</html>