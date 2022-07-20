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
        </component>
        <div class="main">

            <div class="container" style="margin-top: 10%;">
                <div>
                    <div class="">
                        <div class="card-body">
                            <div class="d-flex flex-column">
                                <!-- <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin"
                                        class="rounded-circle" width="150"> -->
                                <div class="mt-3">
                                    <h4 class="mb-2">
                                        <i class="fa fa-calendar mr-2" aria-hidden="true" style="color: #4b88c7;"></i>
                                        10/2/2022
                                    </h4>
                                    <!-- <p class="text-secondary mb-1">10/2/2022</p> -->
                                    <!-- <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p> -->
                                    <!-- <button class="btn btn-primary">Follow</button> -->
                                    <!-- <button class="btn btn-outline-primary"> <a class="profile" href="#"> Profile </a> </button> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">

                    <div class="col-xl-3 col-sm-4">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin"
                                    class="rounded-circle" width="150">
                                <div class="mt-3">
                                    <h4 class="mb-2">John Doe</h4>
                                    <p class="text-secondary mb-1">10/2/2022</p>
                                    <!-- <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p> -->
                                    <!-- <button class="btn btn-primary">Follow</button> -->
                                    <button class="btn btn-outline-primary"> <a class="profile"
                                            href='/PatientProfile'>
                                            Profile </a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-4">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin"
                                    class="rounded-circle" width="150">
                                <div class="mt-3">
                                    <h4 class="mb-2">John Doe</h4>
                                    <p class="text-secondary mb-1">10/2/2022</p>
                                    <!-- <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p> -->
                                    <!-- <button class="btn btn-primary">Follow</button> -->
                                    <button class="btn btn-outline-primary"> <a class="profile"
                                            href='/PatientProfile'>
                                            Profile </a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-4">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin"
                                    class="rounded-circle" width="150">
                                <div class="mt-3">
                                    <h4 class="mb-2">John Doe</h4>
                                    <p class="text-secondary mb-1">10/2/2022</p>
                                    <!-- <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p> -->
                                    <!-- <button class="btn btn-primary">Follow</button> -->
                                    <button class="btn btn-outline-primary"> <a class="profile"
                                            href='/PatientProfile'>
                                            Profile </a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-4">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin"
                                    class="rounded-circle" width="150">
                                <div class="mt-3">
                                    <h4 class="mb-2">John Doe</h4>
                                    <p class="text-secondary mb-1">10/2/2022</p>
                                    <!-- <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p> -->
                                    <!-- <button class="btn btn-primary">Follow</button> -->
                                    <button class="btn btn-outline-primary"> <a class="profile"
                                            href='/PatientProfile'>
                                            Profile </a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-4">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin"
                                    class="rounded-circle" width="150">
                                <div class="mt-3">
                                    <h4 class="mb-2">John Doe</h4>
                                    <p class="text-secondary mb-1">10/2/2022</p>
                                    <!-- <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p> -->
                                    <!-- <button class="btn btn-primary">Follow</button> -->
                                    <button class="btn btn-outline-primary"> <a class="profile"
                                            href='/PatientProfile'>
                                            Profile </a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-4">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin"
                                    class="rounded-circle" width="150">
                                <div class="mt-3">
                                    <h4 class="mb-2">John Doe</h4>
                                    <p class="text-secondary mb-1">10/2/2022</p>
                                    <!-- <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p> -->
                                    <!-- <button class="btn btn-primary">Follow</button> -->
                                    <button class="btn btn-outline-primary"> <a class="profile"
                                            href='/PatientProfile'>
                                            Profile </a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-4">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin"
                                    class="rounded-circle" width="150">
                                <div class="mt-3">
                                    <h4 class="mb-2">John Doe</h4>
                                    <p class="text-secondary mb-1">10/2/2022</p>
                                    <!-- <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p> -->
                                    <!-- <button class="btn btn-primary">Follow</button> -->
                                    <button class="btn btn-outline-primary"> <a class="profile"
                                            href='/PatientProfile'>
                                            Profile </a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-4">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin"
                                    class="rounded-circle" width="150">
                                <div class="mt-3">
                                    <h4 class="mb-2">John Doe</h4>
                                    <p class="text-secondary mb-1">10/2/2022</p>
                                    <!-- <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p> -->
                                    <!-- <button class="btn btn-primary">Follow</button> -->
                                    <button class="btn btn-outline-primary"> <a class="profile"
                                            href='/PatientProfile'>
                                            Profile </a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
