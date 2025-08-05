@extends('web-layout.main_nova')
@section('title', 'Home')
@section('subtitle', 'Home')
@section('content')

<style>


.pdf-icon {
  transition: transform 0.3s ease, color 0.3s ease;
}

.pdf-icon:hover {
  transform: scale(1.5); /* memperbesar ikon 1.5x */
  color: #ff5722;
  cursor: pointer;
}


</style>
<!-- ======= Hero =======-->
<section class="hero__v6 section" id="home">
    <div class="container">
        <h5 class="hero-title mb-3" data-aos="fade-up" data-aos-delay="100">
                        Empowering Smart Manufacturing <br/>with AI-Driven ERP</h5>
        <div class="row">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="row">
                    <div class="col-lg-11">
                        <!-- <span class="hero-subtitle text-uppercase" data-aos="fade-up" data-aos-delay="0">Empowering Smart Manufacturing with AI-Driven ERP</span> -->
                        
                        <p class="hero-description" data-aos="fade-up" data-aos-delay="200">At <font color="#4d83bc"> <b>PT Nimbus Dinamis Indonesia</b></font>, we help manufacturing business unlock the full potential of industry 4.0. Our intelligent ERP solutions are designed to automate operations, improve supply chain efficiency, and connect every aspect of your production process.
                        
                        <br>By integrating <b>AI, IoT and real-time analytics</b>, we deliver a smarter way to manage your factory - increasing visibility, reducing downtime, and driving growth. Step into the future of manufacturing with systems built for speed, scability, and success. 
                        </p>
                        <!-- <div class="cta d-flex gap-2 mb-4 mb-lg-5" data-aos="fade-up" data-aos-delay="300"><a class="btn" href="#">Get Started Now</a>
                            <a class="btn btn-white-outline" href="#">Learn More
                                <svg class="lucide lucide-arrow-up-right" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M7 7h10v10"></path>
                                    <path d="M7 17 17 7"></path>
                                </svg>
                            </a>
                        </div> -->
                        <div class="logos" data-aos="fade-up" data-aos-delay="400"><span class="logos-title text-uppercase mb-4 d-block"><!-- Trusted by major companies worldwide --></span>
                            <div class="logos-images d-flex gap-4 align-items-center">
                                <img class="img-fluid" src="{{ url('assets-nova/images/infor_logo.svg') }}" alt="Infor" style="width: 110px;">
                                <img class="img-fluid" src="{{ url('assets-nova/images/hexagon_logo.svg') }}" alt="Hexagon" style="width: 180px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="hero-img">
                    <!-- <img class="img-card img-fluid" src="{{ url('assets-nova/images/card-expenses.png') }}" alt="Image card" data-aos="fade-down" data-aos-delay="600"> -->
                    <img class="img-main img-fluid rounded-4" src="{{ url('assets-nova/images/1.jpeg') }}" alt="Hero Image" data-aos="fade-in" data-aos-delay="500"></div>
            </div>
        </div>
    </div>
</section>
<!-- End Hero-->

