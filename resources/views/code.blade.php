<style>
    .worker-container {
    display: flex;
    align-items: center;
    padding: 10px;
    }

    .worker-image {
    width: 150px;
    height: 150px;
    margin-right: 20px;
    }

    .worker-details {
    flex: 1;
    }

    .worker-name {
    font-size: 20px;
    font-weight: bold;
    }

    .worker-rating {
    margin-top: 10px;
    }

    .worker-price {
    margin-top: 10px;
    }
</style>
@include('header')

		<!-- header-top-area-start -->
		<!-- breadcrumb-banner-area -->
		<div class="breadcrumb-banner-area ptb-50 bg-opacity" style="background-image:url(assets/img/bg/6.jpg)">
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
<div class="Our-Services-area pt-120 pb-65">
			<div class="container">
				<div class="section-info text-center mb-60">
					<h2>Our-Services</h2>
					<p>Lorem Ipsum is simply dummy text of the printing and. </p>
				</div>


            <div class="worker-container">
              <img src="worker1.jpg" alt="Worker 1" class="worker-image">
              <div class="worker-details">
                <div class="worker-name">John Doe</div>
                <div class="worker-rating">Rating: 4.5/5</div>
                <div class="worker-price">Price: $20/hour</div>
              </div>
            </div>

            <div class="worker-container">
              <img src="worker2.jpg" alt="Worker 2" class="worker-image">
              <div class="worker-details">
                <div class="worker-name">Jane Smith</div>
                <div class="worker-rating">Rating: 4.2/5</div>
                <div class="worker-price">Price: $18/hour</div>
              </div>
            </div>

            <!-- Add more worker containers as needed -->

          </body>
          </html>
