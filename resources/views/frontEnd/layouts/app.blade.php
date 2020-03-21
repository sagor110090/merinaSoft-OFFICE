<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Merina Soft | {{$pageTitle}}</title>

<!-- Stylesheets -->
<link href="{{ asset('frontEnd') }}/css/bootstrap.css" rel="stylesheet">
<link href="{{ asset('frontEnd') }}/css/style.css" rel="stylesheet">
<link href="{{ asset('frontEnd') }}/css/responsive.css" rel="stylesheet">

<!-- Color Switcher Mockup -->
<link href="{{ asset('frontEnd') }}/css/color-switcher-design.css" rel="stylesheet">

<link rel="shortcut icon" href="{{ asset('frontEnd') }}/images/favicon.png" type="image/x-icon">
<link rel="icon" href="{{ asset('frontEnd') }}/images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">


</head>

<body>

<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Main Header -->
    <header class="main-header header-style-one">

        <!--Header Top-->
        <div class="header-top">
            <div class="auto-container">
                <div class="clearfix">
                    <!--Top Left-->
                    <div class="top-left clearfix">
						<div class="text">Welcome to Merina Soft</div>
                    </div>

                    <!--Top Right-->
                    <div class="top-right pull-right">
						<ul class="login-info">
							<li><a href="{{ asset('frontEnd') }}/login.html">Login</a></li>
							<li><a href="{{ asset('frontEnd') }}/login.html">Sign Up</a></li>
						</ul>
						<!-- Social Nav -->
						<ul class="social-nav">
							<li class="facebook"><a href="{{Helpers::findFirst('about')->facebook}}"><span class="fa fa-facebook-f"></span></a></li>
							<li class="twitter"><a href="{{Helpers::findFirst('about')->twitter}}"><span class="fa fa-twitter"></span></a></li>
							<li class="google"><a href="{{Helpers::findFirst('about')->google}}"><span class="fa fa-google-plus"></span></a></li>
							<li class="linked"><a href="{{Helpers::findFirst('about')->linkedin}}"><span class="fa fa-linkedin"></span></a></li>
						</ul>
                    </div>
                </div>
            </div>
        </div>

        <!--Header-Upper-->
        <div class="header-upper">
            <div class="auto-container">
                <div class="clearfix">

                    <div class="pull-left logo-box">
                        <div class="logo"><a href="{{ asset('frontEnd') }}/index.html"><img src="images/logo.png" alt="" title=""></a></div>
                    </div>

                    <div class="pull-right upper-right clearfix row">

                        <!--Info Box-->
                        <div class="upper-column info-box col-sm-3">
                            <div class="icon-box"><span class="flaticon-place"></span></div>
                            <ul>
                                <li><strong>Address</strong></li>
                                <li>{{Helpers::findFirst('contact')->address}}</li>
                            </ul>
                        </div>

                        <!--Info Box-->
                        <div class="upper-column info-box col-sm-3">
                            <div class="icon-box"><span class="flaticon-email-3"></span></div>
                            <ul>
                                <li>{{Helpers::findFirst('contact')->mail}}</li>
                                <li>{{Helpers::findFirst('contact')->phone}}</li>
                            </ul>
                        </div>

                        <!--Info Box-->
                        <div class="upper-column info-box col-sm-3">
                            <div class="icon-box"><span class="flaticon-clock-3"></span></div>
                            <ul>
								<li> <b>{{Helpers::findFirst('contact')->start_time}}</b> to <b>{{Helpers::findFirst('contact')->end_time}}</b> </li>
                                <li><strong>{{Helpers::findFirst('contact')->off_day}} Closed</strong></li>
                            </ul>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!--End Header Upper-->

        <!--Header Lower-->
        <div class="header-lower">

            <div class="auto-container">
                <div class="nav-outer clearfix">
					<!-- Mobile Navigation Toggler -->
					<div class="mobile-nav-toggler"><span class="icon flaticon-menu-2"></span></div>
					<!-- Main Menu -->
					<nav class="main-menu show navbar-expand-md">
						<div class="navbar-header">
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>

						<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
							<ul class="navigation clearfix">
								<li class="current"><a href="{{ asset('/') }}">Home</a></li>
								<li><a href="{{ url('/about') }}">About us</a></li>
								<li><a href="{{ url('/services') }}">Services</a>
									{{-- <ul>
										<li><a href="{{ asset('frontEnd') }}/services-single.html">Services Single</a></li>
									</ul> --}}
                                </li>
                                <li><a href="{{ url('/projects') }}">Projects</a>
									{{-- <ul>
										<li><a href="{{ asset('frontEnd') }}/services-single.html">Services Single</a></li>
									</ul> --}}
								</li>
                                <li><a href="{{ url('/team') }}">Team</a>
									{{-- <ul>
										<li><a href="{{ asset('frontEnd') }}/services-single.html">Services Single</a></li>
									</ul> --}}
								</li>
								{{-- <li class="dropdown has-mega-menu"><a href="{{ asset('frontEnd') }}/#">Pages</a>
									<div class="mega-menu">
										<div class="mega-menu-bar row clearfix">
											<div class="column col-lg-4 col-md-4 col-sm-12">
												<h3>About Us</h3>
												<ul>
													<li><a href="{{ asset('frontEnd') }}/about.html">About us</a></li>
													<li><a href="{{ asset('frontEnd') }}/price.html">Price</a></li>
													<li><a href="{{ asset('frontEnd') }}/faq.html">Faq's</a></li>
													<li><a href="{{ asset('frontEnd') }}/team.html">Team</a></li>
													<li><a href="{{ asset('frontEnd') }}/testimonial.html">Testimonial</a></li>
												</ul>
											</div>
											<div class="column col-lg-4 col-md-4 col-sm-12">
												<h3>Services</h3>
												<ul>
													<li><a href="{{ asset('frontEnd') }}/services.html">Services</a></li>
													<li><a href="{{ asset('frontEnd') }}/services-single.html">Services Single</a></li>
													<li><a href="{{ asset('frontEnd') }}/comming-soon.html">Coming Soon</a></li>
												</ul>
											</div>
											<div class="column col-lg-4 col-md-4 col-sm-12">
												<h3>Blog</h3>
												<ul>
													<li><a href="{{ asset('frontEnd') }}/blog.html">Our Blog</a></li>
													<li><a href="{{ asset('frontEnd') }}/blog-sidebar.html">Blog Sidebar</a></li>
													<li><a href="{{ asset('frontEnd') }}/news-detail.html">Blog Details</a></li>
													<li><a href="{{ asset('frontEnd') }}/error-page.html">Error Page</a></li>
												</ul>
											</div>

										</div>
									</div>
								</li> --}}
								<li><a href="{{ url('/blog') }}">Blog</a></li>
								<li><a href="{{ url('/clients') }}">Client</a></li>
								<li><a href="{{ url('/contacts') }}">Contact us</a></li>
							 </ul>
						</div>
					</nav>
					<!-- Main Menu End-->

					<!-- Options Box -->
                    <div class="options-box clearfix">

						<!-- Grid Box -->
						<div class="grid-box navSidebar-button">
							<a href="{{ asset('frontEnd') }}/#" class="icon flaticon-menu-2"></a>
						</div>

                        <!--Search Box-->
                        <div class="search-box-outer">
                            <div class="search-box-btn"><span class="fa fa-search"></span></div>
                        </div>

						<div class="btn-box">
							<a href="{{ asset('frontEnd') }}/#" class="theme-btn btn-style-one"><span class="txt">Subscribe Now</span></a>
						</div>

                    </div>

                </div>
            </div>
        </div>
        <!-- End Header Lower -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-multiply"></span></div>

            <nav class="menu-box">
                <div class="nav-logo"><a href="{{ asset('frontEnd') }}/index.html"><img src="images/logo.png" alt="" title=""></a></div>
                <div class="menu-outer">
					<!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
				</div>
            </nav>
        </div><!-- End Mobile Menu -->

    </header>
    <!-- End Main Header -->
    @yield('content')

	<!--Clients Section-->
    <section class="clients-section">
        <div class="auto-container">

            <div class="sponsors-outer">
                <!--Sponsors Carousel-->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                    @foreach (Helpers::findAll('client') as $item)
                        <li class="slide-item"><figure class="image-box"><a href="{{$item->link}}"><img src="{{asset(Storage::url($item->image))}}" alt=""></a></figure></li>
                    @endforeach

                    {{-- <li class="slide-item"><figure class="image-box"><a href="{{ asset('fronted') }}/#"><img src="{{ asset('frontEnd') }}/images/clients/2.png" alt=""></a></figure></li> --}}
                </ul>
            </div>

        </div>
    </section>
    <!--End Clients Section-->

	<!-- Main Footer -->
    <footer class="main-footer" style="background-image: url({{ asset('frontEnd') }}/images/background/3.jpg)">

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
							<div class="text">{{Helpers::limit_text(Helpers::findFirst('about')->short_description, 20)}}</div>
							<ul class="contact-link">
								<li><span class="icon flaticon-clock"></span> {{Helpers::findFirst('contact')->start_time}} -{{Helpers::findFirst('contact')->end_time}}, Close: {{Helpers::findFirst('contact')->off_day}}</li>
								<li><span class="icon flaticon-home-page"></span> {{Helpers::findFirst('contact')->address}} </li>
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
                            @foreach (Helpers::findAllDesc('blogs')->slice(0, 2) as $item)
                                <div class="widget-content">
                                    <div class="post">
                                        <div class="thumb"><a href="{{ asset('fronted') }}/news-detail.html"><img src="images/resource/post-thumb-1.jpg" alt=""></a></div>
                                        <h5><a href="{{url('/blog_single',['slug'=>$item->slug])}}">{{$item->header}}</a></h5>
                                        <div class="text">{{Helpers::limit_text($item->shortDescription, 20)}}</div>
                                        <span class="date">{{date('F d, Y', strtotime($item->created_at))}}</span>
                                    </div>
                                </div>
                            @endforeach
						</div>
					</div>

					<!-- Footer Column -->
					<div class="footer-column col-lg-4 col-md-6 col-sm-12">

                        @if ($errors->any())
                        <ul class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        @endif

						<div class="footer-widget newsletter-widget">
							<div class="footer-title">
								<h4>Newsletter</h4>
							</div>
							<div class="text">Sign up for our mailing list to get latest updates and offers.</div>
							<div class="newsletter-form">
                                <form method="post" action="{{url('/newsletter')}}">
                                    {{csrf_field()}}
                                    <fieldset>
                                        <div class="form-group">
                                            <input type="email" name="email" value="" placeholder="Enter your email address ....." required="">
                                            <button type="submit" class="theme-btn submit-btn"><span class="txt flaticon-send"></span></button>
                                        </div>
                                    </fieldset>
								</form>
							</div>
							<ul class="social-icon-one">
								<li class="title">Follow Us:</li>
								<li><a href="{{Helpers::findFirst('about')->facebook}}"><i class="fa fa-facebook-f"></i></a></li>
								<li><a href="{{Helpers::findFirst('about')->google}}"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="{{Helpers::findFirst('about')->twitter}}"><i class="fa fa-twitter"></i></a></li>
								<li><a href="{{Helpers::findFirst('about')->skype}}"><i class="fa fa-skype"></i></a></li>
								<li><a href="{{Helpers::findFirst('about')->linkedin}}"><i class="fa fa-linkedin"></i></a></li>
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
						<div class="copyright">&copy; 2020 Merina Soft. Designed By Merina Soft Web Designer</div>
					</div>
					<div class="pull-right">
						<ul class="footer-nav">
							<li><a href="{{ url('/') }}">Home</a></li>
							<li><a href="javascript:void(0)">Privacy Policy</a></li>
							<li><a href="javascript:void(0)">Investor</a></li>
							<li><a href="javascript:void(0)">Legals</a></li>
							<li><a href="{{ url('/contacts') }}">Contact</a></li>
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
								<a href="{{url('/')}}"><img src="{{ asset('frontEnd') }}/images/logo-2.png" alt="" /></a>
							</div>
							<div class="content-box">
								<h2>About Us</h2>
								<p class="text">{!!Helpers::findFirst('about')->short_description!!}</p>
								<a href="{{url('/contacts')}}" class="theme-btn btn-style-two"><span class="txt">Consultation</span></a>
							</div>
							<div class="contact-info">
								<h2>Contact Info</h2>
								<ul class="list-style-one">
									<li><span class="icon fa fa-location-arrow"></span>{{Helpers::findFirst('contact')->address}}</li>
									<li><span class="icon fa fa-phone"></span>{{Helpers::findFirst('contact')->phone}}</li>
									<li><span class="icon fa fa-envelope"></span>{{Helpers::findFirst('contact')->mail}}</li>
									<li><span class="icon fa fa-clock-o"></span>Week Days: {{Helpers::findFirst('contact')->start_time}} to {{Helpers::findFirst('contact')->end_time}} {{Helpers::findFirst('contact')->off_day}}: Closed</li>
								</ul>
							</div>
							<!-- Social Box -->
							<ul class="social-box">
								<li class="facebook"><a href="{{url('/' . Helpers::findFirst('about')->facebook)}}" class="fa fa-facebook-f"></a></li>
								<li class="twitter"><a href="{{url('/' . Helpers::findFirst('about')->twitter)}}" class="fa fa-twitter"></a></li>
								<li class="linkedin"><a href="{{url('/' . Helpers::findFirst('about')->linkedin)}}" class="fa fa-linkedin"></a></li>
								<li class="instagram"><a href="{{url('/' . Helpers::findFirst('about')->instagram)}}" class="fa fa-instagram"></a></li>
								<li class="youtube"><a href="{{url('/' . Helpers::findFirst('about')->youtube)}}" class="fa fa-youtube"></a></li>
							</ul>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
	<!-- END sidebar widget item -->

