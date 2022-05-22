@extends('layouts.app')
@section('title')
    Web Development
@endsection

@section('scripts')
    <script>
        $('h2#techTitle').html('Industry-focused Web Development')
    </script>
@endsection

@section('content')
    <!--Breadcrumb Area-->
    <section class="breadcrumb-areav2" data-background="{{ asset('assets/open/images/service/web-bg.jpg') }}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="bread-titlev2">
                        <h1 class="wow fadeInUp" data-wow-delay=".2s">Need A Premium & Creative Website Designing?</h1>
                        <p class="mt20 wow fadeInUp" data-wow-delay=".4s">From Startup to Enterprise be ready and don't worry about design and user experience.</p>
                        <a href="{{ route('contact', ['purpose' => 'web']) }}" class="btn-main bg-btn2 lnk mt20 wow zoomInDown" data-wow-delay=".6s">Get Quote <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.widgets.statistics')
    <!--End Hero-->
    <!--Start About-->
    <section class="service pad-tb">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="image-block upset bg-shape wow fadeIn">
                        <img src="{{ asset('assets/open/images/service/web-dev.PNG') }}" alt="image" class="img-fluid"/>
                    </div>
                </div>
                <div class="col-lg-8 block-1">
                    <div class="common-heading text-l pl25">
                        <span>Overview</span>
                        <h2>Creative Web Design Service</h2>
                        <p>When building a web application, you can use two types of development: MVP and Product Enhancement. The first is for applications that need to be built from scratch, and the second is great for current products that need further development or improvement.</p>
                        <p>When building a web application, we recommend the MVP development approach. You’ll achieve a faster release, reduced costs, more time for testing, and tangible feedback.</p>
                        <p>If you’d like to update, improve or further develop your existing web application, we have strategies for refactoring and bringing legacy code applications up-to-date</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End About-->
    @include('layouts.widgets.tech')
    <!--Start Service-->
    <section class="service-block bg-gradient6 pad-tb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="common-heading ptag">
                        <span>Service</span>
                        <h2>Our Services</h2>
                        <p class="mb30">We think big and have hands in all leading technology platforms to provide you wide array of services.</p>
                    </div>
                </div>
            </div>
            <div class="row upset link-hover">
                <div class="col-lg-4 col-sm-6 mt30 wow fadeInUp" data-wow-delay=".2s">
                    <div class="s-block">
                        <div class="s-card-icon"><img src="{{ asset('assets/open/') }}/images/icons/logo-and-branding.svg" alt="service" class="img-fluid"/></div>
                        <h4>Graphic Designing Services</h4>
                        <p>We’re also one of the top graphic design firms because we’re drawn to projects that challenge our creativity and get us thinking outside the Cave.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mt30 wow fadeInUp" data-wow-delay=".4s">
                    <div class="s-block">
                        <div class="s-card-icon"><img src="{{ asset('assets/open/') }}/images/icons/service2.svg" alt="service" class="img-fluid"/></div>
                        <h4>Responsive Web Designing</h4>
                        <p>A responsive design ensures that your website will adapt to each unique device used on your site. Our fully responsive websites adapt to different screen sizes.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mt30 wow fadeInUp" data-wow-delay=".6s">
                    <div class="s-block">
                        <div class="s-card-icon"><img src="{{ asset('assets/open/') }}/images/icons/service3.svg" alt="service" class="img-fluid"/></div>
                        <h4>Static Website Designing</h4>
                        <p>The simplest way for businesses or individuals who just want to post simple information about themselves or their company to the web world.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mt30 wow fadeInUp" data-wow-delay=".8s">
                    <div class="s-block">
                        <div class="s-card-icon"><img src="{{ asset('assets/open/') }}/images/icons/service4.svg" alt="service" class="img-fluid"/></div>
                        <h4>Dynamic Website Designing</h4>
                        <p>Designed to serve different content to different users based on a variety of factors. This can be a very powerful feature.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mt30 wow fadeInUp" data-wow-delay="1s">
                    <div class="s-block">
                        <div class="s-card-icon"><img src="{{ asset('assets/open/') }}/images/icons/service5.svg" alt="service" class="img-fluid"/></div>
                        <h4>Psd to HTML Service</h4>
                        <p>We transform designs into rich, interactive websites that is user-friendly. Experts in content management sys, front-end dev, and custom integrations.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mt30 wow fadeInUp" data-wow-delay="1.2s">
                    <div class="s-block">
                        <div class="s-card-icon"><img src="{{ asset('assets/open/') }}/images/icons/service6.svg" alt="service" class="img-fluid"/></div>
                        <h4>Website Redesign Service</h4>
                        <p>Our focus is to redesign your existing website with a new look and feel and enhance the website with a better look and feel and functionality. </p>
                    </div>
                </div>
            </div>
            <div class="-cta-btn mt70">
                <div class="free-cta-title v-center wow zoomInDown" data-wow-delay="1.3s">
                    <p>Hire a <span>Dedicated Developer</span></p>
                    <a href="{{ route('contact', ['purpose' => 'branding']) }}" class="btn-main bg-btn2 lnk">Hire Now<i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                </div>
            </div>
        </div>
    </section>
    <!--End Service-->
    <!--Start Process-->
    <section class="service-block pad-tb light-dark">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="common-heading ptag">
                        <span>Process</span>
                        <h2>Our App Development Process</h2>
                        <p>Our design process follows a proven approach. We begin with a deep understanding of your needs and create a planning template.</p>
                    </div>
                </div>
            </div>
            <div class="row upset justify-content-center mt60">
                <div class="col-lg-4 v-center order1">
                    <div class="image-block1">
                        <img src="{{ asset('assets/open/images/service/web-p-1.jpg') }}" alt="Process" class="img-fluid"/>
                    </div>
                </div>
                <div class="col-lg-7 v-center order2">
                    <div class="ps-block">
                        <span>1</span>
                        <h3>Requirement Gathering</h3>
                        <p>This requires us to gather enoungh information about what you need and how best you will like us to produces a customer attrative web application. We have top project analyists that are ready to analyis your project requirements and roll out thier findings in matter of hours.</p>
                    </div>
                </div>
            </div>
            <div class="row upset justify-content-center mt60">
                <div class="col-lg-7 v-center order2">
                    <div class="ps-block">
                        <span>2</span>
                        <h3>Prototype</h3>
                        <p>At this stage we are done with infomation gathering and the next stage is to produce a working prototype which will be prsenetd to you for modifications and corrections if need be. These prototype will serve as a finial go ahead order from you to our team of developers.</p>
                    </div>
                </div>
                <div class="col-lg-4 v-center order1">
                    <div class="image-block1">
                        <img src="{{ asset('assets/open/images/service/web-p-2.jpg') }}" alt="Process" class="img-fluid"/>
                    </div>
                </div>
            </div>
            <div class="row upset justify-content-center mt60">
                <div class="col-lg-4 v-center order1">
                    <div class="image-block1">
                        <img src="{{ asset('assets/open/images/service/web-p-3.jpg') }}" alt="Process" class="img-fluid"/>
                    </div>
                </div>
                <div class="col-lg-7 v-center order2">
                    <div class="ps-block">
                        <span>3</span>
                        <h3>Deployment</h3>
                        <p>Once a project has been completed, our team moves the code to production stage where they deploy the application on the server where futher testing and configurations are done. At this stage your project is production ready remaining few features and modifications.</p>
                    </div>
                </div>
            </div>
            <div class="row upset justify-content-center mt60">
                <div class="col-lg-7 v-center order2">
                    <div class="ps-block">
                        <span>4</span>
                        <h3>Support & Maintenance</h3>
                        <p>Once your project is deployed, we can offer our services in manitaing and updating the web applications with the latest technologies and development parttern out there. You can still csll on us to add or remove certain feature. And we will provide support all the way through.</p>
                    </div>
                </div>
                <div class="col-lg-4 v-center order1">
                    <div class="image-block1">
                        <img src="{{ asset('assets/open/images/service/web-p-4.jpg') }}" alt="Process" class="img-fluid"/>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Process-->
    @include('layouts.widgets.why-us')
    {{-- <!--Start Pricing-->
    <section class="block-a1 pad-tb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="common-heading ptag">
                        <span>Pricing</span>
                        <h2>Pricing Table</h2>
                        <p class="mb0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-table mt60">
                        <div class="inner-table">
                            <img src="images/icons/plan-1.svg" alt="Personal"/>
                            <span class="title">Personal</span>
                            <p class="title-sub">Great For Small Business</p>
                            <h2><sup>$</sup> 79.99</h2>
                            <p class="duration">Monthly Package</p>
                            <div class="details">
                                <ul>
                                    <li>Social Media Marketing</li>
                                    <li>2.100 Keywords</li>
                                    <li>One Way Link Building</li>
                                    <li>5 Free Optimization</li>
                                    <li>3 Press Releases</li>
                                </ul>
                            </div>
                        </div>
                        <a href="#" class="btn-main bg-btn lnk">Get Started <i class="fas fa-chevron-right fa-icon"></i> <span class="circle"></span></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-table best-plan mt60 bg-gradient4">
                        <div class="inner-table">
                            <img src="images/icons/plan-2.svg" alt="Advance"/>
                            <span class="title">Advance</span>
                            <p class="title-sub">Great For Small Business</p>
                            <h2><sup>$</sup> 79.99</h2>
                            <p class="duration">Monthly Package</p>
                            <div class="details">
                                <ul>
                                    <li>Social Media Marketing</li>
                                    <li>2.100 Keywords</li>
                                    <li>One Way Link Building</li>
                                    <li>5 Free Optimization</li>
                                    <li>3 Press Releases</li>
                                </ul>
                            </div>
                        </div>
                        <a href="#" class="btn-main bg-btn3 lnk">Get Started <i class="fas fa-chevron-right fa-icon"></i> <span class="circle"></span></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-table mt60">
                        <div class="inner-table">
                            <img src="images/icons/plan-3.svg" alt="Ultimate"/>
                            <span class="title">Ultimate</span>
                            <p class="title-sub">Great For Small Business</p>
                            <h2><sup>$</sup> 79.99</h2>
                            <p class="duration">Monthly Package</p>
                            <div class="details">
                                <ul>
                                    <li>Social Media Marketing</li>
                                    <li>2.100 Keywords</li>
                                    <li>One Way Link Building</li>
                                    <li>5 Free Optimization</li>
                                    <li>3 Press Releases</li>
                                </ul>
                            </div>
                        </div>
                        <a href="#" class="btn-main bg-btn lnk">Get Started <i class="fas fa-chevron-right fa-icon"></i> <span class="circle"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Pricing--> --}}
      @include('layouts.widgets.portfolios')
    
    <x-ClientReviews />

    {{-- CTA --}}
    <x-CTA />

@endsection