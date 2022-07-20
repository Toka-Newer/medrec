@extends('layout.app')
@section('content')
    <style>
        .signin .container {
        position: absolute;
        top: 15%;
        left: 0;
        right: 0;
        bottom: 0;
        }

        .form-title {
        font-weight: bold;
        }

        input {
        width: 100%;
        display: block;
        border: none;
        border-bottom: 1px solid #999;
        padding: 6px 30px;
        box-sizing: border-box;
        }

        .form-group i {
        position: absolute;
        display: block;
        float: left;
        line-height: 35px;
        left: 3%;
        }

        .custom-control-label::after,
        .custom-control-label::before {
        width: 1.15rem !important;
        height: 1.15rem !important;
        }

        /* .signin-image{
        margin-top: 2.5%;
        } */

        .signin-image figure {
        text-align: center;
        }

        .signin-image figure img {
        max-width: 100%;
        height: auto;
        }

        .form-submit {
        display: inline-block;
        background: #6dabe4;
        color: #fff;
        border-bottom: none;
        width: auto;
        padding: 2.5% 8%;
        border-radius: 5px;
        -moz-border-radius: 5px;
        -webkit-border-radius: 5px;
        -o-border-radius: 5px;
        -ms-border-radius: 5px;
        margin-top: 25px;
        cursor: pointer;
        }

        .signup-image-link {
        font-size: 14px;
        color: #222;
        display: block;
        cursor: pointer;
        text-decoration: underline;
        }
        @media (max-width: 767px){
        .main{
        height: 120vh !important;
        }
        .signin-image{
        margin-bottom: 7%;
        }
        }
        footer {
        display:none;
        }
        header {
        display: none;
        }
    </style>
    <div class="main" style="height: 100vh; margin: auto;">

        <!-- Sing in  Form -->
        <section class="signin">
            <div class="container">
                <div class="signin-content row">
                    <div class="signin-image col-md-6">
                        <figure><img src="images/signIn.png" alt="sing up image"></figure>
                        <a href="{{ route('registration') }}" class="signup-image-link text-center mt-4">Create an
                            account</a>
                    </div>

                    <div class="signin-form col-md-6">
                        <h2 class="form-title" style="margin-bottom: 8%;">{{ __('Sign in') }}</h2>

                        @if ($errors->any())
                            {{ implode('', $errors->all('<div>:message</div>')) }}
                        @endif

                        <form method="POST" class="register-form" id="login-form" action="{{ url('/login') }}">
                            @CSRF
                            <div class="form-group mb-5">
                                <i class="fas fa-user-alt"></i>
                                <input type="email" name="email" id="email" placeholder="Your Email" />
                            </div>
                            <div class="form-group mb-5">
                                <i class="fa fa-lock"></i>
                                <input type="password" name="password" id="password" placeholder="password" />
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
