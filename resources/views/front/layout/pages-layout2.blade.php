<!DOCTYPE HTML>
<!--
	Hielo by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)-->
    <html>
        <head>
            <title>@yield(section: 'pageTitle')</title>
            <meta charset="utf-8">
            <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="front/css/main.css">
            @stack('stylesheets')
        </head>
        
        <body class="subpage">

		<!-- Header -->
			<header id="header"><div class="logo"><a href="/">Hielo <span>by TEMPLATED</span></a></div>
				<a href="#menu">Menu</a>
			</header><!-- Nav --><nav id="menu"><ul class="links"><li><a href="/">Home</a></li>
					<li><a href="{{ route('database-table') }}">Tanösvény adatbázis</a></li>
					<li><a href="elements.html">Elements</a></li>
				</ul>
            </nav>
            <!-- One <section id="One" class="wrapper style3" ><div class="inner">
					<header class="align-center">
                        <p>Tanösvény adatbázis</p>
						<h2>Adatok</h2>
					</header>
                </div>
            </section>-->

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

