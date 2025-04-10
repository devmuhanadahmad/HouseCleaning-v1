	<!--Main Footer-->
    <footer class="main-footer style-two">
		<div class="auto-container">
        	<!--Widgets Section-->
            <div class="widgets-section">
            	<div class="row clearfix">

                    <!--big column-->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">

							<!--Footer Column-->
                            <div class="footer-column col-lg-7 col-md-6 col-sm-12">
                                <div class="footer-widget logo-widget">
									<div class="logo">
                                    	<a href="{{route('website.home')}}"><img src="{{asset("website/images/logo-3.svg")}}" style="width: 230; height: 70px;" alt="" /></a>
                                    </div>
                                    <div class="text">Cleaning services in Netherlands. Providing cleaning services, and undoubtedly it is provided with a high degree of responsibility and honesty.</div>
									<ul class="social-icons">
										<li><a href="{{config('contact.facebook')}}"><span class="fab fa-facebook-f"></span></a></li>
										<li><a href="{{config('contact.instagram')}}"><span class="fab fa-instagram"></span></a></li>
										<li><a href="{{config('contact.twiter')}}"><span class="fab fa-twitter"></span></a></li>
										<li><a href="{{config('contact.linkedin')}}"><span class="fab fa-linkedin"></span></a></li>
									</ul>
								</div>
							</div>

								<!--Footer Column-->
								<div class="footer-column col-lg-5 col-md-6 col-sm-12">
									<div class="footer-widget links-widget">
										<div class="footer-title  clearfix">
											<h2>Departments</h2>
											<div class="separator"></div>
										</div>
										<ul class="footer-list">
                                            <li><a href="{{route('website.home')}}">Home</a></li>
											<li><a href="{{route('website.about')}}">ِAbout</a></li>
											<li><a href="{{route('website.applyForJob')}}">Apply For Job</a></li>
											<li><a href="{{route('website.faq')}}">Faq</a></li>
											<li><a href="{{route('website.contact')}}">Contact</a></li>
										</ul>
									</div>
								</div>
						</div>
					</div>

					<!--big column-->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">

							<!--Footer Column-->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget news-widget">
									<div class="footer-title  clearfix">
										<h2>Our Mobile App</h2>
										<div class="separator"></div>
									</div>

									<!--News Widget Block-->
                                    <div class="news-widget-block">
                                        <div class="widget-inner">
                                            <div class="image">
                                                <img src="website/images/resource/news-image-1.jpg" alt="" />
                                            </div>
                                            <h3><a href="{{config('link.android')}}">Download on the <br> Google Play </a></h3>
                                        </div>
                                    </div>

									<!--News Widget Block-->
                                    <div class="news-widget-block">
                                        <div class="widget-inner">
                                            <div class="image">
                                                <img src="website/images/resource/news-image-2.jpg" alt="" />
                                            </div>
                                            <h3><a href="{{config('link.apple')}}">Download on the <br> App Store</a></h3>
                                        </div>
                                    </div>

								</div>
							</div>

							<!--Footer Column-->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget contact-widget">
									<div class="footer-title  clearfix">
										<h2>Contact Us</h2>
										<div class="separator"></div>
									</div>

									<ul class="contact-list">
										<li><span class="icon flaticon-placeholder"></span>Address <br>{{config('contact.address')}}</li>
										<li><span class="icon flaticon-call"></span>Phone <br> <a href="tel:{{config('contact.phone')}}">{{config('contact.phone')}}</a></li>
										<li><span class="icon flaticon-message"></span>Do you have a Question? <a href="mailto:info@gmail.com">{{config('contact.email')}}</a></li>
									</ul>

								</div>
							</div>

						</div>
					</div>

				</div>
			</div>
		</div>

		<!-- Footer Bottom -->
		<div class="footer-bottom">
			<div class="auto-container">
				<div class="copyright"> &copy;
                    <script>
                    document.write(new Date().getFullYear());
                  </script>
                   All Rights Reserved By Daily Cleaning</div>
			</div>
		</div>

	</footer>
