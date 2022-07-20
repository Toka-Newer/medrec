@extends('layout.app')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/css/bootstrap-select.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/js/bootstrap-select.min.js"></script>
@section('content')
<style>
    .main{
        font-size:initial;
    }
    h2{
        font-size:3rem;
    }

    .signup .container{
    position: absolute;
        top: 8%;
        left: 0;
        right: 0;
        bottom: 0;
    }

    .form-title{
    font-weight: bold;
    }

    input{
    width: 100%;
        display: block;
        border: none;
        border-bottom: 1px solid #999;
        padding: 6px 30px;
        box-sizing: border-box;
    }

    .form-group i{
    position: absolute;
    display: block;
    float: left;
    line-height: 35px;
    left: 3%;
    }

    .custom-control-label::after,.custom-control-label::before{
    width: 1.15rem !important;
    height: 1.15rem !important;
    }

    .signup-image{
    margin-top: 2.5%;
    }

    .signup-image figure{
    text-align: center;
    }

    .signup-image figure img{
    max-width: 100%;
    height: auto;
    }

    .form-submit{
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

    .signup-image-link{
    font-size: 14px;
    color: #222;
    display: block;
    cursor: pointer;
    text-decoration: underline;
    }

    @media (max-width: 767px){
        .main{
            height: 30vh !important;
        }
        figure img{
            display: none !important;
        }
    }
    footer {
        display:none;
    }
    header {
        display: none;
    }
    .btn{
        font-size:initial;
    }
    .bootstrap-select.btn-group .dropdown-menu li{
        font-size:initial;
    }
</style>
    <div class="main" style="height: 100vh; margin: auto;">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content row">
                    <div id="registration" class="signup-form col-md-6">
                        <h2 class="form-title" style="margin-bottom: 8%;">{{ __('Sign up') }}</h2>

                        @if($errors->any())
                            {{ implode('', $errors->all('<div>:message</div>')) }}
                        @endif

                        <form method="POST" class="register-form" id="register-form" action="{{ url('/register')}}">
                            @CSRF
                            <div id="app" class="form-group mb-5">
                                <i class="fas fa-user-alt"></i>
                                <input type="text" name="name" id="name" placeholder="Your Name" />
                            </div>
                            <div class="form-group mb-5">
                                <i class="fa fa-envelope"></i>
                                <input type="email" name="email" id="email" placeholder="Your Email" />
                            </div>
                            <div class="form-group mb-5">
                                <i class="fa fa-lock"></i>
                                <input type="password" name="password" id="password" placeholder="password" />
                            </div>
                            <div class="form-group mb-5">
                                <i class="fa fa-lock"></i>
                                <input type="date" min="0" name="birthDate" id="dateOfBirthage" placeholder="Date of birth" />
                            </div>
                            <div class="form-group mb-5 row mx-1">
                                <div class="custom-control custom-radio col-xs-6">
                                    <input type="radio" id="customRadio1" value="male" name="gender" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio1">Male</label>
                                </div>
                                <div class="custom-control custom-radio col-xs-6">
                                    <input type="radio" id="customRadio2" value="female" name="gender" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio2">Female</label>
                                </div>
                            </div>
                            <div class="form-group mb-5">
                                <i class="fa fa-lock"></i>
                                <input type="text" name="nationalID" id="id" placeholder="National ID" />
                            </div>
                            <div class="form-group mb-3">
                                {{-- <label class="mb-4">Chronic diseases</label>
                                <select id="DDLActivites" data-style="btn-default" class="selectpicker form-control"
                                    multiple>
                                    <option>Mustard</option>
                                    <option>Barbecue</option>
                                    <option>Mustard</option>
                                    <option>Barbecue</option>
                                    <option>Mustard</option>
                                    <option>Barbecue</option>
                                    <option>Mustard</option>
                                    <option>Barbecue</option>
                                </select> --}}
                                <label class="mb-4">Sign up As:</label>
                                <select data-style="btn-default" class="selectpicker form-control" name="type" id="type">
                                    <option value="Patient">Patient</option>
                                    <option value="Doctor">Doctor</option>
                                </select>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register" />
                            </div>
                        </form>
                    </div>
                    <div class="signup-image col-md-6">
                        <figure><img src="images/registration.png" alt="sing up image"></figure>
                        <a href="{{ route('signIn') }}" class="signup-image-link text-center mt-5">I am already member</a>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
