@extends('web-layout.main_tailwind')
@section('title', 'Home - Nimbus')
@section('content')

<section class="relative h-screen overflow-hidden">
  <!-- Slides -->
  <div class="absolute inset-0">
    <div class="slide bg-cover bg-center" style="background-image: url('{{ asset('assets-nova/images/c.png') }}');"></div>
    <div class="slide bg-cover bg-center" style="background-image: url('{{ asset('assets-nova/images/d.png') }}');"></div>
    <div class="slide bg-cover bg-center" style="background-image: url('{{ asset('assets-nova/images/e.png') }}');"></div>
  </div>

  <!-- Overlay -->
  <div class="absolute inset-0 bg-black bg-opacity-50"></div>

  <!-- Content -->
  <div class="relative z-10 flex flex-col items-center justify-center h-full text-center text-white px-6">
    <h1 class="text-3xl md:text-5xl font-bold mb-4">Empowering Smart Manufacturing with AI-Driven ERP</h1>
    <p class="text-base md:text-xl mb-6">Customized ERP solutions for your industry</p>
    <a href="#contact" class="bg-[#4d83bc] hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-semibold transition">Let's Connect</a>
  </div>

  <!-- Navigation arrows -->
  <button id="prev" class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-white bg-opacity-30 hover:bg-opacity-50 text-black p-2 rounded-full z-20">
    &#10094;
  </button>
  <button id="next" class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-white bg-opacity-30 hover:bg-opacity-50 text-black p-2 rounded-full z-20">
    &#10095;
  </button>

  <!-- Indicators -->
  <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 flex space-x-2 z-20">
    <span class="indicator w-3 h-3 bg-white rounded-full cursor-pointer"></span>
    <span class="indicator w-3 h-3 bg-white rounded-full cursor-pointer"></span>
    <span class="indicator w-3 h-3 bg-white rounded-full cursor-pointer"></span>
  </div>
</section>

<style>
  .slide {
    position: absolute;
    inset: 0;
    opacity: 0;
    transition: opacity 1s ease-in-out;
  }
  .slide.active {
    opacity: 1;
  }
  .indicator.active {
    background-color: #2563eb; /* Tailwind blue-600 */
  }
</style>





<section id="about_us" class="py-10 bg-gray-50">
  <div class="container mx-auto px-6 md:px-12 lg:px-20">
    <div class="grid md:grid-cols-2 gap-12 items-center">
      
      <!-- Image -->
      <div class="relative" data-aos="zoom-in" data-aos-delay="300">
        <img src="{{ asset('assets-nova/images/2.jpeg') }}" alt="About Nimbus" class="rounded-lg shadow-lg w-full h-auto object-cover"/>
        <!-- Decorative overlay -->
        <div class="absolute inset-0 bg-blue-600 opacity-20 rounded-lg"></div>
      </div>

      <!-- Content -->
      <div data-aos="fade-up" data-aos-delay="300">
        <h2 class="text-4xl md:text-5xl font-extrabold text-gray-800 mb-6"> About <span class="text-[#4d83bc]">NIMBUS</span> </h2> <!-- Sub header --> 
        <h4 class="text-xl md:text-2xl text-gray-700 mb-4"> Driven by Experience, Powered by Technology, Designed for you </h4>
        
       
                            <p class="text-gray-600 leading-relaxed mb-6">
  We are company founded by a team of professionals with over 20 years of experience in IT Consulting.
  <span class="text-[#4d83bc] font-bold">PT Nimbus Dinamis Indonesia (Nimbus)</span> is dedicated to creating a new approach in delivering ERP solutions, customized to fit each client's industry. We believe every client is unique and deserves to be treated uniquely.
<br>
    Our experience shows that standard or "vanilla" solutions can't address the uniqueness of every client. We provide configurable solutions that truly solve client challenges.
