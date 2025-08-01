<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> @yield('title')</title>

    <!-- ======= Google Font =======-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&amp;display=swap" rel="stylesheet">
    <!-- End Google Font-->

    <!-- ======= Styles =======-->
    <link href="{{ url('assets-nova/vendors/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets-nova/vendors/bootstrap-icons/min/bootstrap-icons.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets-nova/vendors/glightbox/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets-nova/vendors/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets-nova/vendors/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ url('assets-nova/fontawesome-free/all.min.css') }}" rel="stylesheet">
    <!-- End Styles-->

    <!-- ======= Theme Style =======-->
    <!-- <link href="{{ url('assets-nova/css/style.css') }}" rel="stylesheet"> -->
    <link href="{{ url('assets-nova/css/style-ori.css') }}" rel="stylesheet">
    <!-- End Theme Style-->

    <!-- ======= Apply theme =======-->
    <script>
        // Apply the theme as early as possible to avoid flicker
        (function() {
            const storedTheme = localStorage.getItem('theme') || 'light';
            document.documentElement.setAttribute('data-bs-theme', storedTheme);
        })();
    </script>
    
<style>
.whatsapp-float {
  position: fixed;
  bottom: 20px;
  right: 20px;
  z-index: 100;
  cursor: pointer;
}
</style>

    </style>
</head>

<body>
    @include('web-layout.partials.header')
    <div class="site-wrap">
        @include('sweetalert::alert')

        <!-- End Header-->

        <!-- ======= Main =======-->
        <main>
            @yield('content')



        @include('web-layout.partials.footer')    

        </main>
    </div>

    <!-- ======= Back to Top =======-->
    <!-- <button id="back-to-top"><i class="bi bi-arrow-up-short"></i></button> -->
    <!-- HTML -->
<a href="https://wa.me/6285156194815?text=halo%20saya%20ingin%20diberikan%20penawaran%20atas%20produk%20anda" class="whatsapp-float" target="_blank" rel="noopener noreferrer">
  <img src="{{ url('assets-nova/images/whatsapp.svg') }}" alt="Chat via WhatsApp" width="50" />
</a>

    <!-- End Back to top-->

    <!-- ======= Javascripts =======-->
    <script src="{{ url('assets-nova/vendors/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('assets-nova/vendors/gsap/gsap.min.js') }}"></script>
    <script src="{{ url('assets-nova/vendors/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ url('assets-nova/vendors/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ url('assets-nova/vendors/glightbox/glightbox.min.js') }}"></script>
    <script src="{{ url('assets-nova/vendors/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ url('assets-nova/vendors/aos/aos.js') }}"></script>
    <script src="{{ url('assets-nova/vendors/purecounter/purecounter.js') }}"></script>
    <script src="{{ url('assets-nova/js/custom.js') }}"></script>
    <script src="{{ url('assets-nova/js/send_email.js') }}"></script>
    <!-- End JavaScripts-->
</body>

</html>