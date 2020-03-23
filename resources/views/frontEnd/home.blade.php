@extends('frontEnd.layouts.app',['pageTitle' => __('Home')])
@section('content')

    <!--Main Slider-->
    <section class="main-slider">

        <div class="main-slider-carousel owl-carousel owl-theme">
            @foreach (Helpers::findAll('slider') as $item)
			<div class="slide" style="background-image:url({{asset(Storage::url($item->image))}})">
                <div class="auto-container">

					<!-- Content boxed -->
					<div class="content-boxed">
						<div class="title">{{$item->slider_small_title}}</div>
						<h1>{{$item->slider_large_title}}</h1>
						<div class="link-box clearfix">
							<a href="{{ url('/' . $item->video_link) }}" class="lightbox-image video-box"><span class="fa fa-play"><i class="ripple"></i></span></a>
							<a href="{{ url('/services') }}" class="theme-btn btn-style-three"><span class="txt">View Service</span></a>
						</div>
					</div>

                </div>
            </div>
			@endforeach


            {{-- <div class="slide" style="background-image:url(images/main-slider/image-1.jpg)">
                <div class="auto-container">
					<!-- Content boxed -->
					<div class="content-boxed">
						<div class="title">Welcome to Merina Soft</div>
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
						<div class="title">Welcome to Merina Soft</div>
						<h1>Better Solution <br> At Your Fingertips.</h1>
						<div class="link-box clearfix">
							<a href="{{ asset('fronted') }}/https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image video-box"><span class="fa fa-play"><i class="ripple"></i></span></a>
							<a href="{{ asset('fronted') }}/services.html" class="theme-btn btn-style-three"><span class="txt">View Service</span></a>
						</div>
					</div>
                </div>
            </div> --}}

        </div>

    </section>
    <!--End Main Slider-->

	<!-- Services Section -->
	<section class="services-section">
		<div class="patern-layer" style="background-image: url({{ asset('frontEnd') }}/images/background/pattern-1.jpg)"></div>
		<div class="auto-container">
			<div class="inner-container">

				<div class="three-item-carousel owl-carousel owl-theme">
					@foreach (Helpers::findAll('service') as $item)
					<!-- Service Block -->
					<div class="service-block">
						<div class="inner-box">
							<div class="content-box">
								<div class="icon-box">
									<span class="icon flaticon-pie-chart-3"></span>
								</div>
							<h5><a href="{{ asset('frontEnd') }}/services-single.html">{{$item->header}}</a></h5>
								<div class="text">{{ Helpers::limit_text($item->shortDescription, 20) }}</div>
							</div>
							<div class="big-icon flaticon-pie-chart-3"></div>
							<a href="{{ url('/service-details', [$item->slug]) }}" class="arrow-box"><span class="icon flaticon-arrow-pointing-to-right"></span></a>
						</div>
					</div>
					@endforeach
				</div>

			</div>
			<div class="consult">You can also find our <a href="{{url('/contacts')}}">Consultant Service</a> to contact for the consulting</div>
		</div>
	</section>
	<!-- End Services Section -->

	<!-- Introduction Section -->
	<section class="introduction-section">
		<div class="auto-container">
            @foreach (Helpers::findAll('objective') as $item)
                <div class="row clearfix">

                    <!-- Image Column -->
                    <div class="image-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="image">
                                <img src="{{ asset(Storage::url($item->image))}}" alt="" />
                                <div class="projects">
                                    More than {{Helpers::findAll('project')->count()}} projects <br> were completed.
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Content Column -->
                    <div class="content-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="sec-title">
                                <div class="title">Our introduction</div>
                                <h2>{{$item->header}}</h2>
                            </div>
                            <div class="text">
                                <p>{!!$item->description!!}</p>
                            </div>
                            {{-- <div class="row clearfix">
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
                            </div> --}}
                            <!-- Contact -->
                            <div class="contact">
                                <span class="question">Call to Ask Any Question</span>
                            <a href="javascript:void(0)">{{$item->faq}}</a>
                            </div>
                        </div>
                    </div>

                </div>
            @endforeach
		</div>
	</section>
	<!-- End Introduction Section -->

	<!-- Counter Section -->
    {{-- <section class="counter-section" style="background-image: url(images/background/1.jpg)">
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
	</section> --}}

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
                        @foreach (Helpers::findAll('category') as $item)
                        <li class="filter" data-role="button" data-filter=".{{$item->id}}">{{$item->name}}</li>
                        @endforeach
                    </ul>

                </div>

                <div class="items-container row clearfix">

                    @foreach (Helpers::findAll('project')->slice(0, 6) as $item)
					<!-- Portfolio Block -->
                    <div class="project-block masonry-item all {{$item->category_id}} strategy col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="image">
								<img src="{{asset(Storage::url($item->thumbnail))}}" alt="" />
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="title">Corporate</div>
										<h4><a href="{{ isset($item->link) ? $item->link : 'javascript:void(0)' }}">{{$item->header}}</a></h4>
										{{-- <div class="social-box">
											<a href="#" class="fa fa-facebook"></a>
											<a href="#" class="fa fa-twitter"></a>
											<a href="#" class="fa fa-google-plus"></a>
											<a href="#" class="fa fa-linkedin"></a>
										</div> --}}
										<a href="{{ url('/project-details', [$item->slug]) }}" data-caption="" class="plus icon flaticon-arrow-pointing-to-right"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
                    @endforeach

				</div>
			</div>

			<!-- Text Box -->
			<div class="text-box text-center">
				<div class="text">If You Want More Project Now Then <a href="{{ url('/projects') }}">Click Hear</a>.</div>
			</div>

		</div>
	</section>
	<!-- End Portfolio Section -->

	<!-- Testimonial Section -->
	{{-- <section class="testimonial-section">
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
	</section> --}}
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

                @foreach (Helpers::findAll('our_team') as $item)
                    <!-- Team Block -->
                    <div class="team-block">
                        <div class="inner-box">
                            <div class="image">
                            <img src="{{asset(Storage::url($item->image))}}" alt="" />
                                <div class="overlay-box">
                                    <ul class="social-nav">
                                        <li class="facebook"><a href="{{$item->facebook}}"><span class="fa fa-facebook-f"></span></a></li>
                                        <li class="twitter"><a href="{{$item->twitter}}"><span class="fa fa-twitter"></span></a></li>
                                        <li class="google"><a href="{{$item->google_plus}}"><span class="fa fa-google-plus"></span></a></li>
                                        <li class="linked"><a href="{{$item->linkedin}}"><span class="fa fa-linkedin"></span></a></li>
                                    </ul>
                                    <div class="content">
                                    <h4><a href="javascrip:void(0)">{{$item->name}}</a></h4>
                                        <div class="designation">{{$item->designation}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

				{{-- <!-- Team Block -->
				<div class="team-block">
					<div class="inner-box">
						<div class="image">
							<img src="{{asset('frontEnd')}}/images/resource/team-2.jpg" alt="" />
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
				</div> --}}

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
                            <form class="well form-horizontal" action="{{url('/message')}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <fieldset>
                                <div class="row clearfix">

									<div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="name" value="" placeholder="Name *" required>
                                    </div>

                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="email" name="mail" value="" placeholder="Email *" required>
                                    </div>

									<div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="subject" value="" placeholder="Subject *" required>
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
                            </fieldset>
                            </form>
                        </div>

					</div>
				</div>

                <!-- Content Column -->
                @foreach (Helpers::findAll('contact') as $item)
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<!-- Sec Title -->
						<div class="sec-title light">
                        <h2>{{$item->header}}</h2>
							<div class="text">{!! $item->body_text !!}</div>
						</div>

						<ul class="list-style-two">
							<li>
								<span class="icon flaticon-maps-and-flags"></span>
								<strong>Head Office Address:</strong>
								{{$item->address}}
							</li>
							<li>
								<span class="icon flaticon-call"></span>
								<strong>Call for help:</strong>
								{{$item->phone}}
							</li>
							<li>
								<span class="icon flaticon-email-4"></span>
								<strong>Mail us for information</strong>
								{{$item->mail}}
							</li>
						</ul>

					</div>
                </div>
                @endforeach

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
                @foreach (Helpers::findAllDesc('blogs')->slice(0, 6) as $item)
                    <div class="news-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image">
                                <a href="{{url('/blog_single',['slug'=>$item->slug])}}"><img src="{{asset(Storage::url($item->thumbnail))}}" alt="Blog Thumbnail" /></a>
                            </div>
                            <div class="lower-content">
                                <ul class="post-meta">
                                    <li><span class="icon flaticon-calendar-1"></span>{{date('F d, Y', strtotime($item->created_at))}}</li>
                                    <li><span class="icon flaticon-user-3"></span>By Admin</li>
                                </ul>
                                <h4><a href="{{url('/blog_single',['slug'=>$item->slug])}}">{{$item->header}}</a></h4>
                                <div class="text">{{Helpers::limit_text($item->shortDescription, 20)}}</div>
                                <div class="lower-box clearfix">
                                    <div class="pull-left">
                                        <a href="{{url('/blog_single',['slug'=>$item->slug])}}" class="read-more">Read More</a>
                                    </div>
                                    {{-- <div class="pull-right">
                                        <a href="{{ asset('fronted') }}/news-detail.html" class="comments">3 Comments</a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


				<!-- News Block -->
				{{-- <div class="news-block col-lg-4 col-md-6 col-sm-12">
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
				</div> --}}

			</div>
		</div>
	</section>
	<!-- End News Section -->

@endsection
