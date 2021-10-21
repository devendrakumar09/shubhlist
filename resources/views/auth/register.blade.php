@extends('Layout.app')
@section('css')
    <link rel="stylesheet" href="{{asset('Auth/css/auth.css')}}">
    <style>
    </style>
@endsection
@section('main')
<div class="container-flude Auth mt-4">
    <div class="container">
        <div class="row ">
            <div class="col-sm-11 mx-auto">
                <div class="row p-2 d-flex d-flex align-items-center bg-white shadow">
                    <!--Page Content -->
                    <div class="col-sm-6">
                        <div class="card card2 border-0 ">
                            <div class="my-auto mx-md-5 px-md-5 right">
                                <h3 class="">We are more than just a company</h3> 
                                <small class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</small>
                            </div>
                        </div>
                    </div>

                    <!--Form -->
                    <div class="col-sm-6">
                        <div class="card border-0 auth-card p-4">
                            <form method="POST" action="{{ route('register') }}" class="p-3 auth-form">                    
                                @csrf
                                <div class="form-group">
                                    <label for="name">{{ __('Name') }}</label>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror                            
                                </div>
                                <div class="form-group">
                                    <label for="email">{{ __('E-Mail Address') }}</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    
                                </div>

                                <div class="form-group ">
                                    <label for="password">{{ __('Password') }}</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="New Password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>

                                <div class="form-group">
                                    <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                                </div>

                                
                                <div class="form-group text-right">
                                    <a class="btn btn-primary" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    <button type="submit" class="btn btn-primary">
                                            {{ __('Register') }}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
