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
                <div class="row mb-3">
                    <ul>
                        <li v-for="(patient, index) in filterPatients" :key="index" class="col-md-3"
                            style="display: inline-block">
                            <i class="heart fa-regular fa-heart" v-if="!patient.flag"
                                @click="favourite(patient.patient.id, patient.flag, index)"></i>
                            <i class="heart fa-solid fa-heart" v-else
                                @click="deleteFavourite(patient.id, patient.flag, index)"></i>
                            <a :href="'/DoctorDiagnosis/' + patient.id">
                                <div class="card-body">
                                    <div class="d-flex flex-column align-items-center text-center">
                                        <img v-bind:src="patient.patient.photo" class="rounded-circle" width="150">
                                        <div class="mt-3">
                                            <h4 class="mb-2" style="color: #212529;">{{ patient.patient.user.name }}
                                            </h4>
                                            <!-- <p class="text-secondary mb-1">{{ patient.date }}</p> -->

                                            <!-- <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p> -->
                                            <!-- <button class="btn btn-primary">Follow</button> -->
                                            <button class="btn btn-outline-primary"> <a class="profile"
                                                    :href="'/PatientProfile/' + patient.patient.id">
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
</template>
<script>
export default {
    data() {
        return {
            user_id: this.$userId,
            searchQuery: '',
            doctor: [],
            patient: [],
            patientFavourite: [],
            dataFavourite: [],
        };
    },
    methods: {
        getFavourite() {
            axios.get('http://localhost:8000/api/doctors/get-doctor-by-user/' + this.user_id)
                .then((response) => {
                    this.doctor = response.data.doctor
                    console.log(this.doctor)
                    
                    axios.get('http://localhost:8000/api/favourites/get-favourite-by-user/' + this.doctor.id)
                        .then((response) => {
                            console.log(response)
                            this.dataFavourite = response.data.favourite;
                            console.log(this.dataFavourite);
                            var id = 0
                            for (var i = 0; i < this.dataFavourite.length; i++) {
                                axios.get('http://localhost:8000/api/patients/get-user/' + response.data.favourite[i].patient_id)
                                    .then((response) => {
                                        console.log(i)
                                        this.patient.push({patient: response.data.user, flag : true, id: this.dataFavourite[id].id});
                                        id++;
                                    })
                            }
                            console.log(this.patient)
                        })
                })
        },
        favourite(patientID, flag, index) {
            if (!flag) {
                axios.post('http://localhost:8000/api/favourites/insert-favourite',
                    {
                        doctor_id: this.doctor.id,
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
                this.patient[index].flag = !this.patient[index].flag;
            }
        },
        deleteFavourite(favourite_id, flag, index) {
            if (flag) {
                axios.post('http://localhost:8000/api/favourites/delete-favourite/' + favourite_id)
                    .then((response) => {
                        console.log(response)
                    })
                this.patient[index].flag = !this.patient[index].flag;
            }
        }
    },
    created() {
        this.getFavourite();
    },
    computed: {
        filterPatients() {
            if (this.searchQuery) {
                return this.patient.filter((patient) => {
                    return patient.patient.user.name.includes(this.searchQuery.toLowerCase() || this.searchQuery.toUpperCase());
                });
            } else {
                return this.patient;
            }
        },
    },
};
</script>