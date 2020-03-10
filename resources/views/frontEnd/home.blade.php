@extends('frontEnd.layouts.app',['pageTitle' => __('Home')])
@section('content')
    
    <!--Main Slider-->
    <section class="main-slider">
    	
        <div class="main-slider-carousel owl-carousel owl-theme">
            
            <div class="slide" style="background-image:url(images/main-slider/image-1.jpg)">
                <div class="auto-container">
					
					<!-- Content boxed -->
					<div class="content-boxed">
						<div class="title">Welcome to Solva Agency</div>
						<h1>Better Solution <br> At Your Fingertips.</h1>
						<div class="link-box clearfix">
							<a href="{{ asset('fronted') }}/https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image video-box"><span class="fa fa-play"><i class="ripple"></i></span></a>
							<a href="{{ asset('fronted') }}/services.html" class="theme-btn btn-style-three"><span class="txt">View Service</span></a>
						</div>
					</div>
					
                </div>
            </div>
            
            <div class="slide" style="background-image:url(images/main-slider/image-1.jpg)">
                <div class="auto-container">
					<!-- Content boxed -->
					<div class="content-boxed">
						<div class="title">Welcome to Solva Agency</div>
						<h1>Better Solution <br> At Your Fingertips.</h1>
						<div class="link-box clearfix">
							<a href="{{ asset('fronted') }}/https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image video-box"><span class="fa fa-play"><i class="ripple"></i></span></a>
							<a href="{{ asset('fronted') }}/services.html" class="theme-btn btn-style-three"><span class="txt">View Service</span></a>
						</div>
					</div>
                </div>
            </div>
			
			<div class="slide" style="background-image:url(images/main-slider/image-1.jpg)">
                <div class="auto-container">
					<!-- Content boxed -->
					<div class="content-boxed">
						<div class="title">Welcome to Solva Agency</div>
						<h1>Better Solution <br> At Your Fingertips.</h1>
						<div class="link-box clearfix">
							<a href="{{ asset('fronted') }}/https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image video-box"><span class="fa fa-play"><i class="ripple"></i></span></a>
							<a href="{{ asset('fronted') }}/services.html" class="theme-btn btn-style-three"><span class="txt">View Service</span></a>
						</div>
					</div>
                </div>
            </div>
			
        </div>
		
    </section>
    <!--End Main Slider-->

	<!-- Services Section -->
	<section class="services-section">
		<div class="patern-layer" style="background-image: url(images/background/pattern-1.jpg)"></div>
		<div class="auto-container">
			<div class="inner-container">
				
				<div class="three-item-carousel owl-carousel owl-theme">
					
					<!-- Service Block -->
					<div class="service-block">
						<div class="inner-box">
							<div class="content-box">
								<div class="icon-box">
									<span class="icon flaticon-pie-chart-3"></span>
								</div>
								<h5><a href="{{ asset('fronted') }}/services-single.html">Business Plan</a></h5>
								<div class="text">Sed quia magni dolores eos qui ratione voluptatem sequi nesciunt eque porro.</div>
							</div>
							<div class="big-icon flaticon-pie-chart-3"></div>
							<a href="{{ asset('fronted') }}/services-single.html" class="arrow-box"><span class="icon flaticon-arrow-pointing-to-right"></span></a>
						</div>
					</div>
					
					<!-- Service Block -->
					<div class="service-block">
						<div class="inner-box">
							<div class="content-box">
								<div class="icon-box">
									<span class="icon flaticon-search-engine"></span>
								</div>
								<h5><a href="{{ asset('fronted') }}/services-single.html">Program Management</a></h5>
								<div class="text">Sed quia magni dolores eos qui ratione voluptatem sequi nesciunt eque porro.</div>
							</div>
							<div class="big-icon flaticon-search-engine"></div>
							<a href="{{ asset('fronted') }}/services-single.html" class="arrow-box"><span class="icon flaticon-arrow-pointing-to-right"></span></a>
						</div>
					</div>
					
					<!-- Service Block -->
					<div class="service-block">
						<div class="inner-box">
							<div class="content-box">
								<div class="icon-box">
									<span class="icon flaticon-growth"></span>
								</div>
								<h5><a href="{{ asset('fronted') }}/services-single.html">Startegy Business</a></h5>
								<div class="text">Sed quia magni dolores eos qui ratione voluptatem sequi nesciunt eque porro.</div>
							</div>
							<div class="big-icon flaticon-growth"></div>
							<a href="{{ asset('fronted') }}/services-single.html" class="arrow-box"><span class="icon flaticon-arrow-pointing-to-right"></span></a>
						</div>
					</div>
					
					<!-- Service Block -->
					<div class="service-block">
						<div class="inner-box">
							<div class="content-box">
								<div class="icon-box">
									<span class="icon flaticon-pie-chart-3"></span>
								</div>
								<h5><a href="{{ asset('fronted') }}/services-single.html">Business Plan</a></h5>
								<div class="text">Sed quia magni dolores eos qui ratione voluptatem sequi nesciunt eque porro.</div>
							</div>
							<div class="big-icon flaticon-pie-chart-3"></div>
							<a href="{{ asset('fronted') }}/services-single.html" class="arrow-box"><span class="icon flaticon-arrow-pointing-to-right"></span></a>
						</div>
					</div>
					
					<!-- Service Block -->
					<div class="service-block">
						<div class="inner-box">
							<div class="content-box">
								<div class="icon-box">
									<span class="icon flaticon-search-engine"></span>
								</div>
								<h5><a href="{{ asset('fronted') }}/services-single.html">Program Management</a></h5>
								<div class="text">Sed quia magni dolores eos qui ratione voluptatem sequi nesciunt eque porro.</div>
							</div>
							<div class="big-icon flaticon-search-engine"></div>
							<a href="{{ asset('fronted') }}/services-single.html" class="arrow-box"><span class="icon flaticon-arrow-pointing-to-right"></span></a>
						</div>
					</div>
					
					<!-- Service Block -->
					<div class="service-block">
						<div class="inner-box">
							<div class="content-box">
								<div class="icon-box">
									<span class="icon flaticon-growth"></span>
								</div>
								<h5><a href="{{ asset('fronted') }}/services-single.html">Startegy Business</a></h5>
								<div class="text">Sed quia magni dolores eos qui ratione voluptatem sequi nesciunt eque porro.</div>
							</div>
							<div class="big-icon flaticon-growth"></div>
							<a href="{{ asset('fronted') }}/services-single.html" class="arrow-box"><span class="icon flaticon-arrow-pointing-to-right"></span></a>
						</div>
					</div>
					
					<!-- Service Block -->
					<div class="service-block">
						<div class="inner-box">
							<div class="content-box">
								<div class="icon-box">
									<span class="icon flaticon-pie-chart-3"></span>
								</div>
								<h5><a href="{{ asset('fronted') }}/services-single.html">Business Plan</a></h5>
								<div class="text">Sed quia magni dolores eos qui ratione voluptatem sequi nesciunt eque porro.</div>
							</div>
							<div class="big-icon flaticon-pie-chart-3"></div>
							<a href="{{ asset('fronted') }}/services-single.html" class="arrow-box"><span class="icon flaticon-arrow-pointing-to-right"></span></a>
						</div>
					</div>
					
					<!-- Service Block -->
					<div class="service-block">
						<div class="inner-box">
							<div class="content-box">
								<div class="icon-box">
									<span class="icon flaticon-search-engine"></span>
								</div>
								<h5><a href="{{ asset('fronted') }}/services-single.html">Program Management</a></h5>
								<div class="text">Sed quia magni dolores eos qui ratione voluptatem sequi nesciunt eque porro.</div>
							</div>
							<div class="big-icon flaticon-search-engine"></div>
							<a href="{{ asset('fronted') }}/services-single.html" class="arrow-box"><span class="icon flaticon-arrow-pointing-to-right"></span></a>
						</div>
					</div>
					
					<!-- Service Block -->
					<div class="service-block">
						<div class="inner-box">
							<div class="content-box">
								<div class="icon-box">
									<span class="icon flaticon-growth"></span>
								</div>
								<h5><a href="{{ asset('fronted') }}/services-single.html">Startegy Business</a></h5>
								<div class="text">Sed quia magni dolores eos qui ratione voluptatem sequi nesciunt eque porro.</div>
							</div>
							<div class="big-icon flaticon-growth"></div>
							<a href="{{ asset('fronted') }}/services-single.html" class="arrow-box"><span class="icon flaticon-arrow-pointing-to-right"></span></a>
						</div>
					</div>
					
				</div>
				
			</div>
			<div class="consult">You can also find our <a href="{{ asset('fronted') }}/services.html">Consultant Service</a> to contact for the consulting</div>
		</div>
	</section>
	<!-- End Services Section -->
	
	<!-- Introduction Section -->
	<section class="introduction-section">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Image Column -->
				<div class="image-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="image">
							<img src="images/resource/introduction.jpg" alt="" />
							<div class="projects">
								More than 350 projects <br> were completed. 
							</div>
						</div>
					</div>
				</div>
				
				<!-- Content Column -->
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="sec-title">
							<div class="title">Our introduction</div>
							<h2>We are here to manage <br> Quality Consulting Service <br> and Finace Plan</h2>
						</div>
						<div class="text">
							<p>The argument in favor of using filler text goes something like this: If you use real content in the <a href="{{ asset('fronted') }}/services.html">Consulting Process</a>, anytime you reach a review point you’ll end up reviewing and negotiating the content itself and not the design.</p>
							<p>Aenean tincidunt id mauris id auctor. Donec at ligula lacus. Nulla dignissim mi quis neque interdum, quis porta sem finibus.</p>
						</div>
						<div class="row clearfix">
							<!-- Column -->
							<div class="column col-lg-6 col-md-6 col-sm-12">
								<ul class="list-style-three">
									<li>Startegic Vision</li>
									<li>Interpersonal Skill</li>
								</ul>
							</div>
							<!-- Column -->
							<div class="column col-lg-6 col-md-6 col-sm-12">
								<ul class="list-style-three">
									<li>Networks That Span Sectors</li>
									<li>Flexible Delivery Model</li>
								</ul>
							</div>
						</div>
						<!-- Contact -->
						<div class="contact">
							<span class="question">Call to Ask Any Question</span>
							<a href="{{ asset('fronted') }}/tel:+540-325-1523">540-325-1523</a> or <a href="{{ asset('fronted') }}/tel:+540-328-1265">540-328-1265</a>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Introduction Section -->
	
	<!-- Counter Section -->
    <section class="counter-section" style="background-image: url(images/background/1.jpg)">
    	<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title light centered">
				<h2>We Have Random and <br> Interesting Facts.</h2>
				<div class="text">Starfish can re-grow their arms. In fact, a single arm can regenerate a whole body. <br> Google’s founders were willing to sell & consult.</div>
			</div>
			
			<!-- Fact Counter -->
			<div class="fact-counter">
				<div class="row clearfix">
				
					<!--Column-->
					<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
						<div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="count-outer count-box">
								<span class="count-text" data-speed="3000ms" data-stop="105">0</span>+
								<div class="counter-title">Team Members</div>
							</div>
						</div>
					</div>
			
					<!--Column-->
					<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
						<div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="count-outer count-box">
								<span class="count-text" data-speed="2000" data-stop="215">0</span>+
								<div class="counter-title">Client’s Feedback</div>
							</div>
						</div>
					</div>
			
					<!--Column-->
					<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
						<div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
							<div class="count-outer count-box">
								<span class="count-text" data-speed="2000" data-stop="15">0</span>+
								<div class="counter-title">Winning Awards</div>
							</div>
						</div>
					</div>
			
					<!--Column-->
					<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
						<div class="inner wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
							<div class="count-outer count-box">
								<span class="count-text" data-speed="1500" data-stop="310">0</span>+
								<div class="counter-title">Completed Works</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
			
		</div>
	</section>
	
	<!-- Portfolio Section -->
	<section class="portfolio-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<h2>We’ve Done Lot’s of Work, Let’s <br> Check Some From Here</h2>
			</div>
			
			<!--Isotope Galery-->
            <div class="sortable-masonry">
                
                <!--Filter-->
                <div class="filters clearfix">
                	
                	<ul class="filter-tabs filter-btns text-center clearfix">
                        <li class="active filter" data-role="button" data-filter=".all">All</li>
                        <li class="filter" data-role="button" data-filter=".coaching">Coaching</li>
                        <li class="filter" data-role="button" data-filter=".acilitation">Acilitation</li>
                        <li class="filter" data-role="button" data-filter=".stakeholder">Stakeholder</li>
                        <li class="filter" data-role="button" data-filter=".relations">Relations</li>
						<li class="filter" data-role="button" data-filter=".strategy">Strategy</li>
                    </ul>
                    
                </div>
                
                <div class="items-container row clearfix">
					
					<!-- Portfolio Block -->
					<div class="project-block masonry-item all strategy col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="image">
								<img src="images/gallery/1.jpg" alt="" />
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="title">Corporate</div>
										<h4><a href="{{ asset('fronted') }}/portfolio-single.html">Business Management</a></h4>
										<div class="social-box">
											<a href="{{ asset('fronted') }}/#" class="fa fa-facebook"></a>
											<a href="{{ asset('fronted') }}/#" class="fa fa-twitter"></a>
											<a href="{{ asset('fronted') }}/#" class="fa fa-google-plus"></a>
											<a href="{{ asset('fronted') }}/#" class="fa fa-linkedin"></a>
										</div>
										<a href="{{ asset('fronted') }}/images/gallery/1.jpg" data-fancybox="gallery" data-caption="" class="plus flaticon-plus"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<!-- Portfolio Block -->
					<div class="project-block masonry-item all stakeholder relations col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="image">
								<img src="images/gallery/2.jpg" alt="" />
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="title">Corporate</div>
										<h4><a href="{{ asset('fronted') }}/portfolio-single.html">Business Management</a></h4>
										<div class="social-box">
											<a href="{{ asset('fronted') }}/#" class="fa fa-facebook"></a>
											<a href="{{ asset('fronted') }}/#" class="fa fa-twitter"></a>
											<a href="{{ asset('fronted') }}/#" class="fa fa-google-plus"></a>
											<a href="{{ asset('fronted') }}/#" class="fa fa-linkedin"></a>
										</div>
										<a href="{{ asset('fronted') }}/images/gallery/2.jpg" data-fancybox="gallery" data-caption="" class="plus flaticon-plus"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<!-- Portfolio Block -->
					<div class="project-block masonry-item all stakeholder relations coaching col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="image">
								<img src="images/gallery/3.jpg" alt="" />
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="title">Corporate</div>
										<h4><a href="{{ asset('fronted') }}/portfolio-single.html">Business Management</a></h4>
										<div class="social-box">
											<a href="{{ asset('fronted') }}/#" class="fa fa-facebook"></a>
											<a href="{{ asset('fronted') }}/#" class="fa fa-twitter"></a>
											<a href="{{ asset('fronted') }}/#" class="fa fa-google-plus"></a>
											<a href="{{ asset('fronted') }}/#" class="fa fa-linkedin"></a>
										</div>
										<a href="{{ asset('fronted') }}/images/gallery/3.jpg" data-fancybox="gallery" data-caption="" class="plus flaticon-plus"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<!-- Portfolio Block -->
					<div class="project-block masonry-item all acilitation coaching col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="image">
								<img src="images/gallery/5.jpg" alt="" />
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="title">Corporate</div>
										<h4><a href="{{ asset('fronted') }}/portfolio-single.html">Business Management</a></h4>
										<div class="social-box">
											<a href="{{ asset('fronted') }}/#" class="fa fa-facebook"></a>
											<a href="{{ asset('fronted') }}/#" class="fa fa-twitter"></a>
											<a href="{{ asset('fronted') }}/#" class="fa fa-google-plus"></a>
											<a href="{{ asset('fronted') }}/#" class="fa fa-linkedin"></a>
										</div>
										<a href="{{ asset('fronted') }}/images/gallery/5.jpg" data-fancybox="gallery" data-caption="" class="plus flaticon-plus"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<!-- Portfolio Block -->
					<div class="project-block masonry-item all stakeholder col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="image">
								<img src="images/gallery/6.jpg" alt="" />
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="title">Corporate</div>
										<h4><a href="{{ asset('fronted') }}/portfolio-single.html">Business Management</a></h4>
										<div class="social-box">
											<a href="{{ asset('fronted') }}/#" class="fa fa-facebook"></a>
											<a href="{{ asset('fronted') }}/#" class="fa fa-twitter"></a>
											<a href="{{ asset('fronted') }}/#" class="fa fa-google-plus"></a>
											<a href="{{ asset('fronted') }}/#" class="fa fa-linkedin"></a>
										</div>
										<a href="{{ asset('fronted') }}/images/gallery/6.jpg" data-fancybox="gallery" data-caption="" class="plus flaticon-plus"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<!-- Portfolio Block -->
					<div class="project-block masonry-item all coaching acilitation col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="image">
								<img src="images/gallery/4.jpg" alt="" />
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="title">Corporate</div>
										<h4><a href="{{ asset('fronted') }}/portfolio-single.html">Business Management</a></h4>
										<div class="social-box">
											<a href="{{ asset('fronted') }}/#" class="fa fa-facebook"></a>
											<a href="{{ asset('fronted') }}/#" class="fa fa-twitter"></a>
											<a href="{{ asset('fronted') }}/#" class="fa fa-google-plus"></a>
											<a href="{{ asset('fronted') }}/#" class="fa fa-linkedin"></a>
										</div>
										<a href="{{ asset('fronted') }}/images/gallery/4.jpg" data-fancybox="gallery" data-caption="" class="plus flaticon-plus"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
			
			<!-- Text Box -->
			<div class="text-box text-center">
				<div class="text">If You Want More Project Now Then <a href="{{ asset('fronted') }}/projects.html">Click Hear</a>.</div>
			</div>
			
		</div>
	</section>
	<!-- End Portfolio Section -->
	
	<!-- Testimonial Section -->
	<section class="testimonial-section">
		<div class="patern-layer" style="background-image: url(images/background/pattern-3.png)"></div>
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title light centered">
				<h2>What Clients Say About Sauber</h2>
				<div class="text">Find reviews written by customer for customer to help you choose <br> the best service for you, first hand experience.</div>
			</div>
			
			<div class="testimonial-outer">
				
				<!-- Product Thumbs Carousel -->
                <div class="client-thumb-outer">
                    <div class="client-thumbs-carousel owl-carousel owl-theme">
					
                        <div class="thumb-item">
                            <figure class="thumb-box"><img src="images/resource/author-1.jpg" alt=""></figure>
							<div class="author-info">
								<div class="author-name">JAMES HANSON</div>
								<div class="designation">Engineering Officer</div>
							</div>
                        </div>
                        <div class="thumb-item">
                            <figure class="thumb-box"><img src="images/resource/author-2.jpg" alt=""></figure>
							<div class="author-info">
								<div class="author-name">ROBERT PATTINSON</div>
								<div class="designation">Engineering Officer</div>
							</div>
                        </div>
                        <div class="thumb-item">
                            <figure class="thumb-box"><img src="images/resource/author-3.jpg" alt=""></figure>
							<div class="author-info">
								<div class="author-name">CROWNA BATTION</div>
								<div class="designation">Marketing manager</div>
							</div>
                        </div>
						
                        <div class="thumb-item">
                            <figure class="thumb-box"><img src="images/resource/author-1.jpg" alt=""></figure>
							<div class="author-info">
								<div class="author-name">JAMES HANSON</div>
								<div class="designation">Engineering Officer</div>
							</div>
                        </div>
                        <div class="thumb-item">
                            <figure class="thumb-box"><img src="images/resource/author-2.jpg" alt=""></figure>
							<div class="author-info">
								<div class="author-name">ROBERT PATTINSON</div>
								<div class="designation">Engineering Officer</div>
							</div>
                        </div>
                        <div class="thumb-item">
                            <figure class="thumb-box"><img src="images/resource/author-3.jpg" alt=""></figure>
							<div class="author-info">
								<div class="author-name">CROWNA BATTION</div>
								<div class="designation">Marketing manager</div>
							</div>
                        </div>
						
                    </div>
                </div>
				
            	<!-- Client Testimonial Carousel -->
                <div class="client-testimonial-carousel owl-carousel owl-theme">
                
                    <!--Testimonial Block -->
                    <div class="testimonial-block">
                        <div class="inner-box">
							<div class="text">I greatly appreciate working with the professional and dedicated <br> teams at Facmaster. I feel that they strongly recognize the opportunities to partner together for <br> mutually successful business. </div>
							<div class="quote-outer">
								<div class="quote-icon flaticon-quote-3"></div>
							</div>
							<div class="rating">
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
                        </div>
                    </div>
                    
                    <!--Testimonial Block -->
                    <div class="testimonial-block">
                        <div class="inner-box">
							<div class="text">I greatly appreciate working with the professional and dedicated <br> teams at Facmaster. I feel that they strongly recognize the opportunities to partner together for <br> mutually successful business. </div>
							<div class="quote-outer">
								<div class="quote-icon flaticon-quote-3"></div>
							</div>
							<div class="rating">
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
                        </div>
                    </div>
					
					<!--Testimonial Block -->
                    <div class="testimonial-block">
                        <div class="inner-box">
							<div class="text">I greatly appreciate working with the professional and dedicated <br> teams at Facmaster. I feel that they strongly recognize the opportunities to partner together for <br> mutually successful business. </div>
							<div class="quote-outer">
								<div class="quote-icon flaticon-quote-3"></div>
							</div>
							<div class="rating">
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
                        </div>
                    </div>
                    
                    <!--Testimonial Block -->
                    <div class="testimonial-block">
                        <div class="inner-box">
							<div class="text">I greatly appreciate working with the professional and dedicated <br> teams at Facmaster. I feel that they strongly recognize the opportunities to partner together for <br> mutually successful business. </div>
							<div class="quote-outer">
								<div class="quote-icon flaticon-quote-3"></div>
							</div>
							<div class="rating">
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
                        </div>
                    </div>
					
					<!--Testimonial Block -->
                    <div class="testimonial-block">
                        <div class="inner-box">
							<div class="text">I greatly appreciate working with the professional and dedicated <br> teams at Facmaster. I feel that they strongly recognize the opportunities to partner together for <br> mutually successful business. </div>
							<div class="quote-outer">
								<div class="quote-icon flaticon-quote-3"></div>
							</div>
							<div class="rating">
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
                        </div>
                    </div>
					
					<!--Testimonial Block -->
                    <div class="testimonial-block">
                        <div class="inner-box">
							<div class="text">I greatly appreciate working with the professional and dedicated <br> teams at Facmaster. I feel that they strongly recognize the opportunities to partner together for <br> mutually successful business. </div>
							<div class="quote-outer">
								<div class="quote-icon flaticon-quote-3"></div>
							</div>
							<div class="rating">
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
                        </div>
                    </div>
                    
                </div>
				
            </div>
			
		</div>
	</section>
	<!-- End Testimonial Section -->
	
	<!-- Team Section -->
	<section class="team-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<h2>Our Team is Very Expert to help <br> Your Business Growth</h2>
				<div class="text">Employees need to realize the importance of working well with their teammates <br> when coming into a new job or an existing one.</div>
			</div>
			<div class="four-item-carousel owl-carousel owl-theme">
				
				<!-- Team Block -->
				<div class="team-block">
					<div class="inner-box">
						<div class="image">
							<img src="images/resource/team-1.jpg" alt="" />
							<div class="overlay-box">
								<ul class="social-nav">
									<li class="facebook"><a href="{{ asset('fronted') }}/#"><span class="fa fa-facebook-f"></span></a></li>
									<li class="twitter"><a href="{{ asset('fronted') }}/#"><span class="fa fa-twitter"></span></a></li>
									<li class="google"><a href="{{ asset('fronted') }}/#"><span class="fa fa-google-plus"></span></a></li>
									<li class="linked"><a href="{{ asset('fronted') }}/#"><span class="fa fa-linkedin"></span></a></li>
								</ul>
								<div class="content">
									<h4><a href="{{ asset('fronted') }}/#">Julia Sweet</a></h4>
									<div class="designation">Founder CEO</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Team Block -->
				<div class="team-block">
					<div class="inner-box">
						<div class="image">
							<img src="images/resource/team-2.jpg" alt="" />
							<div class="overlay-box">
								<ul class="social-nav">
									<li class="facebook"><a href="{{ asset('fronted') }}/#"><span class="fa fa-facebook-f"></span></a></li>
									<li class="twitter"><a href="{{ asset('fronted') }}/#"><span class="fa fa-twitter"></span></a></li>
									<li class="google"><a href="{{ asset('fronted') }}/#"><span class="fa fa-google-plus"></span></a></li>
									<li class="linked"><a href="{{ asset('fronted') }}/#"><span class="fa fa-linkedin"></span></a></li>
								</ul>
								<div class="content">
									<h4><a href="{{ asset('fronted') }}/#">John Legend</a></h4>
									<div class="designation">Marketing Manager</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Team Block -->
				<div class="team-block">
					<div class="inner-box">
						<div class="image">
							<img src="images/resource/team-3.jpg" alt="" />
							<div class="overlay-box">
								<ul class="social-nav">
									<li class="facebook"><a href="{{ asset('fronted') }}/#"><span class="fa fa-facebook-f"></span></a></li>
									<li class="twitter"><a href="{{ asset('fronted') }}/#"><span class="fa fa-twitter"></span></a></li>
									<li class="google"><a href="{{ asset('fronted') }}/#"><span class="fa fa-google-plus"></span></a></li>
									<li class="linked"><a href="{{ asset('fronted') }}/#"><span class="fa fa-linkedin"></span></a></li>
								</ul>
								<div class="content">
									<h4><a href="{{ asset('fronted') }}/#">Amber Lee</a></h4>
									<div class="designation">Project Manager</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Team Block -->
				<div class="team-block">
					<div class="inner-box">
						<div class="image">
							<img src="images/resource/team-4.jpg" alt="" />
							<div class="overlay-box">
								<ul class="social-nav">
									<li class="facebook"><a href="{{ asset('fronted') }}/#"><span class="fa fa-facebook-f"></span></a></li>
									<li class="twitter"><a href="{{ asset('fronted') }}/#"><span class="fa fa-twitter"></span></a></li>
									<li class="google"><a href="{{ asset('fronted') }}/#"><span class="fa fa-google-plus"></span></a></li>
									<li class="linked"><a href="{{ asset('fronted') }}/#"><span class="fa fa-linkedin"></span></a></li>
								</ul>
								<div class="content">
									<h4><a href="{{ asset('fronted') }}/#">Julia Sweet</a></h4>
									<div class="designation">Founder CEO</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Team Block -->
				<div class="team-block">
					<div class="inner-box">
						<div class="image">
							<img src="images/resource/team-1.jpg" alt="" />
							<div class="overlay-box">
								<ul class="social-nav">
									<li class="facebook"><a href="{{ asset('fronted') }}/#"><span class="fa fa-facebook-f"></span></a></li>
									<li class="twitter"><a href="{{ asset('fronted') }}/#"><span class="fa fa-twitter"></span></a></li>
									<li class="google"><a href="{{ asset('fronted') }}/#"><span class="fa fa-google-plus"></span></a></li>
									<li class="linked"><a href="{{ asset('fronted') }}/#"><span class="fa fa-linkedin"></span></a></li>
								</ul>
								<div class="content">
									<h4><a href="{{ asset('fronted') }}/#">Julia Sweet</a></h4>
									<div class="designation">Founder CEO</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Team Block -->
				<div class="team-block">
					<div class="inner-box">
						<div class="image">
							<img src="images/resource/team-2.jpg" alt="" />
							<div class="overlay-box">
								<ul class="social-nav">
									<li class="facebook"><a href="{{ asset('fronted') }}/#"><span class="fa fa-facebook-f"></span></a></li>
									<li class="twitter"><a href="{{ asset('fronted') }}/#"><span class="fa fa-twitter"></span></a></li>
									<li class="google"><a href="{{ asset('fronted') }}/#"><span class="fa fa-google-plus"></span></a></li>
									<li class="linked"><a href="{{ asset('fronted') }}/#"><span class="fa fa-linkedin"></span></a></li>
								</ul>
								<div class="content">
									<h4><a href="{{ asset('fronted') }}/#">John Legend</a></h4>
									<div class="designation">Marketing Manager</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Team Block -->
				<div class="team-block">
					<div class="inner-box">
						<div class="image">
							<img src="images/resource/team-3.jpg" alt="" />
							<div class="overlay-box">
								<ul class="social-nav">
									<li class="facebook"><a href="{{ asset('fronted') }}/#"><span class="fa fa-facebook-f"></span></a></li>
									<li class="twitter"><a href="{{ asset('fronted') }}/#"><span class="fa fa-twitter"></span></a></li>
									<li class="google"><a href="{{ asset('fronted') }}/#"><span class="fa fa-google-plus"></span></a></li>
									<li class="linked"><a href="{{ asset('fronted') }}/#"><span class="fa fa-linkedin"></span></a></li>
								</ul>
								<div class="content">
									<h4><a href="{{ asset('fronted') }}/#">Amber Lee</a></h4>
									<div class="designation">Project Manager</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Team Block -->
				<div class="team-block">
					<div class="inner-box">
						<div class="image">
							<img src="images/resource/team-4.jpg" alt="" />
							<div class="overlay-box">
								<ul class="social-nav">
									<li class="facebook"><a href="{{ asset('fronted') }}/#"><span class="fa fa-facebook-f"></span></a></li>
									<li class="twitter"><a href="{{ asset('fronted') }}/#"><span class="fa fa-twitter"></span></a></li>
									<li class="google"><a href="{{ asset('fronted') }}/#"><span class="fa fa-google-plus"></span></a></li>
									<li class="linked"><a href="{{ asset('fronted') }}/#"><span class="fa fa-linkedin"></span></a></li>
								</ul>
								<div class="content">
									<h4><a href="{{ asset('fronted') }}/#">Julia Sweet</a></h4>
									<div class="designation">Founder CEO</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Team Block -->
				<div class="team-block">
					<div class="inner-box">
						<div class="image">
							<img src="images/resource/team-1.jpg" alt="" />
							<div class="overlay-box">
								<ul class="social-nav">
									<li class="facebook"><a href="{{ asset('fronted') }}/#"><span class="fa fa-facebook-f"></span></a></li>
									<li class="twitter"><a href="{{ asset('fronted') }}/#"><span class="fa fa-twitter"></span></a></li>
									<li class="google"><a href="{{ asset('fronted') }}/#"><span class="fa fa-google-plus"></span></a></li>
									<li class="linked"><a href="{{ asset('fronted') }}/#"><span class="fa fa-linkedin"></span></a></li>
								</ul>
								<div class="content">
									<h4><a href="{{ asset('fronted') }}/#">Julia Sweet</a></h4>
									<div class="designation">Founder CEO</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Team Block -->
				<div class="team-block">
					<div class="inner-box">
						<div class="image">
							<img src="images/resource/team-2.jpg" alt="" />
							<div class="overlay-box">
								<ul class="social-nav">
									<li class="facebook"><a href="{{ asset('fronted') }}/#"><span class="fa fa-facebook-f"></span></a></li>
									<li class="twitter"><a href="{{ asset('fronted') }}/#"><span class="fa fa-twitter"></span></a></li>
									<li class="google"><a href="{{ asset('fronted') }}/#"><span class="fa fa-google-plus"></span></a></li>
									<li class="linked"><a href="{{ asset('fronted') }}/#"><span class="fa fa-linkedin"></span></a></li>
								</ul>
								<div class="content">
									<h4><a href="{{ asset('fronted') }}/#">John Legend</a></h4>
									<div class="designation">Marketing Manager</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Team Block -->
				<div class="team-block">
					<div class="inner-box">
						<div class="image">
							<img src="images/resource/team-3.jpg" alt="" />
							<div class="overlay-box">
								<ul class="social-nav">
									<li class="facebook"><a href="{{ asset('fronted') }}/#"><span class="fa fa-facebook-f"></span></a></li>
									<li class="twitter"><a href="{{ asset('fronted') }}/#"><span class="fa fa-twitter"></span></a></li>
									<li class="google"><a href="{{ asset('fronted') }}/#"><span class="fa fa-google-plus"></span></a></li>
									<li class="linked"><a href="{{ asset('fronted') }}/#"><span class="fa fa-linkedin"></span></a></li>
								</ul>
								<div class="content">
									<h4><a href="{{ asset('fronted') }}/#">Amber Lee</a></h4>
									<div class="designation">Project Manager</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Team Block -->
				<div class="team-block">
					<div class="inner-box">
						<div class="image">
							<img src="images/resource/team-4.jpg" alt="" />
							<div class="overlay-box">
								<ul class="social-nav">
									<li class="facebook"><a href="{{ asset('fronted') }}/#"><span class="fa fa-facebook-f"></span></a></li>
									<li class="twitter"><a href="{{ asset('fronted') }}/#"><span class="fa fa-twitter"></span></a></li>
									<li class="google"><a href="{{ asset('fronted') }}/#"><span class="fa fa-google-plus"></span></a></li>
									<li class="linked"><a href="{{ asset('fronted') }}/#"><span class="fa fa-linkedin"></span></a></li>
								</ul>
								<div class="content">
									<h4><a href="{{ asset('fronted') }}/#">Julia Sweet</a></h4>
									<div class="designation">Founder CEO</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Team Section -->
	
	<!-- Contact Section -->
    <section class="contact-section" style="background-image: url(images/background/2.jpg)">
    	<div class="auto-container">
			
			<div class="row clearfix">
				
				<!-- Form Column -->
				<div class="form-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						
						<!-- Default Form -->
                        <div class="default-form">
                            <form method="post" action="https://expert-themes.com/html/solva/contact.html">
                                <div class="row clearfix">
                                    
									<div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="username" value="" placeholder="Name *" required>
                                    </div>
                                    
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="email" name="email" value="" placeholder="Email *" required>
                                    </div>
									
									<div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="service" value="" placeholder="Service *" required>
                                    </div>
                                    
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="phone" value="" placeholder="Phone *" required>
                                    </div>
                                    
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <textarea name="message" placeholder="Message"></textarea>
                                    </div>
                                    
                                    <div class="form-group text-center btn-column col-md-12 col-sm-12 col-xs-12">
                                        <button type="submit" class="theme-btn btn-style-one"><span class="txt">Submit</span></button>
                                    </div>
                                    
                                </div>
                                
                            </form>
                        </div>
						
					</div>
				</div>
				
				<!-- Content Column -->
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<!-- Sec Title -->
						<div class="sec-title light">
							<h2>Get in Touch For Any Kind <br> of Help & Informations</h2>
							<div class="text">We’re glad to discuss your organisation’s situation. <br> So please contact us via the details below, or enter your request.</div>
						</div>
						
						<ul class="list-style-two">
							<li>
								<span class="icon flaticon-maps-and-flags"></span>
								<strong>Head Office Address:</strong>
								321, art Street 235 Newyork ,USA 102
							</li>
							<li>
								<span class="icon flaticon-call"></span>
								<strong>Call for help:</strong>
								(734) 697-2907, (843) 971-1906
							</li>
							<li>
								<span class="icon flaticon-email-4"></span>
								<strong>Mail us for information</strong>
								ouremial@envato.com,   ouremail@solva.com
							</li>
						</ul>
						
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Contact Section -->
	
	<!-- News Section -->
    <section class="news-section">
    	<div class="auto-container">
			<div class="sec-title centered">
				<h2>All News & Artical <br> We’re Here to Share Story</h2>
				<div class="text">We would love to share a similar experience and how I learned some <br> valuable lessons during a downturn.</div>
			</div>
			<div class="row clearfix">
				
				<!-- News Block -->
				<div class="news-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="{{ asset('fronted') }}/news-detail.html"><img src="images/resource/news-1.jpg" alt="" /></a>
						</div>
						<div class="lower-content">
							<ul class="post-meta">
								<li><span class="icon flaticon-calendar-1"></span>June 30, 2020</li>
								<li><span class="icon flaticon-user-3"></span>By Admin</li>
							</ul>
							<h4><a href="{{ asset('fronted') }}/news-detail.html">Retail banks wakeup to digital</a></h4>
							<div class="text">know how to pursue pleasure rationally seds encounter consequences.</div>
							<div class="lower-box clearfix">
								<div class="pull-left">
									<a href="{{ asset('fronted') }}/news-detail.html" class="read-more">Read More</a>
								</div>
								<div class="pull-right">
									<a href="{{ asset('fronted') }}/news-detail.html" class="comments">3 Comments</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- News Block -->
				<div class="news-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="{{ asset('fronted') }}/news-detail.html"><img src="images/resource/news-2.jpg" alt="" /></a>
						</div>
						<div class="lower-content">
							<ul class="post-meta">
								<li><span class="icon flaticon-calendar-1"></span>June 30, 2020</li>
								<li><span class="icon flaticon-user-3"></span>By Admin</li>
							</ul>
							<h4><a href="{{ asset('fronted') }}/news-detail.html">Create great WordPress theme</a></h4>
							<div class="text">Desires to obtain pain ut of itself, because it is pain because occasionally.</div>
							<div class="lower-box clearfix">
								<div class="pull-left">
									<a href="{{ asset('fronted') }}/news-detail.html" class="read-more">Read More</a>
								</div>
								<div class="pull-right">
									<a href="{{ asset('fronted') }}/news-detail.html" class="comments">2 Comments</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- News Block -->
				<div class="news-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="{{ asset('fronted') }}/news-detail.html"><img src="images/resource/news-3.jpg" alt="" /></a>
						</div>
						<div class="lower-content">
							<ul class="post-meta">
								<li><span class="icon flaticon-calendar-1"></span>June 30, 2020</li>
								<li><span class="icon flaticon-user-3"></span>By Admin</li>
							</ul>
							<h4><a href="{{ asset('fronted') }}/news-detail.html">How improve employees skills</a></h4>
							<div class="text">Great pleasure to take a trivial example, which of us undertakes laborious.</div>
							<div class="lower-box clearfix">
								<div class="pull-left">
									<a href="{{ asset('fronted') }}/news-detail.html" class="read-more">Read More</a>
								</div>
								<div class="pull-right">
									<a href="{{ asset('fronted') }}/news-detail.html" class="comments">1 Comments</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End News Section -->
	
	<!--Clients Section-->
    <section class="clients-section">
        <div class="auto-container">
            
            <div class="sponsors-outer">
                <!--Sponsors Carousel-->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                    <li class="slide-item"><figure class="image-box"><a href="{{ asset('fronted') }}/#"><img src="images/clients/1.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="{{ asset('fronted') }}/#"><img src="images/clients/2.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="{{ asset('fronted') }}/#"><img src="images/clients/3.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="{{ asset('fronted') }}/#"><img src="images/clients/4.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="{{ asset('fronted') }}/#"><img src="images/clients/1.png" alt=""></a></figure></li>
					<li class="slide-item"><figure class="image-box"><a href="{{ asset('fronted') }}/#"><img src="images/clients/2.png" alt=""></a></figure></li>
					<li class="slide-item"><figure class="image-box"><a href="{{ asset('fronted') }}/#"><img src="images/clients/3.png" alt=""></a></figure></li>
					<li class="slide-item"><figure class="image-box"><a href="{{ asset('fronted') }}/#"><img src="images/clients/4.png" alt=""></a></figure></li>
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
								<a href="{{ asset('fronted') }}/index.html"><img src="images/footer-logo.png" alt="" /></a>
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
									<div class="thumb"><a href="{{ asset('fronted') }}/news-detail.html"><img src="images/resource/post-thumb-1.jpg" alt=""></a></div>
									<h5><a href="{{ asset('fronted') }}/news-detail.html">Retail banks wakeup to digital</a></h5>
									<span class="date">28 Dec, 2019</span>
								</div>

								<div class="post">
									<div class="thumb"><a href="{{ asset('fronted') }}/news-detail.html"><img src="images/resource/post-thumb-2.jpg" alt=""></a></div>
									<h5><a href="{{ asset('fronted') }}/news-detail.html">How to improve employees skills</a></h5>
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
								<li><a href="{{ asset('fronted') }}/#"><i class="fa fa-facebook-f"></i></a></li>
								<li><a href="{{ asset('fronted') }}/#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="{{ asset('fronted') }}/#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="{{ asset('fronted') }}/#"><i class="fa fa-skype"></i></a></li>
								<li><a href="{{ asset('fronted') }}/#"><i class="fa fa-linkedin"></i></a></li>
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
							<li><a href="{{ asset('fronted') }}/#">Home</a></li>
							<li><a href="{{ asset('fronted') }}/#">Privacy Policy</a></li>
							<li><a href="{{ asset('fronted') }}/#">Investor</a></li>
							<li><a href="{{ asset('fronted') }}/#">Legals</a></li>
							<li><a href="{{ asset('fronted') }}/#">Contact</a></li>
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
					<a href="{{ asset('fronted') }}/#" class="close-side-widget">
						X
					</a>
				</div>
				<div class="sidebar-textwidget">
					
					<!-- Sidebar Info Content -->
					<div class="sidebar-info-contents">
						<div class="content-inner">
							<div class="logo">
								<a href="{{ asset('fronted') }}/index.html"><img src="images/logo-2.png" alt="" /></a>
							</div>
							<div class="content-box">
								<h2>About Us</h2>
								<p class="text">The argument in favor of using filler text goes something like this: If you use real content in the Consulting Process, anytime you reach a review point you’ll end up reviewing and negotiating the content itself and not the design.</p>
								<a href="{{ asset('fronted') }}/#" class="theme-btn btn-style-two"><span class="txt">Consultation</span></a>
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
								<li class="facebook"><a href="{{ asset('fronted') }}/#" class="fa fa-facebook-f"></a></li>
								<li class="twitter"><a href="{{ asset('fronted') }}/#" class="fa fa-twitter"></a></li>
								<li class="linkedin"><a href="{{ asset('fronted') }}/#" class="fa fa-linkedin"></a></li>
								<li class="instagram"><a href="{{ asset('fronted') }}/#" class="fa fa-instagram"></a></li>
								<li class="youtube"><a href="{{ asset('fronted') }}/#" class="fa fa-youtube"></a></li>
							</ul>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<!-- END sidebar widget item -->
@endsection