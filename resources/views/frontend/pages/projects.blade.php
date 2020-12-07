@extends('frontend.layouts.master')

@section('content')

    
<!-- BANNER -->
    <div class="section banner-page" data-background="{{ URL::asset('frontend')}}/images/project-banner.jpg" style="background-image: url(&quot;images/project-banner.jpg&quot;);">
		<div class="content-wrap pos-relative">
			<div class="container">
				<div class="col-12 col-md-12">
					<div class="d-flex bd-highlight mb-2">
						<div class="title-page">Projects</div>
					</div>
					<nav aria-label="breadcrumb">
					  <ol class="breadcrumb ">
					    <li class="breadcrumb-item"><a href="{{ route('home')}}">Home</a></li>
					    <li class="breadcrumb-item active" aria-current="page">Projects</li>
					  </ol>
					</nav>
				</div>
			</div>
			
		</div>
	</div>

    <!-- Projects -->
	<div class="section">
		<div class="content-wrap">
			<div class="container">

				<div class="row">

					<div class="col-sm-4 col-md-4">
						<div class="box-image-1">
							<a href="project-detail.html" title="Industrial Complex">
								<div class="media-img">
									<img src="{{ URL::asset('frontend')}}/images/projects.jpg" alt="" class="img-fluid">
								</div>
								<div class="body-content">
									<h4 class="title">Commercial Building</h4>
									<p class="category">building, design</p>
								</div>
							</a>
						</div>
					</div>

					<div class="col-sm-4 col-md-4">
						<div class="box-image-1">
							<a href="project-detail.html" title="Industrial Complex">
								<div class="media-img">
									<img src="{{ URL::asset('frontend')}}/images/projects.jpg" alt="" class="img-fluid">
								</div>
								<div class="body-content">
									<h4 class="title">Commercial Building</h4>
									<p class="category">building, design</p>
								</div>
							</a>
						</div>
					</div>

					<div class="col-sm-4 col-md-4">
						<div class="box-image-1">
							<a href="project-detail.html" title="Industrial Complex">
								<div class="media-img">
									<img src="{{ URL::asset('frontend')}}/images/projects.jpg" alt="" class="img-fluid">
								</div>
								<div class="body-content">
									<h4 class="title">Commercial Building</h4>
									<p class="category">building, design</p>
								</div>
							</a>
						</div>	
					</div>

					<div class="col-sm-4 col-md-4">
						<div class="box-image-1">
							<a href="project-detail.html" title="Industrial Complex">
								<div class="media-img">
									<img src="{{ URL::asset('frontend')}}/images/projects.jpg" alt="" class="img-fluid">
								</div>
								<div class="body-content">
									<h4 class="title">Commercial Building</h4>
									<p class="category">building, design</p>
								</div>
							</a>
						</div>
					</div>

					<div class="col-sm-4 col-md-4">
						<div class="box-image-1">
							<a href="project-detail.html" title="Industrial Complex">
								<div class="media-img">
									<img src="{{ URL::asset('frontend')}}/images/projects.jpg" alt="" class="img-fluid">
								</div>
								<div class="body-content">
									<h4 class="title">Commercial Building</h4>
									<p class="category">building, design</p>
								</div>
							</a>
						</div>
					</div>

					<div class="col-sm-4 col-md-4">
						<div class="box-image-1">
							<a href="project-detail.html" title="Industrial Complex">
								<div class="media-img">
									<img src="{{ URL::asset('frontend')}}/images/projects.jpg" alt="" class="img-fluid">
								</div>
								<div class="body-content">
									<h4 class="title">Commercial Building</h4>
									<p class="category">building, design</p>
								</div>
							</a>
						</div>
					</div>

				</div>

				
			</div>
		</div>
	</div>

@endsection
