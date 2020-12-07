@extends('frontend.layouts.master')

@section('content')

    @include('frontend.partials.slider')

    <!-- WHY Choose us -->
	<div class="section bg-primary">
		<div class="content-wrap pt-0">
			<div class="container">

				<div class="row overlap-row">
					<!-- Item 1 -->
					<div class="col-sm-12 col-md-12 col-lg-4">
						<div class="box-image-3 text-black">
							<div class="media-img">
								<img src="{{ URL::asset('frontend')}}/images/dummy-img-1200x800.jpg" alt="" class="img-fluid">
							</div>
							<div class="body-content">
								<h4>Technology & Innovation</h4>
								<p>With over 15 years experience and real focus on customer satisfaction, you can rely on us for your next renovation, driveway sett or home repair.</p>
								<a href="#">Read more</a>
							</div>
						</div>
					</div>
					<!-- Item 2 -->
					<div class="col-sm-12 col-md-12 col-lg-4">
						<div class="box-image-3 text-black">
							<div class="media-img">
								<img src="{{ URL::asset('frontend')}}/images/dummy-img-1200x800.jpg" alt="" class="img-fluid">
							</div>
							<div class="body-content">
								<h4>Technology & Innovation</h4>
								<p>With over 15 years experience and real focus on customer satisfaction, you can rely on us for your next renovation, driveway sett or home repair.</p>
								<a href="#">Read more</a>
							</div>
						</div>
					</div>
					<!-- Item 3 -->
					<div class="col-sm-12 col-md-12 col-lg-4">
						<div class="box-image-3 text-black">
							<div class="media-img">
								<img src="{{ URL::asset('frontend')}}/images/dummy-img-1200x800.jpg" alt="" class="img-fluid">
							</div>
							<div class="body-content">
								<h4>Technology & Innovation</h4>
								<p>With over 15 years experience and real focus on customer satisfaction, you can rely on us for your next renovation, driveway sett or home repair.</p>
								<a href="#">Read more</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    @include('frontend.partials.about')
    @include('frontend.partials.service')
    @include('frontend.partials.works')
    @include('frontend.partials.slogan')
    @include('frontend.partials.feedback')


@endsection
