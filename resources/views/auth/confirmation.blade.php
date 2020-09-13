@extends('layouts.app')

@section('content')
<!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="#"><i class="fa fa-home"></i> Home</a>
                        <span>Login</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Form Section Begin -->

    <!-- Register Section Begin -->
    <div class="register-login-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="login-form">
                        <h2>Confirmation</h2>
                    <form action="{{url('/confirmation')}}" method="POST">
                        @csrf
                            <div class="group-input">
                                <label for="username">Your confirmation code*</label>
                                <input type="text" name="code" id="username">
                            </div>
                           
                            <button type="submit" class="site-btn login-btn">Confirm</button>
                        </form>
                        <div class="switch-login">
                            <a href="./register.html" class="or-login">Or Create An Account</a>
                            <a href="{{url('/login/facebook')}}" class="or-login">Login with facebook</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Register Form Section End -->
@endsection