<!-- ======= About =======-->
<section class="about__v4 section" id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-6 order-md-2">
                <div class="row justify-content-end">
                    <div class="col-md-11 mb-4 mb-md-0"><span class="subtitle text-uppercase mb-3" data-aos="fade-up" data-aos-delay="0">About us</span>
                    
                        <h2 class="mb-4" data-aos="fade-up" data-aos-delay="100">Driven by Experience, Powered by Technology, Designed for you</h2>
                        <div data-aos="fade-up" data-aos-delay="200">
                            <p>We are company founded by a team of professionals with over 20 years of experience in IT Consulting.
                            <font color="#4d83bc"> <b>PT Nimbus Dinamis Indonesia (Nimbus)</b></font> is dedicated to creating a new approach in delivering ERP solutions, customized to fit each client's industry. We believe every client is unique and deserves to be treated uniquely.</p>
                            <p>Our experience shows that standard or "vanilla" solutions can't address the uniqueness of every client. We provide configurable solutions that truly solve client challenges.</p> 
                            <p><font color="#4d83bc"><b>Nimbus</b></font> assures you that we will help take your company to the next level of success-like never before.</p>
                            <p><font color="#4d83bc"><b>Our belief</b></font> "like the ever-changing clouds, our team continuously improves services and solutions by leveraging the latest technology, ensuring your business journey always stays on the bright side".</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="img-wrap position-relative"><img class="img-fluid rounded-4" src="{{ url('assets-nova/images/2.jpeg') }}" alt="nimbusdi image placeholder" data-aos="fade-up" data-aos-delay="0">
                    <!-- <div class="mission-statement p-4 rounded-4 d-flex gap-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="mission-icon text-center rounded-circle"><i class="bi bi-lightbulb fs-4"></i></div>
                        <div>
                            <h3 class="text-uppercase fw-bold">Mission Statement</h3>
                            <p class="fs-5 mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About-->

 <!-- <div class="section clients__v3" id="clients">
          <div class="container">
            <div class="row text-center mb-4" data-aos="fade-up" data-aos-delay="0">
              <h2 class="fs-6">Customers & Case Studies</h2>
            </div>
            <div class="row align-items-center g-4">
              <div class="col-6 col-sm-4 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="0"><img class="img-fluid js-img-to-inline-svg" src="{{ url('assets-nova/images/logo/ferrari.png') }}" alt="Logo"></div>
              <div class="col-6 col-sm-4 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="0"><img class="img-fluid js-img-to-inline-svg" src="{{ url('assets-nova/images/logo/logo-air-bnb__black.svg') }}" alt="Logo"></div>
              <div class="col-6 col-sm-4 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="100"><img class="img-fluid js-img-to-inline-svg" src="{{ url('assets-nova/images/logo/logo-american-apparel__black.svg') }}" alt="Logo"></div>
              <div class="col-6 col-sm-4 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="200"><img class="img-fluid js-img-to-inline-svg" src="{{ url('assets-nova/images/logo/logo-apple__black.svg') }}" alt="Logo"></div>
              <div class="col-6 col-sm-4 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="300"><img class="img-fluid js-img-to-inline-svg" src="{{ url('assets-nova/images/logo/logo-ebay__black-1.svg') }}" alt="Logo"></div>
              <div class="col-6 col-sm-4 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="400"><img class="img-fluid js-img-to-inline-svg" src="{{ url('assets-nova/images/logo/logo-google__black.svg') }}" alt="Logo"></div>
              <div class="col-6 col-sm-4 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="500"><img class="img-fluid js-img-to-inline-svg" src="{{ url('assets-nova/images/logo/logo-ibm__black.svg') }}" alt="Logo"></div>
            </div>
          </div>
        </div> -->


<!-- ======= About =======-->
        <section class="section about__v2">
          <div class="container">
            <div class="row"> 
              <div class="col-md-6 mb-5 mb-md-0">
                <div class="row"> 
                  <div class="col-sm-11">
                    <div class="img-wrap position-relative"><!-- <img class="scribble-1" src="{{ url('assets-nova/images/scribble-1.svg') }}" alt="FreeBootstrap.net image placeholder"><img class="scribble-2" src="{{ url('assets-nova/images/scribble-2.svg') }}" alt="FreeBootstrap.net image placeholder"> --><a class="glightbox btn-video" href="https://player.vimeo.com/video/316193229?autoplay=1" data-gallery="video"><span class="btn-video-play"><i class="bi bi-play-btn-fill"></i></span><img class="img-fluid rounded-4" src="{{ url('assets-nova/images/thumbnail_video.jpg') }}" alt="FreeBootstrap.net image placeholder"></a></div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="row">
                  <div class="col-md-12">
                    <h2 class="fw-bold mb-4">Infor CloudSuite Industrial Enterprise</h2>
                    <p class="mb-4">Industrial manufacturers need innovation to tame complexity and maintain their competitive edge. The beginning of a new manufacturing era is an opportune time for industrial manufacturers to analyze their current business processes and uncover areas where new software and technologies will unlock efficiencies that lead to growth. Transform your business with Infor CloudSuite Industrial Enterprise, a versatile cloud service built to increase industrial manufacturing productivity, meet customer demands, and bring products to market ahead of the competition.</p>
                    <!-- <p class="mb-0"> <a class="btn btn-primary" href="page-contact.html">Contact us</a></p> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- End About -->    