<br>
<span class="text-[#4d83bc] font-bold">Nimbus</span> assures you that we will help take your company to the next level of success-like never before.
<br>
<span class="text-[#4d83bc] font-bold">Our beliefe</span> "like the ever-changing clouds, our team continuously improves services and solutions by leveraging the latest technology, ensuring your business journey always stays on the bright side".
</p>
        
        <!-- <a href="#contact" class="inline-block bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-semibold transition">
          Learn More
        </a> -->
      </div>

    </div>
  </div>
</section>

<section id="head2" class="max-w-7xl mx-auto px-8 py-10 flex flex-col md:flex-row items-center">
        <div class="md:w-1/2 mb-10 md:mb-0" data-aos="fade-right" data-aos-delay="300">
            <h2 class="text-3xl font-extrabold text-slate-900 leading-tight mb-6">
                Empowering Smart Manufacturing <br>
                <span class="text-[#4d83bc] italic">with AI-Driven ERP</span>
            </h2>
            

            <p class="text-xl text-slate-600 mb-8 max-w-lg">
                At <span class="text-[#4d83bc]">PT Nimbus Dinamis Indonesia (NIMBUS)</span>
                , we help manufacturing business unlock the full potential of industry 4.0. Our intelligent ERP solutions are designed to automate operations, improve supply chain efficiency, and connect every aspect of your production process.
                <br>By integrating <b>AI, IoT and real-time analytics</b>, we deliver a smarter way to manage your factory - increasing visibility, reducing downtime, and driving growth. Step into the future of manufacturing with systems built for speed, scability, and success.
            </p>
           <!--  <div class="flex space-x-4">
                <button class="bg-slate-900 text-white px-8 py-4 rounded-xl font-bold shadow-xl hover:-translate-y-1 transition">
                    Coba Gratis
                </button>
                <button class="bg-white border border-slate-300 text-slate-900 px-8 py-4 rounded-xl font-bold hover:bg-slate-50 transition">
                    Pelajari Fitur
                </button>
            </div> -->
        </div>

        <!-- Decorative UI Element -->
        <div class="md:w-1/2 flex justify-center">
            <div class="relative w-80 h-80 bg-[#4d83bc] rounded-3xl rotate-6 shadow-2xl flex items-center justify-center overflow-hidden" data-aos="zoom-in" data-aos-delay="400">
                <div class="absolute inset-0 bg-gradient-to-tr from-black/20 to-transparent"></div>
                <div class="text-white text-6xl font-black">nimbus</div>
                <div class="absolute -top-4 -left-4 w-20 h-20 bg-emerald-400 rounded-full blur-xl opacity-50"></div>
            </div>
        </div>
    </section>

