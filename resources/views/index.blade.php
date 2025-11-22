@extends('front.layout.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Főoldal')
@section('content')

<!-- One --><section id="one" class="wrapper style2"><div class="inner">
					<div class="grid-style">

						<div>
							<div class="box">
								<div class="image fit">
									<img src="images/picKP02.jpg" alt="" width="600" height="300"></div>
								<div class="content">
									<header class="align-center"><p>Pulsatilla vulgaris</p>
										<h2>Leánykökörcsin</h2>
									</header><p> Magyarországon elsősorban a Dunántúli- és az Északi-középhegység szikla- és pusztafüves lejtőin, sziklagyepeiben, karsztbokorerdeinek tisztásain jellemző, de hegylábi illetve dombvidéki területeken is megtalálható, helyenként tömeges.</p>
									<footer class="align-center"><a href="https://hu.wikipedia.org/wiki/Le%C3%A1nyk%C3%B6k%C3%B6rcsin" class="button alt">Learn More</a>
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
									<footer class="align-center"><a href="https://hu.wikipedia.org/wiki/B%C3%ADbor_kasvir%C3%A1g" class="button alt">Learn More</a>
									</footer></div>
							</div>
						</div>

					</div>
				</div>
			</section><!-- Two --><section id="two" class="wrapper style3"><div class="inner">
					<header class="align-center"><h2>Rövid ismertető, hogy mivel is foglalkozik cégünk.</h2>
                            <p>
                                Elkötelezettek vagyunk amellett, hogy megmutassok a túrázni vágyoknak, főleg a fiatalabb korosztálynak, hogy mivel természeti értékek vannak Magyarországon, és hogy ezeket hogyan tudják biztonságosan felfedezni.
                                Elsődleges célunk a biztonságos, kijelölt túraútvonalak népszerűsítése, valamint a természetvédelem és a fenntartható turizmus előmozdítása.
                                Ugyan a védett területeken az ismertető és figyelem felhívó táblák jelzik, de itt is szeretnénk nagyobb hangsúlyt fektetni a természetvédelem fontosságára, és arra, hogy mindenki felelősséggel tartozik a környezetéért.
                                Ezért kérünk mindenkit, hogy a természetben tartózkodás során ügyeljenek arra, hogy ne hagyjanak maguk után szemetet, ne károsítsák a növény- és állatvilágot.
                            </p>
						<h1>Vigyázzunk együtt a természeti kincseinkre, hogy azok a jövő generációi számára is megőrződjenek!</h1>
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
			</section>
@endsection