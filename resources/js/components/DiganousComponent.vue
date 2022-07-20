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
                                <img v-bind:src="patient.photo"
                                    class="rounded-circle" width="150">
                                <div id="app" class="mt-3">
                                    <h4 class="mb-3">
                                        {{ moment().format("DD-MM-YYYY") }}
                                    </h4>
                                    <!-- <p class="text-secondary mb-1">Full Stack Developer</p>
                                              <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p> -->
                                    <!-- <button class="btn btn-primary">Follow</button> -->
                                    <button class="btn btn-outline-primary"><a class="profile" :href="'/PatientProfile/' + patient.id">
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
                <form method="POST" @submit.prevent>
                    <div class="card pt-3 panel container">
                        <div class="form-group panel">
                            <div class="panel-heading">
                                <span class="panel-icon">
                                    <i class="fa fa-star pr-2"></i>
                                </span>
                                <span class="panel-title"> Illness title </span>
                            </div>
                            <div class="form-group my-3 shadow-textarea">
                                <input type="text" class="form_control" placeholder="fever" v-model="disease_title">
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
                                    placeholder="Write something here..." v-model="diagnosis"></textarea>
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
                                    <span class="panel-title">Medicines</span>
                                </div>
                                <div class="scrollme">
                                    <table class="_table table table-hover table-responsive">
                                        <thead>
                                            <tr>
                                                <th scope="col">Medicine</th>
                                                <th scope="col">Strength</th>
                                                <th scope="col">Discription</th>
                                                <th scope="col">Period</th>
                                                <th scope="col" width="50px">
                                                    <div class="action_container">
                                                        <!-- <button type="button" class="success"
                                                            onclick="create_tr('table_body')">
                                                            <i class="fa fa-plus"></i>
                                                        </button> -->
                                                        <button class="button btn-xs btn-success" @click="addRow"><i
                                                                class="fa fa-plus"></i></button>
                                                    </div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody id="table_body">
                                            <tr v-for="(medicine, index) in medicines" :row="medicine" :key="index">
                                                <td>
                                                    <input type="hidden" :value="i++">
                                                    <input type="text" class="form_control"
                                                        v-model="medicine.brandName" />
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
                                                    <input type="text" class="form_control"
                                                        v-model="medicine.strength" />
                                                    <!-- list="strengh" /> -->
                                                    <!-- <datalist id="strengh">
                                                        <option v-for="med in medicine" :key="med.id"
                                                            v-bind:value="med.strength" v-bind:label="med.strength">
                                                        </option>
                                                    </datalist> -->
                                                </td>
                                                <!-- <td>
                                                    <input type="text" class="form_control" placeholder="amoun"
                                                        disabled>
                                                </td> -->
                                                <td>
                                                    <textarea placeholder="Description" class="form-control" rows="1"
                                                        v-model="medicine.discription"></textarea>
                                                </td>
                                                <td>
                                                    <input type="text" class="form_control" placeholder="week"
                                                        v-model="medicine.period">
                                                </td>
                                                <td>
                                                    <div class="action_container">
                                                        <!-- <button type="button" class="danger" onclick="remove_tr(this)">
                                                            <i class="fa fa-close"></i>
                                                        </button> -->
                                                        <button type="button"
                                                            class="text-center button btn-xs btn-danger"
                                                            v-on:click="removeRow(index)"><i
                                                                class="fa fa-close"></i></button>
                                                    </div>
                                                </td>
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
                                            v-model="doctor_notes"></textarea>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <textarea disabled placeholder="patient notes" class="form-control"
                                            rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="form-group btn btn-outline-primary" type="submit" v-on:click="submit()">Submit</button>
                    </div>
                </form>
            </div>

        </div>
        <!-- <component :is="'script'">
            function create_tr(table_id) {

            let table_body = document.getElementById(table_id),
            first_tr = table_body.firstElementChild,
            tr_clone = first_tr.cloneNode(true);

            table_body.append(tr_clone);

            clean_first_tr(table_body.firstElementChild);
            }

            function clean_first_tr(firstTr) {
            let children = firstTr.children;

            children = Array.isArray(children) ? children : Object.values(children);
            children.forEach(x=>{
            if(x !== firstTr.lastElementChild)
            {
            x.firstElementChild.value = '';
            }
            });
            }



            function remove_tr(This) {
            if(This.closest('tbody').childElementCount == 1)
            {
            alert("You Don't have Permission to Delete This ?");
            }else{
            This.closest('tr').remove();
            }
            }
        </component> -->
    </div>
