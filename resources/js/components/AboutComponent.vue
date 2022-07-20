<template>
    <div>
        <component :is="'style'">
            <!-- @import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
            section{
            padding: 60px 0;
            } -->
            @media (max-width: 575.98px) {
            #contact-us{
            height: 80vh;
            }
            #contact-us .contact-content .about h2{
            font-size: 50px;
            }
            }
            section .section-title{
            text-align:center;
            color:#4b88c7;
            margin-bottom:50px;
            text-transform:uppercase;
            margin : 8%;

            }
            #what-we-do{
            background:#ffffff;
            }
            #what-we-do .card{
            padding: 2rem!important;
            border: none;
            margin-bottom:1rem;
            -webkit-transition: .5s all ease;
            -moz-transition: .5s all ease;
            transition: .5s all ease;
            }
            @media (min-width: 1440px)
            {
            #what-we-do .card{
            height: 205px !important;
            }
            }
            @media (min-width: 767px){
            #what-we-do .card{
            height: 235px;
            }
            #what-we-do .card:hover{
            -webkit-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
            -moz-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
            box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
            }
            #what-we-do .card .card-block{
            padding-left: 50px;
            position: relative;
            }
            #what-we-do .card .card-block a{
            color: #007b5e !important;
            font-weight:700;
            text-decoration:none;
            }
            #what-we-do .card .card-block a i{
            display:none;

            }
            #what-we-do .card:hover .card-block a i{
            display:inline-block;
            font-weight:700;

            }
            #what-we-do .card .card-block:before{
            font-family: FontAwesome;
            position: absolute;
            font-size: 39px;
            color: #4b88c7;
            left: 0;
            -webkit-transition: -webkit-transform .2s ease-in-out;
            transition:transform .2s ease-in-out;
            }
            #what-we-do .card .block-1:before{
            content: "\f00c";
            }
            #what-we-do .card .block-2:before{
            content: "\f00c";
            }
            #what-we-do .card .block-3:before{
            content: "\f00c";
            }
            #what-we-do .card .block-4:before{
            content: "\f00c";
            }
            #what-we-do .card .block-5:before{
            content: "\f00c";
            }
            #what-we-do .card .block-6:before{
            content:"\f00c";
            }
            #what-we-do .card:hover .card-block:before{
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
            -webkit-transition: .5s all ease;
            -moz-transition: .5s all ease;
            transition: .5s all ease;
            }
            .img-fluid {
            max-width: 100%;
            height: auto;
            }
            .social-link {
            width: 30px;
            height: 30px;
            border: 1px solid #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #666;
            border-radius: 50%;
            transition: all 0.3s;
            font-size: 0.9rem;
            }
            .social-link:hover, .social-link:focus {
            background: #ddd;
            text-decoration: none;
            color: #555;
            }
            @media(max-width:991px){
            .slider-pattern{
            width: 57%;
            }
            .home-slider .slider-img {
            left: 10px;
            top: 90px;
            width: 90%;
            display: none;
            }
            #contact-us{
            min-height: auto;
            }
            }
            @media(max-width:767px){

            .slider-pattern{
            display: none;
            }
            }
            @media (max-width: 575.98px) {
            #contact-us{
            height: 80vh;
            }
            #contact-us .contact-content .about h2{
            font-size: 50px;
            }
            }
            @media(max-width:767px){
            .copy-right div{
            margin-bottom: 15px;
            }

            @media (min-width: 768px)
            .col-md-3 {
            <!-- -ms-flex: 0 0 25%; -->
            flex: none;
            max-width: 100%;


            }
            .w-50 {
            width: 100% ;
            }

            .carousel {
            position: sticky;
            }

            .float-right,
            .float-left{
            float: none!important;
            text-align: center;
            }
            }
            }
        </component>
        <div class="main">
            <div id="contact-us">
                <section class="home-slider">
                    <div class="slider-pattern">

                        <div class="slider-img" id="parallax-1">
                            <div class="layer" data-depth="0.20">
                                <!-- <img src="images/about.png"> -->
                            </div>

                        </div>
                        <!--End slider-bg-parallax -->
                    </div><!-- End slider-pattern -->
                    <div class="container">
                        <div class="row">
                            <div class="contact-content">
                                <div class="about wow fadeInUp" data-wow-duration="2s">
                                    <p>
                                        <a href='/' v-if="!flag">HOME<i class="fas fa-angle-right"></i></a>
                                        <a href='/EditPatientHome' v-if="flag">HOME<i
                                                class="fas fa-angle-right"></i></a>
                                        <span>ABOUT<i class="fas fa-angle-right"></i></span>
                                    </p>
                                    <h2 class="us h1">About us</h2>
                                </div>
                            </div>
                        </div>
                        <!--End row-->
                    </div><!-- End container -->
                </section>
                <!--End home-slider-->
            </div>

            <!--About us-->
            <!-- <div id="us">
                <div class="container">
                    <h3 class="aboutus-text" color="red">
                        Help the patients to record their medical history by following
                        up on their chronic disease,
                        surgeries, if any ,
                        by following up through a specialized doctor to follow on their disease and
                        recording the medications he needs on the website,
                        the patient can book an appointment with the specialist doctor at the appropriate
                        dates
                        to keep the doctor and patient appointments through private chat between them.
                    </h3>
                </div>
            </div> -->
        </div>
        <div id="slide">
            <div class="container">
                <div class="bg-light">
                    <div class="container py-5 px-5">
                        <div class="row h-100 align-items-center py-5">
                            <div class="col-lg-6">

                                <p class="lead text-muted mb-0"> Help the patients to record their medical history by
                                    following
                                    up on their chronic disease,
                                    surgeries, if any ,
                                    by following up through a specialized doctor to follow on their disease and
                                    recording the medications he needs on the website,
                                    the patient can book an appointment with the specialist doctor at the appropriate
                                    dates
                                    to keep the doctor and patient appointments through private chat between them..</p>
                            </div>
                            <div class="col-lg-6 d-none d-lg-block"><img src="images/about.png" alt=""
                                    class="img-fluid"></div>
                        </div>
                    </div>
                </div>

                <!-- <div id="carouselExampleFade" class="carousel carousel-fade w-50" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="https://www.tutorialspoint.com/bootstrap/images/slide1.png"
                                alt="">
                        </div>

                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://www.tutorialspoint.com/bootstrap/images/slide2.png"
                                alt="">
                        </div>

                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://www.tutorialspoint.com/bootstrap/images/slide3.png"
                                alt="">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>

                    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div> -->
            </div>
        </div>

        <!-- What we do -->
        <div class="mb-5">
            <section id="what-we-do">
                <div class="container-fluid">
                    <h2 class="section-title mb-2 h1">What we do</h2>
                    <p class="text-center text-muted h5"> We support you every step of the way.</p>
                    <div class="row mt-5">
                        <div class="col-md-6 col-lg-4 col-xl-4">
                            <div class="card">
                                <div class="card-block block-1">
                                    <h3 class="card-title">Medical History</h3>
                                    <p class="card-text">The system requires the patient to enter his medical history,
                                        previous examination
                                        chronic diseases, previous surgeries, if any, and ongoing medications. .</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-4">
                            <div class="card">
                                <div class="card-block block-2">
                                    <h3 class="card-title">Choosing Doctor</h3>
                                    <p class="card-text"> doctor is chosen according to the patient`s condition
                                        ,according
                                        to the specialty
                                        and patient`s disease condition.</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-4">
                            <div class="card">
                                <div class="card-block block-3">
                                    <h3 class="card-title">Following Patients</h3>
                                    <p class="card-text">system provides a way that the doctor cam follow up
                                        her patients throughout the website..</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-4">
                            <div class="card">
                                <div class="card-block block-4">
                                    <h3 class="card-title">View and Manage Health Records</h3>
                                    <p class="card-text">View your current vitals, immunizations,
                                        and other important health information.</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-4">
                            <div class="card">
                                <div class="card-block block-5">
                                    <h3 class="card-title">Manage Your Profile</h3>
                                    <p class="card-text"> update your login information and insurance information.</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-4">
                            <div class="card">
                                <div class="card-block block-6">
                                    <h3 class="card-title">Saving Time </h3>
                                    <p class="card-text"> Saving time for find the best doctor.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- /Services section -->
    </div>
    <!-- </div> -->
</template>
<script>
 export default {
     data() {
         return {
             user_id: this.$userId,
             flag: null,
         };
     },
     methods: {
         getUser() {
             axios.get('http://localhost:8000/api/get-user/' + this.user_id)
                 .then((response) => {
                     console.log(response.data);
                     if (response.data.type == 'Doctor') {
                         this.flag = 0;
                     } else {
                         flag = 1;
                     }
                 })
         },
     },
     created() {
         this.getUser();
     },
 };
 </script>