<section id="gallery3" class="py-10 bg-slate-100">
  <div class="max-w-7xl mx-auto text-center mb-12" data-aos="fade-up" data-aos-delay="0">
    <h2 class="text-4xl font-extrabold mb-4">Our <span class="text-[#4d83bc]">Experience</span></h2>
    <p class="text-slate-600">Utilize our tools to develop your concepts and bring your vision to life. Once complete, effortlessly share your creations.</p>
  </div>
  <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
    <!-- Product Item -->
    <div class="group bg-slate-50 rounded-3xl overflow-hidden shadow-sm hover:shadow-2xl transition duration-300" data-aos="zoom-in" data-aos-delay="0">
      <div class="h-48 bg-slate-200 overflow-hidden">
        <img src="{{ asset('assets-nova/images/manufacturing.jpg') }}" 
             class="w-full h-full object-cover group-hover:scale-110 transition duration-500" alt="Product">
      </div>
      <div class="p-6 text-center">
        <h3 class="text-xl font-bold mb-2">Project Based Manufacturing</h3>
        <!-- <p class="text-slate-500 mb-4 text-sm">Analisis data real-time dengan teknologi AI tercanggih.</p> -->
      </div>
    </div>
    <div class="group bg-slate-50 rounded-3xl overflow-hidden shadow-sm hover:shadow-2xl transition duration-300" data-aos="zoom-in" data-aos-delay="10">
      <div class="h-48 bg-slate-200 overflow-hidden">
        <img src="{{ asset('assets-nova/images/chemical.jpg') }}" 
             class="w-full h-full object-cover group-hover:scale-110 transition duration-500" alt="Product">
      </div>
      <div class="p-6 text-center">
        <h3 class="text-xl font-bold mb-2">Chemical</h3>
        <!-- <p class="text-slate-500 mb-4 text-sm">Analisis data real-time dengan teknologi AI tercanggih.</p> -->
      </div>
    </div>
    <div class="group bg-slate-50 rounded-3xl overflow-hidden shadow-sm hover:shadow-2xl transition duration-300" data-aos="zoom-in" data-aos-delay="20">
      <div class="h-48 bg-slate-200 overflow-hidden">
        <img src="{{ asset('assets-nova/images/food_beverage.jpg') }}" 
             class="w-full h-full object-cover group-hover:scale-110 transition duration-500" alt="Product">
      </div>
      <div class="p-6 text-center">
        <h3 class="text-xl font-bold mb-2">Food and Beverage</h3>
        <!-- <p class="text-slate-500 mb-4 text-sm">Analisis data real-time dengan teknologi AI tercanggih.</p> -->
      </div>
    </div>
    <div class="group bg-slate-50 rounded-3xl overflow-hidden shadow-sm hover:shadow-2xl transition duration-300" data-aos="zoom-in" data-aos-delay="30">
      <div class="h-48 bg-slate-200 overflow-hidden">
        <img src="{{ asset('assets-nova/images/automotive.jpg') }}" 
             class="w-full h-full object-cover group-hover:scale-110 transition duration-500" alt="Product">
      </div>
      <div class="p-6 text-center">
        <h3 class="text-xl font-bold mb-2">Automotive Manufacturing</h3>
        <!-- <p class="text-slate-500 mb-4 text-sm">Analisis data real-time dengan teknologi AI tercanggih.</p> -->
      </div>
    </div>
    <div class="group bg-slate-50 rounded-3xl overflow-hidden shadow-sm hover:shadow-2xl transition duration-300" data-aos="zoom-in" data-aos-delay="40">
      <div class="h-48 bg-slate-200 overflow-hidden">
        <img src="{{ asset('assets-nova/images/steel2.jpg') }}" 
             class="w-full h-full object-cover group-hover:scale-110 transition duration-500" alt="Product">
      </div>
      <div class="p-6 text-center">
        <h3 class="text-xl font-bold mb-2">Steel Manufacturing</h3>
        <!-- <p class="text-slate-500 mb-4 text-sm">Analisis data real-time dengan teknologi AI tercanggih.</p> -->
      </div>
    </div>
    <div class="group bg-slate-50 rounded-3xl overflow-hidden shadow-sm hover:shadow-2xl transition duration-300" data-aos="zoom-in" data-aos-delay="50">
      <div class="h-48 bg-slate-200 overflow-hidden">
        <img src="{{ asset('assets-nova/images/electronic_indstry.jpg') }}" 
             class="w-full h-full object-cover group-hover:scale-110 transition duration-500" alt="Product">
      </div>
      <div class="p-6 text-center">
        <h3 class="text-xl font-bold mb-2">Electronic</h3>
        <!-- <p class="text-slate-500 mb-4 text-sm">Analisis data real-time dengan teknologi AI tercanggih.</p> -->
      </div>
    </div>
    <div class="group bg-slate-50 rounded-3xl overflow-hidden shadow-sm hover:shadow-2xl transition duration-300" data-aos="zoom-in" data-aos-delay="60">
      <div class="h-48 bg-slate-200 overflow-hidden">
        <img src="{{ asset('assets-nova/images/plastic2.jpg') }}" 
             class="w-full h-full object-cover group-hover:scale-110 transition duration-500" alt="Product">
      </div>
      <div class="p-6 text-center">
        <h3 class="text-xl font-bold mb-2">Packaging</h3>
        <!-- <p class="text-slate-500 mb-4 text-sm">Analisis data real-time dengan teknologi AI tercanggih.</p> -->
      </div>
    </div>
    <div class="group bg-slate-50 rounded-3xl overflow-hidden shadow-sm hover:shadow-2xl transition duration-300" data-aos="zoom-in" data-aos-delay="70">
      <div class="h-48 bg-slate-200 overflow-hidden">
        <img src="{{ asset('assets-nova/images/distribution.jpg') }}" 
             class="w-full h-full object-cover group-hover:scale-110 transition duration-500" alt="Product">
      </div>
      <div class="p-6 text-center">
        <h3 class="text-xl font-bold mb-2">Trading & Distribution</h3>
        <!-- <p class="text-slate-500 mb-4 text-sm">Analisis data real-time dengan teknologi AI tercanggih.</p> -->
      </div>
    </div>
    <div class="group bg-slate-50 rounded-3xl overflow-hidden shadow-sm hover:shadow-2xl transition duration-300" data-aos="zoom-in" data-aos-delay="80">
      <div class="h-48 bg-slate-200 overflow-hidden">
        <img src="{{ asset('assets-nova/images/industrial_manufacturing.jpg') }}" 
             class="w-full h-full object-cover group-hover:scale-110 transition duration-500" alt="Product">
      </div>
      <div class="p-6 text-center">
        <h3 class="text-xl font-bold mb-2">Industrial Manufacturing</h3>
        <!-- <p class="text-slate-500 mb-4 text-sm">Analisis data real-time dengan teknologi AI tercanggih.</p> -->
      </div>
    </div>
  </div>
