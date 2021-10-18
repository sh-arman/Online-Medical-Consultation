<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicons -->
    <link href="{{ asset('front/img/favicon.png')}}" rel="icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css') }}">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('front/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/plugins/fontawesome/css/all.min.css')}}">
    <!-- Datatables CSS -->
    <link rel="stylesheet" href="{{ asset('front/plugins/datatables/datatables.min.css')}}">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('front/css/style.css')}}">
    @yield('css')
</head>
<body>
    <!-- Main Wrapper -->
    <div class="main-wrapper">
        @include('partials._header')

			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">
					<div class="row">
						<!-- Profile Sidebar -->
						<div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">
							<div class="profile-sidebar">
								<div class="widget-profile pro-widget-content">
									<div class="profile-info-widget">
										<a href="#" class="booking-doc-img">
											<img src="assets/img/patients/patient.jpg" alt="User Image">
										</a>
										<div class="profile-det-info">
											<h3>Richard Wilson</h3>
											<div class="patient-details">
												<h5><i class="fas fa-birthday-cake"></i> 24 Jul 1983, 38 years</h5>
												<h5 class="mb-0"><i class="fas fa-map-marker-alt"></i> Newyork, USA</h5>
											</div>
										</div>
									</div>
								</div>
								<div class="dashboard-widget">
									<nav class="dashboard-menu">
										<ul>
											<li class="active">
												<a href="patient-dashboard.html">
													<i class="fas fa-columns"></i>
													<span>Dashboard</span>
												</a>
											</li>
											<li>
												<a href="favourites.html">
													<i class="fas fa-bookmark"></i>
													<span>Favourites</span>
												</a>
											</li>
											<li>
												<a href="chat.html">
													<i class="fas fa-comments"></i>
													<span>Message</span>
													<small class="unread-msg">23</small>
												</a>
											</li>
											<li>
												<a href="profile-settings.html">
													<i class="fas fa-user-cog"></i>
													<span>Profile Settings</span>
												</a>
											</li>
											<li>
												<a href="change-password.html">
													<i class="fas fa-lock"></i>
													<span>Change Password</span>
												</a>
											</li>
											<li>
												<a href="index-2.html">
													<i class="fas fa-sign-out-alt"></i>
													<span>Logout</span>
												</a>
											</li>
										</ul>
									</nav>
								</div>

							</div>
						</div>
						<!-- / Profile Sidebar -->

                            @yield('content')

					</div>
				</div>
			</div>
			<!-- /Page Content -->


        <!-- Footer -->
        <footer class="footer">

            <!-- Footer Top -->
            <div class="footer-top">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">

                            <!-- Footer Widget -->
                            <div class="footer-widget footer-about">
                                <div class="footer-logo">
                                    <img src="{{ asset('front/img/footer-logo.png')}}" alt="logo" style="width: 100%;">
                                </div>
                                <div class="footer-about-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. </p>
                                    <div class="social-icon">
                                        <ul>
                                            <li>
                                                <a href="#" target="_blank"><i class="fab fa-facebook-f"></i> </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- /Footer Widget -->

                        </div>

                        <div class="col-lg-3 col-md-6">

                            <!-- Footer Widget -->
                            <div class="footer-widget footer-menu">
                                <h2 class="footer-title">For Patients</h2>
                                <ul>
                                    <li><a href="search.html"><i class="fas fa-angle-double-right"></i> Search for
                                            Doctors</a></li>
                                    <li><a href="login.html"><i class="fas fa-angle-double-right"></i> Login</a></li>
                                    <li><a href="register.html"><i class="fas fa-angle-double-right"></i> Register</a>
                                    </li>
                                    <li><a href="booking.html"><i class="fas fa-angle-double-right"></i> Booking</a>
                                    </li>
                                    <li><a href="patient-dashboard.html"><i class="fas fa-angle-double-right"></i>
                                            Patient Dashboard</a></li>
                                </ul>
                            </div>
                            <!-- /Footer Widget -->

                        </div>

                        <div class="col-lg-3 col-md-6">

                            <!-- Footer Widget -->
                            <div class="footer-widget footer-menu">
                                <h2 class="footer-title">For Doctors</h2>
                                <ul>
                                    <li><a href="appointments.html"><i class="fas fa-angle-double-right"></i>
                                            Appointments</a></li>
                                    <li><a href="chat.html"><i class="fas fa-angle-double-right"></i> Chat</a></li>
                                    <li><a href="login.html"><i class="fas fa-angle-double-right"></i> Login</a></li>
                                    <li><a href="doctor-register.html"><i class="fas fa-angle-double-right"></i>
                                            Register</a></li>
                                    <li><a href="doctor-dashboard.html"><i class="fas fa-angle-double-right"></i> Doctor
                                            Dashboard</a></li>
                                </ul>
                            </div>
                            <!-- /Footer Widget -->

                        </div>

                        <div class="col-lg-3 col-md-6">

                            <!-- Footer Widget -->
                            <div class="footer-widget footer-contact">
                                <h2 class="footer-title">Contact Us</h2>
                                <div class="footer-contact-info">
                                    <div class="footer-address">
                                        <span><i class="fas fa-map-marker-alt"></i></span>
                                        <p> 235/4 West Deobhog<br> Ali Ahmed Chunka Sarak, Narayanganj </p>
                                    </div>
                                    <p>
                                        <i class="fas fa-phone-alt"></i>
                                        +880 1947423947
                                    </p>
                                    <p class="mb-0">
                                        <i class="fas fa-envelope"></i>
                                        shajedulhassanarman@gmail.com
                                    </p>
                                </div>
                            </div>
                            <!-- /Footer Widget -->

                        </div>

                    </div>
                </div>
            </div>
            <!-- /Footer Top -->

            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="container-fluid">

                    <!-- Copyright -->
                    <div class="copyright">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <div class="copyright-text">
                                    <p class="mb-0"><a href="https://armanhassan.tk">Shajedul Hassan Arman</a></p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6">

                                <!-- Copyright Menu -->
                                <div class="copyright-menu">
                                    <ul class="policy-menu">
                                        <li><a href="term-condition.html">Terms and Conditions</a></li>
                                        <li><a href="privacy-policy.html">Policy</a></li>
                                    </ul>
                                </div>
                                <!-- /Copyright Menu -->

                            </div>
                        </div>
                    </div>
                    <!-- /Copyright -->

                </div>
            </div>
            <!-- /Footer Bottom -->

        </footer>
        <!-- /Footer -->

    </div>
    <!-- /Main Wrapper -->

    @yield('js')
    <!-- jQuery -->
    <script src="{{ asset('front/js/jquery.min.js')}}"></script>
    <!-- Bootstrap Core JS -->
    <script src="{{ asset('front/js/popper.min.js')}}"></script>
    <script src="{{ asset('front/js/bootstrap.min.js')}}"></script>

    <!-- Slick JS -->
    <script src="{{ asset('front/js/slick.js')}}"></script>
    <!-- Custom JS -->
    <script src="{{ asset('front/js/script.js')}}"></script>

    <!-- Sticky Sidebar JS -->
    <script src="{{ asset('front/assets/plugins/theia-sticky-sidebar/ResizeSensor.js') }}"></script>
    <script src="{{ asset('front/assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js') }}"></script>

    <!-- Circle Progress JS -->
    <script src="{{ asset('front/assets/js/circle-progress.min.js') }}"></script>
</body>

</html>
