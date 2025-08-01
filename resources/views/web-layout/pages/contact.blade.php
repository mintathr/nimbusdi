@extends('web-layout.main_nova')
@section('title', 'Enterprise Asset Management')
@section('subtitle', 'Enterprise Asset Management')
@section('content')
<!-- ======= Contact =======-->
<section class="section contact__v2 mt-5" id="contact">
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