</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-long-arrow-up"></span></div>

<!-- Header Search -->
<div class="search-popup">
	<button class="close-search style-two"><span class="flaticon-multiply"></span></button>
	<button class="close-search"><span class="flaticon-up-arrow"></span></button>
	<form method="post" action="Javascript:void(0)">
		<div class="form-group">
			<input type="search" name="search-field" value="" placeholder="Search Here" required="">
			<button type="submit"><i class="fa fa-search"></i></button>
		</div>
	</form>
</div>
<!-- End Header Search -->


<script src="{{ asset('frontEnd') }}/js/jquery.js"></script>
<script src="{{ asset('frontEnd') }}/js/popper.min.js"></script>
<script src="{{ asset('frontEnd') }}/js/bootstrap.min.js"></script>
<script src="{{ asset('frontEnd') }}/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="{{ asset('frontEnd') }}/js/jquery.fancybox.js"></script>
<script src="{{ asset('frontEnd') }}/js/appear.js"></script>
 <script src="{{ asset('frontEnd') }}/js/nav-tool.js"></script>
 <script src="{{ asset('frontEnd') }}/js/mixitup.js"></script>
<script src="{{ asset('frontEnd') }}/js/owl.js"></script>
<script src="{{ asset('frontEnd') }}/js/wow.js"></script>
<script src="{{ asset('frontEnd') }}/js/isotope.js"></script>
<script src="{{ asset('frontEnd') }}/js/jquery-ui.js"></script>
<script src="{{ asset('frontEnd') }}/js/script.js"></script>
<script src="{{ asset('frontEnd') }}/js/color-settings.js"></script>

</body>

</html>
