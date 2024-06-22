<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - MyEarningsLab</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/login/css/main.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('assets/login/css/util.css') }}"> --}}
     <link rel="stylesheet" href="{{ asset('assets/login/vendor/animate/animate.css') }}"> 
    <link rel="stylesheet" href="{{ asset('assets/login/vendor/css-hamburgers/hamburgers.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="icon" href="{{ asset('assets/login/images/icons/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('assets/login/vendor/css-hamburgers/hamburgers.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/login/vendor/select2/select2.min.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> 
    <link rel="shortcut icon" href="" type="image/x-icon">
    
    

<body>
@yield('section')
<script src="{{ asset('assets/login/js/main.js') }}"></script>
<script src="{{ asset('assets/login/vendor/jquery/jquery-3.2.1.min.js') }}" ></script>
 
<script src="{{ asset('assets/login/vendor/bootstrap/js/popper.js') }}" ></script>
<script src="{{ asset('assets/login/vendor/bootstrap/js/bootstrap.min.js') }}" ></script>
<script src="{{ asset('assets/login/vendor/select2/select2.min.js') }}" ></script>
<script src="{{ asset('assets/login/vendor/tilt/tilt.jquery.min.js') }}" ></script>
<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
</body>