@include('header');
		<!-- header-top-area-start -->
		<!-- breadcrumb-banner-area -->
		<div class="breadcrumb-banner-area ptb-50 bg-opacity" style="background-image:url(assets/img/bg/6.jpg)">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="breadcrumb-text text-center">
							<h2>contact-us</h2>
							<p>Lorem Ipsum is simply dummy text of. </p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- breadcrumb-banner-area-end -->
		<!-- contact-3-area-start -->
		<div class="contact-3-area contact-2 contact-3 pt-120 pb-50">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="contact-wrapper-3 mb-30">
							<div class="contact-3-text">
								<h3>Leave Us a Message</h3>
							</div>
							<form action="assets/mail.php" id="contact-form">
								<div class="col-sm-6">
									<input name="name" type="text" placeholder="name*">
								</div>
								<div class="col-sm-6">
									<input name="email" type="email" placeholder="email*">
								</div>
								<div class="col-sm-12">
									<textarea name="message" cols="30" rows="10" placeholder="message" id="message"></textarea>
								</div>
								<button type="submit">send message</button>
							</form>
							<p class="form-message"></p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="contact-3-right-wrapper mb-30">
							<div class="contact-3-right-info">
								<h3>Contact Us</h3>
								<p>Lorem ipsum dolor sit amet, conse ncteturll adipisicing elit, sed do eiusmod </p>
							</div>
							<div class="contact-3-address">
								<div class="contact-3-icon">
									<i class="zmdi zmdi-pin"></i>
								</div>
								<div class="address-text">
									<span class="location">Location :</span>
									<span class="USA">77, seventh avenue, Road USA.</span>
								</div>
							</div>
							<div class="contact-3-address">
								<div class="contact-3-icon">
									<i class="zmdi zmdi-phone"></i>
								</div>
								<div class="address-text">
									<span class="location">phone :</span>
									<span class="USA">+00 111 222 333 44</span>
								</div>
							</div>
							<div class="contact-3-address">
								<div class="contact-3-icon">
									<i class="zmdi zmdi-email"></i>
								</div>
								<div class="address-text">
									<span class="location">mail :</span>
									<span class="USA">yourmail@gmail.com</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- contact-3-area-end -->
		<!-- map-area -->
		<div class="map-area pb-120">
			<div class="container">
				<div id="map"></div>
			</div>
		</div>
		<!-- map-end -->
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
        <script src="assets/js/vendor/jquery-1.12.0.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/headline.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/jquery.scrollUp.min.js"></script>
        <script src="assets/js/isotope.pkgd.min.js"></script>
        <script src="assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="assets/js/jquery.counterup.min.js"></script>
        <script src="assets/js/waypoints.min.js"></script>
        <script src="assets/js/jquery.parallax-1.1.3.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/jquery.meanmenu.js"></script>
        <script src="assets/js/ajax-mail.js"></script>
        <script src="assets/js/plugins.js"></script>
		<!-- Google Map js -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAJ97zN_MClQ8BnmJJOCY165S2QEYvbIis"></script>
		<script>
            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);

            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 11,

                    scrollwheel: false,

                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(23.822349, 90.365420), // New York

                    // How you would like to style the map.
                    // This is where you would paste any style found on Snazzy Maps.
					styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]
                };

                // Get the HTML DOM element that will contain your map
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');

                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);

                // Let's also add a marker while we're at it
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(40.6700, -73.9400),
                    map: map,
                    title: 'Snazzy!'
                });
            }
		</script>
        <script src="assets/js/main.js"></script>
    </body>
</html>
