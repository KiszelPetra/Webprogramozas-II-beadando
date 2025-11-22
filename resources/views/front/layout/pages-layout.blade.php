<!DOCTYPE HTML>
<!--
	Hielo by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
--><html>
	<head>
		<title>@yield(section: 'pageTitle')</title>
		<meta charset="utf-8">
		<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="assets/css/main.css">
		@stack('stylesheets')
	</head>
	<body>
		 

		<!-- Header -->
			<header id="header" class="alt"><div class="logo"><a href="/">Hielo <span>by TEMPLATED</span></a></div>
				<a href="#menu">Menu</a>
			</header>
		<!-- Menu -->
		 
		<nav id="menu"><ul class="links"><li><a href="/">Főoldal</a></li>
					<li><a href="{{ route('database-table') }}">Parkok Listája</a></li>
					<li><a href="{{ route('kapcsolat') }}">Kapcsolat</a></li>
					<li><a href="{{ route('uzenet') }}">Üzenetek</a></li>

					        <!-- Ha nincs bejelentkezve -->
        @guest
            <li><a href="{{ route('login') }}">Belépés</a></li>
            <li><a href="{{ route('register') }}">Regisztráció</a></li>
        @endguest

        <!-- Ha be van jelentkezve -->
                  @auth
			 <li>
        <a href="/dashboard">Dashboard</a>
    </li>

    <li>
        <a href="/admin">Admin menü</a>
    </li>

    <li>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button style="background:none;border:none;color:white;cursor:pointer;">
                Logout
            </button>
        </form>
    </li>
@endauth
				</ul></nav>
                
		
		<!-- Banner -->
		 
		<section class="banner full"><article><img src="images/slideKP01.jpg" alt="" width="1440" height="961"><div class="inner">
						<header><p>Zebegény<a href="https://templated.co"> </a></p>
							<h2>Duna-Ipoly Nemzeti Park</h2>
						</header></div>
				</article><article><img src="images/slideKP02.jpg" alt="" width="1440" height="961"><div class="inner">
						<header><p>Téltemető</p>
							<h2>Bükki Nemzeti Park</h2>
						</header></div>
				</article><article><img src="images/slideKP03.jpg" alt="" width="1440" height="962"><div class="inner">
						<header><p>Jósvafő</p>
							<h2>Aggteleki Nemzeti Park</h2>
						</header></div>
				</article><article><img src="images/slideKP04.jpg" alt="" width="1440" height="961"><div class="inner">
						<header><p>Hepatica nobilis</p>
							<h2>Duna-Dráva Nemzeti Park</h2>
						</header></div>
				</article><article><img src="images/slideKP05.jpg" alt="" width="1440" height="962"><div class="inner">
						<header><p>Szigliget</p>
							<h2>Balaton-felvidéki Nemzeti Park</h2>
						</header></div>
				</article></section>
                @yield('content') 

<!-- Footer --><footer id="footer"><div class="container">
					<ul class="icons"><li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
						<li><a href="#" class="icon fa-envelope-o"><span class="label">Készítette Kismárton Roland (...) és Kiszel Petra (D9HRCQ)</span></a></li>
					</ul></div>
			</footer><div class="copyright">
			Made with <a href="https://templated.live/">Templated</a> Distributed by <a href="https://themewagon.com/">ThemeWagon</a>.
		</div>
		<!-- Link -->
		 	<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
		<!-- Scripts -->
			<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
			<script src="{{ asset('assets/js/skel.min.js') }}"></script>
			<script src="{{ asset('assets/js/util.js') }}"></script>
			<script src="{{ asset('assets/js/main.js') }}"></script>
			@stack('scripts')
		<!-- Images -->
		<img src="{{ asset('images/pic01.jpg') }}" style="width: 50px; height:auto;"/>
	</body>
	</html>

