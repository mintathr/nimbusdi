@extends('web-layout.main_nova')
@section('title', 'Enterprise Asset Management')
@section('subtitle', 'Enterprise Asset Management')
@section('content')

<style>
  .iframe-container {
  position: relative;
  width: 100%;
  padding-bottom: 56.25%; /* Rasio 16:9 (9/16 = 0.5625) */
  height: 0;
  overflow: hidden;
}

.iframe-container iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border: 0;
}

</style>
<!-- ======= Services =======-->
<section class="section first-section services__v1-prism" id="services">
    <div class="container">
        <div class="row mb-5 pt-5">
            <div class="col-md-8 mx-auto text-center" data-aos="fade-up">
                <h1 class="display-6 fw-bold mb-3">Enterprise Asset Management</h1>
                <p class="lead">Hexagon's Resource Center is focused on delivering the most up-to-date content about digital transformation as well as providing customers with the latest product information and industry research.</p>
            </div>
        </div>
        <div class="row"> 
           
        <!-- <div class="img-wrap position-relative"><a class="glightbox btn-video" href="https://player.vimeo.com/video/316193229?autoplay=1" data-gallery="video"><span class="btn-video-play"><i class="bi bi-play-btn-fill"></i></span><img class="img-fluid rounded-4" src="{{ url('assets-nova/images/thumbnail_video.jpg') }}" alt="FreeBootstrap.net image placeholder"></a></div> -->
          
              <div class="col-md-7 mb-5 mb-md-0">
              <div class="iframe-container">
                    <iframe class="vidyard_iframe" title="HxGN EAM Achieve operational excellence with holistic Asset Management" src="//play.vidyard.com/wwbWyfSmVfDywUjQrVmPYd.html?" scrolling="no" frameborder="0" allowtransparency="true" allowfullscreen referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>                  
              </div>
              <div class="col-md-5">
                <div class="row">
                  <div class="col-md-12">
                    <h2 class="fw-bold mb-4">HxGN EAM</h2>
                    <p class="mb-4">Achieve operational excellence with holistic Asset Management. With unique capabilities for managing asset reliability, HxGN EAM will boost your asset performance by aligning resources and enterprise objectives. </p>
                    <!-- <p class="mb-0"> <a class="btn btn-primary" href="page-contact.html">Contact us</a></p> -->
                  </div>
                </div>
              </div>
            </div>
    </div>
</section>
<!-- End Services-->


@endsection