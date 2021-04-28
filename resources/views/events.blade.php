@extends('includes.include')

@section('content')

	<div class="content-wrapper">

		<!-- Stunning Header -->

		<div
			class="crumina-stunning-header stunning-header--breadcrumbs-bottom-left stunning-header--content-inline stunning-bg-clouds">
			<div class="container">
				<div class="stunning-header-content">
					<div class="inline-items">
						<h4 class="stunning-header-title">Latest Events</h4>
						<!-- 
						<a href="15_pricing_tables.html" class="btn btn--green btn--with-shadow f-right">
							Get trial version
						</a> -->
					</div>
					<div class="breadcrumbs-wrap inline-items">
						<a href="/events.html" class="btn btn--primary btn--round breadcrumbs-custom">
							<svg class="utouch-icon utouch-icon-home-icon-silhouette breadcrumbs-custom">
								<use xlink:href="#utouch-icon-home-icon-silhouette"></use>
							</svg>
						</a>

						<ul class="breadcrumbs breadcrumbs--rounded">
							<li class="breadcrumbs-item">
								<a href="08_events.html" class="breadcrumbs-custom">Events</a>
								<svg class="utouch-icon utouch-icon-media-play-symbol breadcrumbs-custom">
									<use xlink:href="#utouch-icon-media-play-symbol"></use>
								</svg>
							</li>
							<!-- <li class="breadcrumbs-item active">
								<span class="breadcrumbs-custom">Presentation of the Utouch app</span>
								<svg class="utouch-icon utouch-icon-media-play-symbol breadcrumbs-custom">
									<use xlink:href="#utouch-icon-media-play-symbol"></use>
								</svg>
							</li> -->
						</ul>
					</div>
				</div>
			</div>
		</div>

		<!-- ... end Stunning Header -->


		<!-- Curriculum Events -->

		<section class="medium-padding100">
			<div class="container">
				<div class="row">
					<div class="curriculum-event-wrap">
						<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
							<div class="curriculum-event" data-mh="curriculum" data-eventstatus="active">
								<div class="curriculum-event-thumb">
									<img src="img/workshop_img.png" class="image-event" alt="image">
									<div class="category-link  c-yellow-light">Modern age spartan</div>
									<div class="curriculum-event-content">
										<div class="author-block inline-items">
											<div class="author-avatar">
												<img src="img/author1.jpg" alt="author">
											</div>
											<div class="author-info">
												<div class="author-prof">Organizer</div>
												<a href="/event_details.html?id=1" class="h6 author-name">Mrs. Rekha
													Rathore</a>
											</div>
										</div>
									</div>
									<div class="overlay-standard "></div>
								</div>
								<div class="curriculum-event-content">
									<div class="icon-text-item display-flex">
										<svg class="utouch-icon utouch-icon-calendar-2">
											<use xlink:href="#utouch-icon-calendar-2"></use>
										</svg>
										<div class="text">May 17-19, Bilaspur India</div>
									</div>
									<a href="/event_details.html?id=1" class="h6 title">A workshop designed specially
										for software engineers to become professionals from amateurs.</a>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
							<div class="curriculum-event noevent" data-mh="curriculum" data-eventstatus="">
								<div class="curriculum-event-thumb">
									<img src="img/SPARK.gif" class="image-event" alt="image">
									<div class="category-link c-yellow-light">Training</div>
									<div class="curriculum-event-content">
										<div class="author-block inline-items">
											<div class="author-avatar">
												<img src="img/author1.jpg" alt="author">
											</div>
											<div class="author-info">
												<div class="author-prof">Organizer</div>
												<a class="h6 author-name">Mr. Rajesh Kuttan</a>
											</div>
										</div>
									</div>
									<div class="overlay-standard"></div>
								</div>
								<div class="curriculum-event-content">
									<div class="icon-text-item display-flex">
										<svg class="utouch-icon utouch-icon-calendar-2">
											<use xlink:href="#utouch-icon-calendar-2"></use>
										</svg>
										<div class="text">Not yet started</div>
									</div>
									<a class="h6 title">Spark: A program for accelerating research and knowledge to engage fresh minds, by introducing them to the cutting-edge world of technology</a>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
							<div class="curriculum-event noevent" data-mh="curriculum" data-eventstatus="">
								<div class="curriculum-event-thumb">
									<img src="img/dev.png" class="image-event" alt="image">
									<div class="category-link c-yellow-light">Vacancy</div>
									<div class="curriculum-event-content">
										<div class="author-block inline-items">
											<div class="author-avatar">
												<img src="img/author1.jpg" alt="author">
											</div>
											<div class="author-info">
												<div class="author-prof">Organiser</div>
												<a class="h6 author-name">Mrs. Rekha Rathore</a>
											</div>
										</div>
									</div>
									<div class="overlay-standard"></div>
								</div>
								<div class="curriculum-event-content">
									<div class="icon-text-item display-flex">
										<svg class="utouch-icon utouch-icon-calendar-2">
											<use xlink:href="#utouch-icon-calendar-2"></use>
										</svg>
										<div class="text">Starting Soon</div>
									</div>
									<a class="h6 title">Software Developer: Vacancies coming soon for software developers trained in PHP, Flutter and React. Watch out this space for more.</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12 col-sm-12 col-xs-12 col-md-12">
						<div class="btn-slider-wrap pt80">

							<div class="btn-prev btn--style">
								<svg class="utouch-icon icon-hover utouch-icon-arrow-left-1">
									<use xlink:href="#utouch-icon-arrow-left-1"></use>
								</svg>
								<svg class="utouch-icon utouch-icon-arrow-left1">
									<use xlink:href="#utouch-icon-arrow-left1"></use>
								</svg>
								<span>Prev Page</span>
							</div>

							<div class="btn-next btn--style">
								<span>Next Page</span>
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
		</section>

		<!-- ... end Curriculum Events -->

	</div>
	@endsection