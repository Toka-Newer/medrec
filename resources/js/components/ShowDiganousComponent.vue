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

        <div id="app1" class="main">
            <div class="container" style="margin-top: 10%;">
                <div class="row mb-3">

                    <div class="col-md-4">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img v-bind:src="patient.photo" alt="Admin"
                                    class="rounded-circle" width="150">
                                <div id="app" class="mt-3">
                                    <h4 class="mb-3">
                                        {{ moment(diagnosis.created_at).format("DD-MM-YYYY") }}
                                    </h4>
                                    <!-- <p class="text-secondary mb-1">Full Stack Developer</p>
                                              <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p> -->
                                    <!-- <button class="btn btn-primary">Follow</button> -->
                                    <button class="btn btn-outline-primary"><a class="profile" href='/EditPatientProfile'>
                                            Profile </a></button>
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
            <div>
                <form method="POST" @submit.prevent="onSubmit">
                    <div class="card pt-3 panel container">
                        <div class="form-group panel">
                            <div class="panel-heading">
                                <span class="panel-icon">
                                    <i class="fa fa-star pr-2"></i>
                                </span>
                                <span class="panel-title"> Illness title </span>
                            </div>
                            <div class="form-group my-3 shadow-textarea">
                                <input type="text" class="form_control" placeholder="cold"
                                    v-model="diagnosis.disease_title" disabled>
                            </div>
                        </div>
                        <div class="form-group panel">
                            <div class="panel-heading">
                                <span class="panel-icon">
                                    <i class="fa fa-star pr-2"></i>
                                </span>
                                <span class="panel-title"> Diagnosis</span>
                            </div>
                            <div class="form-group my-3 shadow-textarea">
                                <!-- <label for="exampleFormControlTextarea6"></label> -->
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                    placeholder="Write something here..." v-model="diagnosis.diagnosis"
                                    disabled></textarea>
                                <!-- <textarea class="form-control z-depth-1" id="exampleFormControlTextarea6" rows="3"
                                placeholder="Write something here..."></textarea> -->
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="panel">
                                <div class="panel-heading">
                                    <span class="panel-icon">
                                        <i class="fa fa-pencil pr-2"></i>
                                    </span>
                                    <span class="panel-title">Drugs</span>
                                </div>
                                <div class="scrollme">
                                    <table class="_table table table-hover table-responsive">
                                        <thead>
                                            <tr>
                                                <th scope="col">Medicine</th>
                                                <th scope="col">Strength</th>
                                                <!-- <th scope="col">Company Name</th> -->
                                                <th scope="col">Discription</th>
                                                <th scope="col">Period</th>
                                                <!-- <th scope="col" width="50px">
                                                    <div class="action_container">
                                                        <button type="button" class="success"
                                                            onclick="create_tr('table_body')">
                                                            <i class="fa fa-plus"></i>
                                                        </button>
                                                    </div>
                                                </th> -->
                                            </tr>
                                        </thead>
                                        <tbody id="table_body" v-for="med in diagnosis.medicines" :key="med.id">
                                            <tr id="strenghs">
                                                <td>
                                                    <input type="text" class="form_control" v-model="med.brandName"
                                                        disabled />
                                                    <!-- list="medicine"/> -->
                                                    <!-- <input type="text" class="form_control" v-model="med" list="medicine"/> -->
                                                    <!-- <b-form-datalist id="medicine">
                                                        <option v-for="(med, index) in medicine" :key="index">
                                                            {{ med.brandName }}
                                                        </option>
                                                    </b-form-datalist> -->
                                                    <!-- <datalist id="medicine">
                                                        <option v-for="med in medicine" :key="med.id"
                                                            v-bind:value="med.brandName" v-bind:label="med.brandName">
                                                        </option>
                                                    </datalist> -->
                                                </td>
                                                <td>
                                                    <input type="text" class="form_control" v-model="med.strength"
                                                        disabled />
                                                    <!-- list="strengh" /> -->
                                                    <!-- <datalist id="strengh">
                                                        <option v-for="med in medicine" :key="med.id"
                                                            v-bind:value="med.strength" v-bind:label="med.strength">
                                                        </option>
                                                    </datalist> -->
                                                </td>
                                                <!-- <td>
                                                    <input type="text" class="form_control" placeholder="amoun"
                                                        v-model="med.companyName" disabled>
                                                </td> -->
                                                <td>
                                                    <textarea placeholder="Description" class="form-control" rows="1"
                                                        v-model="med.discription" disabled></textarea>
                                                </td>
                                                <td>
                                                    <input type="text" class="form_control" placeholder="week"
                                                        v-model="med.period" disabled>
                                                </td>
                                                <!-- <td>
                                                    <div class="action_container">
                                                        <button type="button" class="danger" onclick="remove_tr(this)">
                                                            <i class="fa fa-close"></i>
                                                        </button>
                                                    </div>
                                                </td> -->
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="form-group">
                            <div class="panel">
                                <div class="panel-heading">
                                    <span class="panel-icon">
                                        <i class="fa fa-trophy pr-2"></i>
                                    </span>
                                    <span class="panel-title"></span>

                                    <span class="panel-title"> X-ray and analyzes </span>
                                </div>
                                 <div class="">
                                              <label for="exampleFormControlFile1"></label>
                                              <input type="file" class="form-control-file" id="exampleFormControlFile1"  multiple>
                                            </div>
                                <div class="controls my-3">
                                    <div class="entry input-group upload-input-group mb-3">
                                        <input class="form-control" name="fields[]" type="file">
                                        <button class="btn btn-upload btn-success btn-add" type="button">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <div class="form-group">
                            <div class="panel">
                                <div class="panel-heading">
                                    <span class="panel-icon">
                                        <i class="fas fa-sticky-note pr-2"></i>
                                    </span>
                                    <span class="panel-title"></span>
                                    <span class="panel-title"> Notes </span>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-6 mb-3">
                                        <textarea placeholder="Dr notes" class="form-control" rows="3"
                                            v-model="diagnosis.doctor_notes" disabled></textarea>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <textarea placeholder="patient notes" class="form-control" rows="3" type="text"
                                            style="background: transparent;" v-model="diagnosis.patient_notes"
                                            :disabled="!isEditing" :class="{ view: !isEditing }"></textarea>
                                        <div class="mt-2">
                                            <button class="btn btn-outline-primary mb-3 "
                                                @click="isEditing = !isEditing" v-if="!isEditing">
                                                Edit
                                            </button>
                                            <button class="btn btn-outline-primary mb-3" @click="save"
                                                v-else-if="isEditing">
                                                Save
                                            </button>
                                            <button class="btn btn-outline-primary mb-3" v-if="isEditing"
                                                @click="isEditing = false">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <button class="form-group" type="submit" v-on:click="submit()">Submit</button> -->
                    </div>
                </form>
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
            isEditing: false,
            user_id: this.$userId,
            patient_id: null,
            diagnosis_id: null,
            diagnosis: [],
            patient: [],
            patientData: [],
            imgSrc: 'https://bootdey.com/img/Content/avatar/avatar7.png',
            patient_notes: '',
        };
    },
    methods: {
        // get id from link
        getIDfromURL() {
            console.log(window.location.pathname.split('/')[2])
            this.diagnosis_id = window.location.pathname.split('/')[2]
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
        getDiagnosis() {
            axios.get('http://localhost:8000/api/diagnosis/get-diagnosis/' + this.diagnosis_id)
                .then((response) => {
                    console.log('diagnosis')
                    console.log(response.data.diagnosis);
                    this.diagnosis = response.data.diagnosis;
                    axios.get('http://localhost:8000/api/patients/get-user/' + this.diagnosis.patient_id)
                        .then((response) => {
                            console.log(response.data.user)
                            this.patient = response.data.user;
                            this.patient.user.birthDate = this.getAge(this.patient.user.birthDate)
                        })
                })
        },
        getPatient() {

        },
        save() {
            axios.post('http://localhost:8000/api/diagnosis/update-diagnosis-patient/' + this.diagnosis_id,
                {
                    patient_notes: this.diagnosis.patient_notes
                }
            )
                .then((response) => {
                    console.log(response)
                })
            this.isEditing = !this.isEditing;
        },
    },
    created() {
        this.getIDfromURL();
        this.getDiagnosis();
        this.getPatient();
    },
    computed: {
    }
};
</script>
