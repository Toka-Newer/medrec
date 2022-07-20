<template>
    <div>
        <component :is="'style'">
            .card {
            box-shadow: none;
            }
            @media(min-width:767px){
            .btn-responsive-nav:hover {
            background-color: transparent;
            border: 2px solid #4b88c7 !important;
            color: #4b88c7 !important;
            }
            }
            @media all and (min-width:992px) {
            .header .navbar-nav > .nav-item > .nav-link{
            line-height: 90px;
            color: #4b88c7;
            font-size: 20px;
            padding: 0 20px;
            }
            }
            @media(min-width:992px) and (max-width:1200px){
            .header .navbar-nav > .nav-item > .nav-link{
            line-height: 90px;
            color: #4b88c7;
            font-size: 16px;
            padding: 0 14px;
            }
            }
            @media all and (max-width:991px) {
            .btn-responsive-nav {
            background-color: transparent;
            border: 2px solid #4b88c7;
            color: #4b88c7;
            }
            header.colored .btn-responsive-nav {
            background-color: transparent;
            border: 2px solid #4b88c7;
            color: #4b88c7;
            }
            }
            @media (min-width: 1788px) and (max-width: 2560px){
            .header .navbar{
            margin-left: 13%;
            }
            }
            @media all and (max-width:767px) {
            .btn-responsive-nav {
            background-color: transparent;
            border: 2px solid #4b88c7;
            color: #4b88c7;
            }
            #searchBox.active{
            width: 250px !important;
            }
            }
            @media (max-width: 575.98px) {
            .info {
            margin: 4%;
            margin-bottom: 2%;
            }
            }
            @media (max-width: 575.98px) {
            .info {
            margin: 4%;
            margin-bottom: 2%;
            }

            .first {
            padding: 0 15px !important;
            }
            }
        </component>
        <div class="main">
            <div class="container" style="margin-top: 10%;">
                <form method="post">
                    <div class="row">
                        <div class="col-lg-4 col-md-5">
                            <div class="card-body profile-img">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <img v-bind:src="doctor.photo" alt="Admin"
                                        class="rounded-circle" width="150">
                                    <!-- only to doctor         -->
                                    <!-- <div class="file btn btn-lg btn-primary">
                                        Change Photo
                                        <input type="file" name="file" />
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-7">
                            <div id="doc" class="profile-head">
                                <h4 class="mb-1">
                                    Dr: {{ doctor.user.name }}
                                </h4>
                                <h6 class="mb-3">
                                    {{ doctor.department.department }}

                                </h6>
                                <!-- <p class="proile-rating">RANKINGS : <span>8/5</span></p> -->
                                <p class="mb-4">{{ doctor.info }}</p>

                                <ul class="nav nav-tabs" id="myTab" role="tablist">

                                    <!-- <li class="nav-item">
                                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Services</a>
                                                    </li> -->
                                </ul>
                            </div>
                            <!-- <a href="index.html" class="logo">
                                                <img src="images/health1.png" alt="...">
                                            </a>     -->
                        </div>


                        <!-- <div class="col-md-2">
                                            <img src="images/health1.png" alt="...">
                                            <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>
                                        </div> -->
                    </div>
                </form>

                <div class="row">
                    <div class="col-md-4">
                        <div id="doc2" class="profile-work">

                            <p class="mt-4 mb-2">Work Hour</p>
                            <h6>
                                from {{ doctor.workFrom }} am to {{ doctor.workTo }} pm

                            </h6>

                            <p class="mt-4 mb-2">Reservation Price</p>
                            <h6>
                                {{ doctor.price }} egp
                            </h6>


                            <p class="mt-4 mb-2">Address</p>
                            <h6 class="my-4">
                                {{ doctor.address }}
                            </h6>
                            <!--Google map-->
                            <!-- <div class="map-responsive my-4">
                                <iframe
                                    src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                    width="100%" height="auto" frameborder="0" style="border:0" allowfullscreen>
                                </iframe>
                            </div> -->
                        </div>
                    </div>
                    <div class="card info col-md-8">
                        <div id="doc3" class="card-body">
                            <div class="row">
                                <hr>

                                <div class="col-md-3">
                                    <h6 class="mb-0 inform">Full Name</h6>
                                </div>
                                <div class="col-md-9 text-secondary">
                                    Dr: {{ doctor.user.name }}
                                </div>
                            </div>
                            <hr>
                            <!-- <div class="row">
                                                    <div class="col-md-3">
                                                        <h6 class="mb-0 inform">Email</h6>
                                                    </div>
                                                    <div class="col-md-9 text-secondary">
                                                        fip@jukmuh.al
                                                    </div>
                                                </div>
                                                <hr> -->
                            <div class="row">
                                <div class="col-md-3">
                                    <h6 class="mb-0 inform">Phone</h6>
                                </div>
                                <div class="col-md-9 text-secondary">
                                    {{ doctor.phone }}
                                </div>
                            </div>
                            <hr>
                            <!-- <div class="row">
                        <div class="col-md-3">
                            <h6 class="mb-0 inform">Mobile</h6>
                        </div>
                        <div class="col-md-9 text-secondary">
                            {{mobile}}
                        </div>
                    </div>
                    <hr> -->
                            <!-- <div class="row">
                                                    <div class="col-md-3">
                                                        <h6 class="mb-0 inform">Address</h6>
                                                    </div>
                                                    <div class="col-md-9 text-secondary">
                                                        Bay Area, San Francisco, CA
                                                    </div>
                                                </div>
                                                <hr> -->
                            <div class="row">
                                <div class="col-md-3">
                                    <h6 class="mb-0 inform">Gender</h6>
                                </div>
                                <div class="col-md-9 text-secondary">
                                    {{ doctor.user.gender }}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-3">
                                    <h6 class="mb-0 inform">Age</h6>
                                </div>
                                <div class="col-md-9 text-secondary">
                                    {{ doctor.user.birthDate }} years
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-3">
                                    <h6 class="mb-0 inform">Department</h6>
                                </div>
                                <div class="col-md-9 text-secondary">
                                    {{ doctor.department.department }}

                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-3">
                                    <h6 class="mb-0 inform">SKILLS</h6>
                                </div>
                                <div class="col-md-9 text-secondary">
                                    <ul>
                                        <li v-for="skill in doctor.skill" :key="skill.id">
                                            {{ skill }}
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- services -->
                <div class="seventh-content">
                    <h2 class="mb-5" style="color: #4b88c7;">Services</h2>
                    <div class="master row mb-5" style="margin: auto;">
                        <div class="chef col-md-3" v-for="(serviceTitle,index) in doctor.serviceTitle" :key="index">
                            <h3 class="john mb-3">{{serviceTitle}}</h3>
                            <p class="owner">{{doctor.serviceBody[index]}}</p>
                            <!-- {{-- <button @click="show = !show">Toggle</button>
                            <Transition>
                              <p v-if="show">hello</p>
                            </Transition> --}} -->
                        </div>
                        <!-- <div class="chef col-md-3">
                            <h3 class="rebeca mb-3">Strabismus Surgery</h3>
                            <p class="head">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                        </div>
                        <div class="chef col-md-3">
                            <h3 class="kharl mb-3">Leaser</h3>
                            <p class="chef1">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                        </div>
                        <div class="chef col-md-3">
                            <h3 class="luke mb-3">Mako</h3>
                            <p class="chef2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            doctor: [],
            doctor_id: null,
        };
    },
    methods: {
        // get id from link
        getIDfromURL() {
            console.log(window.location.pathname.split('/')[2])
            this.doctor_id = window.location.pathname.split('/')[2]
            return window.location.pathname.split('/')[2];
        },
        getAge(dateString) {
            var today = new Date();
            var birthDate = new Date(dateString);
            var age = today.getFullYear() - birthDate.getFullYear();
            var m = today.getMonth() - birthDate.getMonth();
            if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
                age--;
            }
            return age;
        },
        getDoctor() {
            axios.get('http://localhost:8000/api/doctors/get-doctor/' + this.doctor_id)
                .then((response) => {
                    console.log(response.data);
                    this.doctor = response.data;
                    this.doctor.user.birthDate = this.getAge(this.doctor.user.birthDate)
                })
        },
    },
    created() {
        this.getIDfromURL();
        this.getDoctor();
    },
};
</script>

