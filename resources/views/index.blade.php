@extends('layouts.app')

@section('title')
    Welcome
@endsection

@section('content')
<!--Start Hero-->
<section class="hero-section hero-bg-bg1 bg-gradient dark-bg1">
    <div class="text-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 v-center">
                    <div class="header-heading">
                        <h1 class="wow fadeInUp" data-wow-delay=".2s">Hydrogen Technologies Group</h1>
                        <p class="wow fadeInUp" data-wow-delay=".4s">We create web site with meaning. Great Web design speaks to your head and your heart.</p>
                        <a href="{{ route('portfolio') }}" class="btn-main bg-btn lnk wow fadeInUp" data-wow-delay=".6s">View Case Studies <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                    </div>
                </div>
                <div class="col-lg-6 v-center">
                    <div class="single-image wow fadeIn" data-wow-delay=".5s">
                        <img src="{{ asset('assets/open/') }}/images/me/1_hero.jpg" alt="web development" class="img-fluid" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <!--End Hero-->
    <!--Start About-->
<section class="about-agency pad-tb" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 v-center">
                <div class="image-block">
                    <img src="{{ asset('assets/open/') }}/images/me/2_about.jpg" alt="about" class="img-fluid no-shadow" />
                </div>
            </div>
            <div class="col-lg-6">
                <div class="common-heading text-l">
                    <span>We Are Hydrogen Tech.</span>
                    <h2>About Us</h2>
                    <p>We create websites and softwares with meaning. Great Web design speaks to your head and your heart. It makes you feel different, and think differently. It makes you remember, and respond. That’s what we aim for, to go from insight to ideas to design that connects. To craft things with intelligence, sensitivity and precision.</p>
                    <p class="quote">A Software Development Company full of passionate people</p>
                    <div class="user- mt30">
                        <div class="media">
                            <div class="user-image bdr-radius"><img src="https://avatars.githubusercontent.com/u/57512572?v=4" alt="girl" class="img-fluid" /></div>
                            <div class="media-body user-info v-center">
                                <h5>Ekwueme Ugochukwu</h5>
                                <p>Founder of <span>Hydrogen Technologies</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End About-->

<!--Start Service-->
<section class="service-section web-servic pad-tb" id="services">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="common-heading">
                    <span>Services We’re Provided</span>
                    <h2 class="mb30">Our Design & Development Services</h2>
                </div>
            </div>
        </div>
        <div class="row upset link-hover shape-num justify-content-center">
            <div class="col-lg-3 col-sm-6 mt30 shape-loc wow fadeInUp" data-wow-delay="0.2s">
                <div class="s-block" data-tilt data-tilt-max="5" data-tilt-speed="1000">
                    <div class="s-card-icon"><img src="{{ asset('assets/open/') }}/images/icons/branding.svg" alt="service" class="img-fluid"/></div>
                    <h4>Logo & Branding Service</h4>
                    <p>Have an idea for a new business?. We can make it real using our service.</p>
                    <a href="{{ route('services.branding') }}">Learn More <i class="fas fa-chevron-right fa-icon"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 mt30 shape-loc wow fadeInUp" data-wow-delay="0.4s">
                <div class="s-block" data-tilt data-tilt-max="5" data-tilt-speed="1000">
                    <div class="s-card-icon"><img src="{{ asset('assets/open/') }}/images/icons/development.svg" alt="service" class="img-fluid"/></div>
                    <h4>Website Design & Development</h4>
                    <p>Great Web design speaks to your client's heart. It makes your business attractive</p>
                    <a href="{{ route('services.web') }}">Learn More <i class="fas fa-chevron-right fa-icon"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 mt30 shape-loc wow fadeInUp" data-wow-delay="0.6s">
                <div class="s-block" data-tilt data-tilt-max="5" data-tilt-speed="1000">
                    <div class="s-card-icon"><img src="{{ asset('assets/open/') }}/images/icons/app.svg" alt="service" class="img-fluid"/></div>
                    <h4>Mobile App Development</h4>
                    <p>We've vast design and technical experience that cut across various sectors.</p>
                    <a href="{{ route('services.mobile') }}">Learn More <i class="fas fa-chevron-right fa-icon"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 mt30 shape-loc wow fadeInUp" data-wow-delay="0.8s">
                <div class="s-block mb0" data-tilt data-tilt-max="5" data-tilt-speed="1000">
                    <div class="s-card-icon"><img src="{{ asset('assets/open/') }}/images/icons/marketing.svg" alt="service" class="img-fluid"/></div>
                    <h4>Digital Marketing Service</h4>
                    <p>We're a team of digital experts that help businesses drive growth.</p>
                    <a href="{{ route('services.digital') }}">Learn More <i class="fas fa-chevron-right fa-icon"></i></a>
                </div>
            </div>
        </div>

        <div class="-cta-btn mt70">
            <div class="free-cta-title v-center wow zoomInDown" data-wow-delay=".9s">
                <p>Hire a <span>Dedicated Developer</span></p>
                <a href="{{ route('contact', ['purpose' => 'all']) }}" class="btn-main bg-btn2 lnk">Hire Now<i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
            </div>
        </div>
    </div>
