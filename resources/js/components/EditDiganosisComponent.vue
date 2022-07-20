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
                                    <button class="btn btn-outline-primary"><a class="profile"
                                            :href="'/PatientProfile/' + patient.id">
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
                        <div class="mt-2">
                            <button class="btn btn-outline-primary mb-3 " @click="isEditing = !isEditing"
                                v-if="!isEditing">
                                Edit
                            </button>
                            <button class="btn btn-outline-primary mb-3" @click="save" v-else-if="isEditing">
                                Save
                            </button>
                            <button class="btn btn-outline-primary mb-3" v-if="isEditing"
                                @click="getDiagnosis()">Cancel</button>
                        </div>
                        <div class="form-group panel">
                            <div class="panel-heading">
                                <span class="panel-icon">
                                    <i class="fa fa-star pr-2"></i>
                                </span>
                                <span class="panel-title"> Illness title </span>
                            </div>
                            <div class="form-group my-3 shadow-textarea">
                                <input class="form_control" placeholder="fever" type="text"
                                    style="background: transparent;" v-model="diagnosis.disease_title"
                                    :disabled="!isEditing" :class="{ view: !isEditing }">
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
                                <textarea placeholder="Write something here..." class="form-control" rows="3"
                                    type="text" style="background: transparent;" v-model="diagnosis.diagnosis"
                                    :disabled="!isEditing" :class="{ view: !isEditing }"></textarea>
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
                                                <th scope="col">Discription</th>
                                                <th scope="col">Period</th>
                                                <th scope="col" width="50px">
                                                    <div class="action_container">
                                                        <button class="button btn-xs btn-success" @click="addRow"><i
                                                                class="fa fa-plus"></i></button>
                                                    </div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody id="table_body" v-for="(med, index) in medicines" :key="index">
                                            <tr id="strenghs">
                                                <td>
                                                    <input class="form_control" placeholder="medicine" type="text"
                                                        style="background: transparent;" v-model="med.brandName"
                                                        :disabled="!isEditing" :class="{ view: !isEditing }">
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
                                                    <input class="form_control" placeholder="50g" type="text"
                                                        style="background: transparent;" v-model="med.strength"
                                                        :disabled="!isEditing" :class="{ view: !isEditing }">
                                                    <!-- list="strengh" /> -->
                                                    <!-- <datalist id="strengh">
                                                        <option v-for="med in medicine" :key="med.id"
                                                            v-bind:value="med.strength" v-bind:label="med.strength">
                                                        </option>
                                                    </datalist> -->
                                                </td>
                                                <td>
                                                    <input class="form_control" placeholder="after breakfast"
                                                        type="text" style="background: transparent;"
                                                        v-model="med.discription" :disabled="!isEditing"
                                                        :class="{ view: !isEditing }">
                                                </td>
                                                <td>
                                                    <input class="form_control" placeholder="for a week" type="text"
                                                        style="background: transparent;" v-model="med.period"
                                                        :disabled="!isEditing" :class="{ view: !isEditing }">
                                                </td>
                                                <td>
                                                    <div class="action_container">
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
                                        <textarea placeholder="doctor notes" class="form-control" rows="3" type="text"
                                            style="background: transparent;" v-model="diagnosis.doctor_notes"
                                            :disabled="!isEditing" :class="{ view: !isEditing }"></textarea>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <textarea disabled placeholder="patient notes" class="form-control"
                                            v-model="diagnosis.patient_notes" rows="3"></textarea>
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
            user_id: this.$userId,
            patient_id: null,
            diagnosis_id: null,
            diagnosis: [],
            patient: [],
            medicines: [],
            imgSrc: 'https://bootdey.com/img/Content/avatar/avatar7.png',
            isEditing: false
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
                    axios.get('http://localhost:8000/api/medicines/get-medicine-diagnosis/' + this.diagnosis.id)
                        .then((response) => {
                            console.log(response.data.medicine)
                            this.medicines = response.data.medicine;
                        })
                })
                if(this.isEditing){
                    this.isEditing = !this.isEditing;
                }
        },
        addRow() {
            this.medicines.push({ medicine: '' });
            return
        },
        removeRow: function (index) {
            this.medicines.splice(index, 1);
        },
        save() {
            axios.post('http://localhost:8000/api/diagnosis/update-diagnosis/' + this.diagnosis_id,
                {
                    disease_title: this.diagnosis.disease_title,
                    diagnosis: this.diagnosis.diagnosis,
                    doctor_notes: this.diagnosis.doctor_notes,
                }
            )
                .then((response) => {
                    console.log(response)
                })
            for (var i = 0; i < this.medicines.length; i++) {
                if (this.medicines[i].id) {
                    axios.post('http://localhost:8000/api/medicines/update-medicine/' + this.medicines[i].id,
                        {
                            brandName: this.medicines[i].brandName,
                            strength: this.medicines[i].strength,
                            discription: this.medicines[i].discription,
                            period: this.medicines[i].period,
                        }
                    )
                        .then((response) => {
                            console.log(response)
                        })
                } else {
                    axios.post('http://localhost:8000/api/medicines/insert-medicine',
                        // this.medicines
                        {
                            diagnosis_id: this.diagnosis_id,
                            patient_id: this.patient.id,
                            brandName: this.medicines[i].brandName,
                            // companyName: this.medicines[i].companyName,
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
                }
            }
            this.isEditing = !this.isEditing;
        }
    },
    created() {
        this.getIDfromURL();
        this.getDiagnosis();
    },
    computed: {
    }
};
</script>
