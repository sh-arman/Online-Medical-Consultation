<header class="header">
    <nav class="navbar navbar-expand-lg header-nav">
        <div class="navbar-header">
            <a id="mobile_btn" href="javascript:void(0);">
                <span class="bar-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </a>
            <a href="{{ route('home') }}" class="navbar-brand logo">
                <img src="{{ asset('front/img/logo.png')}}" class="img-fluid" alt="Logo">
            </a>
        </div>
        <div class="main-menu-wrapper">
            <div class="menu-header">
                <a href="{{ route('home') }}" class="menu-logo">
                    <img src="{{ asset('front/img/logo.png')}}" class="img-fluid" alt="Logo">
                </a>
                <a id="menu_close" class="menu-close" href="javascript:void(0);">
                    <i class="fas fa-times"></i>
                </a>
            </div>
            <ul class="main-nav">
                <li>
                    <a href="{{ route('home') }}">Home</a>
                </li>
                <li class="has-submenu">
                    <a href="#">Doctors <i class="fas fa-chevron-down"></i></a>
                    <ul class="submenu">
                        <li><a href="doctor-dashboard.html">Doctor Dashboard</a></li>
                        <li><a href="appointments.html">Appointments</a></li>
                        <li><a href="schedule-timings.html">Schedule Timing</a></li>
                        <li><a href="my-patients.html">Patients List</a></li>
                        <li><a href="patient-profile.html">Patients Profile</a></li>
                        <li><a href="chat-doctor.html">Chat</a></li>
                        <li><a href="invoices.html">Invoices</a></li>
                        <li><a href="doctor-profile-settings.html">Profile Settings</a></li>
                        <li><a href="reviews.html">Reviews</a></li>
                        <li><a href="doctor-register.html">Doctor Register</a></li>
                    </ul>
                </li>
                <li class="has-submenu">
                    <a href="#">Doctor <i class="fas fa-chevron-down"></i></a>
                    <ul class="submenu">
                        {{-- <li><a href="search.html">Search Doctor</a></li> --}}
                        <li><a href="doctor-profile.html">Doctor List</a></li>
                        <li><a href="booking.html">Appointment</a></li>
                        <li><a href="checkout.html">Checkout</a></li>
                        <li><a href="booking-success.html">Booking Success</a></li>
                        <li><a href="patient-dashboard.html">Patient Dashboard</a></li>
                        <li><a href="favourites.html">Favourites</a></li>
                        <li><a href="chat.html">Chat</a></li>
                        <li><a href="profile-settings.html">Profile Settings</a></li>
                        <li><a href="change-password.html">Change Password</a></li>
                    </ul>
                </li>
                <li class="has-submenu active">
                    <a href="#">Pages <i class="fas fa-chevron-down"></i></a>
                    <ul class="submenu">
                        <li><a href="voice-call.html">Voice Call</a></li>
                        <li><a href="video-call.html">Video Call</a></li>
                        <li><a href="search.html">Search Doctors</a></li>
                        <li><a href="calendar.html">Calendar</a></li>
                        <li><a href="components.html">Components</a></li>
                        <li class="has-submenu">
                            <a href="invoices.html">Invoices</a>
                            <ul class="submenu">
                                <li><a href="invoices.html">Invoices</a></li>
                                <li><a href="invoice-view.html">Invoice View</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                @if ( Auth::check())
                    <li>
                        <a href="{{ route('user_dashboard') }}" target="_blank">User Dahsboard</a>
                    </li>
                @endif
                @if ( Auth::check() && Auth::user()->is_admin ==1 )
                    <li>
                        <a href="{{ route('admin_dashboard') }}" target="_blank">Admin Dashboard</a>
                    </li>
                @endif
                @if ( Auth::check() &&  Auth::user()->is_doctor ==1 )
                    <li>
                        <a href="{{ route('doctor_dashboard') }}" target="_blank">Doctor Dashboard</a>
                    </li>
                @endif
            </ul>
        </div>
        <ul class="nav header-navbar-rht">
            <li class="nav-item contact-item">
                <div class="header-contact-img">
                    <i class="far fa-hospital"></i>
                </div>
                <div class="header-contact-detail">
                    <p class="contact-header">Emergency Contact</p>
                    <p class="contact-info-header"> +880 1947423947</p>
                </div>

            </li>
            {{-- @endif --}}
            <li class="nav-item">

                {{---
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                @endif
                @endauth
                </div>
                @endif --}}
                @guest
                @if (Route::has('login'))
            <li class="nav-item">
                <a class="nav-link header-login" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @endif

            @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link header-login" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
            @endif
            @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link header-login dropdown-toggle" href="#" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
            @endguest
            </li>
        </ul>
    </nav>
</header>
