<template>
    <div>
        <component :is="'style'">
            .info .inform {
            color: #4b88c7;
            }
            .ksm ul {
            overflow-y: scroll;
            height: 150px;
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
                                <img v-bind:src="patient.photo" alt="Admin"
                                    class="rounded-circle" width="150">
                                <div id="pat" class="mt-3">
                                    <h4 class="mb-3">{{ user.name }}</h4>
                                    <!-- <p class="text-secondary mb-1">Full Stack Developer</p>
                                              <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p> -->
                                    <!-- <button class="btn btn-primary">Follow</button> -->
                                    <!-- <button class="btn btn-outline-primary"> <a class="profile" href="#"> Profile </a> </button> -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card info col-md-8">
                        <div id="pat1" class="card-body">
                            <button class="btn btn-outline-primary mb-3 " @click="isEditing = !isEditing"
                                v-if="!isEditing">
                                Edit
                            </button>
                            <button class="btn btn-outline-primary mb-3" @click="save" v-else-if="isEditing">
                                Save
                            </button>
                            <button class="btn btn-outline-primary mb-3" v-if="isEditing"
                                @click="isEditing = false">Cancel</button>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h6 class="mb-0 inform">Full Name</h6>
                                        </div>
                                        <div class="col-md-8 text-secondary">
                                            <input type="text" style="background: transparent; border: 0;"
                                                 v-model="user.name" :disabled="!isEditing"
                                                :class="{ view: !isEditing }">
                                            <!-- {{ user.name }} -->
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h6 class="mb-0 inform">Email</h6>
                                        </div>
                                        <div class="col-md-8 text-secondary">
                                            <input type="text" style="background: transparent; border: 0;"
                                                 v-model="user.email" :disabled="!isEditing"
                                                :class="{ view: !isEditing }">
                                            <!-- {{ user.email }} -->
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h6 class="mb-0 inform">Phone</h6>
                                        </div>
                                        <div class="col-md-8 text-secondary">
                                            <input type="text" style="background: transparent; border: 0;"
                                                 v-model="patient.phone" :disabled="!isEditing"
                                                :class="{ view: !isEditing }">
                                            <!-- {{ patient.phone }} -->
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h6 class="mb-0 inform">Birth Date</h6>
                                        </div>
                                        <div class="col-md-8 text-secondary">
                                            <input type="date" style="background: transparent; border: 0;"
                                                 v-model="user.birthDate" :disabled="!isEditing"
                                                :class="{ view: !isEditing }">
                                            <!-- {{ user.birthDate }} -->
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h6 class="mb-0 inform">Address</h6>
                                        </div>
                                        <div class="col-md-8 text-secondary">
                                            <input type="text" style="background: transparent; border: 0;"
                                                 v-model="patient.address" :disabled="!isEditing"
                                                :class="{ view: !isEditing }">
                                            <!-- {{ patient.address }} -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h6 class="mb-0 inform">Job</h6>
                                        </div>
                                        <div class="col-md-8 text-secondary">
                                            <input type="text" style="background: transparent; border: 0;"
                                                 v-model="patient.job" :disabled="!isEditing"
                                                :class="{ view: !isEditing }">
                                            <!-- {{ user.name }} -->
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h6 class="mb-0 inform">National ID</h6>
                                        </div>
                                        <div class="col-md-8 text-secondary">
                                            <input type="text" style="background: transparent; border: 0;"
                                                 v-model="user.nationalID" :disabled="!isEditing"
                                                :class="{ view: !isEditing }">
                                            <!-- {{ user.email }} -->
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h6 class="mb-0 inform">Blood Type</h6>
                                        </div>
                                        <div class="col-md-8 text-secondary">
                                            <input type="text" style="background: transparent; border: 0;"
                                                 v-model="patient.bloodType" :disabled="!isEditing"
                                                :class="{ view: !isEditing }">
                                            <!-- {{ patient.phone }} -->
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h6 class="mb-0 inform">Height</h6>
                                        </div>
                                        <div class="col-md-8 text-secondary">
                                            <input type="text" style="background: transparent; border: 0;"
                                                 v-model="patient.height" :disabled="!isEditing"
                                                :class="{ view: !isEditing }">
                                            <!-- {{ user.birthDate }} -->
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h6 class="mb-0 inform">Weight</h6>
                                        </div>
                                        <div class="col-md-8 text-secondary">
                                            <input type="text" style="background: transparent; border: 0;"
                                                 v-model="patient.weight" :disabled="!isEditing"
                                                :class="{ view: !isEditing }">
                                        </div>
                                    </div>
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
                <div class="row my-3">
                    <div class="col-md-6 my-3">
                        <div class="card">
                            <div class="card-body hvr-shadow">
                                <div class="card-title">
                                    <i class="fa-solid fa-tooth mr-2"
                                        style="font-size: 125%; color: #4b88c7 !important;"></i>
                                    dentistry
                                </div>
                                <div id="pat2" class="ksm">
                                    <ul class="list-group list-group-flush">
                                        <li v-for="(den, index) in dentistryData" :key="index"
                                            class="list-group-item list-group-item-action d-flex align-items-center">
                                            <a :href="'/PatientDiganous/' + den.id"> {{ den.name }} </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 my-3">
                        <div class="card">
                            <div class="card-body hvr-shadow">
                                <div class="card-title">
                                    <i class="fa-solid fa-heart mr-2"
                                        style="font-size: 125%; color: #4b88c7 !important;"></i>
                                    heart disease
                                </div>
                                <div id="pat3" class="ksm">
                                    <ul class="list-group list-group-flush">
                                        <li v-for=" heart in heartDiseaseData" :key="heart.id"
                                            class="list-group-item list-group-item-action d-flex align-items-center">
                                            <a :href="'/PatientDiganous/' + heart.id"> {{ heart.name }} </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 my-3">
                        <div class="card">
                            <div class="card-body hvr-shadow">
                                <div class="card-title">
                                    <i class="fas fa-disease mr-2"
                                        style="font-size: 125%; color: #4b88c7 !important;"></i>
                                    Kidney disease
                                </div>
                                <div id="pat4" class="ksm">
                                    <ul class="list-group list-group-flush">
                                        <li v-for="kidney in kidneyDiseaseData" :key="kidney.id"
                                            class="list-group-item list-group-item-action d-flex align-items-center">
                                            <a :href="'/PatientDiganous/' + kidney.id"> {{ kidney.name }} </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 my-3">
                        <div class="card">
                            <div class="card-body hvr-shadow">
                                <div class="card-title">
                                    <i class="fas fa-disease mr-2"
                                        style="font-size: 125%; color: #4b88c7 !important;"></i>
                                    gland diseases
                                </div>
                                <div id="pat5" class="ksm">
                                    <ul class="list-group list-group-flush">
                                        <li v-for="gland in glandDiseasesData" :key="gland.id"
                                            class="list-group-item list-group-item-action d-flex align-items-center">
                                            <a :href="'/PatientDiganous/' + gland.id"> {{ gland.name }} </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 my-3">
                        <div class="card">
                            <div class="card-body hvr-shadow">
                                <div class="card-title">
                                    <i class="fa-solid fa-brain mr-2"
                                        style="font-size: 125%; color: #4b88c7 !important;"></i>
                                    Brain and nerve diseases
                                </div>
                                <div id="pat6" class="ksm">
                                    <ul class="list-group list-group-flush">
                                        <li v-for="brain in brainDiseasesData" :key="brain.id"
                                            class="list-group-item list-group-item-action d-flex align-items-center">
                                            <a :href="'/PatientDiganous/' + brain.id"> {{ brain.name }} </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 my-3">
                        <div class="card">
                            <div class="card-body hvr-shadow">
                                <div class="card-title">
                                    <i class="fa-solid fa-eye mr-2"
                                        style="font-size: 125%; color: #4b88c7 !important;"></i>
                                    eyes illnesses
                                </div>
                                <div id="pat7" class="ksm">
                                    <ul class="list-group list-group-flush">
                                        <li v-for="eye in eyesIllnessesData" :key="eye.id"
                                            class="list-group-item list-group-item-action d-flex align-items-center">
                                            <a :href="'/PatientDiganous/' + eye.id"> {{ eye.name }} </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 my-3">
                        <div class="card">
                            <div class="card-body hvr-shadow">
                                <div class="card-title">
                                    <i class="fa-solid fa-hand-dots mr-2"
                                        style="font-size: 125%; color: #4b88c7 !important;"></i>
                                    skin desies
                                </div>
                                <div id="pat8" class="ksm">
                                    <ul class="list-group list-group-flush">
                                        <li v-for="skin in skinDiseasesData" :key="skin.id"
                                            class="list-group-item list-group-item-action d-flex align-items-center">
                                            <a :href="'/PatientDiganous/' + skin.id"> {{ skin.name }} </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 my-3">
                        <div class="card">
                            <div class="card-body hvr-shadow">
                                <div class="card-title">
                                    <i class="fa-solid fa-hand-holding-medical mr-2"
                                        style="font-size: 125%; color: #4b88c7 !important;"></i>
                                    Psychiatric illness
                                </div>
                                <div id="pat9" class="ksm">
                                    <ul class="list-group list-group-flush">
                                        <li v-for="Psychiatric in psychiatricIllnessData" :key="Psychiatric.id"
                                            class="list-group-item list-group-item-action d-flex align-items-center">
                                            <a :href="'/PatientDiganous/' + Psychiatric.id"> {{ Psychiatric.name }} </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 my-3">
                        <div class="card">
                            <div class="card-body hvr-shadow">
                                <div class="card-title">
                                    <i class="fa-solid fa-ribbon mr-2"
                                        style="font-size: 125%; color: #4b88c7 !important;"></i>
                                    tumors
                                </div>
                                <div id="pat10" class="ksm">
                                    <ul class="list-group list-group-flush">
                                        <li v-for="tumor in tumorsData" :key="tumor.id"
                                            class="list-group-item list-group-item-action d-flex align-items-center">
                                            <a :href="'/PatientDiganous/' + tumor.id"> {{ tumor.name }} </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 my-3">
                        <div class="card">
                            <div class="card-body hvr-shadow">
                                <div class="card-title">
                                    <i class="fas fa-disease mr-2"
                                        style="font-size: 125%; color: #4b88c7 !important;"></i>
                                    Ear, nose and throat diseases
                                </div>
                                <div id="pat11" class="ksm">
                                    <ul class="list-group list-group-flush">
                                        <li v-for="ent in earNoseThroatDiseasesData" :key="ent.id"
                                            class="list-group-item list-group-item-action d-flex align-items-center">
                                            <a :href="'/PatientDiganous/' + ent.id"> {{ ent.name }} </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 my-3">
                        <div class="card">
                            <div class="card-body hvr-shadow">
                                <div class="card-title">
                                    <i class="fas fa-disease mr-2"
                                        style="font-size: 125%; color: #4b88c7 !important;"></i>
                                    Internal diseases and digestive system
                                </div>
                                <div id="pat12" class="ksm">
                                    <ul class="list-group list-group-flush">
                                        <li v-for="internal in internalDiseasesDigestiveSystemData" :key="internal.id"
                                            class="list-group-item list-group-item-action d-flex align-items-center">
                                            <a :href="'/PatientDiganous/' + internal.id"> {{ internal.name }} </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 my-3">
                        <div class="card">
                            <div class="card-body hvr-shadow">
                                <div class="card-title">
                                    <i class="fa-solid fa-user-doctor mr-2"
                                        style="font-size: 125%; color: #4b88c7 !important;"></i>
                                    Obstetrics and gynecology
                                </div>
                                <div id="pat13" class="ksm">
                                    <ul class="list-group list-group-flush">
                                        <li v-for="obs in obstetricsGynecologyData" :key="obs.id"
                                            class="list-group-item list-group-item-action d-flex align-items-center">
                                            <a :href="'/PatientDiganous/' + obs.id"> {{ obs.name }} </a>
                                        </li>
                                    </ul>
                                </div>
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
            isEditing: false,
            user: [],
            patient: {},
            user_id: this.$userId,
            patient_id: null,
            diagnosis: [],
            surgeries: [],
            departments: [],
            dentistry: [],
            dentistryData: [],
            heartDisease: [],
            heartDiseaseData: [],
            kidneyDisease: [],
            kidneyDiseaseData: [],
            glandDiseases: [],
            glandDiseasesData: [],
            brainDiseases: [],
            brainDiseasesData: [],
            eyesIllnesses: [],
            eyesIllnessesData: [],
            skinDiseases: [],
            skinDiseasesData: [],
            psychiatricIllness: [],
            psychiatricIllnessData: [],
            tumors: [],
            tumorsData: [],
            earNoseThroatDiseases: [],
            earNoseThroatDiseasesData: [],
            internalDiseasesDigestiveSystem: [],
            internalDiseasesDigestiveSystemData: [],
            obstetricsGynecology: [],
            obstetricsGynecologyData: [],
            changeUser: [{
                name: '',
                email: '',
                birthDate: '',
                nationalID: '',
            }],
            changePatient: [{
                phone: '',
                address: '',
                bloodType: '',
                height: '',
                weight: '',
                job: '',
            }]
        };
    },
    methods: {
        save() {
            axios.post('http://localhost:8000/api/update-user-profile-first/' + this.user_id,
                {
                    name: this.user.name,
                    email: this.user.email,
                    birthDate: this.user.birthDate,
                    gender: this.user.gender,
                    nationalID: this.user.nationalID,
                }

            )
                .then((response) => {
                    console.log(response)
                })
            axios.post('http://localhost:8000/api/patients/update-user-profile-first/' + this.patient.id,
                {
                    phone : this.patient.phone,
                    address : this.patient.address,
                    bloodType : this.patient.bloodType,
                    height : this.patient.height,
                    weight : this.patient.weight,
                    job : this.patient.job,
                }

            )
                .then((response) => {
                    console.log(response)
                })
            this.isEditing = !this.isEditing;
        },
        getPatient() {
            console.log(this.user_id);
            axios.get('http://localhost:8000/api/get-user/' + this.user_id)
                .then((response) => {
                    console.log(response)
                    this.user = response.data;
                    // this.changeUser.name = this.user.name
                    console.log(this.user);
                })

            axios.get('http://localhost:8000/api/patients/get-user-by-user/' + this.user_id)
                .then((response) => {
                    console.log('hhh')
                    console.log(response);
                    this.patient = response.data.user;
                    console.log(this.patient)
                    axios.get('http://localhost:8000/api/diagnosis/get-diagnosis-by-patient/' + this.patient.id)
                        .then((response) => {
                            console.log(response.data.data);
                            this.diagnosis = response.data.data;
                        })
                    axios.get('http://localhost:8000/api/departments/get-department')
                        .then((response) => {
                            console.log(response.data.data);
                            this.departments = response.data.data;
                            // console.log(this.departments)
                            for (var i = 0; i < this.departments.length; i++) {
                                for (var j = 0; j < this.diagnosis.length; j++) {
                                    if (this.departments[i].department == 'dentistry') {
                                        if (this.departments[i].id == this.diagnosis[j].doctor.department_id) {
                                            this.dentistry.push(this.diagnosis[j].doctor);
                                        }
                                    }
                                    else if (this.departments[i].department == 'heart disease') {
                                        if (this.departments[i].id == this.diagnosis[j].doctor.department_id) {
                                            this.heartDisease.push(this.diagnosis[j].doctor);
                                        }
                                    }
                                    else if (this.departments[i].department == 'Kidney disease') {
                                        if (this.departments[i].id == this.diagnosis[j].doctor.department_id) {
                                            this.kidneyDisease.push(this.diagnosis[j].doctor);
                                        }
                                    }
                                    else if (this.departments[i].department == 'gland diseases') {
                                        if (this.departments[i].id == this.diagnosis[j].doctor.department_id) {
                                            this.glandDiseases.push(this.diagnosis[j].doctor);
                                        }
                                    }
                                    else if (this.departments[i].department == 'Brain and nerve diseases') {
                                        if (this.departments[i].id == this.diagnosis[j].doctor.department_id) {
                                            this.brainDiseases.push(this.diagnosis[j].doctor);
                                        }
                                    }
                                    else if (this.departments[i].department == 'eyes illnesses') {
                                        if (this.departments[i].id == this.diagnosis[j].doctor.department_id) {
                                            this.brainDiseases.push(this.diagnosis[j].doctor);
                                        }
                                    }
                                    else if (this.departments[i].department == 'skin diseases') {
                                        if (this.departments[i].id == this.diagnosis[j].doctor.department_id) {
                                            this.skinDiseases.push(this.diagnosis[j].doctor);
                                        }
                                    }
                                    else if (this.departments[i].department == 'Psychiatric illness') {
                                        if (this.departments[i].id == this.diagnosis[j].doctor.department_id) {
                                            this.psychiatricIllness.push(this.diagnosis[j].doctor);
                                        }
                                    }
                                    else if (this.departments[i].department == 'tumors') {
                                        if (this.departments[i].id == this.diagnosis[j].doctor.department_id) {
                                            this.tumors.push(this.diagnosis[j].doctor);
                                        }
                                    }
                                    else if (this.departments[i].department == 'Ear, nose and throat diseases') {
                                        if (this.departments[i].id == this.diagnosis[j].doctor.department_id) {
                                            this.earNoseThroatDiseases.push(this.diagnosis[j].doctor);
                                        }
                                    }
                                    else if (this.departments[i].department == 'Internal diseases and digestive system') {
                                        if (this.departments[i].id == this.diagnosis[j].doctor.department_id) {
                                            this.internalDiseasesDigestiveSystem.push(this.diagnosis[j].doctor);
                                        }
                                    }
                                    else if (this.departments[i].department == 'Obstetrics and gynecology') {
                                        if (this.departments[i].id == this.diagnosis[j].doctor.department_id) {
                                            this.obstetricsGynecology.push(this.diagnosis[j].doctor);
                                        }
                                    }
                                }
                            }
                            console.log('hhhhh')
                            console.log(this.dentistry)

                            for (var i = 0; i < this.dentistry.length; i++) {
                                if (i == 0) {
                                    axios.get('http://localhost:8000/api/get-user/' + this.dentistry[i].user_id)
                                        .then((response) => {
                                            console.log(response.data)
                                            this.dentistryData.push(response.data);
                                            console.log(this.dentistryData);
                                        })
                                } else{
                                    for (var j = 0; j < i; j++) {
                                        if (this.dentistry[j].user_id == this.dentistry[i].user_id) {
                                            x = 1;
                                            break;
                                        }
                                    }
                                    if(!x){
                                        axios.get('http://localhost:8000/api/get-user/' + this.dentistry[i].user_id)
                                        .then((response) => {
                                            console.log(response.data)
                                            this.dentistryData.push(response.data);
                                            console.log(this.dentistryData);
                                        })
                                    }
                                }
                            }
                            for (var i = 0; i < this.heartDisease.length; i++) {
                                var x = 0;
                                if (i == 0) {
                                    axios.get('http://localhost:8000/api/get-user/' + this.heartDisease[i].user_id)
                                        .then((response) => {
                                            console.log(response.data)
                                            this.heartDiseaseData.push(response.data);
                                            console.log(this.heartDiseaseData);
                                        })
                                }else{
                                    for (var j = 0; j < i; j++) {
                                        if (this.heartDisease[j].user_id == this.heartDisease[i].user_id) {
                                            x = 1;
                                            break;
                                        }
                                    }
                                    if(!x){
                                        axios.get('http://localhost:8000/api/get-user/' + this.heartDisease[i].user_id)
                                            .then((response) => {
                                                console.log(response.data)
                                                this.heartDiseaseData.push(response.data);
                                                console.log(this.heartDiseaseData);
                                            })
                                    }
                                }
                            }
                            for (var i = 0; i < this.kidneyDisease.length; i++) {
                                var x = 0;
                                if (i == 0) {
                                    axios.get('http://localhost:8000/api/get-user/' + this.kidneyDisease[i].user_id)
                                        .then((response) => {
                                            console.log(response.data)
                                            this.kidneyDiseaseData.push(response.data);
                                            console.log(this.kidneyDiseaseData);
                                        })
                                } else{
                                    for (var j = 0; j < i; j++) {
                                        if (this.kidneyDisease[j].user_id == this.kidneyDisease[i].user_id) {
                                            x = 1;
                                            break;
                                        }
                                    }
                                    if(!x){
                                        axios.get('http://localhost:8000/api/get-user/' + this.kidneyDisease[i].user_id)
                                        .then((response) => {
                                            console.log(response.data)
                                            this.kidneyDiseaseData.push(response.data);
                                            console.log(this.kidneyDiseaseData);
                                        })
                                    }
                                }
                            }
                            for (var i = 0; i < this.glandDiseases.length; i++) {
                                var x = 0;
                                if (i == 0) {
                                    axios.get('http://localhost:8000/api/get-user/' + this.glandDiseases[i].user_id)
                                        .then((response) => {
                                            console.log(response.data)
                                            this.glandDiseasesData.push(response.data);
                                            console.log(this.glandDiseasesData);
                                        })
                                } else{
                                    for (var j = 0; j < i; j++) {
                                        if (this.glandDiseases[j].user_id == this.glandDiseases[i].user_id) {
                                            x = 1;
                                            break;
                                        }
                                    }
                                    if(!x){
                                        axios.get('http://localhost:8000/api/get-user/' + this.glandDiseases[i].user_id)
                                        .then((response) => {
                                            console.log(response.data)
                                            this.glandDiseasesData.push(response.data);
                                            console.log(this.glandDiseasesData);
                                        })
                                    }
                                }
                            }
                            for (var i = 0; i < this.brainDiseases.length; i++) {
                                var x = 0;
                                if (i == 0) {
                                    axios.get('http://localhost:8000/api/get-user/' + this.brainDiseases[i].user_id)
                                        .then((response) => {
                                            console.log(response.data)
                                            this.brainDiseasesData.push(response.data);
                                            console.log(this.brainDiseasesData);
                                        })
                                } else{
                                    for (var j = 0; j < i; j++) {
                                        if (this.brainDiseases[j].user_id == this.brainDiseases[i].user_id) {
                                            x = 1;
                                            break;
                                        }
                                    }
                                    if(!x){
                                        axios.get('http://localhost:8000/api/get-user/' + this.brainDiseases[i].user_id)
                                        .then((response) => {
                                            console.log(response.data)
                                            this.brainDiseasesData.push(response.data);
                                            console.log(this.brainDiseasesData);
                                        })
                                    }
                                }
                            }
                            for (var i = 0; i < this.eyesIllnesses.length; i++) {
                                var x = 0;
                                if (i == 0) {
                                    axios.get('http://localhost:8000/api/get-user/' + this.eyesIllnesses[i].user_id)
                                        .then((response) => {
                                            console.log(response.data)
                                            this.eyesIllnessesData.push(response.data);
                                            console.log(this.eyesIllnessesData);
                                        })
                                } else{
                                    for (var j = 0; j < i; j++) {
                                        if (this.eyesIllnesses[j].user_id == this.eyesIllnesses[i].user_id) {
                                            x = 1;
                                            break;
                                        }
                                    }
                                    if(!x){
                                        axios.get('http://localhost:8000/api/get-user/' + this.eyesIllnesses[i].user_id)
                                        .then((response) => {
                                            console.log(response.data)
                                            this.eyesIllnessesData.push(response.data);
                                            console.log(this.eyesIllnessesData);
                                        })
                                    }
                                }
                            }
                            for (var i = 0; i < this.skinDiseases.length; i++) {
                                var x = 0;
                                if (i == 0) {
                                    axios.get('http://localhost:8000/api/get-user/' + this.skinDiseases[i].user_id)
                                        .then((response) => {
                                            console.log(response.data)
                                            this.skinDiseasesData.push(response.data);
                                            console.log(this.skinDiseasesData);
                                        })
                                } else{
                                    for (var j = 0; j < i; j++) {
                                        if (this.skinDiseases[j].user_id == this.skinDiseases[i].user_id) {
                                            x = 1;
                                            break;
                                        }
                                    }
                                    if(!x){
                                        axios.get('http://localhost:8000/api/get-user/' + this.skinDiseases[i].user_id)
                                        .then((response) => {
                                            console.log(response.data)
                                            this.skinDiseasesData.push(response.data);
                                            console.log(this.skinDiseasesData);
                                        })
                                    }
                                }
                            }
                            for (var i = 0; i < this.psychiatricIllness.length; i++) {
                                var x = 0;
                                if (i == 0) {
                                    axios.get('http://localhost:8000/api/get-user/' + this.psychiatricIllness[i].user_id)
                                        .then((response) => {
                                            console.log(response.data)
                                            this.psychiatricIllnessData.push(response.data);
                                            console.log(this.psychiatricIllnessData);
                                        })
                                } else{
                                    for (var j = 0; j < i; j++) {
                                        if (this.psychiatricIllness[j].user_id == this.psychiatricIllness[i].user_id) {
                                            x = 1;
                                            break;
                                        }
                                    }
                                    if(!x){
                                        axios.get('http://localhost:8000/api/get-user/' + this.psychiatricIllness[i].user_id)
                                        .then((response) => {
                                            console.log(response.data)
                                            this.psychiatricIllnessData.push(response.data);
                                            console.log(this.psychiatricIllnessData);
                                        })
                                    }
                                }
                            }
                            for (var i = 0; i < this.tumors.length; i++) {
                                var x = 0;
                                if (i == 0) {
                                    axios.get('http://localhost:8000/api/get-user/' + this.tumors[i].user_id)
                                        .then((response) => {
                                            console.log(response.data)
                                            this.tumorsData.push(response.data);
                                            console.log(this.tumorsData);
                                        })
                                } else{
                                    for (var j = 0; j < i; j++) {
                                        if (this.tumors[j].user_id == this.tumors[i].user_id) {
                                            x = 1;
                                            break;
                                        }
                                    }
                                    if(!x){
                                        axios.get('http://localhost:8000/api/get-user/' + this.tumors[i].user_id)
                                        .then((response) => {
                                            console.log(response.data)
                                            this.tumorsData.push(response.data);
                                            console.log(this.tumorsData);
                                        })
                                    }
                                }
                            }
                            for (var i = 0; i < this.earNoseThroatDiseases.length; i++) {
                                var x = 0;
                                if (i == 0) {
                                    axios.get('http://localhost:8000/api/get-user/' + this.earNoseThroatDiseases[i].user_id)
                                        .then((response) => {
                                            console.log(response.data)
                                            this.earNoseThroatDiseasesData.push(response.data);
                                            console.log(this.earNoseThroatDiseasesData);
                                        })
                                } else{
                                    for (var j = 0; j < i; j++) {
                                        if (this.earNoseThroatDiseases[j].user_id == this.earNoseThroatDiseases[i].user_id) {
                                            x = 1;
                                            break;
                                        }
                                    }
                                    if(!x){
                                        axios.get('http://localhost:8000/api/get-user/' + this.earNoseThroatDiseases[i].user_id)
                                        .then((response) => {
                                            console.log(response.data)
                                            this.earNoseThroatDiseasesData.push(response.data);
                                            console.log(this.earNoseThroatDiseasesData);
                                        })
                                    }
                                }
                            }
                            for (var i = 0; i < this.internalDiseasesDigestiveSystem.length; i++) {
                                var x = 0;
                                if (i == 0) {
                                    axios.get('http://localhost:8000/api/get-user/' + this.internalDiseasesDigestiveSystem[i].user_id)
                                        .then((response) => {
                                            console.log(response.data)
                                            this.internalDiseasesDigestiveSystemData.push(response.data);
                                            console.log(this.internalDiseasesDigestiveSystemData);
                                        })
                                } else{
                                    for (var j = 0; j < i; j++) {
                                        if (this.internalDiseasesDigestiveSystem[j].user_id == this.internalDiseasesDigestiveSystem[i].user_id) {
                                            x = 1;
                                            break;
                                        }
                                    }
                                    if(!x){
                                        axios.get('http://localhost:8000/api/get-user/' + this.internalDiseasesDigestiveSystem[i].user_id)
                                        .then((response) => {
                                            console.log(response.data)
                                            this.internalDiseasesDigestiveSystemData.push(response.data);
                                            console.log(this.internalDiseasesDigestiveSystemData);
                                        })
                                    }
                                }
                            }
                            for (var i = 0; i < this.obstetricsGynecology.length; i++) {
                                var x = 0;
                                if (i == 0) {
                                    axios.get('http://localhost:8000/api/get-user/' + this.obstetricsGynecology[i].user_id)
                                        .then((response) => {
                                            console.log(response.data)
                                            this.obstetricsGynecologyData.push(response.data);
                                            console.log(this.obstetricsGynecologyData);
                                        })
                                } else{
                                    for (var j = 0; j < i; j++) {
                                        if (this.obstetricsGynecology[j].user_id == this.obstetricsGynecology[i].user_id) {
                                            x = 1;
                                            break;
                                        }
                                    }
                                    if(!x){
                                        axios.get('http://localhost:8000/api/get-user/' + this.obstetricsGynecology[i].user_id)
                                        .then((response) => {
                                            console.log(response.data)
                                            this.obstetricsGynecologyData.push(response.data);
                                            console.log(this.obstetricsGynecologyData);
                                        })
                                    }
                                }
                            }
                        })
                })
        },
    },
    created() {
        this.getPatient();
    },
    computed: {
        // href() {
        //     return '"/PatientDiganous/" + this.invoice.id ';
        // }
    },
};
</script>
