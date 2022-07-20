<template>
    <div>
        <component :is="'style'">
            img{
            width: 100% !important;
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
            .input-group-text{
            padding: 18.8px !important;
            }
            .form-inline{
            flex-wrap: nowrap;
            }
            .heart{
            position: absolute;
            font-size: 150%;
            right: 0;
            top: 10%;
            color: red;
            cursor: pointer;
            }
        </component>
        <div id="patient" class="main">
            <div class="container" style="margin-top: 10%;">
                <div class="row">
                    <form class="form-inline">
                        <b-input-group-prepend is-text>
                            <!-- <i class="fas fa-search"></i> -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-search" viewBox="0 0 16 16">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                            </svg>
                        </b-input-group-prepend>
                        <b-form-input type="search" placeholder="Search terms" v-model="searchQuery"></b-form-input>
                    </form>
                </div>
                <!-- <div class="row mb-3">
                    <ul>
                        <li v-for="(patient, index) in filterPatients" :key="index" class="col-md-3"
                            style="display: inline-block">
                            <i class="heart fa-regular fa-heart" v-if="!patient.flag"
                                @click="favourite(patient.patients.id, patient.flag, index)"></i>
                            <i class="heart fa-solid fa-heart" v-else
                                @click="deleteFavourite(patient.favourite_id, patient.flag, index)"></i>
                            <a :href="'/DoctorDiagnosis/' + patient.id">
                                <div class="card-body">
                                    <div class="d-flex flex-column align-items-center text-center">
                                        <img v-bind:src="patient.patients.photo" class="rounded-circle" width="150">
                                        <div class="mt-3">
                                            <h4 class="mb-2" style="color: #212529;">{{ patient.patients.user.name }}
                                            </h4>
                                            <button class="btn btn-outline-primary"> <a class="profile"
                                                    :href="'/PatientProfile/' + patient.patients.id">
                                                    Profile </a> </button>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div> -->
            </div>
            <div data-toggle="collapse">
                <div class="form-row text-center">
                    <div class="col-12">
                        <button class="btn btn-primayr" href="#doctorDiagnosis" data-toggle="collapse"
                            aria-expanded="false" aria-controls="collapseExample">Diagnosis</button>
                        <button class="btn btn-primary" href="#d" data-toggle="collapse" aria-expanded="false"
                            aria-controls="collapseExample">Surgies</button>
                    </div>
                    <div class="collapse" id="d">
                        <div class="card card-body">
                            <div class="row mb-3">
                                <ul>
                                    <li v-for="(patient, index) in surgeryFavourite" :key="index" class="col-md-3"
                                        style="display: inline-block">
                                        <i class="heart fa-regular fa-heart" v-if="!patient.flag"
                                            @click="favourite(patient.patients.id, patient.flag, index)"></i>
                                        <i class="heart fa-solid fa-heart" v-else
                                            @click="deleteFavourite(patient.favourite_id, patient.flag, index)"></i>
                                        <a :href="'/DoctorDiagnosis/' + patient.patients.id">
                                            <div class="card-body">
                                                <div class="d-flex flex-column align-items-center text-center">
                                                    <img v-bind:src="patient.patients.photo" class="rounded-circle"
                                                        width="150">
                                                    <div class="mt-3">
                                                        <h4 class="mb-2" style="color: #212529;">{{
                                                                patient.patients.user.name
                                                        }}
                                                        </h4>
                                                        <!-- <p class="text-secondary mb-1">{{ patient.date }}</p> -->

                                                        <!-- <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p> -->
                                                        <!-- <button class="btn btn-primary">Follow</button> -->
                                                        <button class="btn btn-outline-primary"> <a class="profile"
                                                                :href="'/PatientProfile/' + patient.patients.id">
                                                                Profile </a> </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="collapse" id="doctorDiagnosis">

                        <div class="card card-body">
                            <div class="row mb-3">
                                <ul>
                                    <li v-for="(patient, index) in filterPatients" :key="index" class="col-md-3"
                                        style="display: inline-block">
                                        <i class="heart fa-regular fa-heart" v-if="!patient.flag"
                                            @click="favourite(patient.patients.id, patient.flag, index)"></i>
                                        <i class="heart fa-solid fa-heart" v-else
                                            @click="deleteFavourite(patient.favourite_id, patient.flag, index)"></i>
                                        <a :href="'/DoctorDiagnosis/' + patient.id">
                                            <div class="card-body">
                                                <div class="d-flex flex-column align-items-center text-center">
                                                    <img v-bind:src="patient.patients.photo" class="rounded-circle"
                                                        width="150">
                                                    <div class="mt-3">
                                                        <h4 class="mb-2" style="color: #212529;">{{
                                                                patient.patients.user.name
                                                        }}
                                                        </h4>
                                                        <!-- <p class="text-secondary mb-1">{{ patient.date }}</p> -->

                                                        <!-- <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p> -->
                                                        <!-- <button class="btn btn-primary">Follow</button> -->
                                                        <button class="btn btn-outline-primary"> <a class="profile"
                                                                :href="'/PatientProfile/' + patient.patients.id">
                                                                Profile </a> </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>

                                </ul>
                            </div>

                        </div>

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
            user_id: this.$userId,
            doctor_id: null,
            doctorData: [],
            doctors: [],
            doctorDiagnosis: [],
            patientDiagnosis: [],
            patientSurgery: [],
            patients: [],
            searchQuery: '',
            flag: null,
            favourites: [],
            patientFavourite: [],
            surgeryData: [],
            surgeryFavourite: [],
        };
    },
    methods: {
        getDiagnosis() {
            axios.get('http://localhost:8000/api/doctors/get-doctor-by-user/' + this.user_id)
                .then((response) => {
                    console.log(response.data.doctor)
                    this.doctorData = response.data.doctor
                    console.log(this.doctorData.id)
                    axios.get('http://localhost:8000/api/diagnosis/get-diagnosis-by-doctor/' + this.doctorData.id)
                        .then((response) => {
                            console.log(response)
                            this.doctorDiagnosis = response.data.data
                            var f = 0;
                            for (var i = 0; i < this.doctorDiagnosis.length; i++) {
                                if (i == 0) {
                                    this.patientDiagnosis.push(this.doctorDiagnosis[i])
                                } else {
                                    for (var j = 0; j < i; j++) {
                                        console.log(this.patientDiagnosis[j].patient_id)
                                        if (this.patientDiagnosis[j].patient_id == this.doctorDiagnosis[i].patient_id) {
                                            f = 1;
                                            break;
                                        }
                                    }
                                    if (!f) {
                                        this.patientDiagnosis.push(this.doctorDiagnosis[i])
                                    }
                                    f = 0;
                                }
                            }
                            for (var i = 0; i < this.patientDiagnosis.length; i++) {
                                axios.get('http://localhost:8000/api/patients/get-user/' + this.doctorDiagnosis[i].patient_id)
                                    .then((response) => {
                                        console.log(response.data.user)
                                        this.patients.push(response.data.user)
                                    })
                            }
                            console.log(this.patients)
                            axios.get('http://localhost:8000/api/favourites/get-favourite-by-user/' + this.doctorData.id)
                                .then((response) => {
                                    console.log(response.data.favourite)
                                    this.favourites.push(response.data.favourite);
                                    var x = 0;
                                    console.log(response.data.favourite.length)
                                    for (var i = 0; i < this.patients.length; i++) {
                                        for (var j = 0; j < response.data.favourite.length; j++) {
                                            if (response.data.favourite[j].patient_id == this.patients[i].id) {
                                                this.patientFavourite.push({ patients: this.patients[i], flag: true, favourite_id: response.data.favourite[j].id })
                                                x = 1;
                                                break;
                                            }
                                        }
                                        if (!x) {
                                            this.patientFavourite.push({ patients: this.patients[i], flag: false, favourite_id: null })
                                        }
                                        x = 0;
                                    }
                                    console.log(this.patientFavourite)
                                })
                            axios.get('http://localhost:8000/api/surgeries/get-surgery-by-doctor/' + this.doctorData.id)
                                .then((response) => {
                                    console.log(response.data.data)
                                    this.surgeryData = response.data.data;
                                    var y = 0;
                                    for (var i = 0; i < this.surgeryData.length; i++) {
                                        for (var j = 0; j < this.favourites.length; j++) {
                                            if (this.favourites[j].patient_id == this.patients[i].id) {
                                                this.surgeryFavourite.push({ patients: this.patients[i], flag: true, favourite_id: this.favourites[j].id })
                                                y = 1;
                                                break;
                                            }
                                        }
                                        if (!y) {
                                            this.surgeryFavourite.push({ patients: this.patients[i], flag: false, favourite_id: null })
                                        }
                                        y = 0;
                                    }
                                    console.log(this.surgeryFavourite)
                                })
                        })
                })

        },
        getSurgery(){
            axios.get('http://localhost:8000/api/doctors/get-doctor-by-user/' + this.user_id)
                .then((response) => {
                    console.log(response.data.doctor)
                    this.doctor = response.data.doctor
                    console.log(this.doctor.id)
                    axios.get('http://localhost:8000/api/surgeries/get-surgery-by-doctor/' + this.doctor.id)
                        .then((response) => {
                            console.log(response)
                            this.surgeryData = response.data.data
                            var f = 0;
                            for (var i = 0; i < this.surgeryData.length; i++) {
                                if (i == 0) {
                                    this.patientSurgery.push(this.surgeryData[i])
                                } else {
                                    for (var j = 0; j < i; j++) {
                                        console.log(this.patientSurgery[j].patient_id)
                                        if (this.patientSurgery[j].patient_id == this.surgeryData[i].patient_id) {
                                            f = 1;
                                            break;
                                        }
                                    }
                                    if (!f) {
                                        this.patientSurgery.push(this.surgeryData[i])
                                    }
                                    f = 0;
                                }
                            }
                            for (var i = 0; i < this.patientSurgery.length; i++) {
                                axios.get('http://localhost:8000/api/patients/get-user/' + this.surgeryData[i].patient_id)
                                    .then((response) => {
                                        console.log(response.data.user)
                                        this.patients.push(response.data.user)
                                    })
                            }
                            console.log(this.patients)
                            axios.get('http://localhost:8000/api/favourites/get-favourite-by-user/' + this.doctor.id)
                                .then((response) => {
                                    console.log(response.data.favourite)
                                    this.favourites.push(response.data.favourite);
                                    var x = 0;
                                    console.log(response.data.favourite.length)
                                    for (var i = 0; i < this.patients.length; i++) {
                                        for (var j = 0; j < response.data.favourite.length; j++) {
                                            if (response.data.favourite[j].patient_id == this.patients[i].id) {
                                                this.surgeryFavourite.push({ patients: this.patients[i], flag: true, favourite_id: response.data.favourite[j].id })
                                                x = 1;
                                                break;
                                            }
                                        }
                                        if (!x) {
                                            this.surgeryFavourite.push({ patients: this.patients[i], flag: false, favourite_id: null })
                                        }
                                        x = 0;
                                    }
                                    console.log(this.surgeryFavourite)
                                })
                        })
                })
        },
        favourite(patientID, flag, index) {
            if (!flag) {
                axios.post('http://localhost:8000/api/favourites/insert-favourite',
                    {
                        doctor_id: this.doctorData.id,
                        patient_id: patientID,
                    }
                )
                    .then((response) => {
                        console.log(response)
                    })
                console.log(patientID)
                axios.get('http://localhost:8000/api/favourites/get-favourite-by-patient/' + patientID)
                    .then((response) => {
                        console.log(response.data.favourite)
                        for (var i = 0; i < response.data.favourite.length; i++) {
                            if (response.data.favourite[i].doctor_id == this.doctorData.id) {
                                this.patientFavourite[index].favourite_id = response.data.favourite[i].id;
                            }
                        }
                    })
                this.patientFavourite[index].flag = !this.patientFavourite[index].flag;
            }
        },
        deleteFavourite(favourite_id, flag, index) {
            if (flag) {
                axios.post('http://localhost:8000/api/favourites/delete-favourite/' + favourite_id)
                    .then((response) => {
                        console.log(response)
                    })
                this.patientFavourite[index].flag = !this.patientFavourite[index].flag;
            }
        }
    },
    created() {
        this.getDiagnosis();
        this.getSurgery();
    },
    computed: {
        filterPatients() {
            if (this.searchQuery) {
                return this.patientFavourite.filter((patient) => {
                    return patient.patients.user.name.includes(this.searchQuery.toLowerCase() || this.searchQuery.toUpperCase());
                });
            } else {
                return this.patientFavourite;
            }
        },
    },
};
</script>
