@include('header')
<style>
    .worker-container {
      display: flex;
      align-items: center;
    }

    .worker-image {
      width: 150px;
      height: 150px;
      margin-right: 20px;
    }

    .worker-details {
      display: flex;
      flex-direction: column;
    }

    .card {
  position: relative;
  width: 160px;
  height: 200px;

}
.card1 {
  position: relative;
  width: 140px;
  height: 200px;

}

.card-header {
  position: absolute;
  top: 25px;
    left: -40px;
  width: 100%;

}

.card-footer {
  position: absolute;
  bottom: 25px;
  right: 0;
  width: 100%;

}
.our-services-wrapper a {
    color: rgb(0, 0, 0); /* Change this value to your desired color */
  }
  .our-services-wrapper a:hover {
    color: #8b6245; /* Change this value to your desired hover color */
  }
.worker-details2 {
  position: relative;
}
.p {
    color: #8b6245;
}

.worker-name {
  font-size: 16px;
  font-weight: bold;
}

.worker-rating {
    margin-top: 5px;
    margin-left: 13px;
}

.worker-price {
  text-align: right;
  font-size: 14px;
  font-weight: bold;
}
    .testimonial-text {

    }
</style>
		<!-- header-top-area-start -->
		<!-- breadcrumb-banner-area -->
		<div class="breadcrumb-banner-area ptb-50 bg-opacity" style="">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="breadcrumb-text text-center">
						<h2>service</h2>
							<ul class="breadcrumb-menu">
							  <li><a href="#">service</a></li>
							  <li><a href="#">service providers</a></li>
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
					<h2>Service Providers</h2>
					<p class="p">We Got a Large and Increasing List of service providers</p>
				</div>
                <div class="testimonial-area">
                    <div class="container">
                        <div class="row">
                            <div class="testimonial-active owl-carousel" style="margin-bottom: 30px; margin-top: 20px">
                            @foreach($provider as $data)

                                <div class="col-md-12 pt-80 ">
                                    <div class="testimonial-wrapper mb-30">
                                        <div class="testimonial-img text-center">
                                            <img src="{{$data['providerImage']}}" alt="" />
                                        </div>
                                        <div class="testimonial-text text-center" style="">
                                            <p>{{$data['providerDes']}}</p>
                                            <h5>Price: {{$data['providerPrice']}}</h5>
                                            <h5>Experience: {{$data['providerExperience']}}</h5>
                                            <h4>{{$data['providerName']}}</h4>
                                            <form method="GET" action="{{ route('book') }}">
                                                @csrf <!-- Include this if you want CSRF protection -->
                                                <input type="hidden" name="provider_id" value="{{$data['providerID']}}"> <!-- Replace 'your_value_here' with the actual value you want to send -->
                                                <button type="submit" class="btn btn-success" style="margin-left: 80%; margin-bottom: 3%; background-color: #8b6245">Book</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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


		<!-- Our-Services-area-start -->

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
