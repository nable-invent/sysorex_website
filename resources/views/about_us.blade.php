@extends('includes.include')

@section('content')
<div class="content-wrapper">

	<!-- Block Info -->

	<section class="pt100 bg-blue-lighteen bg-11 align-center">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
					<div class="crumina-module crumina-heading">
						<h6 class="heading-sup-title c-primary">OUR COMPANY</h6>
						<h2 class="h1 heading-title">Decennium of experience in Innovation and Technology</h2>
					</div>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<img src="img/image4.png" alt="image">
				</div>
			</div>
		</div>
	</section>

	<!-- ... end Block Info -->


	<!-- Widget Contacts -->

	<section class="medium-padding100">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-6 col-sm-12 col-xs-12">
					<h2>With sys0rex, you gain more than a software solution. You get a global team of industry experts committed to ensuring your success.</h2>
					<p>We empower the business with agile digital at scale to deliver unprecedented levels of performance and customer delight. 
						Our always-on learning agenda drives it’s continuous improvement through building and transferring digital skills, expertise, and ideas.
					</p>
					<p>At sys0rex, we’re passionate about bringing simplicity, innovation and partnership to the heart and soul of business—the people who run the solution.</p>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
					<div class="widget w-contacts w-contacts--style2 ">
						<div class="screenshot-item">
							<a href="img/sys/sys7.jpeg" class="js-zoom-image">
								<img src="img/sys/sys7.jpeg" class="swiper-image" alt="image">
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ... end Widget Contacts -->


	<!-- Choose Items -->

	<section>
		<div class="choose">

			<div class="choose-item bg-primary-color">
				<h6 class="title">Simplify</h6>
				<p class="text">We offer solutions which are simple to understand, intuitive, engaging and always available. At sys0rex, we’re passionate about simplicity, innovation and partnership to the heart and soul of business and the people.
				</p>
				<a href="{{url('/aboutus')}}" class="btn-next">
					<svg class="utouch-icon icon-hover utouch-icon-arrow-right-1"><use xlink:href="#utouch-icon-arrow-right-1"></use></svg>
					<svg class="utouch-icon utouch-icon-arrow-right1"><use xlink:href="#utouch-icon-arrow-right1"></use></svg>
				</a>
			</div>

			<div class="choose-item bg-orange">
				<h6 class="title">Specialize</h6>
				<p class="text">With our speciality in various solutions our customers are able to leverage decades of distribution and manufacturing expertise. 
					We have the know-how to key insights such as raw-material costing, traceability etc. in order to help your business move forward.
				</p>
				<a href="{{url('/products')}}" class="btn-next">
					<svg class="utouch-icon icon-hover utouch-icon-arrow-right-1"><use xlink:href="#utouch-icon-arrow-right-1"></use></svg>
					<svg class="utouch-icon utouch-icon-arrow-right1"><use xlink:href="#utouch-icon-arrow-right1"></use></svg>
				</a>
			</div>

			<div class="choose-item bg-red">
				<h6 class="title">Sustain</h6>
				<p class="text">As your business grows and processes change, you need a flexible system that can easily adapt and scale. We possess agile and responsive solutions and teams - something that you can rely on for the long haul.
				</p>
				<a href="{{url('/')}}" class="btn-next">
					<svg class="utouch-icon icon-hover utouch-icon-arrow-right-1"><use xlink:href="#utouch-icon-arrow-right-1"></use></svg>
					<svg class="utouch-icon utouch-icon-arrow-right1"><use xlink:href="#utouch-icon-arrow-right1"></use></svg>
				</a>
			</div>

		</div>
	</section>

	<!-- ... end Choose Items -->

	<!--Gallery start-->
	<section class="medium-padding120 align-center">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-lg-offset-3 col-md-12 col-sm-12 col-xs-12 mb30">
					<div class="crumina-module crumina-heading">
						<h1 class="heading-sup-title">Grab a look</h1>
						<h2 class="heading-title"><span class="c-primary">Inside sys0rex</span></h2>
					</div>
				</div>
			</div>
		</div>

		<div
			class="crumina-module crumina-module-slider slider--full-width screenshots-slider-style1 navigation-center-both-sides">
			<div class="swiper-container pagination-bottom" data-show-items="5" data-centered-slider="true">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="screenshot-item">
							<a href="img/sys/sys1.jpeg" class="js-zoom-image">
								<img src="img/sys/sys1.jpeg" class="swiper-image" alt="image">
							</a>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="screenshot-item">
							<a href="img/sys/sys2.jpeg" class="js-zoom-image">
								<img src="img/sys/sys2.jpeg" class="swiper-image" alt="image">
							</a>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="screenshot-item">
							<a href="img/sys/sys3.jpeg" class="js-zoom-image">
								<img src="img/sys/sys3.jpeg" class="swiper-image" alt="image">
							</a>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="screenshot-item">
							<a href="img/sys/sys4.jpeg" class="js-zoom-image">
								<img src="img/sys/sys4.jpeg" class="swiper-image" alt="image">
							</a>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="screenshot-item">
							<a href="img/sys/sys5.jpeg" class="js-zoom-image">
								<img src="img/sys/sys5.jpeg" class="swiper-image" alt="image">
							</a>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="screenshot-item">
							<a href="img/sys/sys6.jpeg" class="js-zoom-image">
								<img src="img/sys/sys6.jpeg" class="swiper-image" alt="image">
							</a>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="screenshot-item">
							<a href="img/sys/sys6.jpeg" class="js-zoom-image">
								<img src="img/sys/sys6.jpeg" class="swiper-image" alt="image">
							</a>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="screenshot-item">
							<a href="img/sys/sys7.jpeg" class="js-zoom-image">
								<img src="img/sys/sys7.jpeg" class="swiper-image" alt="image">
							</a>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="screenshot-item">
							<a href="img/sys/sys8.jpeg" class="js-zoom-image">
								<img src="img/sys/sys8.jpeg" class="swiper-image" alt="image">
							</a>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="screenshot-item">
							<a href="img/sys/sys9.jpeg" class="js-zoom-image">
								<img src="img/sys/sys9.jpeg" class="swiper-image" alt="image">
							</a>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="screenshot-item">
							<a href="img/sys/sys10.jpeg" class="js-zoom-image">
								<img src="img/sys/sys10.jpeg" class="swiper-image" alt="image">
							</a>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="screenshot-item">
							<a href="img/sys/sys11.jpeg" class="js-zoom-image">
								<img src="img/sys/sys11.jpeg" class="swiper-image" alt="image">
							</a>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="screenshot-item">
							<a href="img/sys/sys12.jpeg" class="js-zoom-image">
								<img src="img/sys/sys12.jpeg" class="swiper-image" alt="image">
							</a>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="screenshot-item">
							<a href="img/sys/sys24.jpeg" class="js-zoom-image">
								<img src="img/sys/sys24.jpeg" class="swiper-image" alt="image">
							</a>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="screenshot-item">
							<a href="img/sys/sys14.jpeg" class="js-zoom-image">
								<img src="img/sys/sys14.jpeg" class="swiper-image" alt="image">
							</a>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="screenshot-item">
							<a href="img/sys/sys15.jpeg" class="js-zoom-image">
								<img src="img/sys/sys15.jpeg" class="swiper-image" alt="image">
							</a>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="screenshot-item">
							<a href="img/sys/sys40.jpeg" class="js-zoom-image">
								<img src="img/sys/sys40.jpeg" class="swiper-image" alt="image">
							</a>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="screenshot-item">
							<a href="img/sys/sys41.jpeg" class="js-zoom-image">
								<img src="img/sys/sys41.jpeg" class="swiper-image" alt="image">
							</a>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="screenshot-item">
							<a href="img/sys/sys31.jpeg" class="js-zoom-image">
								<img src="img/sys/sys31.jpeg" class="swiper-image" alt="image">
							</a>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="screenshot-item">
							<a href="img/sys/sys27.jpeg" class="js-zoom-image">
								<img src="img/sys/sys27.jpeg" class="swiper-image" alt="image">
							</a>
						</div>
					</div>
				</div>

				<!-- If we need pagination -->
				<div class="swiper-pagination"></div>
			</div>

			<!--Prev next buttons-->

			<div class="btn-prev">
				<svg class="utouch-icon icon-hover utouch-icon-arrow-left-1">
					<use xlink:href="#utouch-icon-arrow-left-1"></use>
				</svg>
				<svg class="utouch-icon utouch-icon-arrow-left1">
					<use xlink:href="#utouch-icon-arrow-left1"></use>
				</svg>
			</div>

			<div class="btn-next">
				<svg class="utouch-icon icon-hover utouch-icon-arrow-right-1">
					<use xlink:href="#utouch-icon-arrow-right-1"></use>
				</svg>
				<svg class="utouch-icon utouch-icon-arrow-right1">
					<use xlink:href="#utouch-icon-arrow-right1"></use>
				</svg>
			</div>

		</div>
	</section>
	<!--End Gallery-->
	<!-- Teammembers -->

	<section class="align-center">
		<div class="container">
			<div class="row medium-padding100">
				<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
					<div class="crumina-module crumina-heading">
						<h6 class="heading-sup-title">Our Team</h6>
						<h3 class="heading-title">Our team members will tell you about our technology</h3>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
					<div class="crumina-module crumina-teammembers-item teammember-item--author-round-top thumb--big">

						<div class="teammembers-thumb" data-swiper-parallax="-100">
							<img src="img/test/rk.jpg" alt="team member">
						</div>

						<div class="teammember-content" data-swiper-parallax="-300">

							<div class="teammembers-item-prof">Director Technical</div>

							<a href="#" class="h5 teammembers-item-name">Rajesh Kuttan</a>

							<!-- <ul class="socials socials--round">
								<li>
									<a href="" class="social__item facebook">
										<svg class="utouch-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M15.117 0H.883C.395 0 0 .395 0 .883v14.234c0 .488.395.883.883.883h7.663V9.804H6.46V7.39h2.086V5.607c0-2.066 1.262-3.19 3.106-3.19.883 0 1.642.064 1.863.094v2.16h-1.28c-1 0-1.195.48-1.195 1.18v1.54h2.39l-.31 2.42h-2.08V16h4.077c.488 0 .883-.395.883-.883V.883C16 .395 15.605 0 15.117 0" fill-rule="nonzero"></path></svg>
									</a>
								</li>

								<li>
									<a href="" class="social__item twitter">
										<svg class="utouch-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M16 3.038c-.59.26-1.22.437-1.885.517.677-.407 1.198-1.05 1.443-1.816-.634.37-1.337.64-2.085.79-.598-.64-1.45-1.04-2.396-1.04-1.812 0-3.282 1.47-3.282 3.28 0 .26.03.51.085.75-2.728-.13-5.147-1.44-6.766-3.42C.83 2.58.67 3.14.67 3.75c0 1.14.58 2.143 1.46 2.732-.538-.017-1.045-.165-1.487-.41v.04c0 1.59 1.13 2.918 2.633 3.22-.276.074-.566.114-.865.114-.21 0-.41-.02-.61-.058.42 1.304 1.63 2.253 3.07 2.28-1.12.88-2.54 1.404-4.07 1.404-.26 0-.52-.015-.78-.045 1.46.93 3.18 1.474 5.04 1.474 6.04 0 9.34-5 9.34-9.33 0-.14 0-.28-.01-.42.64-.46 1.2-1.04 1.64-1.7z" fill-rule="nonzero"></path></svg>
									</a>
								</li>

								<li>
									<a href="" class="social__item googlePlus">
										<svg class="utouch-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M8.16 6.857V9.6h4.537c-.183 1.177-1.37 3.45-4.537 3.45-2.73 0-4.96-2.26-4.96-5.05s2.23-5.05 4.96-5.05c1.554 0 2.594.66 3.19 1.233l2.17-2.092C12.126.79 10.32 0 8.16 0c-4.423 0-8 3.577-8 8s3.577 8 8 8c4.617 0 7.68-3.246 7.68-7.817 0-.526-.057-.926-.126-1.326H8.16z"></path></svg>
									</a>
								</li>
							</ul> -->
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
					<div class="crumina-module crumina-teammembers-item teammember-item--author-round-top thumb--big">

						<div class="teammembers-thumb" data-swiper-parallax="-100">
							<img src="img/test/ik.jpg" alt="team member">
						</div>

						<div class="teammember-content" data-swiper-parallax="-300">

							<div class="teammembers-item-prof">Director Sales</div>

							<a href="#" class="h5 teammembers-item-name">Irfan Khadri</a>

							<!-- <ul class="socials socials--round">
								<li>
									<a href="" class="social__item facebook">
										<svg class="utouch-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M15.117 0H.883C.395 0 0 .395 0 .883v14.234c0 .488.395.883.883.883h7.663V9.804H6.46V7.39h2.086V5.607c0-2.066 1.262-3.19 3.106-3.19.883 0 1.642.064 1.863.094v2.16h-1.28c-1 0-1.195.48-1.195 1.18v1.54h2.39l-.31 2.42h-2.08V16h4.077c.488 0 .883-.395.883-.883V.883C16 .395 15.605 0 15.117 0" fill-rule="nonzero"></path></svg>
									</a>
								</li>

								<li>
									<a href="" class="social__item twitter">
										<svg class="utouch-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M16 3.038c-.59.26-1.22.437-1.885.517.677-.407 1.198-1.05 1.443-1.816-.634.37-1.337.64-2.085.79-.598-.64-1.45-1.04-2.396-1.04-1.812 0-3.282 1.47-3.282 3.28 0 .26.03.51.085.75-2.728-.13-5.147-1.44-6.766-3.42C.83 2.58.67 3.14.67 3.75c0 1.14.58 2.143 1.46 2.732-.538-.017-1.045-.165-1.487-.41v.04c0 1.59 1.13 2.918 2.633 3.22-.276.074-.566.114-.865.114-.21 0-.41-.02-.61-.058.42 1.304 1.63 2.253 3.07 2.28-1.12.88-2.54 1.404-4.07 1.404-.26 0-.52-.015-.78-.045 1.46.93 3.18 1.474 5.04 1.474 6.04 0 9.34-5 9.34-9.33 0-.14 0-.28-.01-.42.64-.46 1.2-1.04 1.64-1.7z" fill-rule="nonzero"></path></svg>
									</a>
								</li>

								<li>
									<a href="" class="social__item googlePlus">
										<svg class="utouch-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M8.16 6.857V9.6h4.537c-.183 1.177-1.37 3.45-4.537 3.45-2.73 0-4.96-2.26-4.96-5.05s2.23-5.05 4.96-5.05c1.554 0 2.594.66 3.19 1.233l2.17-2.092C12.126.79 10.32 0 8.16 0c-4.423 0-8 3.577-8 8s3.577 8 8 8c4.617 0 7.68-3.246 7.68-7.817 0-.526-.057-.926-.126-1.326H8.16z"></path></svg>
									</a>
								</li>
							</ul> -->
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
					<div class="crumina-module crumina-teammembers-item teammember-item--author-round-top thumb--big">

						<div class="teammembers-thumb" data-swiper-parallax="-100">
							<img src="img/test/srk.jpeg" alt="team member">
						</div>

						<div class="teammember-content" data-swiper-parallax="-300">

							<div class="teammembers-item-prof">Director R&D</div>

							<a href="#" class="h5 teammembers-item-name">Shanu Kuttan</a>

							<!-- <ul class="socials socials--round">
								<li>
									<a href="" class="social__item facebook">
										<svg class="utouch-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M15.117 0H.883C.395 0 0 .395 0 .883v14.234c0 .488.395.883.883.883h7.663V9.804H6.46V7.39h2.086V5.607c0-2.066 1.262-3.19 3.106-3.19.883 0 1.642.064 1.863.094v2.16h-1.28c-1 0-1.195.48-1.195 1.18v1.54h2.39l-.31 2.42h-2.08V16h4.077c.488 0 .883-.395.883-.883V.883C16 .395 15.605 0 15.117 0" fill-rule="nonzero"></path></svg>
									</a>
								</li>

								<li>
									<a href="" class="social__item twitter">
										<svg class="utouch-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M16 3.038c-.59.26-1.22.437-1.885.517.677-.407 1.198-1.05 1.443-1.816-.634.37-1.337.64-2.085.79-.598-.64-1.45-1.04-2.396-1.04-1.812 0-3.282 1.47-3.282 3.28 0 .26.03.51.085.75-2.728-.13-5.147-1.44-6.766-3.42C.83 2.58.67 3.14.67 3.75c0 1.14.58 2.143 1.46 2.732-.538-.017-1.045-.165-1.487-.41v.04c0 1.59 1.13 2.918 2.633 3.22-.276.074-.566.114-.865.114-.21 0-.41-.02-.61-.058.42 1.304 1.63 2.253 3.07 2.28-1.12.88-2.54 1.404-4.07 1.404-.26 0-.52-.015-.78-.045 1.46.93 3.18 1.474 5.04 1.474 6.04 0 9.34-5 9.34-9.33 0-.14 0-.28-.01-.42.64-.46 1.2-1.04 1.64-1.7z" fill-rule="nonzero"></path></svg>
									</a>
								</li>

								<li>
									<a href="" class="social__item googlePlus">
										<svg class="utouch-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M8.16 6.857V9.6h4.537c-.183 1.177-1.37 3.45-4.537 3.45-2.73 0-4.96-2.26-4.96-5.05s2.23-5.05 4.96-5.05c1.554 0 2.594.66 3.19 1.233l2.17-2.092C12.126.79 10.32 0 8.16 0c-4.423 0-8 3.577-8 8s3.577 8 8 8c4.617 0 7.68-3.246 7.68-7.817 0-.526-.057-.926-.126-1.326H8.16z"></path></svg>
									</a>
								</li>
							</ul> -->
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
					<div class="crumina-module crumina-teammembers-item teammember-item--author-round-top thumb--big">

						<div class="teammembers-thumb" data-swiper-parallax="-100">
							<img src="img/test/rr.jpg" alt="team member">
						</div>

						<div class="teammember-content" data-swiper-parallax="-300">

							<div class="teammembers-item-prof">Development Head</div>

							<a href="#" class="h5 teammembers-item-name">Rekha Rathore</a>

							<!-- <ul class="socials socials--round">
								<li>
									<a href="" class="social__item facebook">
										<svg class="utouch-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M15.117 0H.883C.395 0 0 .395 0 .883v14.234c0 .488.395.883.883.883h7.663V9.804H6.46V7.39h2.086V5.607c0-2.066 1.262-3.19 3.106-3.19.883 0 1.642.064 1.863.094v2.16h-1.28c-1 0-1.195.48-1.195 1.18v1.54h2.39l-.31 2.42h-2.08V16h4.077c.488 0 .883-.395.883-.883V.883C16 .395 15.605 0 15.117 0" fill-rule="nonzero"></path></svg>
									</a>
								</li>

								<li>
									<a href="" class="social__item twitter">
										<svg class="utouch-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M16 3.038c-.59.26-1.22.437-1.885.517.677-.407 1.198-1.05 1.443-1.816-.634.37-1.337.64-2.085.79-.598-.64-1.45-1.04-2.396-1.04-1.812 0-3.282 1.47-3.282 3.28 0 .26.03.51.085.75-2.728-.13-5.147-1.44-6.766-3.42C.83 2.58.67 3.14.67 3.75c0 1.14.58 2.143 1.46 2.732-.538-.017-1.045-.165-1.487-.41v.04c0 1.59 1.13 2.918 2.633 3.22-.276.074-.566.114-.865.114-.21 0-.41-.02-.61-.058.42 1.304 1.63 2.253 3.07 2.28-1.12.88-2.54 1.404-4.07 1.404-.26 0-.52-.015-.78-.045 1.46.93 3.18 1.474 5.04 1.474 6.04 0 9.34-5 9.34-9.33 0-.14 0-.28-.01-.42.64-.46 1.2-1.04 1.64-1.7z" fill-rule="nonzero"></path></svg>
									</a>
								</li>

								<li>
									<a href="" class="social__item googlePlus">
										<svg class="utouch-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M8.16 6.857V9.6h4.537c-.183 1.177-1.37 3.45-4.537 3.45-2.73 0-4.96-2.26-4.96-5.05s2.23-5.05 4.96-5.05c1.554 0 2.594.66 3.19 1.233l2.17-2.092C12.126.79 10.32 0 8.16 0c-4.423 0-8 3.577-8 8s3.577 8 8 8c4.617 0 7.68-3.246 7.68-7.817 0-.526-.057-.926-.126-1.326H8.16z"></path></svg>
									</a>
								</li>
							</ul> -->
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="crumina-module crumina-teammembers-item teammember-item--author-round-top thumb--big">

						<div class="teammembers-thumb" data-swiper-parallax="-100">
							<img src="img/test/ak.jpg" alt="team member">
						</div>

						<div class="teammember-content" data-swiper-parallax="-300">

							<div class="teammembers-item-prof">Full Stack Developer</div>

							<a href="#" class="h5 teammembers-item-name">Akash Chourasia</a>

							<!-- <ul class="socials socials--round">
								<li>
									<a href="" class="social__item facebook">
										<svg class="utouch-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M15.117 0H.883C.395 0 0 .395 0 .883v14.234c0 .488.395.883.883.883h7.663V9.804H6.46V7.39h2.086V5.607c0-2.066 1.262-3.19 3.106-3.19.883 0 1.642.064 1.863.094v2.16h-1.28c-1 0-1.195.48-1.195 1.18v1.54h2.39l-.31 2.42h-2.08V16h4.077c.488 0 .883-.395.883-.883V.883C16 .395 15.605 0 15.117 0" fill-rule="nonzero"></path></svg>
									</a>
								</li>

								<li>
									<a href="" class="social__item twitter">
										<svg class="utouch-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M16 3.038c-.59.26-1.22.437-1.885.517.677-.407 1.198-1.05 1.443-1.816-.634.37-1.337.64-2.085.79-.598-.64-1.45-1.04-2.396-1.04-1.812 0-3.282 1.47-3.282 3.28 0 .26.03.51.085.75-2.728-.13-5.147-1.44-6.766-3.42C.83 2.58.67 3.14.67 3.75c0 1.14.58 2.143 1.46 2.732-.538-.017-1.045-.165-1.487-.41v.04c0 1.59 1.13 2.918 2.633 3.22-.276.074-.566.114-.865.114-.21 0-.41-.02-.61-.058.42 1.304 1.63 2.253 3.07 2.28-1.12.88-2.54 1.404-4.07 1.404-.26 0-.52-.015-.78-.045 1.46.93 3.18 1.474 5.04 1.474 6.04 0 9.34-5 9.34-9.33 0-.14 0-.28-.01-.42.64-.46 1.2-1.04 1.64-1.7z" fill-rule="nonzero"></path></svg>
									</a>
								</li>

								<li>
									<a href="" class="social__item googlePlus">
										<svg class="utouch-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M8.16 6.857V9.6h4.537c-.183 1.177-1.37 3.45-4.537 3.45-2.73 0-4.96-2.26-4.96-5.05s2.23-5.05 4.96-5.05c1.554 0 2.594.66 3.19 1.233l2.17-2.092C12.126.79 10.32 0 8.16 0c-4.423 0-8 3.577-8 8s3.577 8 8 8c4.617 0 7.68-3.246 7.68-7.817 0-.526-.057-.926-.126-1.326H8.16z"></path></svg>
									</a>
								</li>
							</ul> -->
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="crumina-module crumina-teammembers-item teammember-item--author-round-top thumb--big">

						<div class="teammembers-thumb" data-swiper-parallax="-100">
							<img src="img/test/hr.jpg" alt="team member">
						</div>

						<div class="teammember-content" data-swiper-parallax="-300">

							<div class="teammembers-item-prof">Full Stack Developer</div>

							<a href="#" class="h5 teammembers-item-name">Harish Tanty</a>

							<!-- <ul class="socials socials--round">
								<li>
									<a href="" class="social__item facebook">
										<svg class="utouch-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M15.117 0H.883C.395 0 0 .395 0 .883v14.234c0 .488.395.883.883.883h7.663V9.804H6.46V7.39h2.086V5.607c0-2.066 1.262-3.19 3.106-3.19.883 0 1.642.064 1.863.094v2.16h-1.28c-1 0-1.195.48-1.195 1.18v1.54h2.39l-.31 2.42h-2.08V16h4.077c.488 0 .883-.395.883-.883V.883C16 .395 15.605 0 15.117 0" fill-rule="nonzero"></path></svg>
									</a>
								</li>

								<li>
									<a href="" class="social__item twitter">
										<svg class="utouch-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M16 3.038c-.59.26-1.22.437-1.885.517.677-.407 1.198-1.05 1.443-1.816-.634.37-1.337.64-2.085.79-.598-.64-1.45-1.04-2.396-1.04-1.812 0-3.282 1.47-3.282 3.28 0 .26.03.51.085.75-2.728-.13-5.147-1.44-6.766-3.42C.83 2.58.67 3.14.67 3.75c0 1.14.58 2.143 1.46 2.732-.538-.017-1.045-.165-1.487-.41v.04c0 1.59 1.13 2.918 2.633 3.22-.276.074-.566.114-.865.114-.21 0-.41-.02-.61-.058.42 1.304 1.63 2.253 3.07 2.28-1.12.88-2.54 1.404-4.07 1.404-.26 0-.52-.015-.78-.045 1.46.93 3.18 1.474 5.04 1.474 6.04 0 9.34-5 9.34-9.33 0-.14 0-.28-.01-.42.64-.46 1.2-1.04 1.64-1.7z" fill-rule="nonzero"></path></svg>
									</a>
								</li>

								<li>
									<a href="" class="social__item googlePlus">
										<svg class="utouch-icon" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M8.16 6.857V9.6h4.537c-.183 1.177-1.37 3.45-4.537 3.45-2.73 0-4.96-2.26-4.96-5.05s2.23-5.05 4.96-5.05c1.554 0 2.594.66 3.19 1.233l2.17-2.092C12.126.79 10.32 0 8.16 0c-4.423 0-8 3.577-8 8s3.577 8 8 8c4.617 0 7.68-3.246 7.68-7.817 0-.526-.057-.926-.126-1.326H8.16z"></path></svg>
									</a>
								</li>
							</ul> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ... end Teammembers -->
</div>

<!-- Footer -->

@endsection
