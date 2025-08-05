<header class="fbs__net-navbar navbar navbar-expand-lg dark" aria-label="navbar">
    <div class="container d-flex align-items-center justify-content-between">
        <a class="navbar-brand w-auto" href="{{ route('home') }}">
            <img class="logo dark img-fluid pt-2" src="{{ url('assets-nova/images/nimbus_logo.jpg') }}" width="90" height="100" alt="image placeholder">
        </a><h3 class="pt-2"><font color="#4d83bc"> <b>PT N D I</b></font></h3>
        <div class="offcanvas offcanvas-start w-75" id="fbs__net-navbars" tabindex="-1" aria-labelledby="fbs__net-navbarsLabel">
            <div class="offcanvas-header">
                <div class="offcanvas-header-logo">
                    <a class="logo-link" id="fbs__net-navbarsLabel" href="{{ route('home') }}">
                        <img class="logo dark img-fluid" src="{{ url('assets-nova/images/nimbus_logo.jpg') }}" width="40" height="50" alt="image placeholder"></a>
                </div>
                <button class="btn-close btn-close-black" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body align-items-lg-center">
                <ul class="navbar-nav nav me-auto ps-lg-5 mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link scroll-link {{ request()->is('web') ? 'active' : '' }}" aria-current="page" href="{{ route('home') }}">Home</a></li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Solutions <i class="bi bi-chevron-down"></i></a>
                        <ul class="dropdown-menu">
                            <li class="nav-item dropstart"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Enterprise Resource Planning<i class="bi bi-chevron-right"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a class="nav-link scroll-link dropdown-item" href="{{ route('page.csie') }}">Cloudsuite Industrial Enterprise</a></li>
                                    <li><a class="nav-link scroll-link dropdown-item" href="{{ route('page.csa') }}">Cloudsuite Automotive</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="nav-link scroll-link dropdown-item" href="{{ route('page.eam') }}">Enterprise Asset Management</a>
                            </li>
                            <li>
                                <a class="nav-link scroll-link dropdown-item" href="{{ route('page.mes') }}">Manufacturing Execution System</a>
                            </li>
                            <li>
                                <a class="nav-link scroll-link dropdown-item" href="{{ route('page.factory.track') }}">Factory Track</a>
                            </li>
                            <li class="nav-item dropstart"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Services<i class="bi bi-chevron-right"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a class="nav-link scroll-link dropdown-item" href="{{ route('page.erp.implemen') }}">ERP Implementation</a></li>
                                    <li><a class="nav-link scroll-link dropdown-item" href="{{ route('page.cloud.migration') }}">Cloud Migration Services</a></li>
                                    <li><a class="nav-link scroll-link dropdown-item" href="{{ route('page.local.maintenance') }}">Local Maintenance Support</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link scroll-link {{ request()->is('contact-us') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a></li>

                    <!-- <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Services <i class="bi bi-chevron-down"></i></a>
                        <ul class="dropdown-menu"> -->
                            <!-- <li class="nav-item dropstart"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">E R P <i class="bi bi-chevron-right"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a class="nav-link scroll-link dropdown-item" href="#services">C S I E</a></li>
                                    <li><a class="nav-link scroll-link dropdown-item" href="#pricing">C S A</a></li>
                                </ul>
                            </li> -->
                            <!-- <li><a class="nav-link scroll-link dropdown-item" href="#pricing">ERP Implementation</a></li>
                            <li><a class="nav-link scroll-link dropdown-item" href="#services">Cloud Migration Services</a></li>
                            <li><a class="nav-link scroll-link dropdown-item" href="#">Local Maintenance Support</a></li>

                        </ul>
                    </li> -->

                





                    <!-- <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
                    <li class="nav-item"><a class="nav-link scroll-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link scroll-link" href="#solutions">Solutions</a></li>
                    <li class="nav-item"><a class="nav-link scroll-link" href="#pricing">Pricing</a></li>
                    <li class="nav-item"><a class="nav-link scroll-link" href="#experience">Experience</a></li> -->
                    <!-- <li class="nav-item"><a class="nav-link scroll-link" href="#how-it-works">How It Works</a></li> -->
                    <!-- <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Dropdown <i class="bi bi-chevron-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link scroll-link dropdown-item" href="#">Multipages</a></li>
                            <li><a class="nav-link scroll-link dropdown-item" href="#services">Services</a></li>
                            <li><a class="nav-link scroll-link dropdown-item" href="#pricing">Pricing</a></li>
                            <li class="nav-item dropstart"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Dropstart <i class="bi bi-chevron-right"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a class="nav-link scroll-link dropdown-item" href="#services">Services</a></li>
                                    <li><a class="nav-link scroll-link dropdown-item" href="#pricing">Pricing</a></li>
                                    <li class="nav-item dropstart"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Dropstart <i class="bi bi-chevron-right"></i></a>
                                        <ul class="dropdown-menu">
                                            <li><a class="nav-link scroll-link dropdown-item" href="#services">Services</a></li>
                                            <li><a class="nav-link scroll-link dropdown-item" href="#pricing">Pricing</a></li>
                                            <li><a class="nav-link scroll-link dropdown-item" href="#">Something else here</a></li>
                                            <li class="nav-item dropend"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Dropend <i class="bi bi-chevron-right"></i></a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="nav-link scroll-link dropdown-item" href="#services">Services</a></li>
                                                    <li><a class="nav-link scroll-link dropdown-item" href="#pricing">Pricing</a></li>
                                                    <li><a class="nav-link scroll-link dropdown-item" href="#">Something else here</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>

                    </li> -->

                </ul>

            </div>
        </div>
        <!-- End offcanvas-->

        <div class="ms-auto w-auto">
            <!-- <div class="header-social d-flex align-items-center gap-1"><a class="btn btn-primary py-2" href="#">Get Started</a> -->
            <button class="fbs__net-navbar-toggler justify-content-center align-items-center ms-auto" data-bs-toggle="offcanvas" data-bs-target="#fbs__net-navbars" aria-controls="fbs__net-navbars" aria-label="Toggle navigation" aria-expanded="false">
                <svg class="fbs__net-icon-menu" xmlns="#" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="21" x2="3" y1="6" y2="6"></line>
                    <line x1="15" x2="3" y1="12" y2="12"></line>
                    <line x1="17" x2="3" y1="18" y2="18"></line>
                </svg>
                <svg class="fbs__net-icon-close" xmlns="#" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M18 6 6 18"></path>
                    <path d="m6 6 12 12"></path>
                </svg>
            </button>

        </div>

    </div>
    </div>
</header>