@extends('frontEnd.layouts.app',['pageTitle' => __('Home')])
@section('content')
    
		<!--Page Title-->
		
		<section class="page-title" style="background-image:url({{ asset('frontEnd') }}/images/background/11.jpg)">
			<div class="auto-container">
				<div class="clearfix">
					<div class="pull-left">
						<div class="title">Welcome to Solva Agency</div>
						<h2>Services Detail</h2>
					</div>
					<div class="pull-right">
						<ul class="page-breadcrumb">
							<li><a href="{{ asset('/') }}">home</a></li>
							<li>Services Detail</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!--End Page Title-->
		
		<!-- Sidebar Page Container -->
		<div class="sidebar-page-container">
			<div class="auto-container">
				<div class="row clearfix">
					
					<!--Content Side-->
					<div class="content-side col-lg-8 col-md-12 col-sm-12">
						<div class="service-detail">
							<div class="inner-box">
								<div class="image">
								<img src="{{Storage::url($services->image)}}" alt="" />
								</div>
								<div class="lower-content">
									<h2>Overview</h2>
									<div class="text">
									<p>{{$services->shortDescription }}</p>
										<div class="two-column">
											<div class="row clearfix">
												<!-- Column -->
												<div class=" col-sm-12">
													<h3>We Make Creative Solutions</h3>
													{!!$services->description !!}
														
												</div>
												<!-- Column -->
												<div class="column col-lg-6 col-md-6 col-sm-12">
													<div class="chart-image">
														<img src="images/resource/chart.png" alt="" />
													</div>
												</div>
											</div>
										</div>
										 
									</div>
									 
									
								</div>
							</div>
						</div>
					</div>
					
					{{-- <!--Sidebar Side-->
					<div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
						<aside class="sidebar">
							<div class="sidebar-inner">
								
								<!-- Blog Services Widget -->
								<div class="sidebar-widget sidebar-services-category">
									<div class="widget-content">
										<ul class="services-cat">
											<li><a href="services.html"><span>Financial Analysis</span></a></li>
											<li class="active"><a href="oil-gas.html"><span>Investment Planning</span></a></li>
											<li><a href="services-single.html"><span>Wealth Balancing</span></a></li>
											<li><a href="services-single.html"><span>Business Consulting</span></a></li>
											<li><a href="services-single.html"><span>Consumer markets</span></a></li>
											<li><a href="services-single.html"><span>Strategic Consulting</span></a></li>
											<li><a href="services-single.html"><span>Restructuring</span></a></li>
											<li><a href="services-single.html"><span>Consulting Analytics</span></a></li>
											<li><a href="services-single.html"><span>Online Consulting</span></a></li>
										</ul>
									</div>
								</div>
								
								<!-- Brochure -->
								<div class="sidebar-widget brochure-widget">
									<div class="brochure-box">
										<div class="inner">
											<span class="icon flaticon-pdf"></span>
											<div class="text">Project-One .pdf</div>
											<span class="download fa fa-download"></span>
										</div>
										<a href="#" class="overlay-link"></a>
									</div>
									
									<div class="brochure-box">
										<div class="inner">
											<span class="icon flaticon-doc"></span>
											<div class="text">Project-One .doc</div>
											<span class="download fa fa-download"></span>
										</div>
										<a href="#" class="overlay-link"></a>
									</div>
									
									<div class="brochure-box">
										<div class="inner">
											<span class="icon flaticon-document"></span>
											<div class="text">Project-One .ppt</div>
											<span class="download fa fa-download"></span>
										</div>
										<a href="#" class="overlay-link"></a>
									</div>
									
								</div>
								
								<!-- Contact Widget -->
								<div class="sidebar-widget contact-widget">
									<div class="widget-content" style="background-image:url(images/background/pattern-12.png)">
										<div class="icon flaticon-phone-call"></div>
										<div class="text">Got any Questions? <br> Call Us Today</div>
										<div class="number">1-800-369-8527</div>
										<div class="email">support@solvaconsult.net</div>
									</div>
								</div>
								
							</div>
						</aside>
					</div> --}}
					
				</div>
			</div>
		</div>
		
		<!-- Clients Section -->
		<section class="clients-section">
			<div class="auto-container">
				
				<div class="sponsors-outer">
					<!--Sponsors Carousel-->
					<ul class="sponsors-carousel owl-carousel owl-theme">
						<li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure></li>
						<li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></figure></li>
						<li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></figure></li>
						<li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></figure></li>
						<li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure></li>
						<li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></figure></li>
						<li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></figure></li>
						<li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></figure></li>
					</ul>
				</div>
				
			</div>
		</section>
		<!--End Clients Section-->
		
		<!-- Main Footer -->
		<footer class="main-footer" style="background-image: url(images/background/3.jpg)">
			<div class="auto-container">
				<!--Widgets Section-->
				<div class="widgets-section">
					<div class="row clearfix">
						
						<!-- Footer Column -->
						<div class="footer-column col-lg-4 col-md-6 col-sm-12">
							<div class="footer-widget logo-widget">
								<div class="logo">
									<a href="index.html"><img src="images/footer-logo.png" alt="" /></a>
								</div>
								<div class="text">We provide expert Business Coaching to both individuals and businesses. With over 30 years of experience we’ll ensure that you’re always getting the best guidance from the top people in the entire industry.</div>
								<ul class="contact-link">
									<li><span class="icon flaticon-clock"></span> Monday -Sturday at 09am-6pm</li>
									<li><span class="icon flaticon-home-page"></span> 52 Tailstoi Town 546 IT, NYC </li>
								</ul>
							</div>
						</div>
						
						<!-- Footer Column -->
						<div class="footer-column col-lg-4 col-md-6 col-sm-12">
							<div class="footer-widget news-widget">
								<div class="footer-title">
									<h4>Latest News</h4>
								</div>
								<!-- Footer Column -->
								<div class="widget-content">
									<div class="post">
										<div class="thumb"><a href="news-detail.html"><img src="images/resource/post-thumb-1.jpg" alt=""></a></div>
										<h5><a href="news-detail.html">Retail banks wakeup to digital</a></h5>
										<span class="date">28 Dec, 2019</span>
									</div>
	
									<div class="post">
										<div class="thumb"><a href="news-detail.html"><img src="images/resource/post-thumb-2.jpg" alt=""></a></div>
										<h5><a href="news-detail.html">How to improve employees skills</a></h5>
										<span class="date">13 Oct, 2019</span>
									</div>
								</div>
							</div>
						</div>
						
						<!-- Footer Column -->
						<div class="footer-column col-lg-4 col-md-6 col-sm-12">
							<div class="footer-widget newsletter-widget">
								<div class="footer-title">
									<h4>Newsletter</h4>
								</div>
								<div class="text">Sign up for our mailing list to get latest updates and offers.</div>
								<div class="newsletter-form">
									<form method="post" action="https://expert-themes.com/html/solva/contact.html">
										<div class="form-group">
											<input type="email" name="email" value="" placeholder="Enter your email address ....." required="">
											<button type="submit" class="theme-btn submit-btn"><span class="txt flaticon-send"></span></button>
										</div>
									</form>
								</div>
								<ul class="social-icon-one">
									<li class="title">Follow Us:</li>
									<li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-skype"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								</ul>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			
			<div class="footer-bottom">
				<div class="auto-container">
					<div class="clearfix">
						<div class="pull-left">
							<div class="copyright">&copy; 2020 solva. Designed By Expert-Themes</div>
						</div>
						<div class="pull-right">
							<ul class="footer-nav">
								<li><a href="#">Home</a></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Investor</a></li>
								<li><a href="#">Legals</a></li>
								<li><a href="#">Contact</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			
		</footer>
		
		<!-- Sidebar Cart Item -->
		<div class="xs-sidebar-group info-group">
			<div class="xs-overlay xs-bg-black"></div>
			<div class="xs-sidebar-widget">
				<div class="sidebar-widget-container">
					<div class="widget-heading">
						<a href="#" class="close-side-widget">
							X
						</a>
					</div>
					<div class="sidebar-textwidget">
						
						<!-- Sidebar Info Content -->
						<div class="sidebar-info-contents">
							<div class="content-inner">
								<div class="logo">
									<a href="index.html"><img src="images/logo-2.png" alt="" /></a>
								</div>
								<div class="content-box">
									<h2>About Us</h2>
									<p class="text">The argument in favor of using filler text goes something like this: If you use real content in the Consulting Process, anytime you reach a review point you’ll end up reviewing and negotiating the content itself and not the design.</p>
									<a href="#" class="theme-btn btn-style-two"><span class="txt">Consultation</span></a>
								</div>
								<div class="contact-info">
									<h2>Contact Info</h2>
									<ul class="list-style-one">
										<li><span class="icon fa fa-location-arrow"></span>Chicago 12, Melborne City, USA</li>
										<li><span class="icon fa fa-phone"></span>(111) 111-111-1111</li>
										<li><span class="icon fa fa-envelope"></span>solva@gmail.com</li>
										<li><span class="icon fa fa-clock-o"></span>Week Days: 09.00 to 18.00 Sunday: Closed</li>
									</ul>
								</div>
								<!-- Social Box -->
								<ul class="social-box">
									<li class="facebook"><a href="#" class="fa fa-facebook-f"></a></li>
									<li class="twitter"><a href="#" class="fa fa-twitter"></a></li>
									<li class="linkedin"><a href="#" class="fa fa-linkedin"></a></li>
									<li class="instagram"><a href="#" class="fa fa-instagram"></a></li>
									<li class="youtube"><a href="#" class="fa fa-youtube"></a></li>
								</ul>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
		<!-- END sidebar widget item -->
@endsection