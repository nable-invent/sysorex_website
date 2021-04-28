@extends('includes.include')

@section('content')
	<!-- ... End Header -->

	<div class="content-wrapper">

		<!-- Main Slider -->

		<div class="crumina-module crumina-module-slider container-full-width">
			<div class="swiper-container main-slider navigation-center-both-sides" data-effect="fade">

				<!-- Additional required wrapper -->
				<div class="swiper-wrapper">
					<!-- Slides -->
					<div class="swiper-slide bg-1 main-slider-bg-light">

						<div class="container">
							<div class="row table-cell">

								<div
									class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12">

									<div class="slider-content align-center">

										<h1 class="slider-content-title with-decoration" data-swiper-parallax="-100">
											Innovate with Excellence

											<svg class="first-decoration utouch-icon utouch-icon-arrow-left">
												<use xlink:href="#utouch-icon-arrow-left"></use>
											</svg>

											<svg class="second-decoration utouch-icon utouch-icon-arrow-left">
												<use xlink:href="#utouch-icon-arrow-left"></use>
											</svg>

										</h1>
										<h6 class="slider-content-text" data-swiper-parallax="-200">Established in 2014,
											SIE is a business process technology and IT services & consulting company
											with more than 50+ employees.
										</h6>

										<!-- <div class="main-slider-btn-wrap" data-swiper-parallax="-300">

											<a href="03_products.html" class="btn btn--yellow btn--with-shadow">
												Learn More
											</a>

											<a href="02_company.html" class="btn btn-border btn--with-shadow c-primary">
												Get Started Now
											</a>
										</div> -->
									</div>
								</div>
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="slider-thumb" data-swiper-parallax="-400"
										data-swiper-parallax-duration="600">
										<img src="img/slides1.png" alt="slider">
									</div>
								</div>

							</div>
						</div>
					</div>

					<div class="swiper-slide bg-2 main-slider-bg-light">

						<div class="container table">
							<div class="row table-cell">

								<div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
									<div class="slider-content align-both">
										<h2 class="slider-content-title" data-swiper-parallax="-100">
											<span class="c-primary">SYSOREX INNOVATOR EDGE </span>
											<h6 class="slider-content-text" data-swiper-parallax="-200">a leader in
												next-generation Business process technology and IT services &
												consulting.
											</h6>

											<!-- <div class="main-slider-btn-wrap" data-swiper-parallax="-300">

												<a href="#" class="btn btn-market btn--with-shadow">
													<svg class="utouch-icon utouch-icon-apple-logotype-1">
														<use xlink:href="#utouch-icon-apple-logotype-1"></use>
													</svg>
													<div class="text">
														<span class="sup-title">Download on the</span>
														<span class="title">App Store</span>
													</div>
												</a>

												<a href="#" class="btn btn-market btn--with-shadow">
													<img class="utouch-icon" src="svg-icons/google-play.svg"
														alt="google">
													<div class="text">
														<span class="sup-title">Download on the</span>
														<span class="title">Google Play</span>
													</div>
												</a>

											</div> -->

									</div>
								</div>

							</div>
						</div>
					</div>
					<div class="swiper-slide thumb-left bg-3 main-slider-bg-light">

						<div class="container table full-height">
							<div class="row table-cell">
								<div class="col-lg-6 col-sm-12 table-cell">

									<div class="slider-content align-both">

										<h2 class="slider-content-title" data-swiper-parallax="-100">Rise Up With the
											Most Interesting Business Implementation Team</h2>

										<h6 class="slider-content-text" data-swiper-parallax="-200">We make our
											Solutions easy to use, simple to understand, intuitive, engaging and always
											available. The focus on user experience means making that software solutions
											straightforward and easy to customize for a user’s specific role and
											business process.
											At SIE, we’re passionate about bringing simplicity, innovation and
											partnership to the heart and soul of business—the people who run the
											solution.
										</h6>

										<!-- <div class="main-slider-btn-wrap" data-swiper-parallax="-300">

											<a href="02_company.html" class="btn btn--lime btn--with-shadow">
												Get Started Now
											</a>

										</div> -->

									</div>

								</div>

								<div class="col-lg-6 col-sm-12 table-cell">
									<div class="slider-thumb" data-swiper-parallax="-300"
										data-swiper-parallax-duration="500">
										<img src="img/slides2.png" alt="slider">
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>

				<!--Prev next buttons-->

				<div class="btn-prev with-bg">
					<svg class="utouch-icon icon-hover utouch-icon-arrow-left-1">
						<use xlink:href="#utouch-icon-arrow-left-1"></use>
					</svg>
					<svg class="utouch-icon utouch-icon-arrow-left1">
						<use xlink:href="#utouch-icon-arrow-left1"></use>
					</svg>
				</div>

				<div class="btn-next with-bg">
					<svg class="utouch-icon icon-hover utouch-icon-arrow-right-1">
						<use xlink:href="#utouch-icon-arrow-right-1"></use>
					</svg>
					<svg class="utouch-icon utouch-icon-arrow-right1">
						<use xlink:href="#utouch-icon-arrow-right1"></use>
					</svg>
				</div>

			</div>
		</div>

		<!-- ... end Main Slider -->

		<!-- Info Boxes -->

		<section class="medium-padding100" id="about-services">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
						<div class="crumina-module crumina-info-box info-box--standard-hover">

							<div class="info-box-image">
								<img class="utouch-icon" src="svg-icons/businesstech.svg">
								<img class="cloud" src="businesstech.svg">
							</div>

							<div class="info-box-content">
								<a href="#" class="h5 info-box-title">Business Process Technology</a>
								<!-- <p class="info-box-text">Facilitate a effective business process modelling with
									impactful process change with the help of Business Process Consultancy and Sysorex
									xCellence – an Enterprise Solution
								</p> -->
							</div>

							<a href="#" class="btn-next">
								<svg class="utouch-icon icon-hover utouch-icon-arrow-right-1">
									<use xlink:href="#utouch-icon-arrow-right-1"></use>
								</svg>
								<svg class="utouch-icon utouch-icon-arrow-right1">
									<use xlink:href="#utouch-icon-arrow-right1"></use>
								</svg>
							</a>

						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
						<div class="crumina-module crumina-info-box info-box--standard-hover">

							<div class="info-box-image">
								<img class="utouch-icon" src="svg-icons/partnership.svg" alt="smartphone">
								<img class="cloud" src="img/clouds10.png" alt="cloud">
							</div>

							<div class="info-box-content">
								<a href="#" class="h5 info-box-title">Team Extension | Offshore Development Center</a>
								<!-- <p class="info-box-text">Extend your team with our extremely skilled and experienced
									dedicated engineers, business analysts, scrum masters, and QA specialists who will
									enable you to create complex software solutions by upscaling your software
									development capacities.
								</p> -->
							</div>

							<a href="#" class="btn-next">
								<svg class="utouch-icon icon-hover utouch-icon-arrow-right-1">
									<use xlink:href="#utouch-icon-arrow-right-1"></use>
								</svg>
								<svg class="utouch-icon utouch-icon-arrow-right1">
									<use xlink:href="#utouch-icon-arrow-right1"></use>
								</svg>
							</a>

						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
						<div class="crumina-module crumina-info-box info-box--standard-hover">

							<div class="info-box-image">
								<img class="utouch-icon" src="svg-icons/smartphone.svg" alt="smartphone">
								<img class="cloud" src="img/clouds8.png" alt="cloud">
							</div>

							<div class="info-box-content">
								<a href="#" class="h5 info-box-title">Custom Software Development</a>
								<!-- <p class="info-box-text">We are a software development company that offers top-rated
									Software Development Services due to our vast experience, team of skilled
									professionals, key business insights, and a dedicated working process.
								</p> -->
							</div>
							<a href="#" class="btn-next">
								<svg class="utouch-icon icon-hover utouch-icon-arrow-right-1">
									<use xlink:href="#utouch-icon-arrow-right-1"></use>
								</svg>
								<svg class="utouch-icon utouch-icon-arrow-right1">
									<use xlink:href="#utouch-icon-arrow-right1"></use>
								</svg>
							</a>

						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
						<div class="crumina-module crumina-info-box info-box--standard-hover">

							<div class="info-box-image">
								<img class="utouch-icon" src="img/devopsnew.png">
								<img class="cloud" src="devopsnew.png">
							</div>

							<div class="info-box-content">
								<a href="#" class="h5 info-box-title">DevOps : Hire SIE DevOps Consulting Services.</a>
								<!-- <p class="info-box-text">Work with our DevOps team which is a unique combination of
									philosophies, practices and tools which increase the delivery of applications,
									services and products effectively and efficiently.
									Collaboration of Development and Operations is help us to not only share our
									workflows but also share our responsibility of services and products.
								</p> -->
							</div>
							<a href="#" class="btn-next">
								<svg class="utouch-icon icon-hover utouch-icon-arrow-right-1">
									<use xlink:href="#utouch-icon-arrow-right-1"></use>
								</svg>
								<svg class="utouch-icon utouch-icon-arrow-right1">
									<use xlink:href="#utouch-icon-arrow-right1"></use>
								</svg>
							</a>

						</div>
					</div>
				</div>
				<div class="row">

					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="crumina-module crumina-info-box info-box--standard-hover">

							<div class="info-box-image">
								<img class="utouch-icon" src="svg-icons/producteng.svg">
								<img class="cloud" src="producteng.svg">
							</div>

							<div class="info-box-content">
								<a href="#" class="h5 info-box-title">Product Engineering</a>
								<!-- <p class="info-box-text">SIE is a leader in digital inventions which engineers technical
									solutions and products as per your business vision. All you have to do is set the
									budget for your project in advance and the rest of the things will be taken care of
									by our highly proficient team.</p> -->
							</div>
							<a href="#" class="btn-next">
								<svg class="utouch-icon icon-hover utouch-icon-arrow-right-1">
									<use xlink:href="#utouch-icon-arrow-right-1"></use>
								</svg>
								<svg class="utouch-icon utouch-icon-arrow-right1">
									<use xlink:href="#utouch-icon-arrow-right1"></use>
								</svg>
							</a>

						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="crumina-module crumina-info-box info-box--standard-hover">

							<div class="info-box-image">
								<img class="utouch-icon" src="svg-icons/call-center.svg">
								<img class="cloud" src="call-center.svg">
							</div>

							<div class="info-box-content">
								<a href="#" class="h5 info-box-title">BPO Services</a>
								<!-- <p class="info-box-text">Research & Analytics, Data Management, Finance & Accounting,
									Human Resource Outsourcing - all on your fingertips, with SIE
								</p> -->
							</div>

							<a href="#" class="btn-next">
								<svg class="utouch-icon icon-hover utouch-icon-arrow-right-1">
									<use xlink:href="#utouch-icon-arrow-right-1"></use>
								</svg>
								<svg class="utouch-icon utouch-icon-arrow-right1">
									<use xlink:href="#utouch-icon-arrow-right1"></use>
								</svg>
							</a>

						</div>
					</div>

					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="crumina-module crumina-info-box info-box--standard-hover">

							<div class="info-box-image">
								<img class="utouch-icon" src="svg-icons/application.svg">
								<img class="cloud" src="img/application.svg">
							</div>

							<div class="info-box-content">
								<a href="#" class="h5 info-box-title">Application Development</a>
								<!-- <p class="info-box-text">Our mobile app developers can build state-of-art mobile app to
									your requirement. Designing, building, and implementing software applications with
									advanced and updated tools for efficient and optimized applications</p> -->
							</div>
							<a href="#" class="btn-next">
								<svg class="utouch-icon icon-hover utouch-icon-arrow-right-1">
									<use xlink:href="#utouch-icon-arrow-right-1"></use>
								</svg>
								<svg class="utouch-icon utouch-icon-arrow-right1">
									<use xlink:href="#utouch-icon-arrow-right1"></use>
								</svg>
							</a>

						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- ... end Info Boxes -->
		<!-- Timeline Slider-->
		<section class="crumina-module crumina-module-slider bg-blue-lighteen medium-padding100" id="about-timeline">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-12 col-sm-offset-0">
						<div class="crumina-module crumina-heading align-center">
							<h3 class="heading-title">Companies Timeline</h3>
						</div>
					</div>

					<div class="col-lg-12 col-sm-12 col-md-12">
						<div class="swiper-container pagination-bottom" data-show-items="3">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<div class="crumina-module crumina-info-box info-box--time-line">

										<div class="info-box-image bg-primary-color">
											<svg class="utouch-icon">
												<use xlink:href="#utouch-icon-checked"></use>
											</svg>
											<svg class="utouch-icon utouch-icon-dot-arrow time-line-arrow">
												<use xlink:href="#utouch-icon-dot-arrow"></use>
											</svg>
										</div>

										<div class="info-box-content">
											<h6 class="timeline-year c-primary">2014</h6>
											<a href="#" class="h6 info-box-title">Birth of sys0rex</a>
											<p class="info-box-text">SIE was born with 2 like-minded technocrats.
												Journey of a Lifetime begin taking first steps.</p>
										</div>

									</div>
								</div>

								<div class="swiper-slide">
									<div class="crumina-module crumina-info-box info-box--time-line">

										<div class="info-box-image bg-orange">
											<svg class="utouch-icon">
												<use xlink:href="#utouch-icon-checked"></use>
											</svg>
											<svg class="utouch-icon utouch-icon-dot-arrow time-line-arrow">
												<use xlink:href="#utouch-icon-dot-arrow"></use>
											</svg>
										</div>

										<div class="info-box-content">
											<h6 class="timeline-year c-orange">2017</h6>
											<a href="#" class="h6 info-box-title">Xcellence Formed</a>
											<p class="info-box-text">Took 4 years to develop and release our first
												version of enterprise solution “sysorex xCellence”</p>
										</div>

									</div>
								</div>

								<div class="swiper-slide">
									<div class="crumina-module crumina-info-box info-box--time-line">

										<div class="info-box-image bg-red">
											<svg class="utouch-icon">
												<use xlink:href="#utouch-icon-checked"></use>
											</svg>
											<svg class="utouch-icon utouch-icon-dot-arrow time-line-arrow">
												<use xlink:href="#utouch-icon-dot-arrow"></use>
											</svg>
										</div>

										<div class="info-box-content">
											<h6 class="timeline-year c-red">2018</h6>
											<a href="#" class="h6 info-box-title">Inscribed</a>
											<p class="info-box-text">Registered SYSOREX IT SOLUTION in Abu Dhabi, UAE
												and setup presence in UAE</p>
										</div>

									</div>
								</div>

								<div class="swiper-slide">
									<div class="crumina-module crumina-info-box info-box--time-line">

										<div class="info-box-image bg-green">
											<svg class="utouch-icon">
												<use xlink:href="#utouch-icon-checked"></use>
											</svg>
											<svg class="utouch-icon utouch-icon-dot-arrow time-line-arrow">
												<use xlink:href="#utouch-icon-dot-arrow"></use>
											</svg>
										</div>

										<div class="info-box-content">
											<h6 class="timeline-year c-green">2019</h6>
											<a href="#" class="h6 info-box-title">Business Process Technology
												Developed</a>
											<p class="info-box-text">Successfully implemented and released next version
												of “sysorex xCellence”
												Business Process Technology was concieved for our company which would
												provide BPO services to the world efficiently and economically.
											</p>
										</div>

									</div>
								</div>
								<div class="swiper-slide">
									<div class="crumina-module crumina-info-box info-box--time-line">

										<div class="info-box-image bg-red">
											<svg class="utouch-icon">
												<use xlink:href="#utouch-icon-checked"></use>
											</svg>
											<svg class="utouch-icon utouch-icon-dot-arrow time-line-arrow">
												<use xlink:href="#utouch-icon-dot-arrow"></use>
											</svg>
										</div>

										<div class="info-box-content">
											<h6 class="timeline-year c-red">2020</h6>
											<a href="#" class="h6 info-box-title">Branches Spread</a>
											<p class="info-box-text">Registered SYSOREX INNOATOR EDGEand setup global
												presence in
												North Carolina, United States
												Muscat, Oman
												Chhattisgarh, India
											</p>
										</div>

									</div>
								</div>
								<div class="swiper-slide">
									<div class="crumina-module crumina-info-box info-box--time-line">

										<div class="info-box-image bg-orange">
											<svg class="utouch-icon">
												<use xlink:href="#utouch-icon-checked"></use>
											</svg>
											<svg class="utouch-icon utouch-icon-dot-arrow time-line-arrow">
												<use xlink:href="#utouch-icon-dot-arrow"></use>
											</svg>
										</div>

										<div class="info-box-content">
											<h6 class="timeline-year c-orange">2021</h6>
											<a href="#" class="h6 info-box-title">Social Contribution</a>
											<p class="info-box-text">Initiated to start social work and form
												Non-government organization
												under SIE group for empower of women under the umbrella of skill
												Development programs of Government of India.
											</p>
										</div>

									</div>
								</div>
							</div>

							<!--Prev next buttons-->

							<div class="btn-slider-wrap navigation-center-bottom">

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
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- If we need pagination -->
		<!-- <div
			class="swiper-pagination pagination-swiper-unique-id-1 swiper-pagination-clickable swiper-pagination-bullets">
			<span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span
				class="swiper-pagination-bullet"></span><span
				class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span
				class="swiper-pagination-bullet"></span>
		</div> -->
		<!--End Timeline Slider-->
		<!-- Video -->

		<section class="bg-8  background-contain pt100">
			<div class="container">
				<div class="row ">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
						<div class="crumina-module crumina-our-video video-container ">
							<div class="video-thumb ">
								<video controls id="sysorexVideo" poster="img/videobanner.png">
									<source src="video/video1.mp4" type=video/mp4>
								</video>
							</div>
						</div>
					</div>
				</div>
				<div class="row padding-y-4">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="row dis-flex align-items-center">
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="crumina-module crumina-heading">
									<!-- <h6 class="heading-sup-title">Watch the video</h6> -->
									<h2 class="heading-title">The <span class="c-primary">SIE</span> maneuver</h2>
									<p class="heading-text">In our journey of over 3 years, we have initiated some of
										the major
										changes that have led to SIE emergence as the leader destination for software
										services
										talent and business process technology.
									</p>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-align-center">
								<a onclick="handleWatchNow()"
									class="btn btn-small btn--icon-right btn-border btn--with-shadow c-primary">
									<svg class="utouch-icon utouch-icon-arrow-right1">
										<use xlink:href="#utouch-icon-arrow-right1"></use>
									</svg>
									<div class="text">
										<span class="title">Watch Now!!!</span>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- ... end Video -->
		<!--Technology Block-->
		<section class=" background-contain padding-y-4">
			<h2 class="heading-title text-align-center"><span class="c-primary">Technology expertise</span></h2>
			<div class="container">
				<div class="row">
					<div class="box">
						<!--Backend-->
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 padding-1">
							<a class="clients-item justify-center" href="https://dotnet.microsoft.com/">
								<img src="img/vbnet.jpeg" class="" alt="logo">
							</a>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 padding-1">
							<a class="clients-item justify-center" href="https://www.php.net/">
								<img src="svg-icons/php.svg" class="" alt="logo">
							</a>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 padding-1">
							<a class="clients-item justify-center" href="https://nodejs.org/en/">
								<img src="svg/nodejs.svg" class="" alt="logo">
							</a>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 padding-1">
							<a class="clients-item justify-center" href="https://www.oracle.com/index.html">
								<img src="svg/java.svg" class="" alt="logo">
							</a>
						</div>
						<!--Frontend-->
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 padding-1">
							<a class="clients-item justify-center" href="https://reactjs.org/">
								<img src="svg/react.svg" class="" alt="logo">
							</a>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 padding-1">
							<a class="clients-item justify-center" href="https://angular.io/">
								<img src="svg/angular.svg" class="" alt="logo">
							</a>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 padding-1">
							<a class="clients-item justify-center" href="https://flutter.dev/">
								<img src="svg/flutter.svg" class="" alt="logo">
							</a>
						</div>
						<!--Frameworks-->
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 padding-1">
							<a class="clients-item justify-center" href="https://laravel.com/">
								<img src="svg/laravel.svg" class="" alt="logo">
							</a>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 padding-1">
							<a class="clients-item justify-center" href="https://www.djangoproject.com/">
								<img src="svg/django.svg" class="" alt="logo">
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- ... end End Technology Block -->


		<!-- Milestone Slider -->

		<section class="crumina-module crumina-module-slider pt100">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 mb30">
						<div class="crumina-module crumina-heading">
							<h6 class="heading-sup-title">Achievements</h6>
							<h2 class="heading-title">Milestones achieved</h2>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="swiper-container navigation-bottom" data-effect="fade">
							<div class="slider-slides">
								<a href="#" class="slides-item">
									1
								</a>

								<a href="#" class="slides-item">
									2
								</a>

								<a href="#" class="slides-item">
									3
								</a>

								<a href="#" class="slides-item">
									4
								</a>

								<a href="#" class="slides-item">
									5
								</a>

								<a href="#" class="slides-item">
									6
								</a>
							</div>
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<div class="col-lg-4 col-md-12 col-sm-12" data-swiper-parallax="-100">
										<div class="slider-faqs-thumb">
											<img class="utouch-icon" src="img/arabiancomp.png" alt="image">
										</div>
									</div>

									<div class="col-lg-8 col-md-12 col-sm-12" data-swiper-parallax="-300">
										<h5 class="slider-faqs-title">Arabian Group of Companies</h5>

										<div class="row">
											<div class="col-lg-6 col-md-6 col-sm-12">
												<p>Arabian is a 100% locally owned entity founded in 1967, has been
													instrumental in introducing different subsidiaries that complement
													each other with the focused view of offering customers a
													one-stop-shop for all their interior turnkey solutions.
												</p>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-12">
												<p>SIE successfully implemented trading enterprise solution to cater
													multi-dimensional trading requirements of the group which included:
												</p>
												<ul class="list list--standard">
													<li>
														<svg class="utouch-icon utouch-icon-correct-symbol-1">
															<use xlink:href="#utouch-icon-correct-symbol-1"></use>
														</svg>
														<a href="#">Whole sale Trading</a>
													</li>
													<li>
														<svg class="utouch-icon utouch-icon-correct-symbol-1">
															<use xlink:href="#utouch-icon-correct-symbol-1"></use>
														</svg>
														<a href="#">Retail Trading</a>
													</li>
													<li>
														<svg class="utouch-icon utouch-icon-correct-symbol-1">
															<use xlink:href="#utouch-icon-correct-symbol-1"></use>
														</svg>
														<a href="#">Project based Trading</a>
													</li>
													<li>
														<svg class="utouch-icon utouch-icon-correct-symbol-1">
															<use xlink:href="#utouch-icon-correct-symbol-1"></use>
														</svg>
														<a href="#">Assemble to order trading & POS solutions</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="col-lg-4 col-md-12 col-sm-12" data-swiper-parallax="-100">
										<div class="slider-faqs-thumb">
											<img class="utouch-icon" src="img/ERLOGO-black.png" alt="image">
										</div>
									</div>

									<div class="col-lg-8 col-md-12 col-sm-12" data-swiper-parallax="-300">
										<h5 class="slider-faqs-title">Etihad railway – China Railway Construction
											Company (CRCC)</h5>
										<p>Etihad Rail was established in June 2009 by UAE Federal Decree to manage the
											development, construction and operation of the United Arab Emirates’
											national freight and passenger railway network.
											Etihad Rail utilizes it's resources in the efficient and effective shipment
											and logistics services. A few of the services which they offer are: </p>

										<div class="row">
											<div class="col-lg-6 col-md-6 col-sm-12">
												<ul class="list list--standard">
													<li>
														<svg class="utouch-icon utouch-icon-correct-symbol-1">
															<use xlink:href="#utouch-icon-correct-symbol-1"></use>
														</svg>
														<a href="#">Frieght Services : Shipping and Logistics</a>
													</li>
													<li>
														<svg class="utouch-icon utouch-icon-correct-symbol-1">
															<use xlink:href="#utouch-icon-correct-symbol-1"></use>
														</svg>
														<a href="#">Property Development: Warehousing, Facility
															Development and Loading-unloading operations</a>
													</li>
												</ul>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-12">
												<ul class="list list--standard">
													<li>
														<svg class="utouch-icon utouch-icon-correct-symbol-1">
															<use xlink:href="#utouch-icon-correct-symbol-1"></use>
														</svg>
														<a href="#">Advertising Space: Rolling Stock, in-terminal
															advertising etc.</a>
													</li>
													<li>
														<svg class="utouch-icon utouch-icon-correct-symbol-1">
															<use xlink:href="#utouch-icon-correct-symbol-1"></use>
														</svg>
														<a href="#">Terminal Services: Transit or loading and offloading
															at terminals or logistics hub</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="col-lg-4 col-md-12 col-sm-12" data-swiper-parallax="-100">
										<div class="slider-faqs-thumb">
											<img class="utouch-icon" src="img/idc.png" alt="image">
										</div>
									</div>

									<div class="col-lg-8 col-md-8 col-sm-12" data-swiper-parallax="-100">
										<h5 class="slider-faqs-title">International Development Company</h5>
										<p>Based in Abu Dhabi, IDC is one of the leading companies operating in the oil,
											gas, power & water, petrochemical and project construction sectors in the
											UAE. Established in 1978, they have 38 years of accumulated knowledge,
											experience and expertise in these fields.
											SIE successfully implemented enterprise solution to take care all of the
											back to back trading solutions with multiple currencies, cost estimation and
											job costing.
										</p>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-12">
										<div class="crumina-module crumina-info-box info-box--standard">
											<div class="info-box-image display-flex">
												<svg class="utouch-icon utouch-icon-checked">
													<use xlink:href="#utouch-icon-checked"></use>
												</svg>
												<h6 class="info-box-title">Quality Standards and Assurance</h6>
											</div>
											<p class="info-box-text">IDC is known for their in-house QA procedures with
												international standards from ISO: 9001: 2015, Trace certifications,
												HSEMS standards.
											</p>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="col-lg-4 col-md-12 col-sm-12" data-swiper-parallax="-100">
										<div class="slider-faqs-thumb">
											<img class="utouch-icon" src="img/adaacorp.png" alt="image">
										</div>
									</div>

									<div class="col-lg-8 col-md-12 col-sm-12" data-swiper-parallax="-300">
										<h5 class="slider-faqs-title">Adaa Employment</h5>
										<p class="weight-bold">ADAA is an established recruitment business with 10 years
											of experience providing innovative,
											cost effective manpower solutions for construction, testing and
											commissioning.
										</p>
										<p>SIE successfully implemented enterprise solution to take care the manpower
											supply requirements and management of operations
											related to managing the manpower resources from utilization, allocation,
											tracking, transportation etc.
										</p>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="col-lg-4 col-md-12 col-sm-12" data-swiper-parallax="-100">
										<div class="slider-faqs-thumb">
											<img class="utouch-icon" src="img/racingfed.png" alt="image">
										</div>
									</div>

									<div class="col-lg-8 col-md-12 col-sm-12" data-swiper-parallax="-300">
										<h5 class="slider-faqs-title">UAE EQUESTRIAN AND RACING FEDERATION</h5>

										<div class="row">
											<div class="col-lg-6 col-md-6 col-sm-12">
												<p>The federation was established under the guidance of His Highness
													Sheikh Zayed bin Sultan Al Nahyan,
													founder of the United Arab Emirates, in accordance with the
													ministerial Resolution No. 61 (1992),
													under the name of the 'United Arab Emirates Equestrian and Racing
													Federation'.
													SIE successfully implemented enterprise solution to take care the
													huge requirement of federation to address the operation and finance
													to bring in a single platform.
													We have implemented sys0rex xCellence and synchronize multiple
													application in record time.
												</p>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="col-lg-4 col-md-12 col-sm-12" data-swiper-parallax="-100">
										<div class="slider-faqs-thumb">
											<img class="utouch-icon" src="img/emplojo-logo-6.png" alt="image">
										</div>
									</div>

									<div class="col-lg-8 col-md-8 col-sm-12" data-swiper-parallax="-100">
										<h5 class="slider-faqs-title">Emplojo</h5>
										<p>Based in Abu Dhabi, Emplojo is an application which connects job seekers to the required recruiters. 
											This application provides the user to create a profile on the application, which later can be seen by a recruiter.
											The application allows the recruiter to filter the candidates based on different requirements as well such as profile, skills etc.
											the sys0rex team was involved in complete implementation of ths application right from development to delivery.
										</p>
									</div>
								</div>
							</div>

							<!--Prev next buttons-->

							<!-- <div class="btn-slider-wrap navigation-left-bottom">

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

							</div> -->

						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- ... end Milestone Slider -->

		<!-- Events-->
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="row bg-light">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
							<div class="crumina-module crumina-pricing-tables-item pricing-tables-item-solid bg-light">
								<div class="bg-layer full-block"></div>
								<div class="main-pricing-content">
									<h6 class="pricing-title c-primary">Check out our Latest Event</h6>									
									<h2 class="h1 rate">MODERN AGE SPARTAN</h2>
									<!--<h6 class="period">Per Month</h6>-->
									<ul class="pricing-tables-position">
										<li class="position-item">
											THE WARRIOR
										</li>
										
										<li class="position-item">
											BATTLE BEGINS NOW
										</li>
										<li class="position-item">
											Are you ready for your move?
										</li>
									</ul>
								</div>
								<a href="events.html" class="btn btn--primary btn--with-shadow"
									style="width: 50%; margin: 0 auto">
									Get Started Now
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Testimonials -->

		<!-- <section
			class="crumina-module crumina-module-slider bg-4 cloud-center navigation-center-both-sides medium-padding100">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-12 col-sm-offset-0">
						<div class="swiper-container" data-effect="fade">
							<div class="swiper-wrapper">
								<div
									class="crumina-module crumina-testimonial-item testimonial-item-author-top swiper-slide">

									<div class="testimonial-img-author" data-swiper-parallax="-100">
										<img src="img/author2.png" alt="avatar">
									</div>

									<h6 class="testimonial-text" data-swiper-parallax="-300">
										Dummy Text here
									</h6>

									<div class="author-info-wrap" data-swiper-parallax="-100">

										<div class="author-info">
											<a href="#" class="h6 author-name">Irfan Khadri</a>
											<div class="author-company">Managing Director</div>
										</div>

									</div>
								</div>

								<div
									class="crumina-module crumina-testimonial-item testimonial-item-author-top swiper-slide">

									<div class="testimonial-img-author" data-swiper-parallax="-100">
										<img src="img/author2.png" alt="avatar">
									</div>

									<h6 class="testimonial-text" data-swiper-parallax="-300">
										Dummy Text 2
									</h6>

									<div class="author-info-wrap" data-swiper-parallax="-100">

										<div class="author-info">
											<a href="#" class="h6 author-name">Rajesh Kuttan</a>
											<div class="author-company">Technical Lead</div>
										</div>

									</div>
								</div>

								<div
									class="crumina-module crumina-testimonial-item testimonial-item-author-top swiper-slide">

									<div class="testimonial-img-author" data-swiper-parallax="-100">
										<img src="img/author2.png" alt="avatar">
									</div>

									<h6 class="testimonial-text" data-swiper-parallax="-300">
										Dummy Text 3
									</h6>

									<div class="author-info-wrap" data-swiper-parallax="-100">

										<div class="author-info">
											<a href="#" class="h6 author-name">Rekha Rathore</a>
											<div class="author-company">Business executive</div>
										</div>

									</div>
								</div>
								<div
									class="crumina-module crumina-testimonial-item testimonial-item-author-top swiper-slide">

									<div class="testimonial-img-author" data-swiper-parallax="-100">
										<img src="img/author2.png" alt="avatar">
									</div>

									<h6 class="testimonial-text" data-swiper-parallax="-300">
										Dummy Text 4
									</h6>

									<div class="author-info-wrap" data-swiper-parallax="-100">

										<div class="author-info">
											<a href="#" class="h6 author-name">Akash Chourasia</a>
											<div class="author-company">Developer, Flutter(Dart)</div>
										</div>

									</div>
								</div>
								<div
									class="crumina-module crumina-testimonial-item testimonial-item-author-top swiper-slide">

									<div class="testimonial-img-author" data-swiper-parallax="-100">
										<img src="img/author2.png" alt="avatar">
									</div>

									<h6 class="testimonial-text" data-swiper-parallax="-300">
										Dummy Text 5
									</h6>

									<div class="author-info-wrap" data-swiper-parallax="-100">

										<div class="author-info">
											<a href="#" class="h6 author-name">Harish Tanty</a>
											<div class="author-company">Developer(React and Python)</div>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>

			Prev next buttons

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
		</section> -->
		<div class="" style="height: 100px;"></div>
		<section class="crumina-module crumina-module-slider background-contain bg-16 bg-blue-lighteen pt100 ">
			<div class="container">
				<div class="row">
					<div class="crumina-module crumina-module-img-bottom">
						<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 clientelle-img">
							<img class="img-bottom" src="img/man2.png" alt="man">
						</div>
	
						<div class="col-lg-8 col-lg-offset-1 col-md-12 col-sm-12 col-xs-12">
							<div class="row">
								<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
									<div class="crumina-module-img-content">
										<div class="crumina-module crumina-heading">
											<h2 class="heading-title clientelle-heading">Our Growing Clientelle</h2>
											<!-- <h5 class="heading-title">What our clients think about us</h5> -->
										</div>
									</div>
								</div>
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="swiper-container top-navigation" data-show-items="2">
										<div class="swiper-wrapper" >
									
										
									
											
											<!-- <div id="testimonial"> -->
												<div class="swiper-slide">
													<div class="col-lg-12 col-md-12 col-sm-12">
														<div class="crumina-module crumina-testimonial-item testimonial-item-arrow">
															<div class="author-info-wrap">
																<div class="testimonial-img-author">
																	<img src="img/testimonial/testimonial1.png" alt="author">
																</div>
																<div class="author-info">
																	<a href="#" class="h6 author-name">Adnan Alsayadi</a>
																	<div class="author-company">Head of IT Department at UAE Equestrian And Racing Federation - إتحاداللإماراتللفروسيةوالسباق

																	</div>
																</div>
															</div>
		
															<h6 class="testimonial-text">
																We needed a solution that would merge all departments from Finance to operation and which would integrate with Federation, 
																Inventory, Sales, Purchase, and HR/Payroll etc. 
																The key was availability of information at the right time and the right place and with sys0rex xCellence ERP solution in place;
																we are happy and believe all future requirements will be met with sys0rex xCellence ERP. 
																I would not hesitate to recommend sys0rex xCellence ERP to any clients, 
																as I know they will receive a world-class service.
															</h6>
		
															<ul class="rait-stars">
																<li>
																	 <a href="#"> 
																		<svg class="utouch-icon utouch-icon-star">
																			<use xlink:href="#utouch-icon-star"></use>
																		</svg>
																</a> 
																</li>
																<li>
																	<a href="#"> 
																	   <svg class="utouch-icon utouch-icon-star">
																		   <use xlink:href="#utouch-icon-star"></use>
																	   </svg>
															   		</a> 
															   </li>
															   <li>
																<a href="#"> 
																   <svg class="utouch-icon utouch-icon-star">
																	   <use xlink:href="#utouch-icon-star"></use>
																   </svg>
														   		</a> 
														   		</li>
														   		<li>
																	<a href="#"> 
																	<svg class="utouch-icon utouch-icon-star">
																		<use xlink:href="#utouch-icon-star"></use>
																	</svg>
													   			</a> 
													   			</li>
													  			 <li>
																	<a href="#"> 
																	<svg class="utouch-icon utouch-icon-star">
																		<use xlink:href="#utouch-icon-star"></use>
																	</svg>
																	</a> 
												   				</li>
																
															</ul>
		
														</div>
		
													</div>
												</div>
												<div class="swiper-slide">
													<div class="col-lg-12 col-md-12 col-sm-12">
														<div class="crumina-module crumina-testimonial-item testimonial-item-arrow">
															<div class="author-info-wrap">
																<div class="testimonial-img-author">
																	<img src="img/testimonial/testimonial2.png" alt="author">
																</div>
																<div class="author-info">
																	<a href="#" class="h6 author-name">Fayez Chaoul</a>
																	<div class="author-company">Managing Director at Adaa Employment L.L.C</div>
																</div>
															</div>
		
															<h6 class="testimonial-text">
																Sys0rex xCellence is a really well-integrated system that covers sales, 
																purchasing, General Ledger, 
																payroll, manpower supply operation and a number of other tasks.
															</h6>
		
															<ul class="rait-stars">
																<li>
																	 <a href="#"> 
																		<svg class="utouch-icon utouch-icon-star">
																			<use xlink:href="#utouch-icon-star"></use>
																		</svg>
																</a> 
																</li>
																<li>
																	<a href="#"> 
																	   <svg class="utouch-icon utouch-icon-star">
																		   <use xlink:href="#utouch-icon-star"></use>
																	   </svg>
															   		</a> 
															   </li>
															   <li>
																<a href="#"> 
																   <svg class="utouch-icon utouch-icon-star">
																	   <use xlink:href="#utouch-icon-star"></use>
																   </svg>
														   		</a> 
														   		</li>
														   		<li>
																	<a href="#"> 
																	<svg class="utouch-icon utouch-icon-star">
																		<use xlink:href="#utouch-icon-star"></use>
																	</svg>
													   			</a> 
													   			</li>
													  			 <li>
																	<a href="#"> 
																	<svg class="utouch-icon utouch-icon-star">
																		<use xlink:href="#utouch-icon-star"></use>
																	</svg>
																	</a> 
												   				</li>
																
															</ul>
		
														</div>
		
													</div>
												</div>
												<div class="swiper-slide">
													<div class="col-lg-12 col-md-12 col-sm-12">
														<div class="crumina-module crumina-testimonial-item testimonial-item-arrow">
															<div class="author-info-wrap">
																<div class="testimonial-img-author">
																	<img src="img/testimonial/testimonial3.png" alt="author">
																</div>
																<div class="author-info">
																	<a href="#" class="h6 author-name">Mahmoud Dayeh</a>
																	<div class="author-company">General Manager at Absons IT Solutions and Equipments</div>
																</div>
															</div>
		
															<h6 class="testimonial-text">
																Sys0rex xCellence provides a comprehensive, 
																easy to use POS system with customizable features that grows your business.
															</h6>
		
															<ul class="rait-stars">
																<li>
																	 <a href="#"> 
																		<svg class="utouch-icon utouch-icon-star">
																			<use xlink:href="#utouch-icon-star"></use>
																		</svg>
																</a> 
																</li>
																<li>
																	<a href="#"> 
																	   <svg class="utouch-icon utouch-icon-star">
																		   <use xlink:href="#utouch-icon-star"></use>
																	   </svg>
															   		</a> 
															   </li>
															   <li>
																<a href="#"> 
																   <svg class="utouch-icon utouch-icon-star">
																	   <use xlink:href="#utouch-icon-star"></use>
																   </svg>
														   		</a> 
														   		</li>
														   		<li>
																	<a href="#"> 
																	<svg class="utouch-icon utouch-icon-star">
																		<use xlink:href="#utouch-icon-star"></use>
																	</svg>
													   			</a> 
													   			</li>
													  			 <li>
																	<a href="#"> 
																	<svg class="utouch-icon utouch-icon-star">
																		<use xlink:href="#utouch-icon-star"></use>
																	</svg>
																	</a> 
												   				</li>
																
															</ul>
		
														</div>
		
													</div>
												</div>
												<div class="swiper-slide">
													<div class="col-lg-12 col-md-12 col-sm-12">
														<div class="crumina-module crumina-testimonial-item testimonial-item-arrow">
															<div class="author-info-wrap">
																<div class="testimonial-img-author">
																	<img src="img/testimonial/testimonial4.png" alt="author">
																</div>
																<div class="author-info">
																	<a href="#" class="h6 author-name">

																		Sherief Al Gharabawy, 
																		</a>
																	<div class="author-company">Managing Director at ARCO Interiors LLC (Arabian Company Group)

																	</div>
																</div>
															</div>
		
															<h6 class="testimonial-text">
																Thanks to sys0rex xCellence Team's thorough understanding of the Contracting industry and their deep knowledge of Business Process, 
																we've been able to get an extraordinary amount of information from our ERP system sys0rex xCellence, in the precise format that we want.
																I want to personally communicate my very high regard and respect for the quality of the support team that sys0rex xCellence Team provided for this project.
																They have all been extremely competent, very hard working and an absolute pleasure to work with.
															</h6>
		
															<ul class="rait-stars">
																<li>
																	 <a href="#"> 
																		<svg class="utouch-icon utouch-icon-star">
																			<use xlink:href="#utouch-icon-star"></use>
																		</svg>
																</a> 
																</li>
																<li>
																	<a href="#"> 
																	   <svg class="utouch-icon utouch-icon-star">
																		   <use xlink:href="#utouch-icon-star"></use>
																	   </svg>
															   		</a> 
															   </li>
															   <li>
																<a href="#"> 
																   <svg class="utouch-icon utouch-icon-star">
																	   <use xlink:href="#utouch-icon-star"></use>
																   </svg>
														   		</a> 
														   		</li>
														   		<li>
																	<a href="#"> 
																	<svg class="utouch-icon utouch-icon-star">
																		<use xlink:href="#utouch-icon-star"></use>
																	</svg>
													   			</a> 
													   			</li>
													  			 <li>
																	<a href="#"> 
																	<svg class="utouch-icon utouch-icon-star">
																		<use xlink:href="#utouch-icon-star"></use>
																	</svg>
																	</a> 
												   				</li>
																
															</ul>
		
														</div>
		
													</div>
												</div>
												<div class="swiper-slide">
													<div class="col-lg-12 col-md-12 col-sm-12">
														<div class="crumina-module crumina-testimonial-item testimonial-item-arrow">
															<div class="author-info-wrap">
																<div class="testimonial-img-author">
																	<img src="img/testimonial/testimonial5.png" alt="author">
																</div>
																<div class="author-info">
																	<a href="#" class="h6 author-name">ThamirShamsi,</a>
																	<div class="author-company">Business Development Manager at International Development Company</div>
																</div>
															</div>
														
															
															<h6 class="testimonial-text">
																We were looking for an application that would be efficient and easily accessible, customizable for all our department and which meets our business requirement and processes. Sys0rex xCellence ERP was proposed to us as a customized ERP deliver on quality and time lines. We were very pleased with the multiple features the ERP offers and Sys0rex xCellence team made a difference in rapidly understanding our needs, identifying our business requirements and developing them in quick time.
																Their business understanding helped us streamline our processes and efficiently achieved our objectives. The team was dynamic and always ready to help. I would recommend Sys0rex xCellence ERP for their expertise and adaptability!”
																 
															</h6>
		
															<ul class="rait-stars">
																<li>
																	 <a href="#"> 
																		<svg class="utouch-icon utouch-icon-star">
																			<use xlink:href="#utouch-icon-star"></use>
																		</svg>
																</a> 
																</li>
																<li>
																	<a href="#"> 
																	   <svg class="utouch-icon utouch-icon-star">
																		   <use xlink:href="#utouch-icon-star"></use>
																	   </svg>
															   		</a> 
															   </li>
															   <li>
																<a href="#"> 
																   <svg class="utouch-icon utouch-icon-star">
																	   <use xlink:href="#utouch-icon-star"></use>
																   </svg>
														   		</a> 
														   		</li>
														   		<li>
																	<a href="#"> 
																	<svg class="utouch-icon utouch-icon-star">
																		<use xlink:href="#utouch-icon-star"></use>
																	</svg>
													   			</a> 
													   			</li>
													  			 <li>
																	<a href="#"> 
																	<svg class="utouch-icon utouch-icon-star">
																		<use xlink:href="#utouch-icon-star"></use>
																	</svg>
																	</a> 
												   				</li>
																
															</ul>
		
														</div>
		
													</div>
												</div>
												<div class="swiper-slide">
													<div class="col-lg-12 col-md-12 col-sm-12">
														<div class="crumina-module crumina-testimonial-item testimonial-item-arrow">
															<div class="author-info-wrap">
																<div class="testimonial-img-author">
																	<img src="img/testimonial/testimonial6.png" alt="author">
																</div>
																<div class="author-info">
																	<a href="#" class="h6 author-name">Inga Leonard</a>
																	<div class="author-company">Assistant Director at NtesWorld</div>
																</div>
															</div>
		
															<h6 class="testimonial-text">
																We chose sys0rex xCellence over several other ERP systems for its flexibility, 
																scalability, and wide breadth of functionality. 
																We liked the roadmap presented to us by sys0rex xCellence Team as well as their support devoted to providing industry specific solutions. 
																The team at sys0rex xCellence showed deep industry knowledge and was always willing to back up their promises with detailed demonstrations, 
																creating confidence and enthusiasm in our users. The familiar User Interface elements in the system, integration across the Microsoft platform, 
																and SQL/.NET on the back end satisfied our technical staff and fit our skill sets. 
																We believe that sys0rex xCellence will be a cost effective platform to further streamline our business and support future growth.
															
															</h6>
														
															
															
															<ul class="rait-stars">
																<li>
																	<a href="#"> 
																	   <svg class="utouch-icon utouch-icon-star">
																		   <use xlink:href="#utouch-icon-star"></use>
																	   </svg>
															   		</a> 
															   </li>
															   <li>
																<a href="#"> 
																   <svg class="utouch-icon utouch-icon-star">
																	   <use xlink:href="#utouch-icon-star"></use>
																   </svg>
														   		</a> 
														   		</li>
														   		<li>
																	<a href="#"> 
																	<svg class="utouch-icon utouch-icon-star">
																		<use xlink:href="#utouch-icon-star"></use>
																	</svg>
													   			</a> 
													   			</li>
													  			 <li>
																	<a href="#"> 
																	<svg class="utouch-icon utouch-icon-star">
																		<use xlink:href="#utouch-icon-star"></use>
																	</svg>
																	</a> 
												   				</li>

																
															</ul>
		
														</div>
		
													</div>
												</div>
											<!-- </div> -->
										</div>
	
										<!--Prev next buttons-->
	
										<div class="btn-slider-wrap navigation-center-bottom">
	
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
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	
		</section>
		<!-- ... end Testimonials -->
	</div>
@endsection