<style>
.custom-img {
  width: 100%;
  aspect-ratio: 1 / 1;
  object-fit: cover;
}
</style>
 <!-- ======= Team =======-->
        <section class="section team" id="team">
          <div class="container">
            <div class="row mb-4" data-aos="fade-up" data-aos-delay="">
              <div class="col-md-6 mx-auto text-center">
                <h2 class="h2 fw-bold mb-3">Our Experience</h2>
                <p class="mb-4 mb-lg-5">Utilize our tools to develop your concepts and bring your vision to life. Once complete, effortlessly share your creations.</p>
              </div>
            </div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3">
              <div class="col mb-5" data-aos="fade-up" data-aos-delay="0">
                <!-- Team-->
                <div class="w-75 text-center mx-auto"><img class="img-fluid custom-img rounded-3 mb-4" src="{{ url('assets-nova/images/manufacturing.jpg') }}" alt="Image Description">
                  <h5 class="mb-1 fw-bold">Project Based Manufacturing</h5><!-- <span class="d-block">Founder / CEO</span> -->
                </div>
                <!-- End Team-->
              </div>
              <!-- End Col-->
              <div class="col mb-5" data-aos="fade-up" data-aos-delay="100">
                <!-- Team-->
                <div class="w-75 text-center mx-auto"><img class="img-fluid custom-img rounded-3 mb-4" src="{{ url('assets-nova/images/chemical.jpg') }}" alt="Image Description">
                  <h5 class="mb-1 fw-bold">Chemical</h5><!-- <span class="d-block">Data Scientist</span> -->
                </div>
                <!-- End Team-->
              </div>
              <!-- End Col-->
              <div class="col mb-5" data-aos="fade-up" data-aos-delay="200">
                <!-- Team-->
                <div class="w-75 text-center mx-auto"><img class="img-fluid custom-img rounded-3 mb-4" src="{{ url('assets-nova/images/food_beverage.jpg') }}" alt="Image Description">
                  <h5 class="mb-1 fw-bold">Food and Beverage</h5><!-- <span class="d-block">Software Engineer</span> -->
                </div>
                <!-- End Team-->
              </div>
              <!-- End Col-->
              <div class="col mb-5" data-aos="fade-up" data-aos-delay="300">
                <!-- Team-->
                <div class="w-75 text-center mx-auto"><img class="img-fluid custom-img rounded-3 mb-4" src="{{ url('assets-nova/images/automotive.jpg') }}" alt="Image Description">
                  <h5 class="mb-1 fw-bold">Automotive Manufacturing</h5><!-- <span class="d-block">Product Manager</span> -->
                </div>
                <!-- End Team-->
              </div>
              <!-- End Col-->
              <div class="col mb-5" data-aos="fade-up" data-aos-delay="400">
                <!-- Team-->
                <div class="w-75 text-center mx-auto"><img class="img-fluid custom-img rounded-3 mb-4" src="{{ url('assets-nova/images/steel2.jpg') }}" alt="Image Description">
                  <h5 class="mb-1 fw-bold">Steel Manufacturing</h5><!-- <span class="d-block">Front-end Developer</span> -->
                </div>
                <!-- End Team-->
              </div>
              <!-- End Col-->
              <div class="col mb-5" data-aos="fade-up" data-aos-delay="500">
                <!-- Team-->
                <div class="w-75 text-center mx-auto"><img class="img-fluid custom-img rounded-3 mb-4" src="{{ url('assets-nova/images/electronic_indstry.jpg') }}" alt="Image Description">
                  <h5 class="mb-1 fw-bold">Electronic</h5><!-- <span class="d-block">Marketing Specialist</span> -->
                </div>
                <!-- End Team-->
              </div>
              <!-- End Col-->
              <div class="col mb-5" data-aos="fade-up" data-aos-delay="600">
                <!-- Team-->
                <div class="w-75 text-center mx-auto"><img class="img-fluid custom-img rounded-3 mb-4" src="{{ url('assets-nova/images/plastic2.jpg') }}" alt="Image Description">
                  <h5 class="mb-1 fw-bold">Packaging</h5><!-- <span class="d-block">Support Consultant</span> -->
                </div>
                <!-- End Team-->
              </div>
              <!-- End Col-->
              <div class="col mb-5" data-aos="fade-up" data-aos-delay="700">
                <!-- Team-->
                <div class="w-75 text-center mx-auto"><img class="img-fluid custom-img rounded-3 mb-4" src="{{ url('assets-nova/images/distribution.jpg') }}" alt="Image Description">
                  <h5 class="mb-1 fw-bold">Trading & Distribution</h5><!-- <span class="d-block">Project Manager</span> -->
                </div>
                <!-- End Team-->
              </div>
              <div class="col mb-5" data-aos="fade-up" data-aos-delay="800">
                <!-- Team-->
                <div class="w-75 text-center mx-auto"><img class="img-fluid custom-img rounded-3 mb-4" src="{{ url('assets-nova/images/industrial_manufacturing.jpg') }}" alt="Image Description">
                  <h5 class="mb-1 fw-bold">Industrial Manufacturing</h5><!-- <span class="d-block">Project Manager</span> -->
                </div>
                <!-- End Team-->
              </div>
              <!-- End Col-->
              
            </div>
          </div>
        </section>
        <!-- End Team-->


