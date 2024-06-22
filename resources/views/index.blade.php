

@include('header');
<style>

</style>

		<!-- header-top-area-start -->
		<!-- slider-area-start -->
		<div class="slider-area">
		<div class="slider-active owl-carousel" >
			@foreach($banners as $data)
			<div class="slider-wrapper ptb-250" style="background-image:url({{$data['image']}})">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-lg-6 pr-0">
							<div class="slider-text">
								<h2 class="cd-headline loading-bar" style="color:#d8bc7c">The most targetted repair
									<span class="cd-words-wrapper">
										<b class="is-visible">theme.</b>
										<b>company.</b>
										<b>man.</b>
									</span>
								</h2>
								<div class="slider-info">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, seddoi dmj iusmod tempor incididunt ut labore.</p>
								</div>
								<a href="#">learn more</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
		<div class="what-we-do ptb-120">
			<div class="container">
			<div class="section-title mb-60 text-center">
					<h4>Our Company</h4>
					<h2>What We Do</h2>
				</div>
				<div class="row">
					<div class="col-md-6 p-r">
						<div>
							<!-- Nav tabs -->
							<ul class="offer-tab" role="tablist">
								<li role="presentation" class="active">
									<a href="#home" aria-controls="home" role="tab" data-toggle="tab">
										<div class="offer-list">
											<div class="offer-icon">
												<i class="flaticon-plus-icon"></i>
											</div>
											<div class="offer-text">
												<span>Vehicle Repair</span>
											</div>
										</div>
									</a>
								</li>
								<li role="presentation">
									<a href="#profile" aria-controls="home" role="tab" data-toggle="tab">
										<div class="offer-list">
											<div class="offer-icon">
												<i class="flaticon-gear-icon"></i>
											</div>
											<div class="offer-text">
												<span>improvement</span>
											</div>
										</div>
									</a>
								</li>
								<li role="presentation">
									<a href="#messages" aria-controls="home" role="tab" data-toggle="tab">
										<div class="offer-list">
											<div class="offer-icon">
												<i class="flaticon-paint-brush"></i>
											</div>
											<div class="offer-text">
												<span>maintains</span>
											</div>
										</div>
									</a>
								</li>
								<li role="presentation">
									<a href="#settings" aria-controls="home" role="tab" data-toggle="tab">
										<div class="offer-list">
											<div class="offer-icon">
												<i class="flaticon-strategy-icon"></i>
											</div>
											<div class="offer-text">
												<span>planning</span>
											</div>
										</div>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-6 p-t">
						  <!-- Tab panes -->
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane active" id="home">
								<div class="offer-wrapper" >
									<div class="offer-content">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiuml smod tempor incididunt ut labore et dolore magna aliqua.lol Ut enim ad minim veniam quis nostrud.</p>
										<ul class="tab-menu">
											<li> Vehicle Repair</li>
											<li> Towing</li>
											<li> Flat Tire </li>
											<li> Boosting</li>
											<li> Lock Out</li>
											<li> Fuel Delivery</li>
											<li> Car Cleaning</li>
										</ul>
									</div>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane" id="profile">
								<div class="offer-wrapper">
									<div class="offer-content">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiuml smod tempor incididunt ut labore et dolore magna aliqua.lol Ut enim ad minim veniam quis nostrud.</p>
										<ul class="tab-menu">
										<li> Vehicle Repair</li>
											<li> Towing</li>
											<li> Flat Tire </li>
											<li> Boosting</li>
											<li> Lock Out</li>
											<li> Fuel Delivery</li>
											<li> Car Cleaning</li>
										</ul>

									</div>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane" id="messages">
								<div class="offer-wrapper" >
									<div class="offer-content">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiuml smod tempor incididunt ut labore et dolore magna aliqua.lol Ut enim ad minim veniam quis nostrud.</p>
										<ul class="tab-menu">
										<li> Vehicle Repair</li>
											<li> Towing</li>
											<li> Flat Tire </li>
											<li> Boosting</li>
											<li> Lock Out</li>
											<li> Fuel Delivery</li>
											<li> Car Cleaning</li>
										</ul>

									</div>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane" id="settings">
								<div class="offer-wrapper" >
									<div class="offer-content">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiuml smod tempor incididunt ut labore et dolore magna aliqua.lol Ut enim ad minim veniam quis nostrud.</p>
										<ul class="tab-menu">
										<li> Vehicle Repair</li>
											<li> Towing</li>
											<li> Flat Tire </li>
											<li> Boosting</li>
											<li> Lock Out</li>
											<li> Fuel Delivery</li>
											<li> Car Cleaning</li>
										</ul>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- what-we-do-end -->
		<!-- home-service-end -->
		<!-- our-service-area-start -->
		<div class="our-service-area pt-120 pb-90">
			<div class="container">
				<div class="section-title mb-60 text-center" style="background-image:url(assets/img/logo/section.png)">
					<h4>We Provide</h4>
					<h2>Our Services</h2>
				</div>
				<div class="row">
					@foreach($categories as $category)
					<div class="col-md-4 col-sm-6" style="height:550px">
						<div class="service-wrapper mb-30">
							<div class="service-img">
								<img src="{{$category['categoryImage']}}" alt="" height="300px" />
							</div>
							<div class="service-text text-center">
								<div class="service-icon-img" style="background-color:white">
								<img src="{{$category['categoryIcon']}}" alt="" height="30px" width=30px" />
								</div>
								<h2>{{$category['categoryName']}}</h2>
								<p>{{$category['categoryDes']}}</p>
								<a href="{{ URL::route('service_provider', ['category' =>$category['categoryName']])}}">read more</a>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
		<!-- our-service-area-end -->
		<!-- testimonial-1-area-start -->

			<!-- recent-work-area-start -->
			<div class="testimonial-1-area pt-120 pb-200 gray-bg">
				<div class="container">
					<div class="section-title text-center" >
						<h4>Popular </h4>
						<h2>Popular Services</h2>
					</div>
				</div>
			</div>
			<div class="testimonial-area">
				<div class="container">
					<div class="row">
						<div class="testimonial-active owl-carousel" style="margin-bottom: 30px;">
							@foreach($popular_cat as $data)
						    <div class="col-md-12">
							    <div class="testimonial-wrapper mb-30">
									<div class="work-img">
										<a href="#"><img src="{{$data['categoryImage']}}" alt="" /></a>
										<div class="work-text">
											<h3>{{$data['categoryName']}}</h3>
										</div>
									</div>
								</div>
							</div>
						@endforeach
						</div>
					</div>
				</div>
			</div>
			<!-- recent-work-area-end -->
		<!-- testimonial-1-area-end -->
		<!-- testimonial-area-start -->
		<div class="testimonial-1-area pt-120 pb-200 gray-bg " >
			<div class="container">
				<div class="section-title text-center" >
					<h4>Testimonial</h4>
					<h2>What Clients Say</h2>
				</div>
			</div>
		</div>
		<div class="testimonial-area">
			<div class="container">
				<div class="row">
					<div class="testimonial-active owl-carousel" style="margin-bottom: 30px;">
						<div class="col-md-12">
							<div class="testimonial-wrapper mb-30">
								<div class="testimonial-img text-center">
									<img src="assets/img/testimonial/1.jpg" alt="" />
								</div>
								<div class="testimonial-text text-center">
									<p>Top-notch quality and punctuality. Their service exceeded my expectations</p>
									<span>Aqeel Abbas</span>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="testimonial-wrapper mb-30">
								<div class="testimonial-img text-center">
									<img src="assets/img/testimonial/2.jpg" alt="" />
								</div>
								<div class="testimonial-text text-center">
									<p>Extremely satisfied with their service. Their dedication to excellence really shines through </p>
									<span>Muhammad Raza</span>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="testimonial-wrapper mb-30">
								<div class="testimonial-img text-center">
									<img src="assets/img/testimonial/3.jpg" alt="" />
								</div>
								<div class="testimonial-text text-center">
									<p>"Impressive service! They were right on time and delivered exactly what I needed. Will definitely use again.</p>
									<span>Miller Ko</span>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="testimonial-wrapper">
								<div class="testimonial-img text-center">
									<img src="assets/img/testimonial/4.jpg" alt="" />
								</div>
								<div class="testimonial-text text-center">
									<p>Couldn't be happier with their service. Timely and professional – highly recommended!</p>
									<span>Usama Yasin</span>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="testimonial-wrapper">
								<div class="testimonial-img text-center">
									<img src="assets/img/testimonial/1.jpg" alt="" />
								</div>
								<div class="testimonial-text text-center">
									<p>Excellent experience! Service was quick, efficient, and their attention to detail was remarkable</p>
									<span>Rohaid Bhatti</span>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="testimonial-wrapper">
								<div class="testimonial-img text-center">
									<img src="assets/img/testimonial/2.jpg" alt="" />
								</div>
								<div class="testimonial-text text-center">
									<p>Five stars! Their service was impeccable, and their commitment to customer satisfaction is evident</p>
									<span>Maksud Reza</span>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="testimonial-wrapper">
								<div class="testimonial-img text-center">
									<img src="assets/img/testimonial/3.jpg" alt="" />
								</div>
								<div class="testimonial-text text-center">
									<p>Service like this is hard to find. They were prompt, courteous, and the results spoke for themselves</p>
									<span>Jon Doe</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- testimonial-area-end -->
		<!-- counter-area-start -->

		<!-- counter-area-end -->

		<!-- blog-area-start
		<div class="blog-area pt-120 pb-90">
			<div class="container">
				<div class="section-title mb-60 text-center" style="background-image:url(assets/img/logo/section.png)">
					<h4>blog</h4>
					<h2>Latest News</h2>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<div class="blog-wrapper mb-30">
							<div class="blog-img">
								<a href="#"><img src="assets/img/blog/1.jpg" alt="" /></a>
							</div>
							<div class="blog-text">
								<div class="blog-info">
									<h3><a href="#">Lorem ipsum dolor sit amet conse.</a></h3>
									<p>Lorem ipsum dolor sit amet con adipisic elit sed do eiusmod tel incididunt ut lab et dolore mag aliqua.</p>
								</div>
								<div class="blog-date">
									<span><i class="fa fa-clock-o"></i>14 Sep, 2017</span>
									<span><i class="fa fa-heart"></i>20 like</span>
									<span><i class="fa fa-comment"></i>0 comments</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="blog-wrapper mb-30">
							<div class="blog-img">
								<a href="#"><img src="assets/img/blog/2.jpg" alt="" /></a>
							</div>
							<div class="blog-text">
								<div class="blog-info">
									<h3><a href="#">Lorem ipsum dolor sit amet conse.</a></h3>
									<p>Lorem ipsum dolor sit amet con adipisic elit sed do eiusmod tel incididunt ut lab et dolore mag aliqua.</p>
								</div>
								<div class="blog-date">
									<span><i class="fa fa-clock-o"></i>14 Sep, 2017</span>
									<span><i class="fa fa-heart"></i>20 like</span>
									<span><i class="fa fa-comment"></i>0 comments</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 hidden-sm">
						<div class="blog-wrapper mb-30">
							<div class="blog-img">
								<a href="#"><img src="assets/img/blog/3.jpg" alt="" /></a>
							</div>
							<div class="blog-text">
								<div class="blog-info">
									<h3><a href="#">Lorem ipsum dolor sit amet conse.</a></h3>
									<p>Lorem ipsum dolor sit amet con adipisic elit sed do eiusmod tel incididunt ut lab et dolore mag aliqua.</p>
								</div>
								<div class="blog-date">
									<span><i class="fa fa-clock-o"></i>14 Sep, 2017</span>
									<span><i class="fa fa-heart"></i>20 like</span>
									<span><i class="fa fa-comment"></i>0 comments</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>-->
		<!-- blog-area-start -->
        </div>
		<footer>
			<!-- footer-top-area-start -->
			<div class="footer-top-area gray-bg pt-100 pb-70">
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