</section>


<!-- <section id="cta" class="py-24 bg-gradient-to-r from-[#4d83bc] to-indigo-700 text-white text-center px-6">
  <div class="max-w-3xl mx-auto">
    <h2 class="text-3xl md:text-5xl font-extrabold mb-6 leading-tight">
      Mulai Transformasi Digital Anda Hari Ini
    </h2>
    <p class="text-base md:text-lg mb-8">
      Gabung bersama ribuan bisnis yang sudah menggunakan <span class="font-semibold">nimbus</span>.
    </p> -->
   <!--  <a href="#contact" class="bg-[#4d83bc] text-white px-8 py-3 rounded-full font-bold hover:bg-[#3a6a9a] transition">
        Hubungi Kami
    </a> -->
    <!-- <a href="https://wa.me/6281514342393" target="_blank" 
   class="inline-flex items-center bg-[#4d83bc] text-white px-8 py-3 rounded-full font-bold hover:bg-[#3a6a9a] transition">
   <i class="fa-brands fa-whatsapp text-xl mr-2"></i>
   Hubungi Kami
</a>


  </div>
</section> -->



<section id="contact" class="py-16 bg-gray-50">
  <div class="container mx-auto px-6 md:px-12 lg:px-20">
    <!-- Title -->
    <div class="text-center mb-12" data-aos="fade-up" data-aos-delay="200">
      <h2 class="text-3xl md:text-4xl font-bold text-gray-800">
        Let's <span class="text-[#4d83bc]">Connect</span>
      </h2>
      <p class="text-gray-600 mt-4 max-w-2xl mx-auto">
        Contact us and we'll respond within 24 business hours.
      </p>
    </div>

    <!-- Grid layout -->
    <div class="grid md:grid-cols-2 gap-12">
      
      <!-- Contact Info -->
      <div class="space-y-6">
        <div class="flex items-start space-x-3">
          <!-- Office Icon -->
          <svg class="w-6 h-6 text-blue-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2C8 2 5 5 5 9c0 5 7 13 7 13s7-8 7-13c0-4-3-7-7-7z"/>
            <circle cx="12" cy="9" r="2" fill="currentColor"/>
          </svg>
          <div>
            <h3 class="text-xl font-semibold text-gray-800">Office</h3>
            <p class="text-gray-600">Infiniti Office, Permata Regency D/37
