@extends('web-layout.main_nova')
@section('title', 'CSIE')
@section('subtitle', 'CSIE')
@section('content')
<!-- ======= Services =======-->
<section class="section first-section services__v1-prism" id="services">
    <div class="container">
        <div class="row pt-5 mb-5">
            <div class="col-md-8 mx-auto text-center" data-aos="fade-up">
                <h1 class="display-3 fw-bold mb-3">Infor Cloudsuite Industrial Enterprise (CSIE)</h1>
                <p class="lead">Industrial ERP for enterprises.</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-11">
                <p class="mb-5"> <img class="img-fluid" src="{{ url('assets-nova/images/hero-img-3-min.jpg') }}" alt="FreeBootstrap.net image placeholder"></p>
                <p>Industrial manufacturers need innovation to tame complexity and maintain their competitive edge. The beginning of a new manufacturing era is an opportune time for industrial manufacturers to analyze their current business processes and uncover areas where new software and technologies will unlock efficiencies that lead to growth. Transform your business with Infor CloudSuite Industrial Enterprise, a versatile cloud service built to increase industrial manufacturing productivity, meet customer demands, and bring products to market ahead of the competition.</p>
                <!-- ======= Content Quote =======-->
                <div class="mt-5">
                    <div class="quote__v1 position-relative mb-5">
                        <!-- <img class="quote js-img-to-inline-svg" src="{{ url('assets-nova/images/quote.svg') }}" alt="FreeBootstrap.net image placeholder"> -->
                        <blockquote class="fs-2">We are very pleased with Infor CloudSuite Industrial Enterprise and have gained great user adoption with its ease of exporting and downloading data.</blockquote>
                        <div class="author fw-bold">CINDY GIRARD <span class="fw-normal">&mdash; DIRECTOR, ERP & INVENTORY PLANNING</span></div>
                    </div>
                </div>
                <!-- End Content Quote-->
                <p> Boost performance and efficiency in areas that are essential to your manufacturing organization—improving customer engagements, your operations, and the supply chain.</p>
            </div>
        </div>
    </div>
</section>
<!-- End Services-->
<section class="section first-section features__v4 pt-0" id="feature">
    <div class="container" data-aos="fade-up">
        <div class="row mb-5">
            <div class="col-md-7 mx-auto text-center">
                <h2 class="h-custom">A technology backbone for modernizing industrial enterprises</h2>
                <p>Infor CloudSuite Industrial Enterprise is the technology backbone you need to modernize your business.</p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-sm-12 col-md-6 col-lg-4">
                <a class="rounded-4 p-4 d-block h-100 feature" href="#"><span class="icon mb-4 d-block"><i class="bi bi-tools display-6"></i></span>
                    <h3 class="fs-6 h-custom">Digital backbone</h3>
                    <ul>
                        <li>Automate complex tasks</li>
                        <li>Networked analytics & business intelligence</li>
                        <li>Extensibility for unique business requirements</li>
                    </ul>
                </a>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4">
                <a class="rounded-4 p-4 d-block h-100 feature" href="#"><span class="icon mb-4 d-block"><i class="bi bi-lightbulb display-6"></i></span>
                    <h3 class="fs-6 h-custom">Integrated operations</h3>
                    <ul>
                        <li>Industry best practices for project-based manufacturing processes</li>
                        <li>Global, multi-site planning capabilities</li>
                    </ul>
                </a>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4">
                <a class="rounded-4 p-4 d-block h-100 feature" href="#"><span class="icon mb-4 d-block"><i class="bi bi-cloud-upload display-6"></i></span>
                    <h3 class="fs-6 h-custom">Supply chain transparency</h3>
                    <ul>
                        <li>Maintain global supplier visibility</li>
                        <li>Use advanced warehouse management</li>
                        <li>Eliminate stock-outs and delays</li>
                    </ul>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection