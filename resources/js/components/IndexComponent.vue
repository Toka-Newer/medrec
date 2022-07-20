<template>
    <div class="main">
        <component :is="'style'">
            .doctorHome{
            background-color: #fff;
            border: 1px solid transparent;
            border-radius: 5px;
            padding: 30px 35px;
            text-align: left;
            min-height: 110px;
            margin-bottom: 30px;
            background-color: #fff;
            -webkit-box-shadow: 2.5px 4.33px 15px 0px rgb(0 0 0 / 8%);
            -moz-box-shadow: 2.5px 4.33px 15px 0px rgba(0, 0, 0, 0.078);
            box-shadow: 2.5px 4.33px 15px 0px rgb(0 0 0 / 8%);
            overflow: hidden;
            width: 100%;
            }
            .btn-secondary:hover {
            color: #fff;
            background-color: #fff;
            border-color: #fff;
            }
            .title2 {
            color: #4b88c7;
            position: absolute;
            top: 33%;
            bottom: 0;
            }
        </component>
        <section class="home-slider">
            <div class="slider-pattern">
                <div class="slider-img" id="parallax-1">
                    <div class="layer" data-depth="0.20">
                        <img src="images/doctor.png">
                    </div>
                    <!--End layer-->
                </div>
                <!--End slider-bg-parallax -->
            </div><!-- End slider-pattern -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-8">
                        <div class="slider-info" style="color: #9a9a9a;">
                            <h3 class="title">
                                Your patient health information <br>
                                is securely in one place
                            </h3>
                            <p>
                                When your patients have their medical information organized into one view, it can help
                                them
                                better understand their overall health and provide key elements of their medical history
                                when visiting a new provider.
                            </p>
                        </div><!-- End Slider-Info -->
                    </div>
                    <!--End col-->
                </div>
                <!--End row-->
            </div><!-- End container -->
        </section>
        <!--End home-slider-->
        <div class="page-content">
            <section class="services right-layout" id="services">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-5">
                            <div class="section-head white-color">
                                <h3 class="section-title">Services</h3>
                                <p>
                                    We've worked hard to make it easy for you to enable these features.
                                </p>
                                <a href="/AboutUs" class="custom-btn">More</a>
                            </div><!-- End Section-Head -->
                        </div><!-- End col -->
                        <div class="col-lg-8 col-md-7">
                            <div class="section-content">
                                <div class="row">
                                    <div class="col-lg-6 mb-3">
                                        <b-button v-b-modal.modal-footer-sm class="doctorHome hvr-underline-from-center">
                                            <div class="row list">
                                                <div class="col-4 icon-box-head mb-2">
                                                    <img src="images/icons/storage.png" alt="...">
                                                </div><!-- End Icon-Box-Head -->
                                                <div class="col-8 icon-box-body">
                                                    <h3 class="title title2">
                                                        Surgery Report
                                                    </h3>
                                                </div><!-- End Icon-Box-Body -->
                                            </div><!-- End Icon-Box -->
                                        </b-button>
                                        <b-modal id="modal-footer-sm" ref="modal" title="Enter Patient National ID"
                                            @show="resetModal" @hidden="resetModal" @ok="handleOk">
                                            <form ref="form" @submit.stop.prevent="handleSubmit">
                                                <b-form-group label="National ID" label-for="name-input"
                                                    invalid-feedback="Name is required" :state="nameState">
                                                    <b-form-input id="name-input" v-model="name1" :state="nameState"
                                                        required></b-form-input>
                                                </b-form-group>
                                            </form>
                                        </b-modal>
                                    </div><!-- End col -->

                                    <div class="col-lg-6">
                                        <a href='/EditDoctor' class="doctorHome hvr-underline-from-center">
                                            <div class="row list">
                                                <div class="col-4 icon-box-head mb-2">
                                                    <img src="images/icons/transport.png" alt="...">
                                                </div><!-- End Icon-Box-Head -->
                                                <div class="col-8 icon-box-body">
                                                    <h3 class="title title2">
                                                        Profile
                                                    </h3>
                                                </div><!-- End Icon-Box-Body -->
                                            </div><!-- End Icon-Box -->
                                        </a>
                                    </div><!-- End col -->
                                    <div class="col-lg-6">
                                        <!-- <a href='/Diganous'> -->
                                        <b-button class="doctorHome hvr-underline-from-center"
                                            v-b-modal.modal-prevent-closing>
                                            <div class="row list">
                                                <div class="col-4 icon-box-head mb-2">
                                                    <img src="images/icons/customs.png" alt="...">
                                                </div><!-- End Icon-Box-Head -->
                                                <div class="col-8 icon-box-body">
                                                    <h3 class="title title2">
                                                        New diagnosis
                                                    </h3>
                                                </div><!-- End Icon-Box-Body -->
                                            </div><!-- End Icon-Box -->
                                        </b-button>
                                        <b-modal id="modal-prevent-closing" ref="modal"
                                            title="Enter Patient National ID" @show="resetModal" @hidden="resetModal"
                                            @ok="handleOk">
                                            <form ref="form" @submit.stop.prevent="handleSubmit">
                                                <b-form-group label="National ID" label-for="name-input"
                                                    invalid-feedback="Name is required" :state="nameState">
                                                    <b-form-input id="name-input" v-model="name" :state="nameState"
                                                        required></b-form-input>
                                                </b-form-group>
                                            </form>
                                        </b-modal>
                                    </div><!-- End col -->
                                    <div class="col-lg-6">
                                        <a href="/Favourite" class="doctorHome hvr-underline-from-center">
                                            <div class="row list">
                                                <div class="col-4 icon-box-head mb-2">
                                                    <img src="images/icons/truck.png" alt="...">
                                                </div><!-- End Icon-Box-Head -->
                                                <div class="col-8 icon-box-body">
                                                    <h3 class="title title2">
                                                        Favourite
                                                    </h3>
                                                </div><!-- End Icon-Box-Body -->
                                            </div><!-- End Icon-Box -->
                                        </a>
                                    </div><!-- End col -->
                                </div><!-- End row -->
                            </div><!-- End Section-Content -->
                        </div><!-- End col -->
                    </div><!-- End row -->
                </div>
                <!--End container -->
            </section><!-- End Section -->
            <section class="about left-layout" id="about">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-9">
                            <div class="section-head" style="color: #9a9a9a;">
                                <h3 class="section-title">
                                    We strive to make patients' lives safe
                                </h3>
                                <p>
                                    We seek to make the lives of patients safer by providing the best and easiest ways
                                    to
                                    follow up on the disease and record the medical history.
                                </p>
                            </div><!-- End Section-Head -->
                            <div class="row">
                                <div class="col-md-3 col-sm-6">
                                    <div class="feature-box" title="
                                 <div class='feature-box-back'>
                                  <img src='images/icons/05.png'>
                                  <h3 class='title'>High efficiency</h3>
                                 </div>
                                ">
                                        <div class="feature-box-head">
                                            <img src="images/icons/05.png" alt="...">
                                        </div><!-- End Feature-Box-Head  -->
                                        <div class="feature-box-body">
                                            <h3 class="title">High efficiency</h3>
                                        </div><!-- End Feature-Box-Body  -->
                                    </div><!-- End Feature-Box -->
                                </div><!-- End col -->
                                <div class="col-md-3 col-sm-6">
                                    <div class="feature-box" title="
                                 <div class='feature-box-back'>
                                  <img src='images/icons/05.png'>
                                  <h3 class='title'>Time saving</h3>
                                 </div>
                                ">
                                        <div class="feature-box-head">
                                            <img src="images/icons/06.png" alt="...">
                                        </div><!-- End Feature-Box-Head  -->
                                        <div class="feature-box-body">
                                            <h3 class="title">Time saving</h3>
                                        </div><!-- End Feature-Box-Body  -->
                                    </div><!-- End Feature-Box -->
                                </div><!-- End col -->
                                <div class="col-md-3 col-sm-6">
                                    <div class="feature-box" title="
                                 <div class='feature-box-back'>
                                  <img src='images/icons/05.png'>
                                  <h3 class='title'>For Free</h3>
                                 </div>
                                ">
                                        <div class="feature-box-head">
                                            <img src="images/icons/07.png" alt="...">
                                        </div><!-- End Feature-Box-Head  -->
                                        <div class="feature-box-body">
                                            <h3 class="title">For free</h3>

                                        </div><!-- End Feature-Box-Body  -->
                                    </div><!-- End Feature-Box -->
                                </div><!-- End col -->
                                <div class="col-md-3 col-sm-6">
                                    <div class="feature-box" title="
                                 <div class='feature-box-back'>
                                  <img src='images/icons/05.png'>
                                  <h3 class='title'>More Accessible</h3>
                                 </div>
                                ">
                                        <div class="feature-box-head">
                                            <img src="images/icons/05.png" alt="...">
                                        </div><!-- End Feature-Box-Head  -->
                                        <div class="feature-box-body">
                                            <h3 class="title">More Accessible</h3>

                                        </div><!-- End Feature-Box-Body  -->
                                    </div><!-- End Feature-Box -->
                                </div><!-- End col -->

                            </div><!-- End row -->

                        </div><!-- End col -->
                        <div class="col-lg-4 col-md-3">
                            <div class="section-img">
                                <img src="images/doctor.png" alt="...">
                            </div><!-- End Section-Img -->
                        </div><!-- End col -->

                    </div><!-- End row -->
                </div><!-- End container -->
            </section><!-- End Section -->

        </div> <!-- page-content -->

    </div> <!-- end main-->
