@extends('includes.include')

@section('content')

	<div class="content-wrapper">

		<!-- Contacts -->

		<section>
			<div class="container-fluid no-padding">

				<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 no-padding">
					<!-- Leaflet map -->
					<div id="map" style="height: 820px"></div>
					<!-- End Leaflet map -->
				</div>

				<div class="col-lg-3 col-lg-offset-1 col-md-12 col-sm-12 pt100 pb100">
					<div class="breadcrumbs-wrap inline-items">
						<a href="#" class="btn btn--transparent btn--round">
							<svg class="utouch-icon utouch-icon-home-icon-silhouette">
								<use xlink:href="#utouch-icon-home-icon-silhouette"></use>
							</svg>
						</a>

						<ul class="breadcrumbs">
							<li class="breadcrumbs-item">
								<a href="{{url('/')}}">Home</a>
								<svg class="utouch-icon utouch-icon-media-play-symbol">
									<use xlink:href="#utouch-icon-media-play-symbol"></use>
								</svg>
							</li>
							<li class="breadcrumbs-item active">
								<span>Contactus</span>
								<svg class="utouch-icon utouch-icon-media-play-symbol">
									<use xlink:href="#utouch-icon-media-play-symbol"></use>
								</svg>
							</li>
						</ul>
					</div>

					<div class="crumina-module crumina-heading">
						<h3 class="heading-title">Get in Touch with Us</h3>
					</div>
					<div class="widget w-contacts w-contacts--style2 ">
						<!-- <div class="contact-item display-flex">
							<svg class="utouch-icon utouch-icon-placeholder-3">
								<use xlink:href="#utouch-icon-placeholder-3"></use>
							</svg>
							<span class="info">Sysorex Innovator Edge, 2nd Floor Karan Chambers, Vyapar Vihar Road, Bilaspur, (C.G.) India </span>
						</div> -->
						<div class="contact-item display-flex">
							<svg class="utouch-icon utouch-icon-telephone-keypad-with-ten-keys">
								<use xlink:href="#utouch-icon-telephone-keypad-with-ten-keys"></use>
							</svg>
							<div class="info-wrap">
								<span class="info">(600) sys0rex <span>- HQ</span></span>
							</div>
						</div>
						<div class="contact-item display-flex">
							<svg class="utouch-icon utouch-icon-message">
								<use xlink:href="#utouch-icon-message"></use>
							</svg>
							<a href="#" class="info">info@sysorexedge.com</a>
						</div>
						<div class="contact-item display-flex">
							<svg class="utouch-icon"><use xlink:href="#utouch-icon-world-map"></use></svg>
							<div class="info-wrap">
								<span class="info">SYSOREX INNOVATOR EDGE</span>
								a.	North Carolina, <b>United States</b><br>
								b.	Muscat, <b>Sultanate of Oman</b><br>
								c.	Chhattisgarh, <b>India</b><br>
								<span class="info">SYSOREX IT SOLUTION</span>
								a.	Abu Dhabi, <b>United Arab Emirates</b>
							</div>
						</div>

						<a href="#" class="btn btn--grey btn--with-shadow js-message-popup cd-nav-trigger">
							Send a Message
						</a>
					</div>

				</div>

			</div>
		</section>

		<!-- ... end Contacts -->

	</div>

	<!-- Footer -->
@endsection