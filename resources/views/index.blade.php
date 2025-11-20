<!DOCTYPE HTML>
<!--
	Hielo by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
--><html><head><title>Tanösvények</title><meta charset="utf-8"><meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1"><meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="assets/css/main.css"></head><body>

		<!-- Header -->
			<header id="header" class="alt"><div class="logo"><a href="/">Hielo <span>by TEMPLATED</span></a></div>
				<a href="#menu">Menu</a>
			</header>
		<!-- Menu -->
		 
		<nav id="menu"><ul class="links"><li><a href="/">Home</a></li>
					<li><a href="generic.html">Generic</a></li>
					<li><a href="elements.html">Elements</a></li>

					        <!-- Ha nincs bejelentkezve -->
        @guest
            <li><a href="{{ route('login') }}">Login</a></li>
            <li><a href="{{ route('register') }}">Register</a></li>
        @endguest

        <!-- Ha be van jelentkezve -->
        @auth
            <li><a href="/dashboard">Dashboard</a></li>
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
				</article></section><!-- One --><section id="one" class="wrapper style2"><div class="inner">
					<div class="grid-style">

						<div>
							<div class="box">
								<div class="image fit">
									<img src="images/picKP02.jpg" alt="" width="600" height="300"></div>
								<div class="content">
									<header class="align-center"><p>Pulsatilla vulgaris</p>
										<h2>Leánykökörcsin</h2>
									</header><p> Magyarországon elsősorban a Dunántúli- és az Északi-középhegység szikla- és pusztafüves lejtőin, sziklagyepeiben, karsztbokorerdeinek tisztásain jellemző, de hegylábi illetve dombvidéki területeken is megtalálható, helyenként tömeges.</p>
									<footer class="align-center"><a href="#" class="button alt">Learn More</a>
									</footer></div>
							</div>
						</div>

						<div>
							<div class="box">
								<div class="image fit">
									<img src="images/picKP03.jpg" alt="" width="600" height="300"></div>
								<div class="content">
									<header class="align-center"><p>Echinacea purpurea</p>
										<h2>Bíbor kasvirág</h2>
									</header><p> A kasvirág Észak-Amerikából származik. Régen az indiánok a kígyómarástól a vérmérgezésen és a bélbetegségeken át a meghűlésig sokféle baj orvoslására használták. Európában leginkább dísznövényként terjedt el, de gyógynövényként is ismert, elsősorban immunerősítésre, gyulladások csillapítására, illetve az éberség fokozására javasolják.</p>
									<footer class="align-center"><a href="#" class="button alt">Learn More</a>
									</footer></div>
							</div>
						</div>

					</div>
				</div>
			</section><!-- Two --><section id="two" class="wrapper style3"><div class="inner">
					<header class="align-center"><p>Nemzeti Parkok</p>
						<h2>Tanösvények</h2>
					</header></div>
			</section><!-- Three --><section id="three" class="wrapper style2"><div class="inner">
					<header class="align-center"><p class="special">Nemzeti Parkok</p>
						<h2>Tanösvények</h2>
					</header><div class="gallery">
						<div>
							<div class="image fit">
								<a href="#"><img src="images/picKP01.jpg" alt="" width="600" height="300"></a>
							</div>
						</div>
						<div>
							<div class="image fit">
								<a href="#"><img src="images/picKP02.jpg" alt="" width="600" height="300"></a>
							</div>
						</div>
						<div>
							<div class="image fit">
								<a href="#"><img src="images/picKP03.jpg" alt="" width="600" height="300"></a>
							</div>
						</div>
						<div>
							<div class="image fit">
								<a href="#"><img src="images/picKP04.jpg" alt="" width="600" height="300"></a>
							</div>
						</div>
					</div>
				</div>
			</section><!-- Footer --><footer id="footer"><div class="container">
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
			<script src="{{ asset('assets/js/jquery.min.js') }}"></script><script src="{{ asset('assets/js/skel.min.js') }}"></script><script src="{{ asset('assets/js/util.js') }}"></script><script src="{{ asset('assets/js/main.js') }}"></script>
		<!-- Images -->
		<img src="{{ asset('images/pic01.jpg') }}" style="width: 50px; height:auto;"/></body></html>

