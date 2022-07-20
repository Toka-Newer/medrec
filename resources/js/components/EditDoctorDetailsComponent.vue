<template>
    <div>
        <component :is="'style'">
            .vs__clear{
                display: none
            }
            .edit{
            color: #f16528;
            border: 2px solid #f16528;
            }
            .edit:hover{
            color: #fff;
            background-color: #f16528;
            border-color: #f16528;
            }
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
                <form method="post" @submit.prevent>
                    <div class="row">
                        <div class="col-lg-4 col-md-5">
                            <div class="card-body profile-img">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <img v-bind:src="doctorData.photo" alt="Admin"
                                        class="rounded-circle" width="150">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-7">
                            <div class="profile-head">
                                <h4 class="mb-1">
                                    Dr: {{ doctorUser.name }}
                                </h4>
                                <h6 class="mb-1 fl">
                                    {{ doctorDepartment.department }}

                                </h6>
                                <div style="text-align:end;">
                                    <button class="edit btn btn-outline-primary mb-3 " @click="isEditing1 = !isEditing1"
                                        v-if="!isEditing1">
                                        Edit
                                    </button>
                                    <button class="edit btn btn-outline-primary mb-3" @click="save"
                                        v-else-if="isEditing1">
                                        Save
                                    </button>
                                    <button class="edit btn btn-outline-primary mb-3" v-if="isEditing1"
                                        @click="getDoctor()">Cancel</button>
                                </div>
                                <!-- <p class="proile-rating">RANKINGS : <span>8/5</span></p> -->

                                <div>
                                    <!-- <p class="mb-4">{{ doctor.info }}</p> -->
                                    <textarea class="form-control mb-2" rows="3" type="text"
                                        style="background: transparent; border-bottom:none;" v-model="doctorData.info"
                                        :disabled="!isEditing1" :class="{ view: !isEditing1 }"></textarea>
                                    <!-- <button class="btn btn-outline-primary mb-3 " @click="isEditing = !isEditing"
                                        v-if="!isEditing">
                                        Edit
                                    </button>
                                    <button class="btn btn-outline-primary mb-3" @click="save" v-else-if="isEditing">
                                        Save
                                    </button>
                                    <button class="btn btn-outline-primary mb-3" v-if="isEditing"
                                        @click="isEditing = false">Cancel</button> -->
                                </div>

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

                    </div>
                </form>

                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">

                            <p class="mt-4 mb-2">Work Hour</p>
                            <h6 class="">
                                <label>from</label>
                                <!-- {{ doctorData.workFrom }}  -->
                                <input type="text" style="background: transparent; border: 0;"
                                    v-model="doctorData.workFrom" :disabled="!isEditing1" :class="{ view: !isEditing1 }"
                                    v-on:change="adjustInput" :style="{ width: reactiveWidth }">
                                <label>am</label>
                                <label>to</label>
                                <!-- {{ doctorData.workTo }}  -->
                                <input type="text" style="background: transparent; border: 0;"
                                    v-model="doctorData.workTo" :disabled="!isEditing1" :class="{ view: !isEditing1 }"
                                    v-on:change="adjustInput" :style="{ width: reactiveWidth }">
                                <label>pm</label>
                            </h6>

                            <p class="mt-4 mb-2">Reservation Price</p>
                            <h6>
                                <!-- {{ doctorData.price }}  -->
                                <input type="text" style="background: transparent; border: 0;"
                                    v-model="doctorData.price" :disabled="!isEditing1" :class="{ view: !isEditing1 }"
                                    v-on:change="adjustInput" :style="{ width: reactiveWidth }">
                                egp
                            </h6>


                            <p class="mt-4 mb-2">Address</p>
                            <h6 class="my-4">
                                <!-- {{ doctorData.address }} -->
                                <textarea class="form-control mb-2" rows="3" type="text"
                                    style="background: transparent;" v-model="doctorData.address"
                                    :disabled="!isEditing1" :class="{ view: !isEditing1 }"></textarea>
                            </h6>
                            <!--Google map-->
                            <!-- <div class="map-responsive my-4">
                                <iframe
                                    src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                    width="100%" height="auto" frameborder="0" style="border:0" allowfullscreen>
                                </iframe>
                            </div> -->


                            <!-- <p class="mb-4">Doctor Profils</p>
                            <ul class="social-list">
                                <li class="mb-2">
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="#">
                                        <i class="fab fa-google"></i>
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a href="#">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                            </ul>End Social-List -->
                        </div>
                    </div>
                    <div class="card info col-md-8">
                        <div class="card-body">
                            <div class="row">
                                <hr>

                                <div class="col-md-3">
                                    <h6 class="mb-0 inform">Full Name</h6>
                                </div>
                                <div class="col-md-9 text-secondary">
                                    <input type="text" style="background: transparent; border: 0;"
                                        v-model="doctorUser.name" :disabled="!isEditing1"
                                        :class="{ view: !isEditing1 }">
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
                                    <!-- {{ doctorData.phone }} -->
                                    <input type="text" style="background: transparent; border: 0;"
                                        v-model="doctorData.phone" :disabled="!isEditing1"
                                        :class="{ view: !isEditing1 }">
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
                                    <!-- {{ doctorUser.birthDate }} -->
                                    <input type="type" style="background: transparent; border: 0;"
                                        v-model="doctorUser.gender" :disabled="!isEditing1"
                                        :class="{ view: !isEditing1 }">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-3">
                                    <h6 class="mb-0 inform">Birth Date</h6>
                                </div>
                                <div class="col-md-9 text-secondary">
                                    <!-- {{ doctorUser.birthDate }} -->
                                    <input type="date" style="background: transparent; border: 0;"
                                        v-model="doctorUser.birthDate" :disabled="!isEditing1"
                                        :class="{ view: !isEditing1 }">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-3">
                                    <h6 class="mb-0 inform">Department</h6>
                                </div>
                                <div class="col-md-9 text-secondary">
                                    <!-- {{ doctorDepartment.department }} -->
                                    <!-- <input type="text" style="background: transparent; border: 0;"
                                        v-model="doctorDepartment.department" :disabled="!isEditing1"
                                        :class="{ view: !isEditing1 }"> -->
                                    <!-- <model-list-select :list="departments" option-value="id"
                                        option-text="department_name" v-model="doctorDepartment.department"
                                        placeholder="Choose department" :disabled="!isEditing1"
                                        :class="{ view: !isEditing1 }">
                                    </model-list-select> -->
                                    <v-select v-model="doctorDepartment.department" :options="departmentSelections"
                                         menu-props="auto" label="department"
                                        hide-details prepend-icon="mdi-map" single-line :disabled="!isEditing1"
                                        :class="{ view: !isEditing1 }"></v-select>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-3">
                                    <h6 class="mb-0 inform">SKILLS</h6>
                                </div>
                                <div class="col-md-9 text-secondary">
                                    <div>
                                        <button class="edit btn btn-outline-primary mb-3" @click="addinput('skill')"
                                            v-if="isEditing1">
                                            Add
                                        </button>
                                    </div>
                                    <ul>
                                        <li v-for="(skill, index) in doctorData.skill" :key="index">
                                            <input type="text" style="background: transparent; border: 0;"
                                                v-model="doctorData.skill[index]" :disabled="!isEditing1"
                                                :class="{ view: !isEditing1 }">
                                            <button type="button" class="text-center button btn-xs btn-danger"
                                                v-on:click="removeinput(index, 'skill')" v-if="isEditing1"><i
                                                    class="fa fa-close"></i></button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- services -->
                <div class="seventh-content">
                    <div class="row">
                        <h2 class="col-md-6 mb-5" style="color: #4b88c7;">Services</h2>
                        <div class="col-md-6" style="text-align:end;">
                            <button class="edit btn btn-outline-primary mb-3 " @click="isEditing = !isEditing"
                                v-if="!isEditing">
                                Edit
                            </button>
                            <button class="edit btn btn-outline-primary mb-3" @click="save" v-else-if="isEditing">
                                Save
                            </button>
                            <button class="edit btn btn-outline-primary mb-3" @click="addinput('service')"
                                v-if="isEditing">
                                Add
                            </button>
                            <button class="edit btn btn-outline-primary mb-3" v-if="isEditing"
                                @click="getDoctor()">Cancel</button>
                        </div>
                    </div>
                    <div class="master row mb-5" style="margin: auto;">
                        <div class="chef col-xl-3 col-md-6 mb-3"
                            v-for="(serviceTitle, index) in doctorData.serviceTitle" :key="index">
                            <h3 class="john mb-3">
                                <!-- {{ serviceTitle }} -->
                                <input type="text" style="background: transparent; border: 0;"
                                    v-model="doctorData.serviceTitle[index]" :disabled="!isEditing"
                                    :class="{ view: !isEditing }" placeholder="title">
                            </h3>
                            <p class="owner">
                                <!-- {{ doctorData.serviceBody[index] }} -->
                                <textarea class="form-control mb-2" rows="3" type="text"
                                    style="background: transparent;" v-model="doctorData.serviceBody[index]"
                                    :disabled="!isEditing" :class="{ view: !isEditing }" placeholder="body"></textarea>
                            </p>
                            <button type="button" class="text-center button btn-xs btn-danger"
                                v-on:click="removeinput(index, 'service')" v-if="isEditing"><i
                                    class="fa fa-close"></i></button>
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
            doctorData: [],
            doctorUser: [],
            doctorDepartment: [],
            departments: [],
            departmentSelections: [
                'dentistry',
                'heart disease',
                'kidney disease',
                'gland diseases',
                'brain and nerve diseases',
                'eyes illnesses',
                'skin diseases',
                'psychiatric illness',
                'tumors',
                'ear, nose and throat diseases',
                'internal diseases and digestive system',
                'obstetrics and gynecology'
            ],
            user_id: this.$userId,
            isEditing1: false,
            isEditing: false,
            reactiveWidth: '50px', // (some default value)
        };
    },
    methods: {
        adjustInput() {
            this.reactiveWidth = event.target.value.length + 'ch'
        },
        getDoctor() {
            axios.get('http://localhost:8000/api/doctors/get-doctor-by-user/' + this.user_id)
                .then((response) => {
                    console.log(response)
                    console.log(response.data.doctor);
                    this.doctorData = response.data.doctor;
                    this.doctorUser = response.data.doctor.user;
                    console.log(this.doctorUser)
                    this.doctorDepartment = response.data.doctor.department;
                })
            if (this.isEditing1) {
                this.isEditing1 = !this.isEditing1;
            } else if (this.isEditing) {
                this.isEditing = !this.isEditing;
            }
        },
        getDepartment(){
            axios.get('http://localhost:8000/api/departments/get-department')
                .then((response) => {
                    console.log(response.data.data)
                    this.departments = response.data.data
                })
        },
        save() {
            axios.post('http://localhost:8000/api/update-user-profile-first/' + this.user_id,
                {
                    name: this.doctorData.user.name,
                    email: this.doctorData.user.email,
                    birthDate: this.doctorData.user.birthDate,
                    gender: this.doctorData.user.gender,
                    nationalID: this.doctorData.user.nationalID,
                }

            )
                .then((response) => {
                    console.log(response)
                })
            for(var i = 0; i < this.departments.length; i++){
                if(this.departments[i].department == this.doctorDepartment.department){
                    this.doctorData.department_id = this.departments[i].id;
                    break;
                }
            }
            axios.post('http://localhost:8000/api/doctors/update-doctor/' + this.doctorData.id,
                {
                    info: this.doctorData.info,
                    phone: this.doctorData.phone,
                    department_id: this.doctorData.department_id,
                    price: this.doctorData.price,
                    workFrom: this.doctorData.workFrom,
                    workTo: this.doctorData.workTo,
                    address: this.doctorData.address,
                    skill: this.doctorData.skill,
                    serviceTitle: this.doctorData.serviceTitle,
                    serviceBody: this.doctorData.serviceBody
                }

            )
                .then((response) => {
                    console.log(response)
                })
            if (this.isEditing1) {
                this.isEditing1 = !this.isEditing1;
            } else if (this.isEditing) {
                this.isEditing = !this.isEditing;
            }
        },
        addinput(value) {
            if (value == 'skill') {
                this.doctorData.skill.push('');
            } else if (value == 'service') {
                this.doctorData.serviceTitle.push('');
                this.doctorData.serviceBody.push('');
            }
        },
        removeinput: function (index, value) {
            if (value == 'skill') {
                this.doctorData.skill.splice(index, 1);
            } else if (value == 'service') {
                this.doctorData.serviceTitle.splice(index, 1);
                this.doctorData.serviceBody.splice(index, 1);
            }
        },
    },
    created() {
        this.getDepartment();
        this.getDoctor();
    },
    computed: {
        reactiveWidth() {
            return this.number + 'ch';
        }
    }
};
</script>

