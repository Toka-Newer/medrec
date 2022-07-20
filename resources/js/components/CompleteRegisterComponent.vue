<template>
    <div>
        <component :is="'style'">
            .vs__clear{
                display: none
            }
            <!-- @media (min-width: 1500px)
            {
            .main{
            height: 100vh;
            }
            } -->
            .register{
            background: -webkit-linear-gradient(left,#4b88c7, #3931af);
            margin-top: 2.5%;
            padding: 3%;
            }
            @media (max-width: 767px){
            .main {
            margin-top: 0;
            }
            .register{
            margin-top: 0;
            }
            }
            .register-left{
            text-align: center;
            color: #fff;
            margin-top: 22%;
            }
            .register-left input{
            border: none;
            border-radius: 1.5rem;
            padding: 2%;
            width: 60%;
            background: #f8f9fa;
            font-weight: bold;
            color: #383d41;
            margin-top: 30%;
            margin-bottom: 3%;
            cursor: pointer;
            }
            .register-right{
            background: #f8f9fa;
            border-top-left-radius: 10% 50%;
            border-bottom-left-radius: 10% 50%;
            }
            .register-left img{
            margin-top: 15%;
            margin-bottom: 5%;
            width: 25%;
            -webkit-animation: mover 2s infinite alternate;
            animation: mover 1s infinite alternate;
            }
            @-webkit-keyframes mover {
            0% { transform: translateY(0); }
            100% { transform: translateY(-20px); }
            }
            @keyframes mover {
            0% { transform: translateY(0); }
            100% { transform: translateY(-20px); }
            }
            .register-left p{
            font-weight: lighter;
            padding: 12%;
            margin-top: -9%;
            }
            .register .register-form{
            padding: 10%;
            margin-top: 10%;
            }
            .btnRegister{
            float: right;
            margin-top: 10%;
            border: none;
            border-radius: 0.5rem;
            padding: 2%;
            background: #0062cc;
            color: #fff;
            <!-- font-weight: 600; -->
            width: 50%;
            cursor: pointer;
            }
            .register .nav-tabs{
            margin-top: 3%;
            border: none;
            background: #4b88c7;
            border-radius: 1.5rem;
            width: 28%;
            float: right;
            }
            .register .nav-tabs .nav-link{
            padding: 2%;
            height: 34px;
            font-weight: 600;
            color: #fff;
            border-top-right-radius: 1.5rem;
            border-bottom-right-radius: 1.5rem;
            }
            .register .nav-tabs .nav-link:hover{
            border: none;
            }
            .register .nav-tabs .nav-link.active{
            width: 100px;
            color: #4b88c7;
            border: 2px solid #4b88c7;
            border-top-left-radius: 1.5rem;
            border-bottom-left-radius: 1.5rem;
            }
            .register-heading{
            text-align: center;
            margin-top: 8%;
            margin-bottom: -15%;
            color: #495057;
            }
            footer {
            display:none;
            }
            header {
            display: none;
            }
        </component>
        <div class="main">

            <div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <h3>Welcome Doctor </h3>
                        <p>Please Complete Your Data Information after Register!</p>
                        <!-- <input type="submit" name="" value="Login" /><br /> -->
                    </div>
                    <div class="col-md-9 register-right">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h4 class="register-heading">Please Apply These Information</h4>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Phone *"
                                                v-model="phone" />
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Address *"
                                                v-model="address" />
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control" placeholder="Your Info *"
                                                style="width: 100%; height: 150px;" rows="3" v-model="info">
                                                </textarea>
                                        </div>
                                       <div class="form-group">
                                            <!-- <select class="form-control">
                                                <option class="hidden" selected disabled>
                                                    Please select your department
                                                </option>
                                                <option>internal diseases and digestive system  </option>
                                                <option>Pracrical</option>
                                                <option>eyes</option>
                                            </select> -->
                                            <v-select v-model="department"
                                                :options="departmentSelections" menu-props="auto" label="department"
                                                hide-details prepend-icon="mdi-map" single-line></v-select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Price For Book *"
                                                v-model="price" />
                                        </div>
                                        <!-- <div class="form-group">
                                            <select class="form-control">
                                                <option class="hidden" selected disabled>
                                                    Please select your department
                                                </option>
                                                <option>Dentisity fwnfowdklwl  </option>
                                                <option>Pracrical</option>
                                                <option>eyes</option>
                                            </select>
                                            <v-select v-model="department"
                                                :options="departmentSelections" menu-props="auto" label="department"
                                                hide-details prepend-icon="mdi-map" single-line></v-select>
                                        </div> -->
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="work start *"
                                                v-model="workFrom" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="work End *"
                                                v-model="workTo" />
                                        </div>
                                        <input type="submit" class="btnRegister form-group btn btn-outline-primary"
                                            value="Register" v-on:click="submit()" />

                                    </div>
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
export default {
    data() {
        return {
            user_id: this.$userId,
            doctor: [],
            info: '',
            phone: '',
            departments: [],
            department: 'Please select your department',
            department_id: null,
            price: '',
            workFrom: '',
            workTo: '',
            address: '',
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
        };
    },
    methods: {
        getDoctor() {
            axios.get('http://localhost:8000/api/doctors/get-doctor-by-user/' + this.user_id)
                .then((response) => {
                    console.log(response.data)
                    this.doctor = response.data.doctor;
                })
        },
        getDepartment(){
            axios.get('http://localhost:8000/api/departments/get-department')
                .then((response) => {
                    console.log(response.data.data)
                    this.departments = response.data.data
                })
        },
        submit() {
            for (var i = 0; i < this.departments.length; i++){
                if( this.departments[i].department == this.department){
                    this.department_id = this.departments[i].id
                }
            }
            axios.post('http://localhost:8000/api/doctors/update-doctor/' + this.doctor.id,
                {
                    info: this.info,
                    phone: this.phone,
                    department_id: this.department_id,
                    price: this.price,
                    workFrom: this.workFrom,
                    workTo: this.workTo,
                    address: this.address,
                    skill: this.doctor.skill,
                    serviceTitle: this.doctor.serviceTitle,
                    serviceBody: this.doctor.serviceBody
                }
            )
                .then((response) => {
                    console.log(response)
                })
            window.location.href = 'http://localhost:8000/';
        },
    },
    created() {
        this.getDoctor();
        this.getDepartment();
    },
    computed: {
    }
};

</script>

