@include('header');
		<!-- header-top-area-start -->
		<!-- breadcrumb-banner-area -->
		<div class="breadcrumb-banner-area ptb-50 bg-opacity">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="breadcrumb-text text-center">
							<h2>Bookings</h2>
							<p>Your Bookings History </p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- breadcrumb-banner-area-end -->
		<!-- portfolio-area-start -->
		<div class="portfolio-area pt-120 pb-110">
			<div class="container">
				<div class="portfolio-menu text-center mb-50">
					<button class="active" data-filter="*">All</button>
					<button data-filter=".Pending">Pending</button>
					<button data-filter=".In-Progress">In Progress</button>
					<button data-filter=".Completed">Completed</button>
					<button data-filter=".Cancelled">Cancelled</button>
				</div>
				<div class="grid">
					@foreach($active as $data)
					@if($data['bookingStatus'] === 'In Progress')
					    <div class="col-md-3 col-sm-6 grid-item In-Progress pl-5 pr-5">
					   @else
					    <div class="col-md-3 col-sm-6 grid-item {{$data['bookingStatus']}} pl-5 pr-5">
					@endif
						<div class="work-wrapper mb-10">
							<div class="work-img">
                                <a href="{{route('service.details', ['doc_id' => $data['bookingId']])}}"><img alt="" height="250px" width="250px" src="{{$data['providerImage']}}"></a>
								<div class="work-text" style="color: white">
									<h3>{{$data['categoryName']}}</h3>
									<h3>{{$data['providerName']}}</h3>
									<h3>{{$data['providerPrice']}}</h3>
                                    <h3>{{$data['bookingDate']}}</h3>
                                    <h3><a href="https://www.google.com/maps?q={{$data['latitude']}},{{$data['longitude']}}">Location</a></h3>


                                </div>
							</div>
						</div>
					</div>
					@endforeach
                                @foreach($last as $data)
                                    @if($data['bookingStatus'] === 'In Progress')
                                        <div class="col-md-3 col-sm-6 grid-item In-Progress pl-5 pr-5">
                                            @else
                                                <div class="col-md-3 col-sm-6 grid-item {{$data['bookingStatus']}} pl-5 pr-5">
                                                    @endif
                                                    <div class="work-wrapper mb-10">
                                                        <div class="work-img">
                                                            <a href="{{route('service.details', ['doc_id' => $data['bookingId']])}}"><img alt="" height="250px" width="250px" src="{{$data['providerImage']}}"></a>
                                                            <div class="work-text" style="color: white">
                                                                <h3>{{$data['categoryName']}}</h3>
                                                                <h3>{{$data['providerName']}}</h3>
                                                                <h3>{{$data['providerPrice']}}</h3>
                                                                <h3>{{$data['bookingDate']}}</h3>
                                                                <h3><a href="https://www.google.com/maps?q={{$data['latitude']}},{{$data['longitude']}}" target="_blank">Location</a></h3>
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                @endforeach
				</div>
			</div>
		</div>
		<!-- portfolio-area-end -->
		<footer>
			<!-- footer-top-area-start -->
			<div class="footer-top-area footer-top black-bg pt-100 pb-70">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-4 pr-0">
							<div class="footer-wrapper mb-30">
								<h2 class="footer-section">about us</h2>
								<div class="footer-text">
									<p>Lorem ipsum dolor sit amet, consectet adipisicing elit, sed do eiusmod tempo incididunt ut labore et dolore ma gnall aliqua. Ut enim ad minim. </p>
								</div>
							</div>
						</div>
						<div class="col-md-offset-1 col-md-2 col-sm-4">
							<div class="footer-wrapper mb-30">
								<h2 class="footer-section">SUPPORT</h2>
								<ul class="footer-menu">
									<li><a href="#">Documentation</a></li>
									<li><a href="#">Forums</a></li>
									<li><a href="#">Language Packs</a></li>
									<li><a href="#">Release Status</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-offset-1 col-md-2 hidden-sm">
							<div class="footer-wrapper mb-30">
								<h2 class="footer-section">link</h2>
								<ul class="footer-menu">
									<li><a href="#">Our Company</a></li>
									<li><a href="#">Services</a></li>
									<li><a href="#">Recent Work</a></li>
									<li><a href="#">Latest News</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-3 col-sm-4">
							<div class="footer-wrapper mb-30">
								<h2 class="footer-section">address</h2>
								<ul class="footer-link">
									<li><i class="fa fa-phone"></i><span>1st floor dhaka bangladesh</span></li>
									<li><i class="fa fa-envelope-open"></i><span>(801) 2345 - 6789</span></li>
									<li><i class="fa fa-envelope-open"></i><span>admin@yourmail.com</span></li>
									<li><i class="fa fa-clock-o"></i><span>Sat - Fry: 9:00 am- 2:00pm</span></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- footer-top-area-end -->
			<!-- footer-bottom-area-start -->
			<!-- footer-bottom-area-end -->
		</footer>
		<!-- all js here -->
            <script src="{{ asset('/assets/js/vendor/jquery-1.12.0.min.js') }}"></script>
            <script src="{{ asset('/assets/js/bootstrap.min.js')}}"></script>
            <script src="{{ asset('/assets/js/headline.js')}}"></script>
            <script src="{{ asset('/assets/js/jquery.magnific-popup.min.js')}}"></script>
            <script src="{{ asset('/assets/js/jquery.scrollUp.min.js')}}"></script>
            <script src="{{ asset('/assets/js/isotope.pkgd.min.js')}}"></script>
            <script src="{{ asset('/assets/js/imagesloaded.pkgd.min.js')}}"></script>
            <script src="{{ asset('/assets/js/jquery.counterup.min.js')}}"></script>
            <script src="{{ asset('/assets/js/waypoints.min.js')}}"></script>
            <script src="{{ asset('/assets/js/jquery.parallax-1.1.3.js')}}"></script>
            <script src="{{ asset('/assets/js/owl.carousel.min.js')}}"></script>
            <script src="{{ asset('/assets/js/jquery.meanmenu.js')}}"></script>
            <script src="{{ asset('/assets/js/ajax-mail.js')}}"></script>
            <script src="{{ asset('/assets/js/plugins.js')}}"></script>
            <script src="{{ asset('/assets/js/main.js')}}"></script>
    </div>
<style>
    h3
    {
        color: white;
    }
</style>
