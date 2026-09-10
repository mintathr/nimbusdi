@extends('web-layout.main_nova')
@section('title', 'ERP Implemen')
@section('subtitle', 'ERP Implemen')
@section('content')
<style>
    .nimbus-sf-video {
        position: relative;
        display: inline-block;
        border-radius: 15px;
        overflow: hidden;
        max-width: 100%;
    }

    .nimbus-sf-video img {
        display: block;
        width: 100%;
        border-radius: 15px;
        transition: transform 0.3s ease;
    }

    .nimbus-sf-play {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 70px;
        height: 70px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.95);
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 2;
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.18);
    }

    .nimbus-sf-play i {
        font-size: 26px;
        color: #0d6efd;
        margin-left: 4px;
    }

    .nimbus-sf-video:hover img {
        transform: scale(1.05);
    }

    .nimbus-sf-video:hover .nimbus-sf-play {
        transform: translate(-50%, -50%) scale(0.9);
    }
</style>
<!-- ======= Services =======-->
<section class="section first-section services__v1-prism" id="services">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto text-center" data-aos="fade-up">
                <h1 class="display-6 fw-bold mb-3">Nimbus SF (Smart Factory)</h1>
                <!-- <p class="lead">ERP stands as a pivotal force in the digital transformation of modern businesses.</p> -->
                <div class="img-wrap position-relative">
                    <a class="glightbox btn-video nimbus-sf-video" href="{{ asset('assets-nova/images/sf_vid.mp4') }}" data-gallery="video">
                        <span class="btn-video-play nimbus-sf-play"><i class="bi bi-play-btn-fill"></i></span>
                        <img class="img-fluid rounded-4" src="{{ url('assets-nova/images/sf_thumbnail.png') }}" alt="Nimbus SF video thumbnail">
                    </a>
                </div>
                <p class="mt-4 mb-0 text-center">
                    Watch this Smart Factory Production Manufacturing tutorial video. For more information, visit
                    <a href="https://sf.nimbusdi.co.id" target="_blank" rel="noopener noreferrer">sf.nimbusdi.co.id</a>.
                </p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-11">
                
            </div>
        </div>
    </div>
</section>


@endsection