</template>
<script>
import moment from "moment";
export default {
    data() {
        return {
            moment: moment,
            i: 0,
            user_id: this.$userId,
            doctor_id: null,
            patient_id: null,
            diagnosis_id: null,
            patient: [],
            medicine: [],
            med: '',
            imgSrc: 'https://bootdey.com/img/Content/avatar/avatar7.png',
            disease_title: '',
            diagnosis: '',
            doctor_notes: '',
            medicines: [
                {
                    diagnosiss_id: this.diagnosis_id,
                    patientt_id: this.patient_id,
                    brandName: '',
                    strength: '',
                    discription: '',
                    period: '',
                },
            ],
        };
    },
    methods: {
        // get id from link
        getIDfromURL() {
            console.log(window.location.pathname.split('/')[2])
            this.patient_id = window.location.pathname.split('/')[2]
            return window.location.pathname.split('/')[2];
        },
        getNextID() {
            axios.get('http://localhost:8000/api/diagnosis/get-last-record')
                .then((response) => {
                    console.log(response.data)
                    this.diagnosis_id = ++response.data.id
                    console.log(this.diagnosis_id)
                })
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
            axios.get('http://localhost:8000/api/patients/get-user-by-user/' + this.patient_id)
                .then((response) => {
                    console.log(response)
                    this.patient = response.data.user;
                    this.patient.user.birthDate = this.getAge(this.patient.user.birthDate)
                })
        },
        getDoctorID() {
            axios.get('http://localhost:8000/api/doctors/get-doctor-by-user/' + this.user_id)
                .then((response) => {
                    console.log(response)
                    var doc = response.data.doctor;
                    console.log(doc)
                    this.doctor_id = doc.id
                    console.log(this.doctor_id)
                })
        },
        submit() {
            axios.post('http://localhost:8000/api/diagnosis/insert-diagnosis',
                {
                    patient_id: this.patient.id,
                    doctor_id: this.doctor_id,
                    disease_title: this.disease_title,
                    diagnosis: this.diagnosis,
                    doctor_notes: this.doctor_notes
                }
            )
                .then((response) => {
                    console.log(response)
                    if (response.data.status) {
                        this.medicines.patientt_id = this.patient_id;
                        this.medicines.diagnosiss_id = this.diagnosis_id;
                        for (var i = 0; i < this.medicines.length; i++) {
                            axios.post('http://localhost:8000/api/medicines/insert-medicine',
                                // this.medicines
                                {
                                    diagnosis_id: this.diagnosis_id,
                                    patient_id: this.patient.id,
                                    brandName: this.medicines[i].brandName,
                                    strength: this.medicines[i].strength,
                                    discription: this.medicines[i].discription,
                                    period: this.medicines[i].period,
                                }
                                // this.drugs

                            )
                                .then((response) => {
                                    console.log(response)
                                    if (response.data.status) {
                                        // window.location.reload();
                                    }
                                })
                            console.log(this.medicines)
                        }
                    }
                })
        },
        addRow() {
            this.medicines.push({ medicine: '' });
            return
        },
        removeRow: function (index) {
            this.medicines.splice(index, 1);
        }
    },
    created() {
        this.getIDfromURL();
        this.getNextID();
        this.getPatient();
        this.getDoctorID();
    },
    computed: {
    }
};

</script>
