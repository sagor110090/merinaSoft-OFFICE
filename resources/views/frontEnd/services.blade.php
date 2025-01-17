@extends('frontEnd.layouts.app',['pageTitle' => __('Services')])
@section('content')

    <!--Page Title-->
    <section class="page-title" style="background-image:url({{ asset('frontEnd') }}/images/background/11.jpg)">
    	<div class="auto-container">
			<div class="clearfix">
				<div class="pull-left">
					<div class="title">Welcome to Merina Soft</div>
					<h2>Our Services</h2>
				</div>
				<div class="pull-right">
					<ul class="page-breadcrumb">
                    <li><a href="{{url('/')}}">home</a></li>
						<li>Services</li>
					</ul>
				</div>
			</div>
        </div>
    </section>
    <!--End Page Title-->

	<!-- Services Section Three / Style Two -->
	<section class="services-section-three style-two">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<div class="title">Our Best Services</div>
				<h2>We are here to Manage your <br> Finance with Experience</h2>
				<div class="text">Starfish can re-grow their arms. In fact, a single arm can regenerate a whole body. <br> Google’s founders were willing to sell & consult.</div>
			</div>
			<div class="row clearfix">

                <!-- Service Block Three -->
                @foreach (Helpers::findAll('service') as $item)
                    <div class="service-block-three style-two col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image">
                            <a href="{{url('/service-details', [$item->slug])}}"><img class="project_thambnill" src="{{asset(Storage::url($item->image))}}" alt="" /></a>
                            </div>
                            <div class="lower-content">
                                <h4><a href="services-single.html">{{$item->header}}</a></h4>
                            <div class="text">{!! Helpers::limit_text($item->shortDescription, 20) !!}</div>
                                <a href="{{url('/service-details', [$item->slug])}}" class="plus-box"><span class=" icon flaticon-arrow-pointing-to-right"></span></a>
                            </div>
                        </div>
                    </div>
                @endforeach

				<!-- Service Block Three -->
				{{-- <div class="service-block-three style-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="image">
							<a href="services-single.html"><img src="{{ asset('frontEnd') }}/images/resource/service-2.jpg" alt="" /></a>
						</div>
						<div class="lower-content">
							<h4><a href="services-single.html">Corporate Finance</a></h4>
							<div class="text">Linking corporate strategy, financial strategy, transactions and a capital markets perspective to create value</div>
							<a href="services-single.html" class="plus-box"><span class="icon flaticon-plus-symbol"></span></a>
						</div>
					</div>
				</div> --}}

			</div>

		</div>
	</section>
	<!-- End Services Section Three -->

	<!-- Contact Section Two -->
	<section class="contact-section-two style-two">
		<div class="auto-container">

			<div class="row clearfix">

				<!-- Image Column -->
				<div class="image-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="image">
                        <img src="{{ asset(Storage::url(Helpers::findFirst('objective')->image)) }}" alt="" />
						</div>

						<!-- Number Box -->
						<div class="number-box">
							<div class="box-inner">
								<span class="icon flaticon-phone-call"></span>
								<strong>Call Us</strong>
								{{Helpers::findFirst('contact')->phone}}
							</div>
						</div>

					</div>
				</div>

				<!-- Form Column -->
				<div class="form-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<!-- Sec Title -->
						<div class="sec-title">
							<div class="title">Call To Action</div>
							<h2>Make a free consultation with our expert team to solve your prolems.</h2>
						</div>
						<div class="program">For any inquiries relating to my Retail and Leadership Programs*</div>

						<!-- Default Form -->
                        <div class="default-form style-two">
                            <form class="well form-horizontal" action="{{url('/message')}}" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <fieldset>

								<div class="form-group">
									<input type="text" name="name" placeholder="Your Name" required>
								</div>

								<div class="form-group">
									<input type="email" name="mail" placeholder="Your Email" required>
								</div>

								<div class="form-group">
									<input type="text" name="phone" placeholder="Phone" required>
								</div>

								<div class="form-group">
									<input type="text" name="subject" placeholder="Subject" required>
                                </div>

                                <div class="form-group">
                                    <textarea name="message" placeholder="Message"></textarea>
                                </div>

								<div class="form-group">
									<button type="submit" class="theme-btn btn-style-one"><span class="txt">Consult Today</span></button>
								</div>

                            </fieldset>
                            </form>
                        </div>

					</div>
				</div>

			</div>

		</div>
	</section>
	<!-- End Contact Section Two -->





@endsection
