@extends('frontEnd.layouts.app',['pageTitle' => __('Projects')])
@section('content')

    <!--Page Title-->
<section class="page-title" style="background-image:url({{ asset('frontEnd') }}/images/background/11.jpg)">
    	<div class="auto-container">
			<div class="clearfix">
				<div class="pull-left">
					<div class="title">Welcome to Merina Soft</div>
					<h2>Projects</h2>
				</div>
				<div class="pull-right">
					<ul class="page-breadcrumb">
						<li><a href="{{url('/')}}">home</a></li>
						<li>Projects</li>
					</ul>
				</div>
			</div>
        </div>
    </section>
    <!--End Page Title-->

	<!-- Projects Page Section -->
	<section class="projects-page-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<h2>We’ve Done Lot’s of Work, Let’s <br> Check Some From Here</h2>
			</div>

			<!-- MixitUp Galery -->
            <div class="mixitup-gallery">

                <!--Filter-->
                <div class="filters text-center clearfix">
                    <ul class="filter-tabs filter-btns clearfix">
                        <li class="active filter" data-role="button" data-filter="all">All</li>
                        @foreach (Helpers::findAll('category') as $item)
                        <li class="filter" data-role="button" data-filter=".{{$item->id}}">{{$item->name}}</li>
                        @endforeach
                    </ul>
                </div>

                <div class="filter-list row clearfix">
                    @foreach (Helpers::findAll('project') as $item)
					<!-- Portfolio Block -->
					<div class="project-block mix all {{$item->category_id}} strategy col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="image">
                            <img class="project_thambnill" src="{{asset(Storage::url($item->thumbnail))}}" alt="" />
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="title">Category</div>
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

					<!-- Portfolio Block -->
					{{-- <div class="project-block mix all strategy relations col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<div class="image">
								<img src="{{ asset('frontEnd') }}/images/gallery/12.jpg" alt="" />
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="title">Corporate</div>
										<h4><a href="portfolio-single.html">Business Management</a></h4>
										<div class="social-box">
											<a href="#" class="fa fa-facebook"></a>
											<a href="#" class="fa fa-twitter"></a>
											<a href="#" class="fa fa-google-plus"></a>
											<a href="#" class="fa fa-linkedin"></a>
										</div>
										<a href="{{ asset('frontEnd') }}/images/gallery/12.jpg" data-fancybox="gallery" data-caption="" class="plus flaticon-plus"></a>
									</div>
								</div>
							</div>
						</div>
					</div> --}}

				</div>

				{{-- <div class="btn-box text-center">
					<a href="#" class="theme-btn btn-style-three"><span class="txt">Load More</span></a>
				</div> --}}

			</div>
		</div>
	</section>
	<!-- End Projects Page Section -->




<!-- Header Search -->
<div class="search-popup">
	<button class="close-search style-two"><span class="flaticon-multiply"></span></button>
	<button class="close-search"><span class="flaticon-up-arrow"></span></button>
	<form method="post" action="#">
		<div class="form-group">
			<input type="search" name="search-field" value="" placeholder="Search Here" required="">
			<button type="submit"><i class="fa fa-search"></i></button>
		</div>
	</form>
</div>
<!-- End Header Search -->

<!-- Color Palate / Color Switcher -->
<div class="color-palate">
    <div class="color-trigger">
        <i class="fa fa-gear"></i>
    </div>
    <div class="color-palate-head">
        <h6>Choose Layout</h6>
    </div>
	<ul class="box-version option-box"> <li class="box">Boxed</li> <li>Full width</li></ul>
	<ul class="rtl-version option-box"> <li class="rtl">RTL Version</li> <li>LTR Version</li> </ul>

    <a href="#" class="purchase-btn">Purchase now $17</a>

    <div class="palate-foo">
        <span>You will find much more options for colors and styling in admin panel. This color picker is used only for demonstation purposes.</span>
    </div>

</div>

@endsection
