<style>
	.project-details-img-wrapper > img {
    width: 100%;
    height: 400px;
	}
</style>
@include('header');
		<!-- header-top-area-start -->
		<!-- breadcrumb-banner-area -->
		<div class="breadcrumb-banner-area ptb-50 bg-opacity">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="breadcrumb-text text-center">
						<h2>Booking-details</h2>
							<ul class="breadcrumb-menu">
							  <li><a href="#">booking</a></li>
							  <li><a href="#">Status</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- breadcrumb-banner-area-end -->
		<!-- project-details-area-start -->

		<!-- project-details-area-start -->
		<!-- project-details-3-start -->
@foreach($details as $data)
			<div class="project-details-3 pt-40 pb-50">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="project-text">
							<h3>Providers Detials</h3>
                                <h5>{{$data['providerName']}}</h5>
                                <h5>{{$data['providerPhone']}}</h5>
						     <p>{{$data['providerDes']}}</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		<!-- project-details-3-end -->
		<!-- project-details-2-start -->
		<div class="project-details-2 pb-90">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="project-details-2-wrapper mb-30">
							<h3 class="project-2-text">Booking Details</h3>
							<div class="project-details-2-content">
								<ul class="deatils-menu">
									<li>Price : {{$data['providerPrice']}}</li>
									<li>Location :<a href=" https://www.google.com/maps?q={{$data['latitude']}},{{$data['longitude']}}" target="_blank">open</a></li>
									<li>Status : {{$data['bookingStatus']}}</li>
									<li>Date : {{$data['bookingDate']}}</li>
								</ul>
                            <br>
{{--@if($data['bookingStatus'] == 'Pending')--}}
{{--    <button class="btn btn-danger" style="margin-top: 10px" onclick=" window.location.href='{{ route('cancel_book', ['doc_id' => $data['bookingId']]) }} ">Cancel</button>--}}
{{--                                @endif--}}
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="project-details-2-wrapper mb-30">
							<img src="{{$data['providerImage']}}" alt="" />
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- project-details-2-end -->
		<!-- pricing-area-start -->
@endforeach
		<!-- pricing-area-end -->
		<footer>
			<!-- footer-top-area-start -->
			<div class="footer-top-area footer-top pt-100 bg-opacity pb-70" >
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
    </body>
</html>
