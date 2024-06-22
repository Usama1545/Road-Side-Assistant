<style>
	.our-services-wrapper a {
    color: rgb(0, 0, 0); /* Change this value to your desired color */
  }
</style>
@include('header')
		<!-- header-top-area-start -->
		<!-- breadcrumb-banner-area -->
		<div class="breadcrumb-banner-area ptb-50 bg-opacity">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="breadcrumb-text text-center">
						<h2>service</h2>
							<ul class="breadcrumb-menu">
							  <li><a href="#">service</a></li>
							  <li><a href="#">about us</a></li>
							</ul>
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- breadcrumb-banner-area-end -->
		<!-- Our-Services-area-start -->
		<div class="Our-Services-area pt-120 pb-65">
			<div class="container">
				<div class="section-info text-center mb-60">
					<h2>Our-Services</h2>
					<p>Lorem Ipsum is simply dummy text of the printing and. </p>
				</div>
				<div class="row">
				@foreach($categories as $category)
					<div class="col-md-4 col-sm-6" style="height: 40%;">
						<div class="our-services-wrapper text-center mb-50 our-services-text">
							<a href="{{ URL::route('service_provider', ['category' =>$category['categoryName']])}}">
							<div class="our-services-icon">

								<i class="flaticon"><img src="{{$category['categoryIcon']}}" alt="" style="margin-top: 29px;" height="30px" width: "30px" /></i>

							</div>
						</a>
							<div class="our-services-text">
							<h2>{{$category['categoryName']}}</h2>
								<p>{{$category['categoryDes']}}</p>

							</div>
						</div>
					</div>
				@endforeach

				</div>
			</div>
		</div>
		<!-- Our-Services-area-start -->
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
