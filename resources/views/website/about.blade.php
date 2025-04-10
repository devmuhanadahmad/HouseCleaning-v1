@extends('website.layouts.master')
@section('mainPageTitle', 'About Us')
@section('pageTitle', 'Contact For Daily Cleaning')
@section('content')
	<!-- Health Section -->
	<section class="health-section">
		<div class="auto-container">
			<div class="inner-container">

				<div class="row clearfix">

					<!-- Content Column -->
					<div class="content-column col-lg-7 col-md-12 col-sm-12">
						<div class="inner-column">
							<div class="border-line"></div>
							<!-- Sec Title -->
							<div class="sec-title">
								<h2>Who We Are <br> Pioneering in Health.</h2>
								<div class="separator"></div>
							</div>
							<div class="text">
								We provide many services related to house cleaning, and there is no doubt that they are provided with a high degree of responsibility and honesty, and among those services are the following:
								<br>
								· House cleaning.
                                <br>
                                · Cleaning the work area.
								<br>
								All of these services are performed by highly experienced cleaners.

								So, request a service now.</div>
							<a href="#bookNow" class="theme-btn btn-style-one"><span class="txt">Book Now</span></a>
						</div>
					</div>

					<!-- Image Column -->
					<div class="image-column col-lg-5 col-md-12 col-sm-12">
						<div class="inner-column wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="image">
								<img src="{{asset("website/images/resource/about.svg")}}"  alt="" />
							</div>
						</div>
					</div>

				</div>

			</div>
		</div>
	</section>
	<!-- End Health Section -->






	<br>
	<br>
	<br>
	<!-- Video Section -->
	<section class="video-section" style="background-image:url({{asset('website/images/background/5.jpg')}})">

	</section>
	<!-- End Video Section -->

	<!-- Appointment Section Two -->
	<section class="appointment-section-two">
		<div class="auto-container">
			<div class="inner-container">
				<div class="row clearfix">

					<!-- Image Column -->
					<div class="image-column col-lg-6 col-md-12 col-sm-12">
						<div class="inner-column wow slideInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="image">
								<img src="{{asset("website/images/resource/doctor-2.png")}}" alt="" />
							</div>
						</div>
					</div>

					<!-- Form Column -->
					<div class="form-column col-lg-6 col-md-12 col-sm-12" id="bookNow">
						<div class="inner-column">
							<!-- Sec Title -->
							<div class="sec-title">
								<h2>Book Now</h2>
								<div class="separator"></div>
							</div>

							<!-- Appointment Form -->
							<div class="appointment-form" >
								<form method="post" action="appointment.html">
									<div class="row clearfix">
										<div class="col-lg-6 col-md-6 col-sm-12 form-group">
											<input type="text" name="username" placeholder="Name" required="">
											<span class="icon fa fa-user"></span>
										</div>

										<div class="col-lg-6 col-md-6 col-sm-12 form-group">
											<input type="email" name="email" placeholder="Email" required="">
											<span class="icon fa fa-envelope"></span>
										</div>

										<div class="col-lg-6 col-md-6 col-sm-12 form-group">
											<input type="tel" name="phone" placeholder="Phone No" required="">
											<span class="icon fas fa-phone"></span>
										</div>

										<div class="col-lg-6 col-md-6 col-sm-12 form-group">
											<input type="text" name="department" placeholder="Department" required="">
											<span class="icon fas fa-home"></span>
										</div>

										<div class="col-lg-6 col-md-6 col-sm-12 form-group">
											<input type="text" name="day" placeholder="Day">
											<span class="icon fa fa-calendar"></span>
										</div>

										<div class="col-lg-6 col-md-6 col-sm-12 form-group">
											<input type="text" name="time" placeholder="Time" class="">
											<span class="icon far fa-clock"></span>
										</div>

										<div class="col-lg-12 col-md-12 col-sm-12 form-group">
											<textarea name="message" placeholder="Message"></textarea>
										</div>

										<div class="col-lg-12 col-md-12 col-sm-12 form-group">
											<button class="theme-btn btn-style-two" type="submit" name="submit-form"><span class="txt">Reservation</span></button>
										</div>
									</div>
								</form>
							</div>

						</div>
					</div>

				</div>
			</div>
		</div>
	</section>

	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
@endsection
