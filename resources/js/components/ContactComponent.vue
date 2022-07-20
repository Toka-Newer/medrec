<template>
<div>
    <component :is="'style'">
        @media(max-width:1250px){
        .home-slider .slider-img {
        width: 90%;
        }
        @media(max-width:1200px){
        .slider-pattern{
        width: 60%;
        }
        .home-slider {
        position: static;
        height: auto;
        min-height: auto;
        }

        .home-slider .slider-img {
        width: 90%;
        left: 0;
        top: 15%;
        }
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
                            <img src="images/contact.png">
                        </div>
                        <!--End layer-->
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
                                    <span>CONTACT<i class="fas fa-angle-right"></i></span>
                                </p>
                                <h2 class="us h1">Contact us</h2>
                            </div>
                        </div>
                    </div>
                    <!--End row-->
                </div><!-- End container -->
            </section>
            <!--End home-slider-->
        </div>

        <!--		contact us-->
        <div id="us">
            <div class="">
                <div class="us-content">
                    <!-- <div class="about row">
                        <div class="col-md-4 address text-center fl">
                            <i class="far fa-map"></i>
                            <h2>Address:</h2>
                            <p>198 West 21th Street, Suite 721 New York NY 10016</p>
                        </div>
                        <div class="col-md-4 phone text-center fl">
                            <i class="fas fa-mobile-alt"></i>
                            <h2>Phone:</h2>
                            <p>+ 1235 2355 98</p>
                        </div>
                        <div class="col-md-4 email text-center fl">
                            <i class="far fa-envelope"></i>
                            <h2>Email:</h2>
                            <p>info@yoursite.com</p>
                        </div>
                    </div> -->
                    <div class="if text-center">
                        <h3>If you got any questions <br> please do not hesitate to send us a message</h3>
                        <div class="container">
                                <div class="row text-center">

                                    <!-- Team item1 -->
                                    <div class="col-xl-3 col-sm-6 mb-5">
                                        <div class="bg-white rounded shadow-sm py-5 px-4"><img
                                                src="images\toto.jpeg" alt=""
                                                width="100%"
                                                class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                                            <h5 class="mb-0">Toka Newer</h5><span
                                                class="small text-uppercase text-muted">CS Department</span>
                                            <ul class="social mb-0 list-inline mt-3">
                                                <li class="list-inline-item"><a href="#" class="social-link"><i
                                                            class="fa fa-facebook-f"></i></a></li>
                                                <li class="list-inline-item"><a href="#" class="social-link"><i
                                                            class="fa fa-twitter"></i></a></li>
                                                <li class="list-inline-item"><a href="#" class="social-link"><i
                                                            class="fa fa-google  "></i></a></li>
                                                <li class="list-inline-item"><a href="#" class="social-link"><i
                                                            class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </div><!-- End -->

                                    <!-- Team item2 -->
                                    <div class="col-xl-3 col-sm-6 mb-5">
                                        <div class="bg-white rounded shadow-sm py-5 px-4"><img src="images\rrr.jpg"
                                                alt="" width="100%"
                                                class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                                            <h5 class="mb-0">Rana EL-Shorbagy</h5><span
                                                class="small text-uppercase text-muted">IT Department</span>
                                            <ul class="social mb-0 list-inline mt-3">
                                                <li class="list-inline-item"><a href="#" class="social-link"><i
                                                            class="fa fa-facebook-f"></i></a></li>
                                                <li class="list-inline-item"><a href="#" class="social-link"><i
                                                            class="fa fa-twitter"></i></a></li>
                                                <li class="list-inline-item"><a href="#" class="social-link"><i
                                                            class="fa fa-google"></i></a></li>
                                                <li class="list-inline-item"><a href="#" class="social-link"><i
                                                            class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </div><!-- End -->

                                    <!-- Team item3 -->
                                    <div class="col-xl-3 col-sm-6 mb-5">
                                        <div class="bg-white rounded shadow-sm py-5 px-4"><img src="images\MM.jpg"
                                                alt="" width="100%"
                                                class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                                            <h5 class="mb-0">Mariam EL-Hadad</h5><span
                                                class="small text-uppercase text-muted">CS Department</span>
                                            <ul class="social mb-0 list-inline mt-3">
                                                <li class="list-inline-item"><a href="#" class="social-link"><i
                                                            class="fa fa-facebook-f"></i></a></li>
                                                <li class="list-inline-item"><a href="#" class="social-link"><i
                                                            class="fa fa-twitter"></i></a></li>
                                                <li class="list-inline-item"><a href="#" class="social-link"><i
                                                            class="fa fa-google"></i></a></li>
                                                <li class="list-inline-item"><a href="#" class="social-link"><i
                                                            class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </div><!-- End -->

                                    <!-- Team item4 -->
                                    <div class="col-xl-3 col-sm-6 mb-5">
                                        <div class="bg-white rounded shadow-sm py-5 px-4"><img src="images\yyy.jpg"
                                                alt="" width="100%"
                                                class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                                            <h5 class="mb-0">Yassmen EL-Madawy</h5><span
                                                class="small text-uppercase text-muted">CS Department </span>
                                            <ul class="social mb-0 list-inline mt-3">
                                                <li class="list-inline-item"><a href="#" class="social-link"><i
                                                            class="fa fa-facebook-f"></i></a></li>
                                                <li class="list-inline-item"><a href="#" class="social-link"><i
                                                            class="fa fa-twitter"></i></a></li>
                                                <li class="list-inline-item"><a href="#" class="social-link"><i
                                                            class="fa fa-google"></i></a></li>
                                                <li class="list-inline-item"><a href="#" class="social-link"><i
                                                            class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </div><!-- End -->
                                </div>
                            </div>
                    </div>
                    <div class="map text-center map-responsive">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d13756.122347993205!2d30.93095175992718!3d30.463571733021404!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2seg!4v1568401212784!5m2!1sen!2seg"
                            width="920" height="500" frameborder="0" style="border:0;" allowfullscreen="false"></iframe>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    </div>
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