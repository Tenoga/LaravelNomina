@extends('layouts.appLayout')
@section('content')
<div class="container">
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(img/login.jpg);">
					<span class="login100-form-title-1">
						Gastrom S.A
					</span>
				</div>

				<form method="POST" action="{{ route('login') }}" class="login100-form validate-form">
					@csrf
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Email</span>
						<input class="input100 @error('email') is-invalid @enderror" id="email" type="email" name="email" placeholder="Enter Email" value="{{ old('email') }}" required autocomplete="email">
						@error('email')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100 @error('password') is-invalid @enderror" type="password" name="password" placeholder="Enter password" required autocomplete="current-password">
						@error('password')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>

					<div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<a href="#" class="txt1">
								Forgot Password?
							</a>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<div class="container-login100-form-btn">
								<button type="submit" class="login100-form-btn">
									{{ __('Login') }}
								</button>
							</div>
						</div>
						<div class="col">
							<div class="container-login100-form-btn">
								<a href="/register" class="login100-form-btn">
									{{ __('Register') }}
								</a>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection