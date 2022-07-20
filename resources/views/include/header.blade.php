<header class="header">
    <div class="container">
        <a href="index.html" class="logo">
            <img src="{{ asset('images/2.png') }}" alt="...">
        </a>
        <button class="btn btn-responsive-nav" data-toggle="collapse" data-target="#nav-main">
            <i class="fas fa-bars"></i>
        </button>
        {{-- <div class="header-control">
            <!-- <a href="tracking.html" class="custom-btn">
                En
            </a> -->
            <a href="index-en.html" class="switch-lang">
                ar
            </a>


            <!--End switch-lang-->
        </div> --}}
        <!--End header-control-->
    </div><!-- End container-->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <div class="collapse navbar-collapse" id="nav-main">
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <ul class="navbar-nav">
                        @if (auth()->user()->type == 'Doctor')
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('index') }}">Home</a>
                        </li>
                        @elseif (auth()->user()->type == 'Patient')
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('editPHome') }}">Home</a>
                        </li>
                        @endif
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about') }}">About us</a>
                        </li>
                        @if (auth()->user()->type == 'Doctor')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('patients') }}">Patients</a>
                            </li>
                        @elseif (auth()->user()->type == 'Patient')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('doctors') }}">Doctors</a>
                            </li>
                        @endif
                        <!-- Q?!! -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact') }}">Contact us</a>
                        </li>
                        {{-- <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li> --}}
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        <li></li>
                    </ul>
                @endguest
            </div>
        </div><!-- End container -->
    </nav>
</header><!-- End Header -->
