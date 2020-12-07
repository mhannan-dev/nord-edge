@extends('frontend.layouts.master')

@section('content')

    
<!-- BANNER -->
    <div class="section banner-page" data-background="{{ URL::asset('frontend')}}/images/dummy-img-1920x1280.jpg">
		<div class="content-wrap pos-relative">
			<div class="container">
				<div class="col-12 col-md-12">
					<div class="d-flex bd-highlight mb-2">
						<div class="title-page">About Us</div>
					</div>
					<nav aria-label="breadcrumb">
					  <ol class="breadcrumb ">
					    <li class="breadcrumb-item"><a href="{{ route('home')}}">Home</a></li>
					    <li class="breadcrumb-item active" aria-current="page">About Us</li>
					  </ol>
					</nav>
				</div>
			</div>
			
		</div>
	</div>	

    <!-- ABOUT -->
	<div class="section">
		<div class="content-wrap">
			<div class="container">

				<div class="row">

					<div class="col-sm-8 col-md-8 pright">
						<div class="img-subsco">
							<div class="icon-play-yt">
								<a href="http://www.youtube.com/watch?v=0O2aH4XLbto" class="popup-youtube"><i class="fas fa-play-circle"></i></a>
							</div>
							<img src="{{ URL::asset('frontend')}}/images/dummy-img-1200x800.jpg" alt="" class="img-fluid">
						</div>
					</div>
					<div class="col-sm-4 col-md-4">
						<h4 class="section-heading text-black no-after mb-3">
							About <span class="text-primary">Us</span>
						</h4>
						<h3 class="text-black">
							Creating quality urban lifestyles, building stronger communities
						</h3>
						<p>We provide a professional dignissim at cursus elefeind norma arcu. Pellentesque accumsan est in tempus etos ullamcorper sem quam suscipit lacus maecenas tortor.</p>
						<a href="#" class="btn btn-secondary">Our Projects</a>
						<div class="spacer-30"></div>
					</div>
					
				</div>

				
			</div>
		</div>
	</div>

@endsection
