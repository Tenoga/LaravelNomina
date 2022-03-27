@extends('layouts.appLayout')
@role('Admin')
@section('content')
<div class="container">
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-form-title" style="background-image: url(../../img/login.jpg);">
                    <span class="login100-form-title-1">
                        Edit user {{$user->name}} 
                    </span>
                </div>

                <form method="POST" action="/users/{{$user->id}}" class="login100-form validate-form" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
                        <span class="label-input100">Name</span>
                        <input class="input100 @error('name') is-invalid @enderror" id="name" type="name" name="name" placeholder="Name" value="{{$user->name}}" required autocomplete="name">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Email is required">
                        <span class="label-input100">Email</span>
                        <input class="input100 @error('email') is-invalid @enderror" id="email" type="email" name="email" placeholder="Enter Email" value="{{$user->email}}" required autocomplete="email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Phone is required">
                        <span class="label-input100">Phone</span>
                        <input class="input100 @error('phone') is-invalid @enderror" id="phone" type="phone" name="phone" placeholder="Enter phone" value="{{$user->phone}}" required autocomplete="phone">
                        @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Hours is required">
                        <span class="label-input100">Hours</span>
                        <input class="input100 @error('hours') is-invalid @enderror" id="hours" type="hours" name="hours" placeholder="Enter hours" value="{{$user->hours}}" required autocomplete="hours">
                        @error('hours')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Hours is required">
                        <span class="label-input100">{{ __('Category') }}</span>
                        <select class="form-select" aria-label="Default select example" name="category" id="category">
                            <option selected>{{$user->category}}</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                        </select>
                        @error('category')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
                        <span class="label-input100">{{ __('Password') }}</span>
                        <input class="input100 @error('password') is-invalid @enderror" type="password" name="password" placeholder="Enter password" required autocomplete="current-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
                        <span class="label-input100">{{ __('Confirm Password') }}</span>
                        <input class="input100 @error('password') is-invalid @enderror" id="password-confirm" type="password" name="password_confirmation" placeholder="Enter password" required autocomplete="new-password">
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

                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn">
                            {{ __('Save') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@else
@include(components.authAlert)
@endrole
@endsection