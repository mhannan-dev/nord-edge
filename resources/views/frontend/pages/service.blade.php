@extends('frontend.layouts.master')

@section('content')

    
<!-- BANNER -->
    <div class="section banner-page" data-background="{{ URL::asset('frontend')}}/images/service-1920x1280.jpg" style="background-image: url(&quot;images/dummy-img-1920x1280.jpg&quot;);">
		<div class="content-wrap pos-relative">
			<div class="container">
				<div class="col-12 col-md-12">
					<div class="d-flex bd-highlight mb-2">
						<div class="title-page">Services</div>
					</div>
					<nav aria-label="breadcrumb">
					  <ol class="breadcrumb ">
					    <li class="breadcrumb-item"><a href="{{ route('home')}}">Home</a></li>
					    <li class="breadcrumb-item active" aria-current="page">Services</li>
					  </ol>
					</nav>
				</div>
			</div>
			
		</div>
	</div>

    <!-- Services -->
	<div class="section">
		<div class="content-wrap">
			<div class="container">

				<div class="row">

					<div class="col-sm-4 col-md-4">
						<div class="rs-icon-info-3 mb-5">
							<div class="info-icon">
								<i class="fas fa-building"></i>
							</div>
							<div class="info-text">
								<h4 class="text-black mb-2">General Contracting</h4>
								<p>With over 15 years experience and real focus on customer satisfaction, you can rely on us for your next renovation, driveway sett or home repair.</p>
								<a href="#">Read more</a>
							</div>
						</div>
					</div>

					<div class="col-sm-4 col-md-4">
						<div class="rs-icon-info-3 mb-5">
							<div class="info-icon">
								<i class="fas fa-comments"></i>
							</div>
							<div class="info-text">
								<h4 class="text-black mb-2">Construction Consultant</h4>
								<p>With over 15 years experience and real focus on customer satisfaction, you can rely on us for your next renovation, driveway sett or home repair.</p>
								<a href="#">Read more</a>
							</div>
						</div>
					</div>

					<div class="col-sm-4 col-md-4">
						<div class="rs-icon-info-3 mb-5">
							<div class="info-icon">
								<i class="fas fa-cube"></i>
							</div>
							<div class="info-text">
								<h4 class="text-black mb-2">Special Projects</h4>
								<p>With over 15 years experience and real focus on customer satisfaction, you can rely on us for your next renovation, driveway sett or home repair.</p>
								<a href="#">Read more</a>
							</div>
						</div>
					</div>

					<div class="col-sm-4 col-md-4">
						<div class="rs-icon-info-3 mb-5">
							<div class="info-icon">
								<i class="fas fa-home"></i>
							</div>
							<div class="info-text">
								<h4 class="text-black mb-2">House Renovation</h4>
								<p>With over 15 years experience and real focus on customer satisfaction, you can rely on us for your next renovation, driveway sett or home repair.</p>
								<a href="#">Read more</a>
							</div>
						</div>
					</div>

					<div class="col-sm-4 col-md-4">
						<div class="rs-icon-info-3 mb-5">
							<div class="info-icon">
								<i class="fas fa-brush"></i>
							</div>
							<div class="info-text">
								<h4 class="text-black mb-2">Tiling And Paintings</h4>
								<p>With over 15 years experience and real focus on customer satisfaction, you can rely on us for your next renovation, driveway sett or home repair.</p>
								<a href="#">Read more</a>
							</div>
						</div>
					</div>

					<div class="col-sm-4 col-md-4">
						<div class="rs-icon-info-3 mb-5">
							<div class="info-icon">
								<i class="fas fa-window-restore"></i>
							</div>
							<div class="info-text">
								<h4 class="text-black mb-2">Laminate Flooring</h4>
								<p>With over 15 years experience and real focus on customer satisfaction, you can rely on us for your next renovation, driveway sett or home repair.</p>
								<a href="#">Read more</a>
							</div>
						</div>
					</div>

				</div>

				
			</div>
		</div>
	</div>

@endsection
