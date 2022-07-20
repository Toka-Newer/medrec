/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'
// import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'
Vue.use(BootstrapVue)

import { BFormInput } from 'bootstrap-vue'
Vue.component('b-form-input', BFormInput)
import { FormInputPlugin } from 'bootstrap-vue'
Vue.use(FormInputPlugin)
import { BForm } from 'bootstrap-vue'
Vue.component('b-form', BForm)
import { FormPlugin } from 'bootstrap-vue'
Vue.use(FormPlugin)

import vSelect from "vue-select";
Vue.component("v-select", vSelect);
import "vue-select/dist/vue-select.css";

// import Autocomplete from 'v-autocomplete'
// import 'v-autocomplete/dist/v-autocomplete.css'
// Vue.use(Autocomplete)

// import {AutoCompletePlugin} from '@syncfusion/ej2-vue-dropdowns'
// Vue.use(AutoCompletePlugin)
// import VueRouter from 'vue-router'

// Vue.use(VueRouter)

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.prototype.$userId = document.querySelector("meta[name='user_id']").getAttribute('content');
Vue.component('index-component', require('./components/IndexComponent.vue').default);
Vue.component('doctor-component', require('./components/DoctorComponent.vue').default);
Vue.component('calendar-component', require('./components/CalendarComponent.vue').default);
Vue.component('contact-component', require('./components/ContactComponent.vue').default);
Vue.component('day-component', require('./components/DayComponent.vue').default);
Vue.component('docdetails-component', require('./components/DoctorDetailsComponent.vue').default);
Vue.component('diaganous-component', require('./components/DiganousComponent.vue').default);
Vue.component('showdiaganous-component', require('./components/ShowDiganousComponent.vue').default);
Vue.component('showdiaganousdoctor-component', require('./components/ShowDiganosisDComponent.vue').default);
Vue.component('editdiaganous-component', require('./components/EditDiganosisComponent.vue').default);
Vue.component('patients-component', require('./components/PatientsComponent.vue').default);
Vue.component('patienthome-component', require('./components/PatientHomeComponent.vue').default);
Vue.component('patientprofile-component', require('./components/PatientProfileComponent.vue').default);
Vue.component('patientdiganous-component', require('./components/PatientDiganousComponent.vue').default);
Vue.component('patientreport-component', require('./components/ReportComponent.vue').default);
Vue.component('patientreportshow-component', require('./components/ShowReportComponent.vue').default);
Vue.component('editreport-component', require('./components/EditReportComponent.vue').default);
Vue.component('editpatientprofile-component', require('./components/EditPatientProfileComponent.vue').default);
Vue.component('editpatienthome-component', require('./components/EditPatientHomeComponent.vue').default);
Vue.component('editdoctor-component', require('./components/EditDoctorDetailsComponent.vue').default);
Vue.component('doctordiganous-component', require('./components/DoctorDiagnosisComponent.vue').default);
Vue.component('patientdiganousdoctor-component', require('./components/PatientDiagnosisDComponent.vue').default);
Vue.component('completeregister-component', require('./components/CompleteRegisterComponent.vue').default);
Vue.component('favourite-component', require('./components/FavouriteComponent.vue').default);
Vue.component('about-component', require('./components/AboutComponent.vue').default);

// EditDiganosisComponent
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

//  import DoctorComponent from './components/DoctorComponent.vue';
//  import ShowDiganousComponent from './components/ShowDiganousComponent.vue'
//  const routes = [
//     {
//         path: '/Doctors',
//         name: 'doctors',
//         component: DoctorComponent
//     },
//     {
//         path: '/ShowDiganous',
//         name: 'showDiganous',
//         component: ShowDiganousComponent
//     }
//  ]
//  const router = createRouter({
//     history: createWebHistory(process.env.BASE_URL),
//     routes
//   })
//   export default router

const app = new Vue({
    el: '#app',
});
