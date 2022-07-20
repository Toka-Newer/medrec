<template>
    <div>
        <component :is="'style'">
            .vs__clear{
            display: none
            }
            table tbody{
            display:block;
            height:200px;
            overflow:auto;
            }
            table thead, tbody tr {
            display:table;
            width:100%;
            table-layout:fixed;
            }
            table thead {
            width: calc( 100% - 1em )
            }
            .info .inform {
            color: #4b88c7;
            }
            .ksm ul{
            overflow: auto;
            height: 200px;
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
            <div id="app1" class="container" style="margin-top: 10%;">
                <div class="row mb-3">
                    <div class="col-md-4">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img :src="patient.photo" alt="Admin" class="rounded-circle" width="150">
                                <div class="mt-3">
                                    <h4 class="mb-3">{{ user.name }}</h4>
                                    <!-- <p class="text-secondary mb-1">Full Stack Developer</p>
                                                      <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p> -->
                                    <!-- <button class="btn btn-primary">Follow</button> -->
                                    <button class="btn btn-outline-primary"> <a class="profile"
                                            href='/EditPatientProfile'>
                                            Profile </a> </button>
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
                                @click="getPatient()">Cancel</button>

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
                        </div>
                    </div>
                </div>
            </div>

            <div id="app2" class="container">
                <div class="row">
                    <div class="col-xl-3 col-sm-5 my-3 first" style="padding-left: 0;">
                        <div class="card">
                            <div class="card-body hvr-shadow">
                                <div class="card-title">
                                    <i class="fa-solid fa-clipboard-list mr-2"
                                        style="font-size: 125%; color: #f44336!important;"></i>
                                    Allergic List
                                </div>
                                <div class="ksm">
                                    <ul class="list-group list-group-flush">
                                        <li v-for=" item in patient.allergicList " :key="item.id"
                                            class="list-group-item list-group-item-action d-flex align-items-center">
                                            {{ item }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-sm-7 my-3 first" style="padding-right: 0;">
                        <div class="card">
                            <div class="card-body hvr-shadow">
                                <div class="card-title">All Medicines</div>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">Medicine</th>
                                                <th scope="col">Strength</th>
                                                <!-- <th scope="col">Company Name</th> -->
                                                <th scope="col">Discription</th>
                                                <th scope="col">Period</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr v-for="med in medicines" :key="med.id">
                                                <th scope="row"> {{ med.brandName }} </th>
                                                <td>{{ med.strength }} </td>
                                                <!-- <td>{{ med.companyName }} </td> -->
                                                <td>{{ med.discription }} </td>
                                                <td>{{ med.period }} </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="app3" class="container">
                <div class="row my-3">
                    <div class="col-xl-3 col-sm-6 my-3">
                        <div class="card">
                            <div class="card-body hvr-shadow">
                                <div class="row">
                                    <div class="col-md-12 d-flex flex-column my-3">
                                        <i class='fa-solid fa-droplet' style="font-size: 200%;
                                                        color: #fb3d4e;"></i>
                                    </div>
                                    <div class="col-md-12 d-flex flex-column my-3">
                                        <h5>Blood Pressure</h5>
                                    </div>
                                    <div class="col-md-12 d-flex flex-column my-3">
                                        {{ patient.bloodPressure }} mmhg
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 my-3">
                        <div class="card">
                            <div class="card-body hvr-shadow">
                                <div class="row">
                                    <div class="col-md-12 d-flex flex-column my-3">
                                        <i class="fa-solid fa-head-side-mask" style="font-size: 200%;
                                                        color: #e4a540;"></i>
                                    </div>
                                    <div class="col-md-12 d-flex flex-column my-3">
                                        <h5>Blood Oxygen</h5>
                                    </div>
                                    <div class="col-md-12 d-flex flex-column my-3">
                                        {{ patient.bloodOxygen }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 my-3">
                        <div class="card">
                            <div class="card-body hvr-shadow">
                                <div class="row">
                                    <div class="col-md-12 d-flex flex-column my-3">
                                        <i class="fa-solid fa-temperature-half" style="font-size: 200%;
                                                        color: #2818a3;"></i>
                                    </div>
                                    <div class="col-md-12 d-flex flex-column my-3">
                                        <h5>Body Temperature</h5>
                                    </div>
                                    <div class="col-md-12 d-flex flex-column my-3">
                                        {{ patient.bodyTemperature }}° C
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 my-3">
                        <div class="card">
                            <div class="card-body hvr-shadow">
                                <div class="row">
                                    <div class="col-md-12 d-flex flex-column my-3">
                                        <i class="fa-solid fa-fire-flame-simple" style="color: #308756;
                                                        font-size: 200%;"></i>
                                    </div>
                                    <div class="col-md-12 d-flex flex-column my-3">
                                        <h5>Blood Glucose</h5>
                                    </div>
                                    <div class="col-md-12 d-flex flex-column my-3">
                                        {{ patient.bloodGlucose }} mg/dl
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="app4" class="container">
                <div class="row">
                    <div class="col-xl-4 col-sm-6 my-3">
                        <div class="card">
                            <div class="card-body hvr-shadow">
                                <div class="card-title">
                                    <i class="fa-solid fa-disease mr-2"
                                        style="font-size: 125%; color: #ff9800!important;"></i>
                                    Chronic Diseases
                                </div>
                                <div class="ksm">
                                    <ul class="list-group list-group-flush">
                                        <li v-for="item in patient.chronicDiseases" :key="item.id"
                                            class="list-group-item list-group-item-action d-flex align-items-center">
                                            <a href="#" style="text-decoration: none;"> {{ item }} </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-sm-6 my-3">
                        <div class="card">
                            <div class="card-body hvr-shadow">
                                <div class="card-title">
                                    <i class="fa-solid fa-disease mr-2"
                                        style="font-size: 125%; color: #ff9800!important;"></i>
                                    Possible Genetic Diseases
                                </div>
                                <div class="ksm">
                                    <ul class="list-group list-group-flush">
                                        <li v-for="item in patient.possibleGeneticD" :key="item.id"
                                            class="list-group-item list-group-item-action d-flex align-items-center">
                                            {{ item }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-sm-6 my-3">
                        <div class="card">
                            <div class="card-body hvr-shadow">
                                <div class="card-title">
                                    <i class="fa-solid fa-clipboard-list mr-2"
                                        style="font-size: 125%; color: #4b88c7 !important;"></i>
                                    Surgeries he/she had
                                </div>
                                <div class="ksm">
                                    <ul class="list-group list-group-flush">
                                        <li v-for="Surgery in patient.surgeries" :key="Surgery.id"
                                            class="list-group-item list-group-item-action align-items-center">
                                            <a :href="'/ShowReport/' + Surgery.id" style="text-decoration: none;"><span>
                                                    {{ Surgery.surgeryTitle }}
                                                </span> <span class="fr">
                                                    {{ moment(Surgery.created_at).format("DD-MM-YYYY") }}</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-6 my-3">
                        <div class="card">
                            <div class="card-body hvr-shadow">
                                <div class="card-title">
                                    <i class="fa-solid fa-head-side-cough mr-2"
                                        style="font-size: 125%; color: #ff9800!important;"></i>
                                    Diseases that he/she suffred or suffring from
                                </div>
                                <div class="ksm">
                                    <ul class="list-group list-group-flush">
                                        <li v-for="Disease in patient.diagnosis" :key="Disease.id"
                                            class="list-group-item list-group-item-action align-items-center">
                                            <a :href="'/ShowDiganousDoctor/' + Disease.id"
                                                style="text-decoration: none;"><span> {{ Disease.disease_title }}
                                                </span> <span class="fr">
                                                    {{ moment(Disease.created_at).format("DD-MM-YYYY") }}</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="col-xl-4 col-sm-6 my-3">
                        <div class="card">
                            <div class="card-body hvr-shadow">
                                <div class="card-title">
                                    <i class="fa-solid fa-user mr-2"
                                        style="font-size: 125%; color: #4b88c7 !important;"></i>
                                    His/Her habbits
                                </div>
                                <div class="ksm">
                                    <ul class="list-group list-group-flush">
                                        <li v-for="habbit in patient.habbits" :key="habbit.id"
                                            class="list-group-item list-group-item-action d-flex align-items-center">
                                            {{ habbit }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-sm-6 my-3">
                        <div class="card">
                            <div class="card-body hvr-shadow">
                                <div class="card-title">
                                    <i class="fa-solid fa-user-group mr-2"
                                        style="font-size: 125%; color: #4b88c7 !important;"></i>
                                    Relatives's contacts
                                </div>
                                <div class="ksm">
                                    <ul class="relation list-group list-group-flush">
                                        <li v-for="(Relative, index) in patient.relativesName" :key="index"
                                            class="list-group-item list-group-item-action align-items-center">
                                            <p>
                                                <span>{{ Relative }}</span>
                                                <span class="fr number">{{ patient.relativesPhone[index] }}</span>
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <div class="col-xl-4 col-sm-6 my-3">
                        <div class="card">
                            <div class="card-body hvr-shadow">
                                <div class="card-title">
                                    <i class="fa-solid fa-user mr-2"
                                        style="font-size: 125%; color: #4b88c7 !important;"></i>
                                    His/Her habbits
                                </div>
                                <div class="ksm">
                                    <ul class="list-group list-group-flush">
                                        <li v-for="(habbit, index) in patient.habbits" :key="index"
                                            class="list-group-item list-group-item-action d-flex align-items-center">
                                            <!-- {{ habbit }} -->
                                            <input type="text" style="background: transparent; border: 0;"
                                                v-model="patient.habbits[index]" :disabled="!isEditing7"
                                                :class="{ view: !isEditing7 }">
                                            <button type="button" class="text-center button btn-xs btn-danger"
                                                v-on:click="removeinput(index, 'habbit')" v-if="isEditing7"><i
                                                    class="fa fa-close"></i></button>
                                        </li>
                                    </ul>
                                    <button class="btn btn-outline-primary mb-3 " @click="isEditing7 = !isEditing7"
                                        v-if="!isEditing7">
                                        Edit
                                    </button>
                                    <button class="btn btn-outline-primary mb-3" @click="saveAL" v-else-if="isEditing7">
                                        Save
                                    </button>
                                    <button class="btn btn-outline-primary mb-3" @click="addinput('habbit')"
                                        v-if="isEditing7">
                                        Add
                                    </button>
                                    <button class="btn btn-outline-primary mb-3" v-if="isEditing7"
                                        @click="getPatient()">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-sm-6 my-3">
                        <div class="card mb-3">
                            <div class="card-body hvr-shadow">
                                <div class="card-title">
                                    <i class="fa-solid fa-user-group mr-2"
                                        style="font-size: 125%; color: #4b88c7 !important;"></i>
                                    Relatives's contacts
                                </div>
                                <div class="ksm">
                                    <ul class="relation list-group list-group-flush">
                                        <li v-for="(Relative, index) in patient.relativesName" :key="index"
                                            class="list-group-item list-group-item-action align-items-center">
                                            <p>
                                                <input type="text" style="background: transparent; border: 0;"
                                                    v-model="patient.relativesName[index]" :disabled="!isEditing8"
                                                    :class="{ view: !isEditing8 }">
                                                <button type="button" class="text-center button btn-xs btn-danger"
                                                    v-on:click="removeinput(index, 'relative')" v-if="isEditing8"><i
                                                        class="fa fa-close"></i></button>

                                                <input type="text" style="background: transparent; border: 0;"
                                                    v-model="patient.relativesPhone[index]" :disabled="!isEditing8"
                                                    :class="{ view: !isEditing8 }">
                                                <button type="button" class="text-center button btn-xs btn-danger"
                                                    v-on:click="removeinput(index, 'relative')" v-if="isEditing8"><i
                                                        class="fa fa-close"></i></button>
                                                <!-- <span>{{ Relative }}</span>
                                                <span class="fr number">{{ patient.relativesPhone[index] }}</span> -->
                                            </p>
                                        </li>
                                    </ul>
                                    <button class="btn btn-outline-primary mb-3 " @click="isEditing8 = !isEditing8"
                                        v-if="!isEditing8">
                                        Edit
                                    </button>
                                    <button class="btn btn-outline-primary mb-3" @click="saveAL" v-else-if="isEditing8">
                                        Save
                                    </button>
                                    <button class="btn btn-outline-primary mb-3" @click="addinput('relative')"
                                        v-if="isEditing8">
                                        Add
                                    </button>
                                    <button class="btn btn-outline-primary mb-3" v-if="isEditing8"
                                        @click="getPatient()">Cancel</button>
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
            isEditing1: false,
            isEditing2: false,
            isEditing3: false,
            isEditing4: false,
            isEditing5: false,
            isEditing6: false,
            isEditing7: false,
            isEditing8: false,
            isEditing9: false,
            user: [],
            patients: [],
            patient: [],
            user_id: this.$userId,
            patient_id: null,
            diagnosis: [],
            medicines: [],
            surgeries: [],
            list: [],
            dateString: '',
            chronicDiseases: [
                'Diabetes',
                'Pressure disease',
                'cancer',
                'muscle stiffness',
                'Hepatitis'
            ],
            reactiveWidth: '70px', // (some default value)
        };
    },
    methods: {
        adjustInput() {
            this.reactiveWidth = event.target.value.length + 'ch'
        },
        getPatient() {
            console.log(this.user_id);
            axios.get('http://localhost:8000/api/get-user/' + this.user_id)
                .then((response) => {
                    console.log(response)
                    this.user = response.data;
                    console.log(this.user.birthDate);
                    // this.dateString = getAge(this.user.birthDate);
                    // this.user.birthDate = this.dateString;
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
                    axios.get('http://localhost:8000/api/surgeries/get-surgery-by-patient/' + this.patient.id)
                        .then((response) => {
                            console.log(response.data.data);
                            this.surgeries = response.data.data;
                        })
                    axios.get('http://localhost:8000/api/medicines/get-medicine-by-patient/' + this.patient.id)
                        .then((response) => {
                            console.log(response.data);
                            this.medicines = response.data.medicine;
                            console.log(this.medicines)
                        })
                })
            if(this.isEditing){
                this.isEditing = !this.isEditing;
            }else if (this.isEditing1) {
                this.isEditing1 = !this.isEditing1;
            } else if (this.isEditing2) {
                this.isEditing2 = !this.isEditing2;
            } else if (this.isEditing3) {
                this.isEditing3 = !this.isEditing3;
            } else if (this.isEditing4) {
                this.isEditing4 = !this.isEditing4;
            } else if (this.isEditing5) {
                this.isEditing5 = !this.isEditing5;
            } else if (this.isEditing6) {
                this.isEditing6 = !this.isEditing6;
            } else if (this.isEditing7) {
                this.isEditing7 = !this.isEditing7;
            } else if (this.isEditing8) {
                this.isEditing8 = !this.isEditing8;
            } else if (this.isEditing9) {
                this.isEditing9 = !this.isEditing9;
            }
        },
    },
    created() {
        this.getPatient();
    },
    computed: {
        reactiveWidth() {
            return this.number + 'ch';
        }
    }
};
</script>
