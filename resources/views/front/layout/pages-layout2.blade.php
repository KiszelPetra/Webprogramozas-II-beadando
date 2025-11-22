<!DOCTYPE HTML>
<!--
	Hielo by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)-->
    <html>
        <html>
	<head>
		<title>@yield(section: 'pageTitle')</title>
		<meta charset="utf-8">
		<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="assets/css/main.css">
		@stack('stylesheets')
	</head>
        
        <body class="subpage">

		<!-- Header -->
			<header id="header"><div class="logo"><a href="/">Hielo <span>by TEMPLATED</span></a></div>
				<a href="#menu">Menu</a>
			</header>
		<!-- Menu -->
		 
		<nav id="menu"><ul class="links"><li><a href="/">Főoldal</a></li>
					<li><a href="{{ route('database-table') }}">Parkok Listája</a></li>
					<li><a href="elements.html">Elements</a></li>

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
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button style="background:none;border:none;color:white;cursor:pointer;">
                        Logout
                    </button>
                </form>
            </li>
        @endauth
				</ul></nav>
                
		<!-- Header -->
			<header id="header"><div class="logo"><a href="/">Hielo <span>by TEMPLATED</span></a></div>
				<a href="#menu">Menu</a>
			</header><!-- Nav --><nav id="menu"><ul class="links"><li><a href="/">Home</a></li>
					<li><a href="{{ route('database-table') }}">Tanösvény adatbázis</a></li>
					<li><a href="elements.html">Elements</a></li>
				</ul>
            </nav>

                @yield('content')
            
            <!-- Footer --><footer id="footer"><div class="container">
					<ul class="icons"><li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
					</ul></div>
			</footer><div class="copyright">
			Made with <a href="https://templated.live/">Templated</a> Distributed by <a href="https://themewagon.com/">ThemeWagon</a>.
		</div>

		<!-- Scripts -->
			<script src="front/js/jquery.min.js"></script>
            <script src="front/js/jquery.scrollex.min.js"></script>
            <script src="front/js/skel.min.js"></script>
            <script src="front/js/util.js"></script>
            <script src="front/js/main.js"></script>
            @stack('scripts')
        </body>
    </html>

