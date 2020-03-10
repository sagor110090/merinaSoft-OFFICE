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
						<div class="text">Welcome to SOLVA Business company</div>
                    </div>

                    <!--Top Right-->
                    <div class="top-right pull-right">
						<ul class="login-info">
							<li><a href="{{ asset('frontEnd') }}/login.html">Login</a></li>
							<li><a href="{{ asset('frontEnd') }}/login.html">Sign Up</a></li>
						</ul>
						<!-- Social Nav -->
						<ul class="social-nav">
							<li class="facebook"><a href="{{ asset('frontEnd') }}/#"><span class="fa fa-facebook-f"></span></a></li>
							<li class="twitter"><a href="{{ asset('frontEnd') }}/#"><span class="fa fa-twitter"></span></a></li>
							<li class="google"><a href="{{ asset('frontEnd') }}/#"><span class="fa fa-google-plus"></span></a></li>
							<li class="linked"><a href="{{ asset('frontEnd') }}/#"><span class="fa fa-linkedin"></span></a></li>
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
                    
                    <div class="pull-right upper-right clearfix">
                        
                        <!--Info Box-->
                        <div class="upper-column info-box">
                            <div class="icon-box"><span class="flaticon-place"></span></div>
                            <ul>
                                <li><strong>Address</strong></li>
                                <li>Art Street 235 Newyork ,USA.</li>
                            </ul>
                        </div>
                        
                        <!--Info Box-->
                        <div class="upper-column info-box">
                            <div class="icon-box"><span class="flaticon-email-3"></span></div>
                            <ul>
                                <li>Supportus@gmail.com</li>
                                <li>0800-925-6543</li>
                            </ul>
                        </div>
                        
                        <!--Info Box-->
                        <div class="upper-column info-box">
                            <div class="icon-box"><span class="flaticon-clock-3"></span></div>
                            <ul>
								<li>Mon - Sat 8.00 to 18.00 </li>
                                <li><strong>Sunday Closed</strong></li>
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
								<li class="current dropdown"><a href="{{ asset('frontEnd') }}/#">Home</a>
									<ul>
										<li><a href="{{ asset('frontEnd') }}/index.html">Homepage One</a></li>
										<li><a href="{{ asset('frontEnd') }}/index-2.html">Homepage Two</a></li>
										<li><a href="{{ asset('frontEnd') }}/index-3.html">Homepage Three</a></li>
										<li class="dropdown"><a href="{{ asset('frontEnd') }}/#">Header Styles</a>
											<ul>
												<li><a href="{{ asset('frontEnd') }}/index.html">Header Style One</a></li>
												<li><a href="{{ asset('frontEnd') }}/index-2.html">Header Style Two</a></li>
												<li><a href="{{ asset('frontEnd') }}/index-3.html">Header Style Three</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li class="dropdown"><a href="{{ asset('frontEnd') }}/#">About us</a>
									<ul>
										<li><a href="{{ asset('frontEnd') }}/about.html">About us</a></li>
										<li><a href="{{ asset('frontEnd') }}/price.html">Price</a></li>
										<li><a href="{{ asset('frontEnd') }}/faq.html">Faq's</a></li>
										<li><a href="{{ asset('frontEnd') }}/team.html">Team</a></li>
										<li><a href="{{ asset('frontEnd') }}/error-page.html">Error Page</a></li>
										<li><a href="{{ asset('frontEnd') }}/testimonial.html">Testimonial</a></li>
										<li><a href="{{ asset('frontEnd') }}/comming-soon.html">Comming Soon</a></li>
									</ul>
								</li>
								<li class="dropdown"><a href="{{ asset('frontEnd') }}/#">Services</a>
									<ul>
										<li><a href="{{ asset('frontEnd') }}/services.html">Services</a></li>
										<li><a href="{{ asset('frontEnd') }}/services-single.html">Services Single</a></li>
									</ul>
								</li>
								<li class="dropdown"><a href="{{ asset('frontEnd') }}/#">Projects</a>
									<ul>
										<li><a href="{{ asset('frontEnd') }}/projects.html">Projects</a></li>
										<li><a href="{{ asset('frontEnd') }}/portfolio-single.html">Projects Single</a></li>
									</ul>
								</li>
								<li class="dropdown has-mega-menu"><a href="{{ asset('frontEnd') }}/#">Pages</a>
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
								</li>
								<li class="dropdown"><a href="{{ asset('frontEnd') }}/#">Blog</a>
									<ul>
										<li><a href="{{ asset('frontEnd') }}/blog.html">Our Blog</a></li>
										<li><a href="{{ asset('frontEnd') }}/blog-sidebar.html">Blog Sidebar</a></li>
										<li><a href="{{ asset('frontEnd') }}/news-detail.html">Blog Details</a></li>
									</ul>
								</li>
								<li class="dropdown"><a href="{{ asset('frontEnd') }}/#">Shop</a>
									<ul>
										<li><a href="{{ asset('frontEnd') }}/shop.html">Shop</a></li>
										<li><a href="{{ asset('frontEnd') }}/shop-single.html">Shop Details</a></li>
										<li><a href="{{ asset('frontEnd') }}/shoping-cart.html">Cart Page</a></li>
										<li><a href="{{ asset('frontEnd') }}/checkout.html">Checkout Page</a></li>
									</ul>
								</li>
								<li><a href="{{ asset('frontEnd') }}/contact.html">Contact us</a></li>
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
	
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-long-arrow-up"></span></div>

<!-- Header Search -->
<div class="search-popup">
	<button class="close-search style-two"><span class="flaticon-multiply"></span></button>
	<button class="close-search"><span class="flaticon-up-arrow"></span></button>
	<form method="post" action="https://expert-themes.com/html/solva/blog.html">
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

<!-- Mirrored from expert-themes.com/html/solva/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Mar 2020 05:08:11 GMT -->
</html>