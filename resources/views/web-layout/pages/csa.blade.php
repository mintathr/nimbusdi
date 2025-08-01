@extends('web-layout.main_nova')
@section('title', 'CSA')
@section('subtitle', 'CSA')
@section('content')
<!-- ======= Services =======-->
<section class="section first-section services__v1-prism" id="services">
    <div class="container">
        <div class="row pt-5 mb-5">
            <div class="col-md-8 mx-auto text-center" data-aos="fade-up">
                <h1 class="display-3 fw-bold mb-3">CloudSuite Automotive (CSA)</h1>
                <!-- <p class="lead">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde quo, laborum totam vitae excepturi assumenda tempora.</p> -->
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-11">
                <p class="mb-5"> <img class="img-fluid" src="{{ url('assets-nova/images/csa.jpg') }}" alt="FreeBootstrap.net image placeholder"></p>
                <p>An automotive components manufacturer needed a highly configurable ERP.
                    CloudSuite delivered.
                    Aggressive schedules, globalization, cost challenges, and increasingly
                    complex components require a more agile and modern business solution.
                    CloudSuite Automotive provides a comprehensive suite of industry-proven
                    automotive solutions, including a core ERP combined with high-value
                    extension applications.</p>
                <!-- ======= Content Quote =======-->
                <div class="mt-5">
                    <div class="quote__v1 position-relative mb-5">
                        <!-- <img class="quote js-img-to-inline-svg" src="{{ url('assets-nova/images/quote.svg') }}" alt="FreeBootstrap.net image placeholder"> -->
                        <blockquote class="fs-2">We see that there are a lot of possible improvements and supporting functionality in Infor CloudSuite Automotive that we will continue to explore and gain benefits from in the years to come.</blockquote>
                        <div class="author fw-bold">IT Manager</div>
                    </div>
                </div>
                <!-- End Content Quote-->
                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem fugit iure accusamus architecto tenetur ut, earum commodi similique, sint voluptas porro? Quia aspernatur nulla necessitatibus doloremque officia, asperiores quaerat sequi!</p> -->
                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem fugit iure accusamus architecto tenetur ut, earum commodi similique, sint voluptas porro? Quia aspernatur nulla necessitatibus doloremque officia, asperiores quaerat sequi!</p> -->
            </div>
        </div>
        <!-- ############# -->
        <!-- <div class="row g-4">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                <div class="service-item h-100">
                    <div class="mb-4 icon-wrap d-flex align-items-center justify-content-center"><i class="bi bi-layers fs-3 lh-sm"></i></div>
                    <h3 class="h6 mb-3 fw-semibold">Custom Software Development</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus itaque voluptates amet pariatur corrupti? Deserunt.</p><a class="a-link text-decoration-none fw-medium d-flex align-items-center" href="page-service-single.html">Learn more<i class="bi bi-arrow-right-short"></i></a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                <div class="service-item h-100">
                    <div class="mb-4 icon-wrap d-flex align-items-center justify-content-center"><i class="bi bi-cloud fs-3 lh-sm"></i></div>
                    <h3 class="h6 mb-3 fw-semibold">Cloud Solutions & Infrastructure</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus itaque voluptates amet pariatur corrupti? Deserunt.</p>
                    <p> <a class="a-link text-decoration-none fw-medium d-flex align-items-center" href="page-service-single.html">Learn more<i class="bi bi-arrow-right-short"></i></a></p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                <div class="service-item h-100">
                    <div class="mb-4 icon-wrap d-flex align-items-center justify-content-center"><i class="bi bi-fingerprint fs-3 lh-sm"></i></div>
                    <h3 class="h6 mb-3 fw-semibold">Cybersecurity & Data Protection</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus itaque voluptates amet pariatur corrupti? Deserunt.</p>
                    <p> <a class="a-link text-decoration-none fw-medium d-flex align-items-center" href="page-service-single.html">Learn more<i class="bi bi-arrow-right-short"></i></a></p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                <div class="service-item h-100">
                    <div class="mb-4 icon-wrap d-flex align-items-center justify-content-center"><i class="bi bi-mouse2 fs-3 lh-sm"></i></div>
                    <h3 class="h6 mb-3 fw-semibold">IT Consulting & Digital Strategy</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus itaque voluptates amet pariatur corrupti? Deserunt.</p>
                    <p> <a class="a-link text-decoration-none fw-medium d-flex align-items-center" href="page-service-single.html">Learn more<i class="bi bi-arrow-right-short"></i></a></p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
                <div class="service-item h-100">
                    <div class="mb-4 icon-wrap d-flex align-items-center justify-content-center"><i class="bi bi-shadows fs-3 lh-sm"></i></div>
                    <h3 class="h6 mb-3 fw-semibold">AI & Automation Services</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus itaque voluptates amet pariatur corrupti? Deserunt.</p>
                    <p> <a class="a-link text-decoration-none fw-medium d-flex align-items-center" href="page-service-single.html">Learn more<i class="bi bi-arrow-right-short"></i></a></p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
                <div class="service-item h-100">
                    <div class="mb-4 icon-wrap d-flex align-items-center justify-content-center"><i class="bi bi-megaphone fs-3 lh-sm"></i></div>
                    <h3 class="h6 mb-3 fw-semibold"> SEO & Digital Marketing</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus itaque voluptates amet pariatur corrupti? Deserunt.</p>
                    <p> <a class="a-link text-decoration-none fw-medium d-flex align-items-center" href="page-service-single.html">Learn more<i class="bi bi-arrow-right-short"></i></a></p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="700">
                <div class="service-item h-100">
                    <div class="mb-4 icon-wrap d-flex align-items-center justify-content-center"><i class="bi bi-window-stack fs-3 lh-sm"></i></div>
                    <h3 class="h6 mb-3 fw-semibold">Web Application Development</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus itaque voluptates amet pariatur corrupti? Deserunt.</p>
                    <p> <a class="a-link text-decoration-none fw-medium d-flex align-items-center" href="page-service-single.html">Learn more<i class="bi bi-arrow-right-short"></i></a></p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="800">
                <div class="service-item h-100">
                    <div class="mb-4 icon-wrap d-flex align-items-center justify-content-center"><i class="bi bi-window-sidebar fs-3 lh-sm"></i></div>
                    <h3 class="h6 mb-3 fw-semibold"> Content Management System</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus itaque voluptates amet pariatur corrupti? Deserunt.</p>
                    <p> <a class="a-link text-decoration-none fw-medium d-flex align-items-center" href="page-service-single.html">Learn more<i class="bi bi-arrow-right-short"></i></a></p>
                </div>
            </div>
        </div> -->
    </div>
