<template>
    <div>
        <component :is="'style'">
            .info .inform {
            color: #4b88c7;
            }
            .ksm ul {
            overflow-y: scroll;
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
            }
        </component>
        <div class="main">
            <div class="container" style="margin-top: 10%;">
                <div class="row mb-3">
                    <div class="col-md-4">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img v-bind:src="doctor.photo" alt="Admin" class="rounded-circle" width="150">
                                <div class="mt-3">
                                    <h4 class="mb-3">{{ doctor.user.name }}</h4>
                                    <!-- <p class="text-secondary mb-1">Full Stack Developer</p>
                                              <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p> -->
                                    <!-- <button class="btn btn-primary">Follow</button> -->
                                    <!-- <button class="btn btn-outline-primary"> <a class="profile" href="#"> Profile </a> </button> -->
                                    <button class="btn btn-outline-primary"> <a class="profile"
                                            :href="'/DoctorDetails/' + doctor.id">
                                            Profile </a> </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card info col-md-8">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <h6 class="mb-0 inform">Full Name</h6>
                                </div>
                                <div class="col-md-9 text-secondary">
                                    {{ doctor.user.name }}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-3">
                                    <h6 class="mb-0 inform">Email</h6>
                                </div>
                                <div class="col-md-9 text-secondary">
                                    {{ doctor.user.email }}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-3">
                                    <h6 class="mb-0 inform">Phone</h6>
                                </div>
                                <div class="col-md-9 text-secondary">
                                    {{ doctor.phone }}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-3">
                                    <h6 class="mb-0 inform">Age</h6>
                                </div>
                                <div class="col-md-9 text-secondary">
                                    {{ doctor.user.birthDate }}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-3">
                                    <h6 class="mb-0 inform">Address</h6>
                                </div>
                                <div class="col-md-9 text-secondary">
                                    {{ doctor.address }}
                                </div>
                            </div>
                            <!-- <hr> -->
                            <!-- <div class="row">
                                            <div class="col-md-12">
                                              <a class="btn btn-info " target="__blank" href="https://www.bootdey.com/snippets/view/profile-edit-data-and-skills">Edit</a>
                                            </div>
                                          </div> -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">

                    <div class="col-md-8">
                        <h3>Diagnosis</h3>
                        <div class="row my-3">
                            <div class="col-xl-6 col-sm-6 my-3" v-for="dig in diagnosis" :key="dig.id">
                                <a :href="'/ShowDiganousDoctor/' + dig.id" style="color: #000">
                                    <div class="card">
                                        <div class="card-body hvr-shadow">
                                            <div class="card-title">
                                                <i class="fa fa-star pr-2"
                                                    style="font-size: 125%; color: #4b88c7 !important;"></i>
                                                Diagnosis
                                            </div>
                                            <div>
                                                <div class="hvr-shadow text-center fl d-flex flex-column align-items-center text-center border"
                                                    style="padding: 5%; border-radius: 7%;">
                                                    <p>Date</p> <span> {{ moment(dig.created_at).format("DD-MM-YYYY") }}
                                                    </span>
                                                </div>
                                                <div class="fl d-flex flex-column align-items-center text-center"
                                                    style="padding: 8%;">
                                                    {{ dig.disease_title }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row my-3">
                            <h3>Surgeries</h3>
                            <div class="col-md-12 my-3" v-for="Surgery in surgeries" :key="Surgery.id">
                                <a :href="'/ShowReport/' + Surgery.id" style="color: #000">
                                    <div class="card">
                                        <div class="card-body hvr-shadow">
                                            <div class="card-title">
                                                <i class="fa fa-star pr-2"
                                                    style="font-size: 125%; color: #4b88c7 !important;"></i>
                                                Surgeries
                                            </div>
                                            <div>
                                                <div class="hvr-shadow text-center fl d-flex flex-column align-items-center text-center border"
                                                    style="padding: 5%; border-radius: 7%;">
                                                    <p>Date</p> <span> {{
                                                            moment(Surgery.created_at).format("DD-MM-YYYY")
                                                    }}
                                                    </span>
                                                </div>
                                                <div class="fl d-flex flex-column align-items-center text-center"
                                                    style="padding: 8%;">
                                                    {{ Surgery.surgeryTitle }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
            patient_id: null,
            doctor_id: null,
            patient: [],
            doctor: [],
            allDiagnosis: [],
            diagnosis: [],
            surgeries: [],
        };
    },
    methods: {
        // get id from link
        getIDfromURL() {
            this.doctor_id = window.location.pathname.split('/')[2];
            this.patient_id = window.location.pathname.split('/')[3];
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
            axios.get('http://localhost:8000/api/doctors/get-doctor-by-user/' + this.doctor_id)
                .then((response) => {
                    this.doctor = response.data.doctor
                    this.doctor.user.birthDate = this.getAge(this.doctor.user.birthDate)
                    console.log(this.doctor)
                })
        },
        getPatient() {
            axios.get('http://localhost:8000/api/diagnosis/get-diagnosis-by-patient/' + this.patient_id)
                .then((response) => {
                    console.log(response.data.data)
                    this.allDiagnosis = response.data.data;
                    console.log(this.doctor_id)
                    for (var i = 0; i < this.allDiagnosis.length; i++) {
                        if (this.allDiagnosis[i].doctor_id == this.doctor.id) {
                            this.diagnosis.push(this.allDiagnosis[i]);
                        }
                    }
                    console.log(this.diagnosis)
                })
            axios.get('http://localhost:8000/api/surgeries/get-surgery-by-patient/' + this.patient_id)
                .then((response) => {
                    console.log(response.data.data);
                    this.surgeries = response.data.data;
                })
        },
        // getDiagnsis() {

        // },
    },
    created() {
        this.getIDfromURL();
        this.getDoctor();
        this.getPatient();
        // this.getDiagnsis();
    },
    computed: {
    },
};
</script>