<!-- ======= About - Core Values =======-->
        <!-- <section class="section about__v3">
          <div class="container">
            <div class="row mb-5">
              <div class="col-lg-5 mx-auto text-center">
                <h2 class="section-title fw-bold mb-3">Our Core Values</h2>
                <p>Our core values define our principles and guide our actions in delivering exceptional results.</p>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="core-value text-center"><i class="bi bi-shield-fill-check fs-4 rounded-3"></i>
                  <h3 class="fs-5 fw-bold">Integrity</h3>
                  <p>We uphold the highest standards of integrity in all our actions.</p>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="core-value text-center"><i class="bi bi-lightbulb-fill fs-4 rounded-3"></i>
                  <h3 class="fs-5 fw-bold">Innovation</h3>
                  <p>We continually innovate to exceed client expectations.</p>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="core-value text-center"><i class="bi bi-emoji-smile-fill fs-4 rounded-3"></i>
                  <h3 class="fs-5 fw-bold">Customer Satisfaction</h3>
                  <p>Our success is measured by our customers' satisfaction.</p>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="core-value text-center"><i class="bi bi-star-fill fs-4 rounded-3"></i>
                  <h3 class="fs-5 fw-bold">Excellence</h3>
                  <p>We pursue excellence in everything we do.</p>
                </div>
              </div>
            </div>
          </div>
        </section> -->
        <!-- End About - Core Values -->
         
<!-- ======= Contact =======-->
<section class="section contact__v2" id="contact">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-6 col-lg-7 mx-auto text-center"><!-- <span class="subtitle text-uppercase mb-3" data-aos="fade-up" data-aos-delay="0">Contact</span> -->
                <h2 class="h2 fw-bold mb-3" data-aos="fade-up" data-aos-delay="0">Let's Connect</h2>
                <p data-aos="fade-up" data-aos-delay="100">Contact us and we'll have a Business Development Representative contact you within 24 business hours.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="d-flex gap-5 flex-column">
                    <div class="d-flex align-items-start gap-3" data-aos="fade-up" data-aos-delay="0">
                        <div class="icon d-block"><i class="bi bi-whatsapp"></i></div><span> <span class="d-block">Whatsapp</span><strong>+62 815-1434-2393</strong></span>
                    </div>
                    <div class="d-flex align-items-start gap-3" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon d-block"><i class="bi bi-send"></i></div><span> <span class="d-block">Email</span><strong>sales@nimbusdi.co.id</strong></span>
                    </div>
                    <div class="d-flex align-items-start gap-3" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon d-block"><i class="bi bi-geo-alt"></i></div><span> <span class="d-block">Address</span>
                            <address class="fw-bold">Infiniti Office, Permata Regency D/37 <br> Kembangan Jakarta Barat 11630</address>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-wrapper" data-aos="fade-up" data-aos-delay="300">
                    <form method="POST" id="contactForm" action="{{ route('contact.store') }}">
                        @method('post')
                        @csrf
                        <div class="row gap-3 mb-3">
                            <div class="col-md-12">
                                <label class="mb-2" for="name">Name</label>
                                <input class="form-control" id="name" type="text" name="name" value="{{ old('name') }}" required="">
                            </div>
                            <div class="col-md-12">
                                <label class="mb-2" for="email">Email</label>
                                <input class="form-control" id="email" type="email" name="email" value="{{ old('email') }}" required="">
                            </div>
                        </div>
                        <div class="row gap-3 mb-3">
                            <div class="col-md-12">
                                <label class="mb-2" for="subject">Industries</label>
                                <select name="industry" id="letsConnectIndustry" class="form-control">
                                    <option selected disabled>Select...</option>
                                    <option value="Aerospace &amp; Defense">Industry</option>
                                    <option value="Manufacturing">Manufacturing</option>
                                    <option value="Trading">Trading</option>
                                    <option value="Services">Services</option>
                                    <option value="Government">Governent</option>
                                    <option value="Retail">Retail</option>
                                    <option value="Construction">Construction</option>
                                    <option value="Others">Others</option>
                                </select>
                            </div>
                        </div>
                        <div class="row gap-3 mb-3">
                            <div class="col-md-12">
                                <label class="mb-2" for="phone_number">Phone Number</label>
                                <input class="form-control @error('phone_number') is-invalid @enderror" id="phone_number" type="text" name="phone_number" value="{{ old('phone_number') }}">
                                @error('phone_number')
                                    <div class="invalid-feedback d-block">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <label class="mb-2" for="company_name">Company Name</label>
                                <input class="form-control" id="company_name" type="text" name="company_name" value="{{ old('company_name') }}">
                            </div>
                        </div>
                        <div class="row gap-3 gap-md-0 mb-3">
                            <div class="col-md-12">
                                <label class="mb-2" for="message">Message</label>
                                <textarea class="form-control" id="message" name="message" rows="5" required="" value="{{ old('message') }}"></textarea>
                            </div>
                        </div>
                        <button class="btn btn-primary fw-semibold" type="submit">Send Message</button>
                    </form>
                    <div class="mt-3 d-none alert alert-success" id="successMessage">Message sent successfully!</div>
                    <div class="mt-3 d-none alert alert-danger" id="errorMessage">Message sending failed. Please try again later.</div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Contact-->
@endsection