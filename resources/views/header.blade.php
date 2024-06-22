<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Hmend - Home Maintenance, Repair Service HTML Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->


		<!-- all css here -->
        <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/assets/css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('/assets/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/assets/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/assets/css/flaticon.css') }}">
        <link rel="stylesheet" href="{{ asset('/assets/css/ionicons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/assets/css/headline.css') }}">
        <link rel="stylesheet" href="{{ asset('/assets/css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/assets/css/material-design-iconic-font.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/assets/css/meanmenu.css') }}">
        <link rel="stylesheet" href="{{ asset('/assets/css/Pe-icon-7-stroke.css') }}">
        <link rel="stylesheet" href="{{ asset('/assets/css/bundle.css') }}">
        <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('/assets/css/responsive.css') }}">
        <script src="{{ asset('/assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>
	</head>
	<body>

		<header>
			<!-- header-top-area-start
			<div class="header-top-area blue-bg">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="headers-left">
								<div class="headers-left-text">
									<div class="headers-left-icon">
										<i class="fa fa-phone"></i>
									</div>
									<div class="headers-left-text">
										<p>+00-1202-235</p>
									</div>
								</div>
								<div class="headers-left-text">
									<div class="headers-left-icon">
										<i class="fa fa-home"></i>
									</div>
									<div class="headers-left-text">
										<p>2020 Willshire Glen,</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6  col-xs-12">
							<div class="header-rights">
							<a href="#"><i class="zmdi zmdi-calendar"></i> make appointment</a></div>
						</div>
					</div>
				</div>
			</div>-->
			<!-- main-menu-area-start -->
			<div id="header-sticky" class="main-menu-area menu-style-1 white-header">
				<div class="container md-container">
					<div class="row">
						<div class="col-md-2 col-sm-4">
							<div class="logo">
								<a href="/index"><img src="{{ asset('assets/img/logo/1.jpg')}}" height=45px; width= 95px; alt="" /></a>
							</div>
						</div>
						<div class="col-md-7 col-sm-8">
							<div class="main-menu">
								<nav>
									<ul>
										<li class="active"><a href="/index">home</a>
										</li>
										<!--<li><a href="about-us">About Us</a></li> -->
										<li><a href="/service">Services</a>
										</li>
										<li><a href="/Bookings">Bookings</a>

										</li>

										<!--<li><a href="contact">contact</a></li>-->
										<li><a href="/profile">Profile</a></li>
									</ul>
								</nav>
							</div>
						</div>
						<div class="col-md-3 hidden-xs hidden-sm">
							<div class="header-menu-icon">
							<a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                <i class="fa fa-sign-out"></i>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
								</a>

							</div>
						</div>
						<div class="col-xs-12">
							<div class="mobile-menu">

							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- main-menu-area-end -->
		</header>
		<!--
		<header class="">
			<!-- header-top-area-start -->	<!--
			<div class="header-top-area blue-bg">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-3 site-branding col-xs-12">
							<div class="header-logo">
								<a href="index"><img src="assets/img/logo/1.png" alt="" /></a>
							</div>
						</div>
						<div class="col-lg-5 col-md-6 col-sm-9 hidden-xs">
							<div class="header-left">
								<div class="header-text">
									<div class="header-icon">
										<i class="fa fa-phone"></i>
										<i class="paint-roller"></i>
									</div>
									<div class="header-info">
										<span class="phone">+00-1202-235</span>
										<span class="gmail">hmend@gmail.com</span>
									</div>
								</div>
								<div class="header-text">
									<div class="header-icon">
										<i class="fa fa-home"></i>
									</div>
									<div class="header-info">
										<span class="phone">2020 Willshire Glen,</span>
										<span class="gmail">Alpharetta,USA</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-3 hidden-sm col-xs-12">
							<div class="header-left-icon">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-vimeo"></i></a>
								<a href="#"><i class="fa fa-tumblr"></i></a>
								<a href="#"><i class="fa fa-pinterest-p"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- main-menu-area-start -->	<!--
			<div id="header-sticky" class="main-menu-area gray-bg ">
				<div class="container">
					<div class="row">
						<div class=" col-lg-10 col-md-8  col-xs-7">
							<div class="main-menu">
								<nav>
									<ul>
										<li class="active"><a href="index">home</a>
										</li>
										<li><a href="about-us">About Us</a></li>
										<li><a href="service">service</a>
											<ul class="sub-menu">
												<li><a href="service-details">service-details</a></li>
											</ul>
										</li>
										<li><a href="project">projects</a>
											<ul class="sub-menu">
												<li><a href="project-details">project-details</a></li>
											</ul>
										</li>
										<li><a href="blog">blog</a>
											<ul class="sub-menu">
												<li><a href="blog-details">blog-details</a></li>
											</ul>
										</li>
										<li><a href="contact">contact</a></li>
									</ul>
								</nav>
							</div>
						</div>
						<div class=" col-lg-2 col-md-4 col-xs-12">
							<div class="make-appointment">
								<img src="assets/img/logo/2.png" alt="" />
								<a href="#">make appointment</a>
							</div>
						</div>
						<div class="col-xs-12"><div class="mobile-menu"></div></div>
					</div>
				</div>
			</div>
			<!-- main-menu-area-end -->	<!--
		</header>
