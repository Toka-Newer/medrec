<template>
    <div class="main">
        <div class="firstSection">
            <div class="col-lg-6 col-md-8 searchSection">
                <h3 class="h1">Search for doctor by name.</h3>
                <div id="search_box">
                    <div id="search_icon"><i class="fas fa-search"></i></div>
                    <div class="input">
                        <input type="text" placeholder="search..." id="mySearch" v-model="searchQuery" />
                    </div>
                    <span class="clear" onclick="document.getElementById('mySearch').value = '' "></span>
                </div>
            </div>
            <div class="slider-pattern2"></div>
        </div>
        <div class="secoundSection row container"
            :style="{ margin: 'auto', 'margin-bottom': '5%', 'margin-top': '5%' }">
            <div class="checkF col-lg-3">
                <div class="fCheck">
                    <div class="insideF">
                        <i class="fa fa-graduation-cap"></i>
                        <h3>Specialization</h3>
                    </div>
                    <div class="checkS">
                        <form action="">
                            <div class="form-check" v-for="department in departments" :key="department.id">
                                <input class="form-check-input" type="radio" :value="department.department"
                                    v-model="checkedDepartment" id="flexCheckDefault"
                                    @click="uncheck(department.department)" />
                                <label class="form-check-label" for="flexCheckDefault">
                                    {{ department.department }}
                                </label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 doc">
                <div v-for="doctor in filterDoctors" :key="doctor.id" class="cont row">
                    <div class="imgCon fl col-md-3">
                        <img src="images/doctors/doctor-2.png" alt="" />
                    </div>
                    <div class="docIn fl col-md-9">
                        <div class="docN fl">
                            <h2>Dr: {{ doctor.user.name }}</h2>
                            <span>{{ doctor.department.department }}</span>
                            <div class="rate">
                            </div>
                            <p>
                                <span class="hours fl">work hours: </span>
                                <span class="time fl">from {{ doctor.workFrom }} am to {{ doctor.workTo }} pm</span>
                            </p>
                        </div>
                        <div class="details fr">
                            <a :href="'/DoctorDetails/' + doctor.id">details</a>
                            <ul>
                                <li>
                                    <i class="far fa-money-bill-alt fl"></i>
                                    <p class="fl">
                                        <span class="first fl">reservation price: </span>
                                        <span class="second fl"> {{ doctor.price }} egp</span>
                                    </p>
                                </li>
                                <li>
                                    <i class="fas fa-lock-open fl"></i>
                                    <p class="fl">
                                        <span class="first fl">open now: </span>
                                        <span class="second fl"> yes</span>
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
window.onload = function () {
    var searchBox = document.getElementById("search_box");
    var searchIcon = document.getElementById("search_icon");
    searchIcon.onclick = function () {
        searchBox.classList.toggle("active");
    }
}
export default {
    data() {
        return {
            doctors: [],
            id: null,
            searchQuery: "",
            departments: [],
            checkedDepartment: '',
            filters: {
                dentistry: true,
                heart_disease: true,
                Kidney_disease: true,
                gland_diseases: true,
                Brain_and_nerve_diseases: true,
                eyes_illnesses: true,
                skin_diseases: true,
                Psychiatric_illness: true,
                tumors: true,
                Ear_nose_and_throat_diseases: true,
                Internal_diseases_and_digestive_system: true,
                Obstetrics_and_gynecology: true,
            },
        };
    },
    methods: {
        uncheck: function (val) {
            if (val === this.checkedDepartment) {
                this.selected = false;
            }
            this.checkedDepartment = this.selected;
        },
        getDoctor() {
            axios.get('http://localhost:8000/api/doctors/get-doctor')
                .then((response) => {
                    console.log(response)
                    console.log(response.data[0]);
                    this.doctors = response.data[0];
                    console.log(this.doctors);
                })
        },
        getDepartments() {
            axios.get('http://localhost:8000/api/departments/get-department')
                .then((response) => {
                    console.log(response.data.data)
                    this.departments = response.data.data;
                })
        }
    },
    created() {
        this.getDoctor();
        this.getDepartments();
    },
    computed: {
        filterDoctors() {
            if (this.searchQuery || this.checkedDepartment.length) {
                return this.doctors.filter((doctor) => {
                    if (this.checkedDepartment.length) {
                        return doctor.department.department == this.checkedDepartment.toLowerCase() && doctor.user.name.includes(this.searchQuery.toLowerCase() || this.searchQuery.toUpperCase());
                    }
                    return doctor.user.name.includes(this.searchQuery.toLowerCase() || this.searchQuery.toUpperCase());
                });
            } else {
                return this.doctors;
            }
        },
    },
};
</script>
