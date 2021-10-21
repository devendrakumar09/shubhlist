@extends('Layout.app')

@section('css')
<style>
.login-container {
    flex-wrap: wrap
}

.login-container .card {
    border: none;
    border-radius: 10px;
    background-color: #4270C8;    
    margin-top: -60px
}

.login-container p.mb-1 {
    font-size: 25px;
    color: #9FB7FD
}

.login-container .btn-primary {
    border: none;
    background: #5777DE;
    margin-bottom: 60px
}

.login-container .btn-primary small {
    color: #9FB7FD
}

.login-container .btn-primary span {
    font-size: 13px
}

.login-container .card.two {
    border-top-right-radius: 60px;
    border-top-left-radius: 0
}

.login-container .form-group {
    position: relative;
    margin-bottom: 2rem
}

.login-container .form-control {
    border: none;
    border-radius: 0;
    outline: 0;
    border-bottom: 1.5px solid #E6EBEE
}

.login-container .form-control:focus {
    box-shadow: none;
    border-radius: 0;
    border-bottom: 2px solid #8A97A8
}

.login-container .form-control-placeholder {
    position: absolute;
    top: 15px;
    left: 10px;
    transition: all 200ms;
    opacity: 0.5;
    font-size: 80%
}

.login-container .form-control:focus+.form-control-placeholder,
.login-container .form-control:valid+.form-control-placeholder {
    font-size: 80%;
    transform: translate3d(0, -90%, 0);
    opacity: 1;
    top: 0px;
    color: #8B92AC
}

.login-container .btn-block {
    border: none;
    border-radius: 8px;
    background-color: #506CCF;
    padding: 10px 0 12px
}

.login-container .btn-block:focus {
    box-shadow: none
}

.login-container .btn-block span {
    font-size: 15px;
    color: #D0E6FF
}



@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap");


.login-with .line-text {
    color: #cecece
}

.login-with .line {
    background-color: #eeeff6;
    width: 166px;
    height: 2px
}

.login-with .member a {
    color: #e91e63;
    font-size: 14px
}

.login-with .member span {
    font-size: 13px;
    font-weight: 400;
    color: #6ca0d6
}

.login-with .facebook-button {
    background-color: #39559f
}

.login-with .facebook-button:hover {
    background-color: #39559f
}

.login-with .facebook:focus {
    color: #fff;
    background-color: #4285f4;
    border-color: #4285f4;
    box-shadow: none
}

.login-with .google-button {
    background-color: #4285f4
}

.login-with .google-button:hover {
    background-color: #4285f4
}
</style>
@endsection

@section('main')
<div class="container login-container">
    <div class="row d-flex justify-content-center">
        <div class="col-sm-6 mx-auto">
            <div class="d-flex flex-column justify-content-between ">
                <div class="card mt-3 border shadow">
                    <div class="logo mb-3"><img src=" "></div>
                    <div class="p-4">
                        <p class="mb-1">Start managing your</p>
                        <h4 class="mb-5 text-white">Invitations with us!</h4>
                    </div> 
                    <button class="btn btn-primary btn-lg"><small>Not a member?</small>
                        <span>&nbsp;<a href="{{ route('register') }}" class="text-white font-weight-bolder">SIGNUP</a></span> 
                    </button>
                </div>
                <div class="card two bg-white px-5 py-4 mb-3">                    
                    <a class="btn btn-danger btn-block continue facebook-button  justify-content-start align-items-center"> 
                        <i class="fa fa-facebook ml-2"></i> 
                        <span class="ml-5 px-4 text-white">Continue with facebook</span> 
                    </a> 
                    <a href="{{ url('/redirect') }}" class="btn btn-danger btn-block continue google-button  justify-content-start align-items-center"> 
                        <i class="fa fa-google ml-2"></i> 
                        <span class="ml-5 px-4 text-white">Continue with Google</span> 
                    </a>
                    <form method="POST" action="{{ route('login') }}" class="mt-5">
                        @csrf
                        <div class="form-group">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>                            
                            <label class="form-control-placeholder" for="mail">Email</label>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            <label class="form-control-placeholder" for="password">Password</label>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group mt-0 pt-0">
                            @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                        </div> 
                        <button class="btn btn-primary btn-block btn-lg mt-1 mb-2">
                            <span>Get started<i class="fas fa-long-arrow-alt-right ml-2"></i></span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
