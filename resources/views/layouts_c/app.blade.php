
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - MyEarningsLab</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/admin_css/bootstrap.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('assets/admin_css/bold.css') }}"> --}}
     <link rel="stylesheet" href="{{ asset('assets/admin_css/style.css') }}"> 
    <link rel="stylesheet" href="{{ asset('assets/admin_css/perfect-scrollbar.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/admin_css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> 
    <link rel="shortcut icon" href="" type="image/x-icon">
    
    

    <style>
    .sidebar-wrapper .sidebar-header img {
        height: 4.2rem !important;
    }
   .btn-danger
   {
    top: -5px;
   }
   .row{
    padding-top:13px;
   }
   .dataTables_filter{
    margin-right:60px;
   }
    </style>
</head>

<body oncontextmenu="return true" onkeydown="return true;" onmousedown="return true;">

    <div id="app">
<div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="index" class="list-group-item list-group-item-action text-primary">Road Side Assitance</a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu" id="menu">
                        <li class="sidebar-title">Menu</li>
                    
                        <li class="sidebar-item active">
                            <a href="index" class='sidebar-link' data-url="index" onclick="setActive(this)">
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="users" class='sidebar-link' data-url="users" onclick="setActive(this)">
                                <i class="bi bi-stack"></i>
                                <span>Users List</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="vendor" class='sidebar-link' data-url="vendor" onclick="setActive(this)">
                                <i class="bi bi-stack"></i>
                                <span>Service Providers List</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="Popular_category" class='sidebar-link' data-url="Popular_category" onclick="setActive(this)">
                                <i class="bi bi-stack"></i>
                                <span>Popular Categories</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="category" class='sidebar-link' data-url="category" onclick="setActive(this)">
                                <i class="bi bi-stack"></i>
                                <span>Categories</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="banners" class='sidebar-link' data-url="banners" onclick="setActive(this)">
                                <i class="bi bi-stack"></i>
                                <span>Banners</span>
                            </a>
                        </li>
                        <!-- <li class="sidebar-item">
                            <a href="Update_password" class='sidebar-link' data-url="Update_password" onclick="setActive(this)">
                                <i class="bi bi-stack"></i>
                                <span>Change Password</span>
                            </a>
                        </li> -->
                        <li class="sidebar-item">
                            <a href="/" class='sidebar-link' data-url="/" onclick="setActive(this)">
                                <i class="bi bi-person-badge-fill"></i>
                                <span>Logout</span>
                            </a>
                        </li>
                    </ul>
                    
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        
        

<main class="py-4">
    
  @yield('content')
</main>
<script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="{{ asset('assets/admin_js/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('assets/admin_js/bootstrap-bundle.min.js') }}" ></script>
<script src="{{ asset('assets/admin_js/dashboard.js') }}"></script>
<script src="{{ asset('assets/admin_js/main.js') }}"></script> 
<script src="{{ asset('assets/admin_js/fancytable.js') }}"></script> 
<script src="{{ asset('assets/admin_js/dataTables.js') }}"></script> 
<script src="{{ asset('assets/admin_js/dataTables.min.js') }}"></script> 
<script type="text/javascript">
             
    $(document).ready(function() {
        $("#mytable").dataTable({
          /* Column number for initial sorting*/
           sortColumn:0,
           /* Setting pagination or enabling */
           pagination: true,
           /* Rows per page kept for display */
           perPage:15,
           globalSearch:true
           });
                     
    });
</script>


</body>