Kembangan Jakarta Barat 11630</p>
          </div>
        </div>

        <div class="flex items-start space-x-3">
          <!-- Phone Icon -->
          <svg class="w-6 h-6 text-blue-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3l2 5-2 2c1 3 3 5 6 6l2-2 5 2v3a2 2 0 01-2 2h-1c-9 0-16-7-16-16V5z"/>
          </svg>
          <div>
            <h3 class="text-xl font-semibold text-gray-800">Phone</h3>
            <p class="text-gray-600">+62 815-1434-2393</p>
          </div>
        </div>

        <div class="flex items-start space-x-3">
          <!-- Email Icon -->
          <svg class="w-6 h-6 text-blue-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4h16v16H4z"/>
            <polyline points="4,4 12,13 20,4" stroke="currentColor" stroke-width="2" fill="none"/>
          </svg>
          <div>
            <h3 class="text-xl font-semibold text-gray-800">Email</h3>
            <p class="text-gray-600">sales@nimbusdi.co.id</p>
          </div>
        </div>

        <div class="rounded-lg overflow-hidden shadow" data-aos="fade-left" data-aos-delay="400">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.4174403607753!2d106.7643991846231!3d-6.208542525961421!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f725fade3b5f%3A0x5c9fc3a22197ede8!2sINFINITI%20OFFICE%2C%20Jl.%20Permata%20Regency%20Jl.%20H.%20Kelik%20No.D%2F37%2C%20RT.1%2FRW.6%2C%20Srengseng%2C%20Kec.%20Kembangan%2C%20Kota%20Jakarta%20Barat%2C%20Daerah%20Khusus%20Ibukota%20Jakarta!5e0!3m2!1sen!2sid!4v1769260712728!5m2!1sen!2sid" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

</div>


       
      </div>

      <!-- Contact Form -->
      <form class="bg-white shadow-lg rounded-lg p-6 space-y-4" data-aos="zoom-in" data-aos-delay="300">
        <div>
            <!-- <label class="block text-gray-700 mb-2">Name</label> -->
            <input type="text" class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-[#4d83bc]" placeholder="Name"/>
        </div>

        <div>
            <!-- <label class="block text-gray-700 mb-2">Email</label> -->
            <input type="email" class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-[#4d83bc]" placeholder="Email"/>
        </div>

        <div class="relative">
            <select class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-[#4d83bc] appearance-none">
                <option>Select Industry...</option>
            <option value="Manufacturing">Manufacturing</option>
            <option value="Trading">Trading</option>
            <option value="Services">Services</option>
            <option value="Government">Government</option>
            <option value="Retail">Retail</option>
            <option value="Construction">Construction</option>
            <option value="Others">Others</option>
            </select>
            <!-- Custom arrow -->
            <div class="absolute inset-y-0 right-3 flex items-center pointer-events-none">
                <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
            </div>
        </div>
        <div>
            <!-- <label class="block text-gray-700 mb-2">Phone Number</label> -->
            <input type="text" class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-[#4d83bc]" placeholder="Phone Number"/>
        </div>
        <div>
            <!-- <label class="block text-gray-700 mb-2">Company Name</label> -->
            <input type="text" class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-[#4d83bc]" placeholder="Company Name"/>
        </div>

        <div>
            <!-- <label class="block text-gray-700 mb-2">Message</label> -->
            <textarea rows="4" class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-[#4d83bc]" placeholder="Your Message"></textarea>
        </div>
                <button type="submit" class="w-full bg-[#4d83bc] hover:bg-[#3a6a9a] text-white px-6 py-3 rounded-lg font-semibold transition">
            Send Message
        </button>
    </form>

    </div>
  </div>
</section>











@endsection