</section>
<!--End Service-->

@include('layouts.widgets.why-us')

    <!--Start statistics-->
    <div class="statistics-section bg-gradient pad-tb tilt3d">
        <div class="container">
            <div class="row justify-content-center t-ctr">
                <div class="col-lg-4 col-sm-6">
                    <div class="statistics">
                        <div data-tilt data-tilt-max="20" data-tilt-speed="1000" class="statistics-img">
                            <img src="{{ asset('assets/open/') }}/images/icons/startup.svg" alt="years" class="img-fluid" />
                        </div>
                        <div class="statnumb">
                            <span class="counter">5</span><span>+</span>
                            <p>Year In Business</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="statistics">
                        <div data-tilt data-tilt-max="20" data-tilt-speed="1000" class="statistics-img">
                            <img src="{{ asset('assets/open/') }}/images/icons/team.svg" alt="team" class="img-fluid" />
                        </div>
                        <div class="statnumb">
                            <span class="counter">40</span><span>+</span>
                            <p>Team Members</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row small t-ctr">
                <div class="col-lg-3 col-sm-6">
                    <div class="statistics">
                        <div data-tilt data-tilt-max="20" data-tilt-speed="1000" class="statistics-img">
                            <img src="{{ asset('assets/open/') }}/images/icons/deal.svg" alt="happy" class="img-fluid" />
                        </div>
                        <div class="statnumb">
                            <span class="counter">450</span>
                            <p>Happy Clients</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="statistics">
                        <div data-tilt data-tilt-max="20" data-tilt-speed="1000" class="statistics-img">
                            <img src="{{ asset('assets/open/') }}/images/icons/computers.svg" alt="project" class="img-fluid" />
                        </div>
                        <div class="statnumb counter-number">
                            <span class="counter">48</span><span>k</span>
                            <p>Projects Done</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="statistics">
                        <div data-tilt data-tilt-max="20" data-tilt-speed="1000" class="statistics-img">
                            <img src="{{ asset('assets/open/') }}/images/icons/worker.svg" alt="work" class="img-fluid" />
                        </div>
                        <div class="statnumb">
                            <span class="counter">95</span><span>k</span>
                            <p>Hours Worked</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="statistics mb0">
                        <div data-tilt data-tilt-max="20" data-tilt-speed="1000" class="statistics-img">
                            <img src="{{ asset('assets/open/') }}/images/icons/customer-service.svg" alt="support" class="img-fluid" />
                        </div>
                        <div class="statnumb">
                            <span>24/7</span>
                            <p>Support Available</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End statistics-->


    <!--Start Portfolio-->
    <section class="portfolio-section pad-tb" id="portfolio">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-lg-8">
                    <div class="common-heading">
                        <span>Our Work</span>
                        <h2 class="mb0">Our Latest Creative Work</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-sm-8 mt60 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="isotope_item hover-scale">
                        <div class="item-image" data-tilt data-tilt-max="2" data-tilt-speed="1000">
                            <a href="https://swiftresearchers.com/"><img src="{{ asset('assets/open/') }}/images/me/swfit.png" alt="image" class="img-fluid" /> </a>
                        </div>
                        <div class="item-info">
                            <h4><a href="https://swiftresearchers.com/">Research Agency</a></h4>
                            <p>Web Application</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4 mt60 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="isotope_item hover-scale">
                        <div class="item-image" data-tilt data-tilt-max="2" data-tilt-speed="1000">
                            <a href="https://syticks.com/#"><img style="height: 500px" src="{{ asset('assets/open/') }}/images/me/syticks.png" alt="image" class="img-fluid" /> </a>
                        </div>
                        <div class="item-info">
                            <h4><a href="https://syticks.com/#">Ticket App</a></h4>
                            <p>iOs, Android</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4 mt60 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="isotope_item hover-scale">
                        <div class="item-image" data-tilt data-tilt-max="2" data-tilt-speed="1000">
                            <a href="{{ route('portfolio') }}"><img src="{{ asset('assets/open/') }}/images/me/esther.png" alt="image" class="img-fluid" /> </a>
                        </div>
                        <div class="item-info">
                            <h4><a href="{{ route('portfolio') }}">Esthingo Chops</a></h4>
                            <p>Graphic, Print</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-sm-8 mt60 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="isotope_item hover-scale">
                        <div class="item-image" data-tilt data-tilt-max="2" data-tilt-speed="1000">
                            <a href="https://mazzydap.com/"><img src="{{ asset('assets/open/') }}/images/me/mazzy.png" alt="Mazzy Dap" class="img-fluid" /> </a>
                        </div>
                        <div class="item-info">
                            <h4><a href="https://mazzydap.com/">Mazzy Digital Art and Prints</a></h4>
                            <p>Web, Digital Marketing</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Portfolio-->

    <!--Start Clients-->
    <section class="clients-section pad-tb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="common-heading">
                        <span>Our happy customers</span>
                        <h2>Some of our Clients</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="opl">
                        <ul>
                            <li class=" wow fadeIn" data-wow-delay=".2s">
                                <div class="clients-logo"><img src="{{ asset('assets/open/') }}/images/me/client-1.jpg" alt="text" class="img-fluid rounded-circle"/></div>
                            </li>
                            <li class=" wow fadeIn" data-wow-delay=".4s">
                                <div class="clients-logo"><img src="{{ asset('assets/open/') }}/images/me/client-2.jpg" alt="text" class="img-fluid rounded-circle"/></div>
                            </li>
                            <li class=" wow fadeIn" data-wow-delay=".6s">
                                <div class="clients-logo"><img src="{{ asset('assets/open/') }}/images/me/client-3.jpg" alt="text" class="img-fluid rounded-circle"/></div>
                            </li>
                            <li class=" wow fadeIn" data-wow-delay=".8s">
                                <div class="clients-logo"><img src="{{ asset('assets/open/') }}/images/me/client-4.jpg" alt="text" class="img-fluid rounded-circle"/></div>
                            </li>
                            <li class=" wow fadeIn" data-wow-delay="1s">
                                <div class="clients-logo"><img src="{{ asset('assets/open/') }}/images/me/client-5.jpg" alt="text" class="img-fluid rounded-circle"/></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="-cta-btn mt70">
                <div class="free-cta-title v-center wow zoomInDown" data-wow-delay="1.2s">
                    <p>We <span>Promise.</span> We <span>Deliver.</span></p>
                    <a href="{{ route('contact', ['purpose' => 'all']) }}" class="btn-main bg-btn2 lnk">Let's Work Together<i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                </div>
            </div>
        </div>
    </section>
    <!--End Clients-->

    <!--Start work-category-->
    <section class="work-category pad-tb tilt3d">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 v-center">
                    <div class="common-heading text-l">
                        <span>Industries we work for</span>
                        <h2>Helping Businesses in All Domains</h2>
                        <p>Successfully delivered digital products. The result: intelligent, effective web design that makes a lasting impression.</p>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="work-card-set">
                        <div  class="icon-set wow fadeIn" data-wow-delay=".2s">
                            <div class="work-card cd1">
                                <div class="icon-bg"><img src="{{ asset('assets/open/') }}/images/icons/icon-1.png" alt="Industries" /></div>
                                <p>Social Networking</p>
                            </div>
                        </div>
                        <div  class="icon-set wow fadeIn" data-wow-delay=".4s">
                            <div class="work-card cd2">
                                <div class="icon-bg"><img src="{{ asset('assets/open/') }}/images/icons/icon-2.png" alt="Industries" /></div>
                                <p>Digital Marketing</p>
                            </div>
                        </div>
                        <div class="icon-set wow fadeIn" data-wow-delay=".6s">
                            <div class="work-card cd3">
                                <div class="icon-bg"><img src="{{ asset('assets/open/') }}/images/icons/icon-3.png" alt="Industries" /></div>
                                <p>Ecommerce Development</p>
                            </div>
                        </div>
                        <div class="icon-set wow fadeIn" data-wow-delay=".8s">
                            <div class="work-card cd4">
                                <div class="icon-bg"><img src="{{ asset('assets/open/') }}/images/icons/icon-4.png" alt="Industries" /></div>
                                <p>Video Service</p>
                            </div>
                        </div>
                        <div class="icon-set wow fadeIn" data-wow-delay="1s">
                            <div class="work-card cd5">
                                <div class="icon-bg"><img src="{{ asset('assets/open/') }}/images/icons/icon-5.png" alt="Industries" /></div>
                                <p>Banking Service</p>
                            </div>
                        </div>
                        <div class="icon-set wow fadeIn" data-wow-delay="1.2s">
                            <div class="work-card cd6">
                                <div class="icon-bg"><img src="{{ asset('assets/open/') }}/images/icons/icon-6.png" alt="Industries" /></div>
                                <p>Enterprise Service</p>
                            </div>
                        </div>
                        <div class="icon-set wow fadeIn" data-wow-delay="1.4s">
                            <div class="work-card cd7">
                                <div class="icon-bg"><img src="{{ asset('assets/open/') }}/images/icons/icon-7.png" alt="Industries" /></div>
                                <p>Education Service</p>
                            </div>
                        </div>
                        <div class="icon-set wow fadeIn" data-wow-delay="1.6s">
                            <div class="work-card cd8">
                                <div class="icon-bg"><img src="{{ asset('assets/open/') }}/images/icons/icon-8.png" alt="Industries" /></div>
                                <p>Tour and Travels</p>
                            </div>
                        </div>
                        <div class="icon-set wow fadeIn" data-wow-delay="1.8s">
                            <div class="work-card cd9">
                                <div class="icon-bg"><img src="{{ asset('assets/open/') }}/images/icons/icon-9.png" alt="Industries" /></div>
                                <p>Health Service</p>
                            </div>
                        </div>
                        <div class="icon-set wow fadeIn" data-wow-delay="2s">
                            <div class="work-card cd10">
                                <div class="icon-bg"><img src="{{ asset('assets/open/') }}/images/icons/icon-10.png" alt="Industries" /></div>
                                <p>Event & Ticket</p>
                            </div>
                        </div>
                        <div class="icon-set wow fadeIn" data-wow-delay="2.2s">
                            <div class="work-card cd11">
                                <div class="icon-bg"><img src="{{ asset('assets/open/') }}/images/icons/icon-11.png" alt="Industries" /></div>
                                <p>Restaurant Service</p>
                            </div>
                        </div>
                        <div class="icon-set wow fadeIn" data-wow-delay="2.4s">
                            <div class="work-card cd12">
                                <div class="icon-bg"><img src="{{ asset('assets/open/') }}/images/icons/icon-12.png" alt="Industries" /></div>
                                <p>Business Consultant</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End  work-category-->
    <!--Start Testinomial-->
    <section class="testinomial-section pad-tb">
    <div class="container">
    <div class="row">
    <div class="col-lg-5 v-center">
    <div class="common-heading text-l">
    <span>Clients Testimonial</span>
    <h2 class="mb0">What our clients say about our Company.</h2>
    </div>
    </div>
    <div class="col-lg-7">
    <div class="owl-carousel testimonial-card-a pl25">
    <div class="testimonial-card">
    <div class="t-text">
        <p>Creative has a good Software developer’s team, I enjoyed working with them. They were extreme-ly prospective, we worked as a team to find extra specialists to help the core work.</p>
    </div>
    <div class="client-thumbs mt30">
        <div class="media v-center">
            <div class="user-image bdr-radius"><img src="https://avatars.githubusercontent.com/u/57512572?v=4" alt="girl" class="img-fluid" /></div>
            <div class="media-body user-info v-center">
                <h5>Ekwueme Ugochukwu</h5>
                <p>CEO of Hydrogen Technologies, <small>Anambra, Nigeria</small></p>
            </div>
        </div>
    </div>
