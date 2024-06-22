@extends('layouts.app')

@section('section')
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="{{ asset('assets/img/logo/1.png')}}" alt="IMG">
				</div>


            @if(Session::has('error'))              
              <div class="alert alert-danger alert-dismissible fade show">
                {{ Session::get('error') }}
                <button type="button" class="close" data-dismiss="alert">&times;</button>
              </div>
            @endif

            <form method="POST" action="{{ route('register') }}">
              @csrf
              <div class="wrap-input100 validate-input" data-validate = "">
                @error('name')
                  <div class="alert alert-danger" role="alert">
                    {{ $message }}
                  </div>
                @enderror
						      <input type="text" name="name" placeholder="Name" class="input100 @error('name') is-invalid @enderror" name="email" required autofocus>
						      <span class="symbol-input100">
							      <i class="fa fa-user" aria-hidden="true"></i>
						      </span>
					    </div>
          
              <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                @error('email')
                  <div class="alert alert-danger" role="alert">
                    {{ $message }}
                  </div>
                 @enderror
						     <input type="text" name="email" placeholder="Email" class="input100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
						     <span class="symbol-input100">
							      <i class="fa fa-envelope" aria-hidden="true"></i>
						     </span>
					    </div>
               
              <div class="wrap-input100 validate-input" data-validate = "">
                @error('number')
                  <div class="alert alert-danger" role="alert">
                    {{ $message }}
                  </div>
                @enderror
						      <input type="number" name="number" placeholder="Phone Number" class="input100 @error('number') is-invalid @enderror" required autofocus>
						      <span class="symbol-input100">
							      <i class="fa fa-mobile" aria-hidden="true"></i>
						      </span>
					    </div>
                  

              <div class="wrap-input100 validate-input" data-validate = "Password is required">
               @error('password')
                <div class="alert alert-danger" role="alert">
                   {{ $message }}
                </div>
               @enderror
                  <input id="password" type="password" class="input100 @error('password') is-invalid @enderror" er="Password" placeholder=" Password" name="password" required autocomplete="new-password">
                  <span class="symbol-input100">
							      <i class="fa fa-lock" aria-hidden="true"></i>
						      </span>
					    </div>

              <div class="wrap-input100 validate-input" data-validate = "Password is required">
               @error('confirm_password')
                <div class="alert alert-danger" role="alert">
                   {{ $message }}
                </div>
               @enderror
                  <input id="password-confirm" type="password" class="input100 @error('confirm_password') is-invalid @enderror" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password">
                  <span class="symbol-input100">
							      <i class="fa fa-lock" aria-hidden="true"></i>
						      </span>
					    </div>
              
              <div class="container-login100-form-btn">
                <button type="submit" class="login100-form-btn">
                  {{ __('Register') }}
                </button>
              </div>
              <div class="text-center p-t-136">
						    <a class="txt2" href="{{ route('login') }}">
							    Already have  an Account
							    <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						    </a>
					    </div>
            </form>
                 
                </div>
              </div>
            </div>
         
      @endsection
