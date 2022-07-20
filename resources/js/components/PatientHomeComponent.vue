<template>
    <div>
        <component :is="'style'">
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
                                <img v-bind:src="patient.photo" alt="Admin"
                                    class="rounded-circle" width="150">
                                <div class="mt-3">
                                    <h4 class="mb-3">{{ patient.user.name }}</h4>
                                    <!-- <p class="text-secondary mb-1">Full Stack Developer</p>
                                                      <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p> -->
                                    <!-- <button class="btn btn-primary">Follow</button> -->
                                    <button class="btn btn-outline-primary"> <a class="profile"
                                            :href="'/PatientProfile/' + patient.id">
                                            Profile </a> </button>
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

            <!-- <div id="app2" class="container">
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
                                                <th scope="col">Company Name</th>
                                                <th scope="col">Discription</th>
                                                <th scope="col">Period</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr v-for="med in medicines" :key="med.id">
                                                <th scope="row"> {{ med.brandName }} </th>
                                                <td>{{ med.strength }} </td>
                                                <td>{{ med.companyName }} </td>
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
                    </div>

                </div>
            </div> -->


            <div id="app2" class="container">
                <div class="row">
                    <div class="col-xl-3 col-sm-5 my-3 first" style="padding-left: 0;">
                        <div class="card">
                            <div class="card-body hvr-shadow">
                                <button class="btn btn-outline-primary mb-3 " @click="isEditing1 = !isEditing1"
                                    v-if="!isEditing1">
                                    Edit
                                </button>
                                <button class="btn btn-outline-primary mb-3" @click="saveAL" v-else-if="isEditing1">
                                    Save
                                </button>
                                <button class="btn btn-outline-primary mb-3" @click="addinput('allergic')"
                                    v-if="isEditing1">
                                    Add
                                </button>
                                <button class="btn btn-outline-primary mb-3" v-if="isEditing1"
                                    @click="getPatient()">Cancel</button>

                                <div class="card-title">
                                    <i class="fa-solid fa-clipboard-list mr-2"
                                        style="font-size: 125%; color: #f44336!important;"></i>
                                    Allergic List
                                </div>
                                <div class="ksm">
                                    <ul class="list-group list-group-flush">
                                        <li v-for=" (item, index) in patient.allergicList " :key="index"
                                            class="list-group-item list-group-item-action d-flex align-items-center">
                                            <!-- {{ item }} -->
                                            <input type="text" style="background: transparent; border: 0;"
                                                v-model="patient.allergicList[index]" :disabled="!isEditing1"
                                                :class="{ view: !isEditing1 }">
                                            <button type="button" class="text-center button btn-xs btn-danger"
                                                v-on:click="removeinput(index, 'allergic')" v-if="isEditing1"><i
                                                    class="fa fa-close"></i></button>
                                        </li>
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
                            <!-- <div class="card-title"> Blood Pressure </div> -->
                            <div class="card-body hvr-shadow">
                                <div class="row">
                                    <div class="col-md-12 d-flex flex-column my-3">
                                        <div class="row">
                                            <i class='col-md-3 fa-solid fa-droplet' style="font-size: 200%;
                                                        color: #fb3d4e;"></i>
                                            <div class='col-md-9' style="text-align: right;">
                                                <button class="btn btn-outline-primary mb-3 "
                                                    @click="isEditing2 = !isEditing2" v-if="!isEditing2">
                                                    Edit
                                                </button>
                                                <button class="btn btn-outline-primary mb-3" @click="save"
                                                    v-else-if="isEditing2">
                                                    Save
                                                </button>
                                                <button class="btn btn-outline-primary mb-3" v-if="isEditing2"
                                                    @click="getPatient()">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 d-flex flex-column my-3">
                                        <h5>Blood Pressure</h5>
                                    </div>
                                    <div class="col-md-12 d-flex my-3">
                                        <input type="text" style="background: transparent; border: 0;"
                                            v-model="patient.bloodPressure" :disabled="!isEditing2"
                                            :class="{ view: !isEditing2 }" v-on:change="adjustInput"
                                            :style="{ width: reactiveWidth }">
                                        <!-- {{ patient.bloodPressure }}  -->
                                        <div>mmhg</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 my-3">
                        <div class="card">
                            <!-- <div class="card-title"> Blood Pressure </div> -->
                            <div class="card-body hvr-shadow">
                                <div class="row">
                                    <div class="col-md-12 d-flex flex-column my-3">
                                        <div class="row">
                                            <i class="col-md-3 fa-solid fa-head-side-mask" style="font-size: 200%;
                                                        color: #e4a540;"></i>
                                            <div class='col-md-9' style="text-align: right;">
                                                <button class="btn btn-outline-primary mb-3 "
                                                    @click="isEditing3 = !isEditing3" v-if="!isEditing3">
                                                    Edit
                                                </button>
                                                <button class="btn btn-outline-primary mb-3" @click="save"
                                                    v-else-if="isEditing3">
                                                    Save
                                                </button>
                                                <button class="btn btn-outline-primary mb-3" v-if="isEditing3"
                                                    @click="getPatient()">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 d-flex flex-column my-3">
                                        <h5>Blood Oxygen</h5>
                                    </div>
                                    <div class="col-md-12 d-flex my-3">
                                        <!-- {{ patient.bloodOxygen }} -->
                                        <input type="text" style="background: transparent; border: 0;"
                                            v-model="patient.bloodOxygen" :disabled="!isEditing3"
                                            :class="{ view: !isEditing3 }" v-on:change="adjustInput"
                                            :style="{ width: reactiveWidth }">
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
                                        <div class="row">
                                            <i class="col-md-3 fa-solid fa-temperature-half" style="font-size: 200%;
                                                        color: #2818a3;"></i>
                                            <div class='col-md-9' style="text-align: right;">
                                                <button class="btn btn-outline-primary mb-3 "
                                                    @click="isEditing4 = !isEditing4" v-if="!isEditing4">
                                                    Edit
                                                </button>
                                                <button class="btn btn-outline-primary mb-3" @click="save"
                                                    v-else-if="isEditing4">
                                                    Save
                                                </button>
                                                <button class="btn btn-outline-primary mb-3" v-if="isEditing4"
                                                    @click="getPatient()">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 d-flex flex-column my-3">
                                        <h5>Body Temperature</h5>
                                    </div>
                                    <div class="col-md-12 d-flex my-3">
                                        <!-- {{ patient.bodyTemperature }} -->
                                        <input type="text" style="background: transparent; border: 0;"
                                            v-model="patient.bodyTemperature" :disabled="!isEditing4"
                                            :class="{ view: !isEditing4 }" v-on:change="adjustInput"
                                            :style="{ width: reactiveWidth }">
                                        ° C
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
                                        <div class="row">
                                            <i class="col-md-3 fa-solid fa-fire-flame-simple" style="color: #308756;
                                                        font-size: 200%;"></i>
                                            <div class='col-md-9' style="text-align: right;">
                                                <button class="btn btn-outline-primary mb-3 "
                                                    @click="isEditing5 = !isEditing5" v-if="!isEditing5">
                                                    Edit
                                                </button>
                                                <button class="btn btn-outline-primary mb-3" @click="save"
                                                    v-else-if="isEditing5">
                                                    Save
                                                </button>
                                                <button class="btn btn-outline-primary mb-3" v-if="isEditing5"
                                                    @click="getPatient()">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 d-flex flex-column my-3">
                                        <h5>Blood Glucose</h5>
                                    </div>
                                    <div class="col-md-12 d-flex my-3">
                                        <!-- {{ patient.bloodGlucose }}  -->
                                        <input type="text" style="background: transparent; border: 0;"
                                            v-model="patient.bloodGlucose" :disabled="!isEditing5"
                                            :class="{ view: !isEditing5 }" v-on:change="adjustInput"
                                            :style="{ width: reactiveWidth }">
                                        mg/dl
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
                                <button class="btn btn-outline-primary mb-3 " @click="isEditing9 = !isEditing9"
                                    v-if="!isEditing9">
                                    Edit
                                </button>
                                <button class="btn btn-outline-primary mb-3" @click="saveAL" v-else-if="isEditing9">
                                    Save
                                </button>
                                <button class="btn btn-outline-primary mb-3" @click="addinput('chronic')"
                                    v-if="isEditing9">
                                    Add
                                </button>
                                <button class="btn btn-outline-primary mb-3" v-if="isEditing9"
                                    @click="getPatient()">Cancel</button>
                                <div class="card-title">
                                    <i class="fa-solid fa-disease mr-2"
                                        style="font-size: 125%; color: #ff9800!important;"></i>
                                    Chronic Diseases
                                </div>
                                <div class="ksm">
                                    <ul class="list-group list-group-flush">
                                        <li v-for="(item, index) in patient.chronicDiseases" :key="index"
                                            class="list-group-item list-group-item-action d-flex align-items-center">
                                            <!-- <input type="text" style="background: transparent; border: 0;"
                                                v-model="patient.chronicDiseases[index]" :disabled="!isEditing9"
                                                :class="{ view: !isEditing9 }"> -->

                                            <v-select v-model="patient.chronicDiseases[index]"
                                                :options="chronicDiseases" menu-props="auto" label="department"
                                                hide-details prepend-icon="mdi-map" single-line :disabled="!isEditing9"
                                                :class="{ view: !isEditing9 }"></v-select>

                                            <button type="button" class="text-center button btn-xs btn-danger"
                                                v-on:click="removeinput(index, 'chronic')" v-if="isEditing9"><i
                                                    class="fa fa-close"></i></button>
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
                                        <li v-for="(item, index) in patient.possibleGeneticD" :key="index"
                                            class="list-group-item list-group-item-action d-flex align-items-center">
                                            <!-- {{ item }} -->
                                            <input type="text" style="background: transparent; border: 0;"
                                                v-model="patient.possibleGeneticD[index]" :disabled="!isEditing6"
                                                :class="{ view: !isEditing6 }">
                                            <button type="button" class="text-center button btn-xs btn-danger"
                                                v-on:click="removeinput(index, 'possible')" v-if="isEditing6"><i
                                                    class="fa fa-close"></i></button>
                                        </li>
                                    </ul>
                                    <button class="btn btn-outline-primary mb-3 " @click="isEditing6 = !isEditing6"
                                        v-if="!isEditing6">
                                        Edit
                                    </button>
                                    <button class="btn btn-outline-primary mb-3" @click="saveAL" v-else-if="isEditing6">
                                        Save
                                    </button>
                                    <button class="btn btn-outline-primary mb-3" @click="addinput('possible')"
                                        v-if="isEditing6">
                                        Add
                                    </button>
                                    <button class="btn btn-outline-primary mb-3" v-if="isEditing6"
                                        @click="getPatient()">Cancel</button>
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

                    <!-- </div>
                                </div>

                                <div class="container mb-5">
                                    <div class="row"> -->

                    <div class="col-xl-4 col-sm-6 my-3">
                        <div class="card">
                            <div class="card-body hvr-shadow">
                                <div class="card-title">
                                    <!-- <i class="fa-solid fa-clipboard-list mr-2" style="font-size: 125%;"></i> -->
                                    <i class="fa-solid fa-head-side-cough mr-2"
                                        style="font-size: 125%; color: #ff9800!important;"></i>
                                    Diseases that he/she suffred or suffring from
                                </div>
                                <div class="ksm">
                                    <ul class="list-group list-group-flush">
                                        <li v-for="Disease in patient.diagnosis" :key="Disease.id"
                                            class="list-group-item list-group-item-action align-items-center">
                                            <a :href="'/ShowDiganous/' + Disease.id"
                                                style="text-decoration: none;"><span> {{ Disease.disease_title }}
                                                </span> <span class="fr">
                                                    {{ moment(Disease.created_at).format("DD-MM-YYYY") }}</span></a>
                                        </li>
                                        <!-- {{ -- < li class= "list-group-item list-group-item-action align-items-center" >
                                                                                <span> Disease Title </span>
                                                                                <span class="fr">18/8/2020 <span
                                                                                        style="color: rgba(0, 0, 0, 0.4);font-size: 13px;">"18/9"</span></span>
                                                                            </li>
                                        <li class="list-group-item list-group-item-action align-items-center">
                                            <span> Disease Title </span>
                                            <span class="fr">18/8/2020 <span
                                                style="color: rgba(0, 0, 0, 0.4);font-size: 13px;">"two
                                                weeks"</span></span>
                                        </li> --}} -->
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
                                        <li v-for="(habbit, index) in patient.habbits" :key="index"
                                            class="list-group-item list-group-item-action d-flex align-items-center">
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
                    </div>-->

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
            patient: [],
            user_id: this.$userId,
            patient_id: null,
            medicines: [],
            list: [],
            imgSrc: 'https://bootdey.com/img/Content/avatar/avatar7.png',
            dateString: '',
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
        // get id from link
        getIDfromURL() {
            console.log(window.location.pathname.split('/')[2])
            this.patient_id = window.location.pathname.split('/')[2]
            return window.location.pathname.split('/')[2];
        },
        adjustInput() {
            this.reactiveWidth = event.target.value.length + 'ch'
        },
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
                    phone: this.patient.phone,
                    address: this.patient.address,
                    bloodType: this.patient.bloodType,
                    height: this.patient.height,
                    weight: this.patient.weight,
                    job: this.patient.job,
                }

            )
                .then((response) => {
                    console.log(response)
                })
            this.isEditing = !this.isEditing;
        },
        addinput(value) {
            if (value == 'allergic') {
                this.patient.allergicList.push('');
            } else if (value == 'possible') {
                this.patient.possibleGeneticD.push('');
            } else if (value == 'habbit') {
                this.patient.habbits.push('');
            } else if (value == 'relative') {
                this.patient.relativesName.push('');
                this.patient.relativesPhone.push('');
            } else if (value == 'chronic') {
                this.patient.chronicDiseases.push('');
            }
            return
        },
        removeinput: function (index, value) {
            if (value == 'allergic') {
                this.patient.allergicList.splice(index, 1);
            } else if (value == 'possible') {
                this.patient.possibleGeneticD.splice(index, 1);
            } else if (value == 'habbit') {
                this.patient.habbits.splice(index, 1);
            } else if (value == 'relative') {
                this.patient.relativesName.splice(index, 1);
                this.patient.relativesPhone.splice(index, 1);
            } else if (value == 'chronic') {
                this.patient.chronicDiseases.splice(index, 1);
            }
        },
        saveAL() {
            axios.post('http://localhost:8000/api/patients/update-user/' + this.patient.id,
                {
                    phone: this.patient.phone,
                    address: this.patient.address,
                    bloodType: this.patient.bloodType,
                    height: this.patient.height,
                    weight: this.patient.weight,
                    job: this.patient.job,
                    socialStatus: this.patient.socialStatus,
                    allergicList: this.patient.allergicList,
                    bloodPressure: this.patient.bloodPressure,
                    bloodOxygen: this.patient.bloodOxygen,
                    bodyTemperature: this.patient.bodyTemperature,
                    bloodGlucose: this.patient.bloodGlucose,
                    chronicDiseases: this.patient.chronicDiseases,
                    possibleGeneticD: this.patient.possibleGeneticD,
                    habbits: this.patient.habbits,
                    relativesName: this.patient.relativesName,
                    relativesPhone: this.patient.relativesPhone,
                }

            )
                .then((response) => {
                    console.log(response)
                })
            if (this.isEditing1) {
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
        getPatient() {
            axios.get('http://localhost:8000/api/patients/get-user/' + this.patient_id)
                .then((response) => {
                    this.patient = response.data.user
                    console.log(this.patient)
                    this.patient.user.birthDate = this.getAge(this.patient.user.birthDate)
                    console.log(this.patient)
                })
            axios.get('http://localhost:8000/api/medicines/get-medicine-by-patient/' + this.patient_id)
                .then((response) => {
                    this.medicines = response.data.medicine
                    console.log(this.medicines)
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
        this.getIDfromURL();
        this.getPatient();
    },
    computed: {
        reactiveWidth() {
            return this.number + 'ch';
        }
    },
};
</script>
