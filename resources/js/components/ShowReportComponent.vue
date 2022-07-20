<template>
    <div>
        <component :is="'style'">
            @media(min-width:767px){
            .btn-responsive-nav:hover {
            background-color: transparent;
            border: 2px solid #4b88c7 !important;
            color: #4b88c7 !important;
            }
            }
            @media all and (max-width:767px) {
            .btn-responsive-nav {
            background-color: transparent;
            border: 2px solid #4b88c7 !important;
            color: #4b88c7 !important;
            }
            #searchBox.active{
            width: 250px !important;
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
            margin-left: 10%;
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
                <div class="row mb-3">

                    <div class="col-md-4">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img v-bind:src="patient.photo" alt="Admin" class="rounded-circle" width="150">
                                <div class="mt-3">
                                    <h4 class="mb-3">{{ moment(surgery.created_at).format("DD-MM-YYYY") }}</h4>
                                    <button v-if="flag" class="btn btn-outline-primary"><a class="profile" href="/EditPatientProfile">
                                            Profile
                                        </a></button>
                                    <button v-else class="btn btn-outline-primary"><a class="profile" :href='"/PatientProfile/" + patient.id'>
                                            Profile
                                        </a></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card info col-md-8">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h6 class="mb-0 inform">Full Name</h6>
                                        </div>
                                        <div class="col-md-8 text-secondary">
                                            {{ patient.user.name }}
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h6 class="mb-0 inform">Email</h6>
                                        </div>
                                        <div class="col-md-8 text-secondary">
                                            {{ patient.user.email }}
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h6 class="mb-0 inform">Phone</h6>
                                        </div>
                                        <div class="col-md-8 text-secondary">
                                            {{ patient.phone }}
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h6 class="mb-0 inform">Birth Date</h6>
                                        </div>
                                        <div class="col-md-8 text-secondary">
                                            {{ patient.user.birthDate }}
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h6 class="mb-0 inform">Address</h6>
                                        </div>
                                        <div class="col-md-8 text-secondary">
                                            {{ patient.address }}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h6 class="mb-0 inform">Job</h6>
                                        </div>
                                        <div class="col-md-8 text-secondary">
                                            {{ patient.job }}
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h6 class="mb-0 inform">National ID</h6>
                                        </div>
                                        <div class="col-md-8 text-secondary">
                                            {{ patient.user.nationalID }}
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h6 class="mb-0 inform">Blood Type</h6>
                                        </div>
                                        <div class="col-md-8 text-secondary">
                                            {{ patient.bloodType }}
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h6 class="mb-0 inform">Height</h6>
                                        </div>
                                        <div class="col-md-8 text-secondary">
                                            {{ patient.height }}
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h6 class="mb-0 inform">Weight</h6>
                                        </div>
                                        <div class="col-md-8 text-secondary">
                                            {{ patient.weight }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div>
            <form method="post" @submit.prevent="onSubmit">
                <div class="card pt-3 panel container">
                    <div class="form-group panel">
                        <div class="panel-heading">
                            <span class="panel-icon">
                                <i class="fa fa-star pr-2"></i>
                            </span>
                            <span class="panel-title"> Operation title </span>
                        </div>
                        <div class="form-group my-3 shadow-textarea">
                            <input type="text" class="form_control" placeholder="cold" v-model="surgery.surgeryTitle"
                                disabled>
                        </div>
                    </div>
                    <div class="form-group panel">
                        <div class="panel-heading">
                            <span class="panel-icon">
                                <i class="fa fa-star pr-2"></i>
                            </span>
                            <span class="panel-title">Pre-Op Diagnosis</span>
                        </div>
                        <div class="form-group my-3 shadow-textarea">
                            <!-- <label for="exampleFormControlTextarea6"></label> -->
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                placeholder="Write something here..." v-model="surgery.preOperation"
                                disabled></textarea>
                            <!-- <textarea class="form-control z-depth-1" id="exampleFormControlTextarea6" rows="3"
                            placeholder="Write something here..."></textarea> -->
                        </div>
                    </div>
                    <div class="form-group panel">
                        <div class="panel-heading">
                            <span class="panel-icon">
                                <i class="fa fa-star pr-2"></i>
                            </span>
                            <span class="panel-title">Post-Op Diagnosis</span>
                        </div>
                        <div class="form-group my-3 shadow-textarea">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                placeholder="Write something here..." v-model="surgery.postOperation"
                                disabled></textarea>
                        </div>
                    </div>
                    <div class="form-group panel">
                        <div class="panel-heading">
                            <span class="panel-icon">
                                <i class="fa fa-star pr-2"></i>
                            </span>
                            <span class="panel-title">Risks</span>
                        </div>
                        <div class="form-group my-3 shadow-textarea">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                placeholder="Write something here..." v-model="surgery.risks" disabled></textarea>
                        </div>
                    </div>
                    <!-- <button class="form-group" type="submit" v-on:click="submit()">Submit</button> -->
                </div>
            </form>
        </div>
    </div>
</template>
<script>
import moment from "moment";
export default {
    data() {
        return {
            moment: moment,
            user_id: this.$userId,
            user: [],
            flag: null,
            patient_id: null,
            surgery_id: null,
            surgery: [],
            patient: [],
            patientData: [],
            imgSrc: 'https://bootdey.com/img/Content/avatar/avatar7.png',
        };
    },
    methods: {
        // get id from link
        getIDfromURL() {
            console.log(window.location.pathname.split('/')[2])
            this.surgery_id = window.location.pathname.split('/')[2]
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
        getUser() {
            console.log(this.user_id);
            axios.get('http://localhost:8000/api/get-user/' + this.user_id)
                .then((response) => {
                    console.log(response.data)
                    this.user = response.data;
                    if(this.user.type == 'Patient'){
                        flag = 1;
                    }
                })
        },
        getSurgery() {
            axios.get('http://localhost:8000/api/surgeries/get-surgery/' + this.surgery_id)
                .then((response) => {
                    console.log(response.data.surgery);
                    this.surgery = response.data.surgery;
                    axios.get('http://localhost:8000/api/patients/get-user/' + this.surgery.patient_id)
                        .then((response) => {
                            console.log(response.data.user)
                            this.patient = response.data.user;
                            this.patient.user.birthDate = this.getAge(this.patient.user.birthDate)
                        })
                })
        },
    },
    created() {
        this.getIDfromURL();
        this.getSurgery();
        this.getUser();
    },
    computed: {
    }
};
</script>
