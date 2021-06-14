<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>{{$title}}</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by gettemplates.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="gettemplates.co" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />


	<link rel="stylesheet" href="/css/animate.css">
	<link rel="stylesheet" href="/css/icomoon.css">
	<link rel="stylesheet" href="/css/bootstrap.css">
	<link rel="stylesheet" href="/css/flexslider.css">
	<link rel="stylesheet" href="/css/owl.carousel.min.css">
	<link rel="stylesheet" href="/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="/css/style.css">
	<script src="/js/modernizr-2.6.2.min.js"></script>
	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-xs-2">
					<div id="fh5co-logo"><a href="{{route('home')}}">KITOB.UZ</a></div>
				</div>
				<div class="col-md-6 col-xs-6 text-center menu-1">
					<ul>
						<li><a href="{{route('shop')}}">Kitoblar</a></li>
						<li><a href="{{route('about')}}">Biz haqimizda</a></li>
						<li><a href="{{route('cantact')}}">Aloqa</a></li>
						@if(!auth()->user())
						<li><a href="{{route('login')}}">Kirish</a></li>
						@else
							<li class="has-dropdown">
							<a href="">Mening accauntim</a>
							<ul class="dropdown">
								<li>
									<form action="{{route('logout')}}" method="POST">
										@csrf
										<button style="background: none; border: none; " type="submit">Chiqish</button>
									</form>
								</li>
								<li>
									<a href="{{route('myorder')}}">My order</a>
								</li>
							</ul>
						</li>
						@endif
					</ul>
				</div>
				<form method="GET" action="{{route('search')}}">
					<div class="col-md-3 col-xs-4 text-right hidden-xs menu-2">
						<ul>
							<li class="search">
								<div class="input-group">
								<input type="text" name="key" placeholder="qidirish..">
								<span class="input-group-btn">
									<button class="btn btn-primary" type="button"><i class="icon-search"></i></button>
								</span>
								</div>
							</li>
						</ul>
					</div>
				</form>
			</div>
			
		</div>
	</nav>

    @yield('content')

    

	<footer id="fh5co-footer" role="contentinfo">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-4 fh5co-widget">
					<a href="{{route('home')}}">
						<h3>Kitob.uz</h3>
					</a>
					<p>Faqat sizlar uchun</p>
				</div>
				
				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
					<ul class="fh5co-footer-links">
						<li><a href="{{route('shop')}}">Kitoblar</a></li>
						<li><a href="{{route('about')}}">Biz haqimizda</a></li>
						<li><a href="{{route('cantact')}}">Aloqa</a></li>
					</ul>
				</div>
			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2021.</small> 
						<small class="block">Yaratuvchilar: Rustamov Boburbek &amp; Shomuradov Murodjon</small>
					</p>
					<p>
						<ul class="fh5co-social-icons">
							<li><a href="https://instagram.com/" target="_blank"><i class="icon-instagram"></i></a></li>
							<li><a href="https://facebook.com/" target="_blank"><i class="icon-facebook"></i></a></li>
							<li><a href="https://linkedin.com/" target="_blank"><i class="icon-linkedin"></i></a></li>
							<li><a href="https://twitter.com/" target="_blank"><i class="icon-twitter"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="/js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="/js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="/js/jquery.countTo.js"></script>
	<!-- Flexslider -->
	<script src="/js/jquery.flexslider-min.js"></script>
	<!-- Main -->
	<script src="/js/main.js"></script>

	</body>
</html>