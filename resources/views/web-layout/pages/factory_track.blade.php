@extends('web-layout.main_nova')
@section('title', 'Factory Track')
@section('subtitle', 'Factory Track')
@section('content')

<section class="section first-section services__v1-prism" id="services">
    <div class="container">
        <div class="row pt-5 mb-5">
            <div class="col-md-8 mx-auto text-center" data-aos="fade-up">
                <h1 class="display-3 fw-bold mb-3">Factory Track</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-11">
                <p class="mb-5"> <img class="img-fluid" src="{{ url('assets-nova/images/factory_track.jpg') }}" alt="FreeBootstrap.net image placeholder"></p>
                Infor Factory Track™ is an end-to-end manufacturing automation solution, along with warehouse mobility, traceability, and tools for tracking labor and time. Designed to help companies streamline production, properly inventory materials, speed inventory operations, keep labor costs in control, and integrate with Infor's industrial manufacturing platform. Get the visibility and insight to understand true costs, improve cycle times, and respond to customer expectations for on-time delivery.
            <section class="section about__v2 mt-n5">
          <div class="container">
            <div class="row"> 
              <div class="col-md-7 mb-md-0">
                <div class="row"> 
                  <div class="col-sm-11">
                    <div class="img-wrap position-relative">
                        <a class="glightbox btn-video" href="{{ url('assets-nova/images/infor_factory_track_warehouse_ mobility.mp4') }}" data-gallery="video"><span class="btn-video-play"><i class="bi bi-play-btn-fill"></i></span><img class="img-fluid rounded-4" src="{{ url('assets-nova/images/fac_track_thumbnail.jpg') }}" alt="FreeBootstrap.net image placeholder"></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-5">
                <div class="row">
                    <div class="col-md-12">
                        <p> Boost performance and efficiency in areas that are essential to your manufacturing organization — improving customer engagements, your operations, and the supply chain.<br/>
                        <h3>Highlights</h3>
                            <ul class="mt-n5">
                                <li>Barcode handling</li>
                                <li>Inbound Logistics</li>
                                <li>Job material transactions</li>
                                <li>Time & Attendance automation
                                <li>Labor data collection</li>
                                <li>Overtime rules</li>
                            </ul>
                        </p>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </section>
            </div>
        </div>
    </div>
</section>


@endsection