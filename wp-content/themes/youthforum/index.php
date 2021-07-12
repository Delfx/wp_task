<?php
/*
        Template Name: youthforum
    */



?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="Description" content="Enter your description here" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css?v=5.1" type="text/css" media="screen" />



	<title>Youth Forum</title>
</head>

<body>


	<section class="container-fluid p-0">
		<img src="<?php bloginfo('template_directory'); ?>/assets/img/HERO.svg" class="img-fluid w-100 d-none d-sm-none d-md-block img-header-large" alt="Responsive image">

		<img src="<?php bloginfo('template_directory'); ?>/assets/img/OG_small.svg" class="img-fluid d-md-none w-100" alt="Responsive image">


		<div class="col-md-12 col-11 mx-auto mt-n5">

			<div class="d-flex align-content-center align-items-center ">

				<div class="time-white-box d-flex w-50 align-content-center align-items-center p-md-5 mx-auto">

					<div class="box-top-border position-absolute mx-auto">
					</div>

					<div class="mt-3 time-remaining-style position-absolute">REMAINING TIME</div>

					<div id="countdownn" class="col-12 d-flex justify-content-around mt-4 ">

						<div>
							<p id="days" class="time-number p-0 m-0"> </p>
							<p class="time-text">Days</p>
						</div>

						<div>
							<p class="colon-style p-0 ">:</p>
						</div>

						<div>
							<p id="hours" class="time-number p-0 m-0"> </p>
							<p class="time-text">Hours</p>
						</div>

						<div>
							<p class="colon-style p-0 ">:</p>
						</div>

						<div>
							<p id="minutes" class="time-number p-0 m-0"> </p>
							<p class="time-text">Minutes</p>
						</div>

						<div>
							<p class="colon-style p-0 ">:</p>
						</div>

						<div>
							<p id="seconds" class="time-number p-0 m-0"> </p>
							<p class="time-text">Seconds</p>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="container forum-style col-12 col-md-12 col-xl-9">

		<div class="">
			<div class="col-12 text-center mx-auto">
				<h3>The main objectives of the </h3>
				<h2>4th Eastern Partnership <br> Youth Forum</h2>
			</div>
		</div>

		<div class="row col-12 p-md-5 p-0 mt-5 mt-md-0 ml-0">

			<div class="col-12 col-md-4 mb-4">
				<div class="d-flex">
					<img src="<?php bloginfo('template_directory'); ?>/assets/img/eu.svg" class="align-content-center align-items-center mx-auto mb-4" alt="">
				</div>
				<div class="text-justify col-md-11 mx-auto">

					<?php
					the_field('european');
					?>

				</div>
			</div>

			<div class="col-12 col-md-4 mb-4">
				<div class="d-flex">
					<img src="<?php bloginfo('template_directory'); ?>/assets/img/lader.svg" class="align-content-center align-items-center mx-auto mb-4" alt="">
				</div>
				<div class="text-justify col-md-11 mx-auto">
					<?php
					the_field('opportunities');
					?>
				</div>
			</div>

			<div class="col-12 col-md-4 mb-4">
				<div class="d-flex">
					<img src="<?php bloginfo('template_directory'); ?>/assets/img/message.svg" class="align-content-center align-items-center mx-auto mb-4" alt="">
				</div>
				<div class="text-justify col-md-11 mx-auto">

					<?php
					the_field('discussions');
					?>

				</div>
			</div>
		</div>

		<div class="col-12 row p-0 d-flex justify-content-center ml-0">

			<div class="col-12 col-md-4 mb-4">
				<div class="d-flex">
					<img src="<?php bloginfo('template_directory'); ?>/assets/img/hands.svg" class="align-content-center align-items-center mx-auto mb-4" alt="">
				</div>
				<div class="text-justify col-md-11 mx-auto">

					<?php
					the_field('encourage');
					?>

				</div>
			</div>

			<div class="col-12 col-md-4 mb-4">
				<div class="d-flex">
					<img src="<?php bloginfo('template_directory'); ?>/assets/img/mic.svg" class="align-content-center align-items-center mx-auto mb-4" alt="">
				</div>
				<div class="text-justify col-md-11 mx-auto">

					<?php
					the_field('celebrate');
					?>

				</div>
			</div>
		</div>

	</section>

	<section class="container-fluid p-0">

		<div class="col-12 position-absolute triangle-pic mt-n5">
			<img src="<?php bloginfo('template_directory'); ?>/assets/img/line_triangle.svg" class="img-fluid w-100 d-sm-none d-none d-md-block" alt="Responsive image">
		</div>

	</section>

	<section id="counter" class="map">

		<div class="container col-12 col-md-10 col-xl-9">

			<div  class="d-flex flex-md-row flex-column justify-content-between col-12 mt-5">

				<div class="col-12 col-md-3 text-center">
					<p class="number-map count" data-count="300">
						300
					</p>
					<p class="text-uppercase text-center text-map-blue">
						participants
					</p>
					<p class="text-justify text-map-explain">
						Including active young people, youth workers and youth policy makers from both Eastern
						Partnership
					</p>
				</div>

				<div class="col-12 col-md-3 text-center">
					<p class="number-map count" data-count="34">
						34
					</p>
					<p class="text-uppercase text-center text-map-blue">
						Countries
					</p>
					<p class="text-justify text-center text-map-explain">
						European countries involved in the EU Erasmus+
					</p>
				</div>

				<div class="col-12 col-md-3 text-center">
					<p class="number-map count" data-count="3">
						3
					</p>
					<p class="text-uppercase text-center text-map-blue">
						Days
					</p>
					<p class="text-justify text-map-explain">
						Programme — will meet and discuss in a two-day event in Vilnius, on 17-20 June 2018.
					</p>
				</div>
			</div>
		</div>


		<div class="col-12">
			<img src="<?php bloginfo('template_directory'); ?>/assets/img/map.svg" class="img-fluid w-100 p-md-5" alt="Responsive image">
		</div>
	</section>

	<section class="container p-md-5 mt-4 mt-md-0 col-12 col-md-12 col-xl-10">


		<div class="position-absolute location-description-rectangle">
			<img src="<?php bloginfo('template_directory'); ?>/assets/img/rectangle.svg" class="img-fluid w-100" alt="Responsive image">
		</div>

		<div class="col-12">

			<div class="row p-3 p-md-5">

				<div class="col-md-5 col-12 d-flex location-description-img align-items-center">
					<a href="https://goo.gl/maps/DWSubLTwmRCKV61J6">
						<img src="<?php bloginfo('template_directory'); ?>/assets/img/map_with_lines.svg" class="img-fluid w-100 h-auto" alt="Responsive image">
					</a>
				</div>

				<div class="col-12 offset-md-1 col-md-6 p-0 mt-3 mt-md-0">

					<h3 class="text-xl-left text-center ">
						<?php
						the_field('about_forum');
						?>
					</h3>

					<h2 class="text-lg-left text-center mb-5">
						<?php
						the_field('about_forum_h2');
						?>
					</h2>

					<p class="about-description-text text-justify">
						<?php
						the_field('about_forum_description');
						?>
					</p>

					<u class="mt-md-0 mt-5">
						<a href="https://goo.gl/maps/DWSubLTwmRCKV61J6">

							Ežeraičių km., Ežeraičių g. 2, Vilnius, Lietuva
							LT-14200</a>

					</u>

				</div>

			</div>

		</div>

	</section>

	<section class="container col-12 lithuania-vilnius p-md-5">

		<div class="row d-flex justify-content-center align-items-center p-2 p-md-0">

			<div class="col-md-5 mr-md-5 m-0 ">

				<div class="about-lithuania-block-text">
					<h3 class="text-lg-left text-center">
						About Lithuania
					</h3>

					<h2 class="text-lg-left text-center text-md-center mb-3 mb-md-5">
						<?php
						the_field('about_lithuania_h2');
						?>
					</h2>

					<div class="col-md-5 col-12 d-flex align-items-center mb-2 mt-md-0 ">
						<img src="<?php bloginfo('template_directory'); ?>/assets/img/vilnius_pic.svg" class="w-md-75 mx-auto d-block d-sm-none d-none d-sm-block d-md-none img-fluid" alt="">
					</div>

					<p class="about-description-text text-justify">
						<?php
						the_field('about_lithuania_description');
						?>
					</p>

					<u>
						<a href="
						
						<?php
						the_field('about_lithuania_link');
						?>
						
						">Find out more &#8594;</a>
					</u>
				</div>


			</div>

			<div class="col-md-5 col-12 d-flex align-items-center mt-5 mt-md-0 ">
				<img src="<?php bloginfo('template_directory'); ?>/assets/img/vilnius_pic.svg" class="w-md-75 w-100 d-none d-md-block d-lg-none d-lg-block d-xl-none d-xl-block" alt="">
			</div>

		</div>
	</section>


	<section class="container-fluid position-absolute mt-n5 d-none d-sm-block d-sm-none d-md-block">

		<div class="d-flex justify-content-center">
			<img src="<?php bloginfo('template_directory'); ?>/assets/img/triangle_lower.svg" class="col-11 img-fluid w-100" alt="">
		</div>

	</section>

	<section>

		<div class="container col-12 margin-top-participants">

			<h2 class="text-center">
				Moderators and Facilitators
			</h2>


			<div class="d-flex justify-content-center mt-5 ">
				<div class="col-12 ">
					<div class="swiper-container mySwiper col-12 col-md-6 ">
						<div class="swiper-wrapper ">

							<div class="swiper-slide">
								<div class="card p-5 card-size">
									<img src="<?php bloginfo('template_directory'); ?>/assets/img/moderator.svg" class="w-100 mb-5" alt="">

									<p class="name text-center">
										<?php
										the_field('moderator_1_name');
										?>
									</p>

									<p class="name-description text-center">
										<?php
										the_field('moderator_1_description');
										?>
									</p>
								</div>
							</div>


							<div class="swiper-slide">
								<div class="card p-5 card-size" style="">
									<img src="<?php bloginfo('template_directory'); ?>/assets/img/moderator.svg" class="w-100 mb-5" alt="">

									<p class="name text-center">
										<?php
										the_field('moderator_2_name');
										?>
									</p>

									<p class="name-description text-center">
										<?php
										the_field('moderator_2_description');
										?>
									</p>
								</div>
							</div>

							<div class="swiper-slide">
								<div class="card p-5 card-size" style="">
									<img src="<?php bloginfo('template_directory'); ?>/assets/img/moderator.svg" class="w-100 mb-5" alt="">

									<p class="name text-center">
										<?php
										the_field('moderator_2_name');
										?>
									</p>

									<p class="name-description text-center">
										<?php
										the_field('moderator_2_description');
										?>
									</p>
								</div>
							</div>

							<div class="swiper-slide">
								<div class="card p-5 card-size" style="">
									<img src="<?php bloginfo('template_directory'); ?>/assets/img/moderator.svg" class="w-100 mb-5" alt="">

									<p class="name text-center">
										<?php
										the_field('moderator_3_name');
										?>
									</p>

									<p class="name-description text-center">
										<?php
										the_field('moderator_3_description');
										?>
									</p>
								</div>
							</div>

							<div class="swiper-slide">
								<div class="card p-5 card-size" style="">
									<img src="<?php bloginfo('template_directory'); ?>/assets/img/moderator.svg" class="w-100 mb-5" alt="">

									<p class="name text-center">
										<?php
										the_field('moderator_4_name');
										?>
									</p>

									<p class="name-description text-center">
										<?php
										the_field('moderator_4_description');
										?>
									</p>
								</div>
							</div>

							<div class="swiper-slide">
								<div class="card p-5 card-size" style="">
									<img src="<?php bloginfo('template_directory'); ?>/assets/img/moderator.svg" class="w-100 mb-5" alt="">

									<p class="name text-center">
										<?php
										the_field('moderator_5_name');
										?>
									</p>

									<p class="name-description text-center">
										<?php
										the_field('moderator_5_description');
										?>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="container dot-picture position-absolute col-12 d-none d-lg-block d-xl-block d-xl-none d-md-block d-lg-none">

		<div class="">
			<img src="<?php bloginfo('template_directory'); ?>/assets/img/patternBg.svg" class="img-fluid w-100" alt="">
		</div>

	</section>


	<section class="container dot-picture-small position-absolute col-12 d-block d-sm-none d-none d-sm-block d-md-none">

		<div class="">
			<img src="<?php bloginfo('template_directory'); ?>/assets/img/patternBg_small.svg" class="img-fluid w-100" alt="">
		</div>

	</section>

	<section class="container col-12 organisers-container d-flex flex-column align-content-center align-items-center">

		<div class="col-10">

			<h3 class="col-12 organisers-text">
				Organisers
			</h3>


			<div class="organisers-logo d-flex flex-md-row flex-column align-items-center align-content-center justify-content-around mt-5 mt-md-3">

				<div class="m-3 m-md-5 m-lg-0">
					<img src="<?php bloginfo('template_directory'); ?>/assets/img/logo/logo_ce-en-rvb-hr.svg" class="img-fluid" alt="">
				</div>

				<div class="m-3 m-md-5 m-lg-0">
					<img src="<?php bloginfo('template_directory'); ?>/assets/img/logo/Asset 1@2x.svg" class="img-fluid" alt="">
				</div>


				<div class="m-3 m-md-5 m-lg-0">
					<img src="<?php bloginfo('template_directory'); ?>/assets/img/logo/urm_naujas_logo_angliskas.svg" class="img-fluid" alt="">
				</div>

			</div>

			<h3 class="col-12 organisers-text mt-5 mb-5">
				Partners
			</h3>

			<div class="row col-12 justify-content-between">

				<div class="col-12 col-md-2 m-3 m-md-0 d-flex justify-content-center">
					<img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/Rumunijos NA.svg" class="img-fluid" alt="">
				</div>

				<div class="col-12 col-md-2 m-3 m-md-0 d-flex justify-content-center">
					<img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/znak podstawowy_poziomy.svg" class="img-fluid" alt="">
				</div>

				<div class="col-12 col-md-2 m-3 m-md-0 d-flex justify-content-center">
					<img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/FNAFE@2x.svg" class="img-fluid" alt="">
				</div>

				<div class="col-12 col-md-2 m-3 m-md-0 d-flex justify-content-center">
					<img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/LIJOT_logo-03.svg" class="img-fluid" alt="">
				</div>

				<div class="col-12 col-md-2 mt-5 m-md-0 d-flex justify-content-center">
					<img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/EYF@2x.svg" class="img-fluid" alt="">
				</div>

			</div>

			<div class="row col-12 justify-content-between mt-md-5 mt-0">

				<div class="col-12 col-md-2  mt-5 m-md-0 d-flex justify-content-center">
					<img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/AG@2x.svg" class="img-fluid" alt="">
				</div>

				<div class="col-12 col-md-2  mt-5 m-md-0 d-flex  justify-content-center">
					<img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/jugend@2x.svg" class="img-fluid" alt="">
				</div>


				<div class="col-12 col-md-2 mt-5 m-md-0 d-flex justify-content-center">
					<img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/Erasmus+Salto Eastern Europe And Caucasus RGB vertical.svg" class="img-fluid" alt="">
				</div>

				<div class="col-12 col-md-2 mt-5 m-md-0 d-flex justify-content-center">
					<img src="<?php bloginfo('template_directory'); ?>/assets/img/partners/ECSF@2x.svg" class="img-fluid" alt="">
				</div>

			</div>

		</div>

	</section>

	<section class="line-footer container-fluid">
		<hr class="w-100 p-0">
	</section>

	<footer class="container col-11 d-flex justify-content-between align-items-center align-align-content-center pb-3">

		<div class="">
			<p class="footer-text m-0">© Lorem ipsum 2010 - 2019</p>
		</div>

		<div class="">
			<span class="fa-stack fa-sm">
				<i class="fa fa-circle fa-stack-2x" style="color: #2F5BEA;"></i>
				<i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
			</span>


			<span class="fa-stack fa-sm">
				<i class="fa fa-circle fa-stack-2x" style="color: #2F5BEA;"></i>
				<i class="fab fa-instagram fa-stack-1x fa-inverse"></i>
			</span>
		</div>

	</footer>




	<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/swiper.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/counter.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/number_count.js"></script>


</body>

</html>