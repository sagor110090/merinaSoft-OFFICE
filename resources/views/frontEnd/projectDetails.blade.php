@extends('frontEnd.layouts.app',['pageTitle' => __('Home')])
@section('content')


    <!--Page Title-->
    <section class="page-title" style="background-image:url({{ asset('frontEnd') }}/images/background/11.jpg)">
    	<div class="auto-container">
			<div class="clearfix">
				<div class="pull-left">
					<div class="title">Welcome to Merina Soft</div>
					<h2>Projects Detail</h2>
				</div>
				<div class="pull-right">
					<ul class="page-breadcrumb">
						<li><a href="/">home</a></li>
						<li>Projects Detail</li>
					</ul>
				</div>
			</div>
        </div>
    </section>
    <!--End Page Title-->

	<!-- Projects Detail Section -->
	<section class="projects-detail-section">
		<div class="auto-container">
			<div class="image">
				<img src="images/gallery/20.jpg" alt="" />
				<div class="project-info">
					<div class="info-inner">
						<h3>Project Description</h3>
						<ul>
							<li class="clearfix">Client:<span>{{$projects->client_name}}</span></li>
							<li class="clearfix">Location:<span>London Donec <br> {{$projects->location}}</span></li>
							{{-- <li class="clearfix">Surface Area:<span>500,000 m2</span></li> --}}
							<li class="clearfix">Year Completed:<span>{{$projects->year}}</span></li>
							<li class="clearfix">Value:<span>{{$projects->value}}</span></li>
							{{-- <li class="clearfix">Architect:<span>Harri & Gary</span></li> --}}
						</ul>
					</div>
				</div>
			</div>
			<div class="lower-content">
				<div class="title">{{$projects->header}}</div>
                <h3>Project Description</h3>
				{{-- <p>{!!$projects->description!!}</p> --}}
				<div class="two-column">
					<div class="row clearfix">
						<div class="column col-lg-12 col-md-12 col-sm-12">
							<img src="{{asset(Storage::url($projects->image))}}" alt="" />
						</div>
						{{-- <div class="column col-lg-6 col-md-6 col-sm-12">
							<h3>Project Solution</h3>
							<p>{!!$projects->description!!}</p>
						</div> --}}
					</div>
				</div>
				{{-- <h3>Project Result</h3> --}}
				<p>{!!$projects->description!!}</p>
			</div>
		</div>
	</section>
	<!-- End Projects Detail Section -->



@endsection
