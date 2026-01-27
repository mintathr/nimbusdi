<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>@yield('title', 'Nimbus')</title>
  <!-- @vite('resources/css/app.css')  -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
<script src="{{ asset('js/app.js') }}"></script>

  <link href="{{ asset('assets-nova/vendors/aos/aos.css') }}" rel="stylesheet">
<!-- <link href="{{ asset('assets-nova/fontawesome-free/css/all.min.css') }}" rel="stylesheet"> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>
<body class="font-sans text-gray-800">
<!-- Header -->
  @include('web-layout.partials.header_tailwind')
  <!-- Content -->
  <main>
    @yield('content')
  </main>

  <footer class="bg-[#4d83bc] text-gray-100 py-8">
  <div class="container mx-auto px-6 grid md:grid-cols-3 gap-8">
    
    <!-- About -->
    <div>
      <h3 class="text-white font-bold mb-4">About</h3>
      <p>
        We are company founded by a team of professionals with over 20 years of experience in IT Consulting. PT Nimbus Dinamis Indonesia (Nimbus) is dedicated to creating a new approach in delivering ERP solutions, customized to fit each client's industry. We believe every client is unique and deserves to be treated uniquely.
      </p>
    </div>

    <!-- Contact -->
    <div>
      <h3 class="text-white font-bold mb-4">Contact</h3>
      <p>Infiniti Office, Permata Regency D/37<br>Kembangan Jakarta Barat 11630</p>
      <p>Email: sales@nimbusdi.co.id</p>
      <p>Whatsapp: +62 815-1434-2393</p>
    </div>

    <!-- Quick Links -->
    <div>
      <h3 class="text-white font-bold mb-4">Quick Links</h3>
      <ul class="space-y-2">
        <li><a href="#" class="hover:underline">Home</a></li>
        <li><a href="#" class="hover:underline">About</a></li>
        <li><a href="#" class="hover:underline">Experience</a></li>
        <li><a href="#" class="hover:underline">Contact</a></li>
      </ul>
    </div>

  </div>

  <!-- Credits -->
  <div class="border-t border-gray-200 mt-8 pt-4 text-center text-sm text-gray-100">
    &copy; <script>document.write(new Date().getFullYear());</script> 
    <span class="font-semibold">PT. Nimbus Dinamis Indonesia</span> — All rights reserved.
  </div>
</footer>

  <!-- Back to Top -->
  <button id="back-to-top" 
        class="fixed bottom-6 right-6 bg-[#4d83bc] text-white w-12 h-12 rounded-full shadow-lg flex items-center justify-center hover:bg-blue-700 transition">
    <i class="fa-solid fa-arrow-up text-2xl"></i>
</button>


  <!-- WhatsApp Floating -->
  <!-- <a href="https://wa.me/6285156194815?text=Halo%20saya%20ingin%20penawaran%20produk%20anda" 
     class="fixed bottom-32 left-6" target="_blank" rel="noopener noreferrer">
    <img src="assets-nova/images/whatsapp.svg" alt="Chat via WhatsApp" class="w-12 hover:scale-110 transition"/>
  </a> -->

  <!-- Scripts -->
   <script src="{{ asset('assets-nova/vendors/aos/aos.js') }}"></script>
   <script> AOS.init(); </script>
<script>
  const backToTop = document.getElementById('back-to-top');

  // klik scroll ke atas
  backToTop.addEventListener('click', () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });

  // sembunyikan saat di atas
  window.addEventListener('scroll', () => {
    if (window.scrollY > 200) {
      backToTop.style.display = 'flex'; // tampil
    } else {
      backToTop.style.display = 'none'; // sembunyi
    }
  });

  // default awal: sembunyi
  backToTop.style.display = 'none';
</script>

<script>
  const slides = document.querySelectorAll('.slide');
  const indicators = document.querySelectorAll('.indicator');
  let current = 0;
  let timer;

  function showSlide(index) {
    slides.forEach((s, i) => {
      s.classList.toggle('active', i === index);
      indicators[i].classList.toggle('active', i === index);
    });
    current = index;
  }

  function nextSlide() {
    showSlide((current + 1) % slides.length);
  }

  function prevSlide() {
    showSlide((current - 1 + slides.length) % slides.length);
  }

  document.getElementById('next').addEventListener('click', () => {
    nextSlide();
    resetTimer();
  });
  document.getElementById('prev').addEventListener('click', () => {
    prevSlide();
    resetTimer();
  });
  indicators.forEach((ind, i) => {
    ind.addEventListener('click', () => {
      showSlide(i);
      resetTimer();
    });
  });

  function startTimer() {
    timer = setInterval(nextSlide, 5000); // auto slide 5s
  }
  function resetTimer() {
    clearInterval(timer);
    startTimer();
  }

  // init
  showSlide(0);
  startTimer();
</script>

<script>
  const menuBtn = document.getElementById('menu-btn');
  const mobileMenu = document.getElementById('mobile-menu');
  const expBtn = document.getElementById('exp-btn');
  const expSub = document.getElementById('exp-sub');
  const indBtn = document.getElementById('ind-btn');
  const indSub = document.getElementById('ind-sub');

  menuBtn.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
  });

  expBtn?.addEventListener('click', () => {
    expSub.classList.toggle('hidden');
  });

  indBtn?.addEventListener('click', () => {
    indSub.classList.toggle('hidden');
  });
</script>

</body>
</html>