</div>
<div class="testimonial-card">
    <div class="t-text">
        <p>I got help for my website redesign, website working and CMS development from Creative Web Designer Indore. The team is thorough, wonderful to work with and works hard to achieve the results I asked for.</p>
    </div>
    <div class="client-thumbs mt30">
        <div class="media v-center">
            <div class="user-image bdr-radius"><img src="{{ asset('assets/open/') }}/images/me/paul.jpg" alt="girl" class="img-fluid" /></div>
            <div class="media-body user-info">
            <h5>Paul Ekwueme</h5>
            <p>CEO of Cryto Defi Hub, <small>Lagos, Nigeria</small></p>
        </div>
        </div>
    </div>
    </div>
    <div class="testimonial-card">
    <div class="t-text">
        <p>This has by far been our best experience on the desk, and we are glad we made the right deci-sion by hiring Hydrogen Technologies Web Designers for our eCommerce website. well done guys!!!</p>
    </div>
    <div class="client-thumbs mt30">
        <div class="media v-center">
            <div class="user-image bdr-radius">
                <img src="{{ asset('assets/open/') }}/images/me/rose.jpg" alt="girl" class="img-fluid" />
            </div>
            <div class="media-body user-info">
                <h5>Nnadi Rose🌹</h5>
                <p>Tiktok Influencer, <small>Abuja, Nigeria</small></p>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
    <!--End Testinomial-->

    @include('layouts.widgets.contact')

    <!--Start Location-->
    <section class="our-office pad-tb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="common-heading">
                        <span>Our Locations</span>
                        <h2>Our office</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center upset shape-numm">
                <div class="col-lg-4 col-sm-6 shape-loc wow fadeInUp" data-wow-delay=".2s">
                    <div class="office-card">
                        <div class="skyline-img" data-tilt data-tilt-max="4" data-tilt-speed="1000">
                            <img src="{{ asset('assets/open/') }}/img/office/nau.jpg" alt="Awka, Anambra" class="img-fluid" />
                        </div>
                        <div class="office-text">
                            <h4>Awka, Anambra</h4>
                            <p>Along Enugu-Onitsha Expressway, Ifite Road, 420110, Awka</p>
                            <a href="https://g.page/nnamdi-azikiwe-university-awka?share" target="blank" class="btn-outline">View on Map <i class="fas fa-chevron-right fa-icon"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Location-->

@endsection