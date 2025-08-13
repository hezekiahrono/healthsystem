


<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="{{asset('assets/css/templatemo_style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}" >
    
</head>


@extends('layouts.main')
@section('content')
<div class="container">
     

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" >
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" id="login-form">
                        @csrf

                       
                            <p>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email Address" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

<i class="validation"><span></span><span></span></i>
</p>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          

                       
                            <p>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="password" required autocomplete="current-password">
                                <i class="validation"><span></span><span></span></i>
                                </p>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <p>
                                <!-- <button type="submit"  id="login">
                                    {{ __('Login') }}
                                </button> -->
                                <input type="submit" id="login" value="Login">
                                </p>
                               
                                <div id="create-account-wrap">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Reset Password') }}
                                    </a>
                                @endif
                                <label class="buttoncheck">
                                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <span class="checkmark"></span>
                                    </label>
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                        <span class="checkmark"></span>
                                    </label>
                              
                      
                        </div>

                       
                    </form>
                    <div id="create-account-wrap">
    <p>Not a member? <a href="{{ route('register') }}">Create Account</a><p>
  </div><!--create-account-wrap-->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
