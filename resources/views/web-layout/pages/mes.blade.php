@extends('web-layout.main_nova')
@section('title', 'M E S')
@section('subtitle', 'M E S')
@section('content')
<!-- ======= Services =======-->
<section class="section first-section services__v1-prism" id="services">
    <div class="container">
        <div class="row pt-5 mb-5">
            <div class="col-md-8 mx-auto text-center" data-aos="fade-up">
                <h1 class="display-3 fw-bold mb-3">M E S</h1>
                <p class="lead">Smart manufacturing execution system (MES) software</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-11">
                <p class="mb-5"> <img class="img-fluid" src="{{ url('assets-nova/images/mes.jpg') }}" alt="FreeBootstrap.net image placeholder"></p>
                <p>Infor MES manufacturing software allows factories to orchestrate, synchronize, and track production operations. It seamlessly integrates with your ERP systems and the factory environment in discrete, process, and batch industries – paving the way for the smart factory.</p>
                <ul>
                    <li>Manage plant operations on the shop floor – from production to logistics and maintenance</li>
                    <li>Smoothly connect and integrate your ERP and other systems across factories</li>
                    <li>Take advantage of an easy-to-use low-code/no-code, fully configurable enterprise solution</li>
                    <li>Centralize master data and enable global, multi-site operations</li>
                    <li>Leverage flexible reporting and AI-driven analytics</li>
                </ul>
            </div>
        </div>
        
    </div>
</section>
<!-- End Services-->
<section class="section first-section features__v4 pt-0" id="feature">
    <div class="container" data-aos="fade-up">
        <div class="row mb-5">
            <div class="col-md-7 mx-auto text-center">
                <h2 class="h-custom">Top 4 benefits of our manufacturing execution software</h2>
                <p>Learn how our MES System can help you achieve a paperless shop floor, elevate manufacturing performance, better meet customer demand, and more.</p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-sm-12 col-md-6 col-lg-3">
                <a class="rounded-3 p-3 d-block h-100 feature" href="#"><span class="icon mb-4 d-block"><i class="bi bi-battery-charging display-6"></i></span>
                    <h3 class="fs-6 h-custom">Empowered shop floor workers</h3>
                    <p>
                        Whatever their role, our MES gives shop floor employes all the information they need on one screen and across all devices to make their jobs easier and more productive, reducing errors and improving quality.
                    </p>
                </a>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3">
                <a class="rounded-3 p-3 d-block h-100 feature" href="#"><span class="icon mb-4 d-block"><i class="bi bi-check2-square display-6"></i></span>
                    <h3 class="fs-6 h-custom">Enhanced quality & compliance</h3>
                    <p>
                        Gain confidence in your quality control. Consistently deliver high caliber products at cost while fully complying with customer demands and industry regulations.
                    </p>
                </a>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3">
                <a class="rounded-3 p-3 d-block h-100 feature" href="#"><span class="icon mb-4 d-block"><i class="bi bi-lightbulb display-6"></i></span>
                    <h3 class="fs-6 h-custom">Improved operational performance</h3>
                    <p>
                        Leverage real-time feedback on your factory performance to improve uptime, increase OEE, and rely on standardized business processes to reduce loss and waste.
                    </p>
                </a>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3">
                <a class="rounded-3 p-3 d-block h-100 feature" href="#"><span class="icon mb-4 d-block"><i class="bi bi-cloud-upload display-6"></i></span>
                    <h3 class="fs-6 h-custom">Smart factory & paperless processes</h3>
                    Break down silos and remove paper-based processes from the shop floor. Whether for one or fifty plants, our system provides standard KPIs that benchmark and drive performance.
                </a>
            </div>
        </div>
    </div>
</section>

@endsection