</template>
<script>
export default {
    data() {
        return {
            user_id: this.$userId,
            name: '',
            name1: '',
            nameState: null,
            submittedNames: '',
            response: [],
            flag: false,
        }
    },
    methods: {
        checkFormValidity() {
            const valid = this.$refs.form.checkValidity()
            this.nameState = valid
            return valid
        },
        resetModal() {
            this.name = ''
            this.name1 = ''
            this.nameState = null
        },
        handleOk(bvModalEvent) {
            // Prevent modal from closing
            bvModalEvent.preventDefault()
            // Trigger submit handler
            this.handleSubmit()
        },
        handleSubmit() {
            // Exit when the form isn't valid
            if (!this.checkFormValidity()) {
                return
            }
            // Push the name to submitted names
            this.submittedNames = this.name
            // Hide the modal manually
            this.$nextTick(() => {
                //   this.$bvModal.hide('modal-prevent-closing')  //to close the model
                axios.get('http://localhost:8000/api/get-user-nationalId/' + this.name)
                    .then((response) => {
                        console.log(response.data)
                        this.response = response.data
                        if (response.data.length == 0) {
                            console.log(this.flag)
                            return
                        }
                        else if (response.data.type == 'Patient') {
                            this.flag = true
                            console.log(this.flag)
                            window.location.href = 'http://localhost:8000/Diganous/' + response.data.id;
                        } else {
                            return
                        }
                    })
                axios.get('http://localhost:8000/api/get-user-nationalId/' + this.name1)
                    .then((response) => {
                        console.log(response.data)
                        this.response = response.data
                        if (response.data.length == 0) {
                            console.log(this.flag)
                            return
                        }
                        else if (response.data.type == 'Patient') {
                            this.flag = true
                            console.log(this.flag)
                            window.location.href = 'http://localhost:8000/Report/' + response.data.id;
                        } else {
                            return
                        }
                    })
                // window.location.href = 'http://localhost:8000/Diganous/' + this.name ;
            })
        }
    }
}
</script>
<style>
.modal {
    top: 10%;
}
</style>
