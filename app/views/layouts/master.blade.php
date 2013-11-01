<!DOCTYPE HTML>
<html>
	<head>
		<title>SMS</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600" rel="stylesheet" type="text/css" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
		</noscript>
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
	</head>
	<body>
		@section('header')
		<!-- Header -->
			<div id="header" class="skel-panels-fixed">

				<div class="top">

					<!-- Logo -->
						<div id="logo">
							<span class="image avatar48"><img src="images/avatar.jpg" alt="" /></span>
							<h1 id="title">{{ Auth::user()->full_name; }}</h1>
							<span class="byline"><a href="/logout"><span class="icon icon-signout">Salir</span></a></span>
						</div>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="/" ><span class="icon icon-home">Inicio</span></a></li>
								<li><a href="/listas"><span class="icon icon-th-list">Listas</span></a></li>
								<li><a href="/listas"><span class="icon icon-user">Listas</span></a></li>
								<li><a href="/mensajes"><span class="icon icon-envelope">Mensajes</span></a></li>

								<li></li>
							</ul>
						</nav>
						
				</div>
				
				<div class="bottom">

					<!-- Social Icons -->
						<ul class="icons">
							<li><a href="#" class="icon icon-twitter"><span>Twitter</span></a></li>
							<li><a href="#" class="icon icon-facebook"><span>Facebook</span></a></li>
							<li><a href="#" class="icon icon-github"><span>Github</span></a></li>
							<li><a href="#" class="icon icon-dribbble"><span>Dribbble</span></a></li>
							<li><a href="#" class="icon icon-envelope"><span>Email</span></a></li>
						</ul>
				
				</div>
			
			</div>
		@show

		<!-- Main -->
			<div id="main">
			
				@yield('content')
			
			</div>
		@section('footer')
		<!-- Footer -->
			<div id="footer">
				
			<!-- Copyright -->
				<div class="copyright">
					<p>&copy; 2013 <a href="http://puertolab.com.ve">puertoLab</a>. Todos los derechos reservados.</p>						
				</div>
				
			</div>
		@show

	</body>
</html>