</section>
<!-- End Services-->
<section class="section first-section features__v4 pt-0" id="feature">
    <div class="container" data-aos="fade-up">
        <div class="row mb-5">
            <div class="col-md-7 mx-auto text-center">
                <h2 class="h-custom">Modernize, innovate, and drive competitive differentiation</h2>
                <p>CloudSuite Automotive provides a comprehensive suite of industry-proven automotive solutions, including a core ERP combined with high-value extension applications.</p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-sm-12 col-md-6 col-lg-4">
                <a class="rounded-4 p-4 d-block h-100 feature" href="#"><span class="icon mb-4 d-block"><i class="bi bi-tools display-6"></i></span>
                    <h3 class="fs-6 h-custom">Quality and production</h3>
                    <ul>
                        <li>Shop-floor scheduling & lean production tools</li>
                        <li>OEM & complex regulatory compliance</li>
                        <li>Program management</li>
                    </ul>
                </a>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4">
                <a class="rounded-4 p-4 d-block h-100 feature" href="#"><span class="icon mb-4 d-block"><i class="bi bi-lightbulb display-6"></i></span>
                    <h3 class="fs-6 h-custom">Planning &amp; Inventory</h3>
                    <ul>
                        <li>Scheduling for all processes, MMOG requirements</li>
                        <li>High-volume production management.</li>
                    </ul>
                </a>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4">
                <a class="rounded-4 p-4 d-block h-100 feature" href="#"><span class="icon mb-4 d-block"><i class="bi bi-cloud-upload display-6"></i></span>
                    <h3 class="fs-6 h-custom">Supply Chain Visibility</h3>
                    <ul>
                        <li>Advanced procurement tools</li>
                        <li>Raw materials sourcing for lower costs</li>
                        <li>Faster product delivery</li>
                    </ul>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection