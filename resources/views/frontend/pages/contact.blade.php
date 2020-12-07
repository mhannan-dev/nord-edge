@extends('frontend.layouts.master')

@section('content')

    <!-- BANNER -->
    <div class="section banner-page">
		<div class="content-map">
			<div class="google-maps">
				<iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=London%20Eye%2C%20London%2C%20United%20Kingdom&amp;t=m&amp;z=15&amp;output=embed&amp;iwloc=near" aria-label="London Eye, London, United Kingdom"></iframe>
			</div>
		</div>
	</div>
    <!-- Contact -->
	<div id="contact" class="section">		
		
		<div class="content-wrap">
			<div class="container">
				
				<div class="row">

					<div class="col-sm-12 col-md-4">

						<div class="widget info-detail">
							<h4 class="section-heading text-black no-after mb-3">
								Download <span class="text-primary">Brochure</span>
							</h4>
							<div class="widget download">
								<ul class="category-nav">
									<li><a href="#" class="btn btn-secondary btn-block btn-sidebar"><span class="fas fa-file-pdf mr-3"></span> Company Profile</a></li>
									<li><a href="#" class="btn btn-secondary btn-block btn-sidebar"><span class="fas fa-file-pdf mr-3"></span> Product Knowledge</a></li>
									<li><a href="#" class="btn btn-secondary btn-block btn-sidebar"><span class="fas fa-file-pdf mr-3"></span> Voluptate Velit</a></li>
								</ul>
							</div>
						</div>

						<div class="widget info-detail">
							<h4 class="section-heading text-black no-after mb-3">
								Contact <span class="text-primary">Details</span>
							</h4>
							<ul class="list-info">
								
								<li>
									<div class="info-icon text-black">
										<span class="fas fa-map-marked-alt"></span>
									</div>
									<div class="info-text">99 S.t Jomblo Park Pekanbaru 28292. Indonesia</div>
								</li>
								<li>
									<div class="info-icon text-black">
										<span class="fas fa-phone-alt"></span>
									</div>
									<div class="info-text">(0761) 654-123987</div>
								</li>
								<li>
									<div class="info-icon text-black">
										<span class="fas fa-globe-americas"></span>
									</div>
									<div class="info-text">info@yoursite.com</div>
								</li>
								
							</ul>
						</div>

					</div>

					<div class="col-sm-12 col-md-8 pleft">

						<h4 class="text-black mt-0">Send a Message here</h4>

						<form action="#" class="form-contact" id="contactForm" novalidate="true">
							<div class="row">
								<div class="col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" id="p_name" placeholder="Enter Name" required="">
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="col-sm-6 col-md-6">
									<div class="form-group">
										<input type="email" class="form-control" id="p_email" placeholder="Enter Email" required="">
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" id="p_subject" placeholder="Subject">
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" id="p_phone" placeholder="Enter Phone Number">
										<div class="help-block with-errors"></div>
									</div>
								</div>
							</div>
							<div class="form-group">
								 <textarea id="p_message" class="form-control" rows="6" placeholder="Enter Your Message"></textarea>
								<div class="help-block with-errors"></div>
							</div>
							<div class="form-group">
								<div class="text-left">
									<div id="success"></div>
									<button type="submit" class="btn btn-primary disabled" style="pointer-events: all; cursor: pointer;">SEND MESSAGE</button>
								</div>
							</div>
						</form>
	
					</div>
					
				</div>
			</div>
		</div> 
		
	</div>

@endsection
