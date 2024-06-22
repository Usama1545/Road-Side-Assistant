@include('header');
		<!-- header-top-area-start -->
		<!-- breadcrumb-banner-area -->
		<div class="breadcrumb-banner-area ptb-50 bg-opacity">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="breadcrumb-text text-center">
							<h2>Profile</h2>
							<p>View & Update your profile</p>
						</div>
					</div>
				</div>
			</div>
		</div>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

<style type="text/css">
    	.body{
    margin-top:20px;
    color: #1a202c;
    text-align: left;
    background-color: #e2e8f0;
}
.main-body {
    padding: 15px;
}
.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}
.form-control
{
    font-size: 1.3rem;
}
.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}
.mb-0{
    font-size: 1.68rem;
}
.font-secondary{
    font-size: 1.3rem;
}
span
{
    padding-left: 25px;
}
.list-group-item {
        display: flex;
        align-items: center;
    }

    .list-group-item i {
        margin-right: 10px;
    }

    </style>
<body>
<div class="modal" tabindex="-1" id="myModal"> <!-- Add id="myModal" to the modal -->
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="col-lg-12 ">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('profile') }}" method="POST">
                                 @csrf
                                @foreach ($user as $data)
                                    <input type="text" hidden  class="form-control" name="id" value="{{ $data->id()}}">
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Full Name</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" name="name" value="{{$data['name']}}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Email</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="email" class="form-control" name="email" value="{{$data['email']}}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Phone</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" name="phone" value="{{$data['phoneNumber']}}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Password</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="password" class="form-control" name="password" value="{{$data['password']}}">
                                    </div>
                                </div>
                                @endforeach
                                <input type="submit" class="btn btn-primary" placeholder="Save changes">
                            </form>
                        </div>
                    </div>
                </div>

            </div>

            </div>

        </div>
    </div>
</div>
<div class="container">
<div class="main-body">


<div class="row gutters-sm">
<div class="col-md-4 mb-3">

    <div class="list-group">
        <a href="#" class="list-group-item list-group-item-action mb-0" aria-current="true" id="openModalLink"> <!-- Change id to "openModalLink" -->
            <i class="fa fa-pencil-square p-2"></i>
            <span>Update Profile</span>
        </a>

        <a href="Bookings" class="list-group-item list-group-item-action mb-0"><i class="fa fa-shopping-cart p-2"></i><span>Bookings</span></a>
        <a href="contact" class="list-group-item list-group-item-action mb-0"><i class="fa fa-envelope p-2"></i><span style="
            padding-left: 24px;
        ">Contact us</span></a>
        <a href=""class="list-group-item list-group-item-action  mb-0"><i class="fa fa-question p-3"></i><span style="
            padding-left: 23px;
        ">Help Center</span></a>
        <a href="{{ route('logout') }}"  onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();" class="list-group-item list-group-item-action  mb-0"><i class="fa fa-sign-out p-2"></i><span style="
            padding-left: 27px;
        ">Logout</span></a>
           <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
      </div>

</div>

<div class="col-md-8">

@foreach ($user as $data)
<div class="card">
    <div class="card-body">
        <div class="d-flex flex-column align-items-center text-center">
            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
            <div class="mt-3">
                <h4>{{$data['name']}}</h4>
            </div>
        </div>
    </div>

    <div class="card mb-3">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-3">
                    <h6 class="mb-0">Full Name</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                    {{$data['name']}}
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-3">
                    <h6 class="mb-0">Email</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                    {{$data['email']}}
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-3">
                    <h6 class="mb-0">Phone</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                    {{$data['phoneNumber']}}
                </div>
            </div>

        </div>
    </div>
</div>
@endforeach
</div>
</div>
</div>
</div>
<script>
    // Get the modal and link elements
    var modal = document.getElementById('myModal');
    var link = document.getElementById('openModalLink');

    // Get the close button inside the modal
    var closeBtn = modal.querySelector('.btn-close');

    // Open the modal when the link is clicked
    link.addEventListener('click', function() {
        modal.style.display = 'block';
    });

    // Close the modal when the close button is clicked
    closeBtn.addEventListener('click', function() {
        modal.style.display = 'none';
    });

    // Close the modal if the user clicks outside of it
    window.addEventListener('click', function(event) {
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    });
</script>
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
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript">

</script>


</body>
</html>
