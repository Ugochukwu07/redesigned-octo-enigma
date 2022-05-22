@extends('layouts.app')
@section('title')
    Logo and Branding
@endsection

@section('content')
    <!--Breadcrumb Area-->
    <section class="breadcrumb-areav2" data-background="{{ asset('assets/open/images/service/brand-bg.jpg') }}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="bread-titlev2">
                        <h1 class="wow fadeInUp" data-wow-delay=".2s">Graphic Design Services</h1>
                        <p class="mt20 wow fadeInUp" data-wow-delay=".4s">There's no limit to what you can get designed at {{ config('app.name') }}. Whether you're looking for a spectacular new logo or some stunning flyers, the talented global community of designers at {{ config('app.name') }} can make it happen.</p>
                        <a href="{{ route('contact', ['purpose' => 'branding']) }}" class="btn-main bg-btn2 lnk mt20 wow zoomInDown" data-wow-delay=".6s">Get Quote <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.widgets.statistics')
    <!--End Hero-->

    <!--Start About-->
    <section class="service pad-tb bg-gradient5">
    <div class="container">
    <div class="row">
    <div class="col-lg-4">
    <div class="single-image bg-shape-dez mt0 wow fadeIn">
    <img src="{{ asset('assets/open/images/service/brand-bg-2.jpg') }}" alt="image" class="img-fluid no-shadow"/>
    </div>
    </div>
    <div class="col-lg-8 block-1 m-mt50">
    <div class="common-heading text-l pl25">
    <span>Overview</span>
    <h2>Custom Graphic Design Services We Offer</h2>
    <p>{{ config('app.name') }} prides itself on it's high quality designers who deliver only the best graphic design services. Find the right design service for you below and get design you'll love today!</p>
    <p>Good design is more than just readability and clarity of message. Good graphic design, when done right, can transform a business’ logo into a brand; a brand that is consistent, professional and attracts customers to you. Sure, readability and a clear message is important, however, just as important is the presentation of the message.</p>
    </div>
    </div>
    </div>
    </div>
    </section>
    <!--End About-->
    <!--Start Key points-->
    <section class="service pad-tb light-dark">
    <div class="container">
    <div class="row">
    <div class="col-lg-7">
    <div class="text-l service-desc- pr25">
    <h3 class="mb20">We use advanced graphic designing tools to create impressive ideas for you</h3>
    <p>Graphic design is how you communicate your brand and you want it to be consistent. Keeping your brand consistent across all the platforms you use even in how you provide your product and services to your customers is important because it helps create and maintain trust with your current customers as well as demonstrating a professional appearance to potential customers.</p>
    <ul class="service-point-2 mt20">
      <li># 21+ Mobile Delivered</li>
      <li># 20+ Team Strength</li>
      <li># User-Friendly Interface</li>
      <li># 14 Happy Clients</li>
      <li># 95% Repeat business</li>
      <li># Quality Service UX</li>
    </ul>
    <a href="#" class="btn-main bg-btn2 lnk mt30">Request A Quote  <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
    </div>
    </div>
    <div class="col-lg-5">
    <div class="single-image wow fadeIn">
    <img src="{{ asset('assets/open/images/service/brand-bg-3.jpg') }}" alt="image" class="img-fluid no-shadow"/>
    </div>
    </div>
    </div>
    </div>
    </section>
    <!--End Key points-->
    <!--Start Service-->
    <section class="service-block bg-gradient6 pad-tb">
    <div class="container">
    <div class="row justify-content-center">
    <div class="col-lg-8">
    <div class="common-heading ptag">
    <span>Service</span>
    <h2>Graphic Design services we offer</h2>
    <p class="mb30">We think big and have hands in all leading technology platforms to provide you wide array of services.</p>
    </div>
    </div>
    </div>
    <div class="row upset link-hover">
    <div class="col-lg-6 col-md-12 mt30 wow fadeInUp" data-wow-delay=".2s">
    <div class="s-block wide-sblock">
    <div class="s-card-icon-large"><img src="{{ asset('assets/open/images/service/brand-logo.jpg') }}" alt="service" class="img-fluid"/></div>
    <div class="s-block-content-large">
      <h4>Logo Designing</h4>
      <p>Get the perfect logo and ensure your branding hits the spot with these services. {{ config('app.name') }} is the best for you and your brand, and products.</p>
    </div></div>
    </div>
    <div class="col-lg-6 col-md-12 mt30 wow fadeInUp" data-wow-delay=".4s">
    <div class="s-block wide-sblock">
      <div class="s-card-icon-large"><img src="{{ asset('assets/open/') }}/images/service/packaging-design.jpg" alt="service" class="img-fluid"/></div>
      <div class="s-block-content-large">
        <h4>Packaging Design</h4>
        <p>In digital marketing, keeping your brand packaging consistent helps people identify your brand, distinguishing it from your competitors.</p>
      </div></div>
    </div>
    <div class="col-lg-6 col-md-12 mt30 wow fadeInUp" data-wow-delay=".6s">
      <div class="s-block wide-sblock">
        <div class="s-card-icon-large"><img src="{{ asset('assets/open/') }}/images/service/brochure-.jpg" alt="service" class="img-fluid"/></div>
        <div class="s-block-content-large">
          <h4>Brochure Design</h4>
          <p>When it comes to brochures, it’s all about the design. A great design will compel your audience to read all about what you’re doing.</p>
        </div></div>
      </div>
      <div class="col-lg-6 col-md-12 mt30 wow fadeInUp" data-wow-delay=".8s">
        <div class="s-block wide-sblock">
          <div class="s-card-icon-large"><img src="{{ asset('assets/open/') }}/images/service/flyer-.jpg" alt="service" class="img-fluid"/></div>
          <div class="s-block-content-large">
            <h4>Flyer Design</h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
          </div></div>
        </div>
        <div class="col-lg-6 col-md-12 mt30 wow fadeInUp" data-wow-delay="1s">
          <div class="s-block wide-sblock">
            <div class="s-card-icon-large"><img src="{{ asset('assets/open/') }}/images/service/newsletter.jpg" alt="service" class="img-fluid"/></div>
            <div class="s-block-content-large">
              <h4>Newsletter Designing</h4>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div></div>
          </div>
          <div class="col-lg-6 col-md-12 mt30 wow fadeInUp" data-wow-delay="1.2s">
            <div class="s-block wide-sblock">
              <div class="s-card-icon-large"><img src="{{ asset('assets/open/') }}/images/service/visit-card.jpg" alt="service" class="img-fluid"/></div>
              <div class="s-block-content-large">
                <h4>Business Card Designs</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
              </div></div>
            </div>
          </div>
          <div class="-cta-btn mt70">
            <div class="free-cta-title v-center wow zoomInDown" data-wow-delay="1.4s">
              <p>Hire a <span>Graphic Designer</span></p>
              <a href="#" class="btn-main bg-btn2 lnk">Hire Now<i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
            </div>
          </div>
        </div>
      </section>
      <!--End Service-->

      {{-- @include('layouts.widgets.unused.brading-process') --}}

      @include('layouts.widgets.why-us')

      @include('layouts.widgets.portfolios')

      <x-ClientReviews />
      
      <x-CTA />
@endsection