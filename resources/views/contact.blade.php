@extends('layouts.app')

@section('styles')
	<style>
		.grecaptcha-badge { visibility: hidden !important; }
	</style>
@endsection

@section('title')
    Contact Us
@endsection

@section('content')
    <!--Breadcrumb Area-->
		<section class="breadcrumb-area banner-6" style="background-image: url('{{ asset('assets/open/images/hero/contact.jpg') }}')">
			<div class="text-block">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 v-center">
							<div class="bread-inner">
								<div class="bread-menu wow fadeInUp" data-wow-delay=".2s">
									<ul>
										<li><a href="{{ route('home') }}">Home</a></li>
										<li><a href="{{ route('contact', ['purpose' => 'all']) }}">Contact</a></li>
									</ul>
								</div>
								<div class="bread-title wow fadeInUp" data-wow-delay=".5s">
									<h2>Contact Us</h2>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--End Breadcrumb Area-->
		<!--Start Enquire Form-->
		<section class="contact-page pad-tb">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 v-center">
						<div class="common-heading text-l">
							<span>Contact Now</span>
							<h2 class="mt0 mb0">Have Question? Write a Message</h2>
							<p class="mb60 mt20">We will catch you as early as we receive the message</p>
						</div>
						<div class="form-block">
							<form action="{{ route('contact.save') }}" method="post">
								@csrf
								<div class="row">
									<div class="fieldsets col-sm-6">
										<input type="text" class="form-control" value="{{ old('full_name') }}" id="name" placeholder="*Enter Your Full Name" name="full_name">
										@error('full_name')
											<span class="badge bg-danger">{{ $message }}</span>
										@enderror
									</div>
									<div class="form-group col-sm-6">
										<input type="email" value="{{ old('email') }}" name="email" id="email" placeholder="*Enter Your Email">
										@error('email')
											<span class="badge bg-danger">{{ $message }}</span>
										@enderror
									</div>
								</div>
								<div class="row">
									<div class="form-group col-sm-6">
										<input type="text" value="{{ old('phone') }}" id="Phone" placeholder="*Enter Your Phone" name="phone">
										@error('phone')
											<span class="badge bg-danger">{{ $message }}</span>
										@enderror
									</div>
									<div class="form-group col-sm-6">
										<select name="department" id="department">
											<option>Select Requirement</option>
											<option @if($purpose == 'web') selected @endif value="web">Web Development</option>
											<option @if($purpose == 'mobile') selected @endif value="mobile">Mobile App Development</option>
											<option @if($purpose == 'branding') selected @endif value="branding">Logo and Branding</option>
											<option value="support">Techinical Support</option>
										</select>
										@error('department')
											<span class="badge bg-danger">{{ $message }}</span>
										@enderror
									</div>
								</div>
								<div class="form-group">
									<textarea id="message" name="message" rows="5" placeholder="*Enter Your Message">{{ old('message') }}</textarea>
									@error('message')
										<span class="badge bg-danger">{{ $message }}</span>
									@enderror
								</div>
								{{-- <div class="fieldsets">
									{!! RecaptchaV3::field('contactUs') !!}
									@error('g-recaptcha-response')
										<div class="badge bg-danger">{{ $message }}</div>
									@enderror
								</div>
								<div class="fieldsets text-center">
									<div class="p-3">
									<div id="contact_us_id"></div></div>
									{!!  GoogleReCaptchaV3::renderOne('contact_us_id','contact_us') !!}
								</div>
								@error('g-recaptcha-response')
									<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
								@enderror --}}
								<button type="submit" id="form-submit" class="btn lnk btn-main bg-btn">Submit <span class="circle"></span></button>
							</form>
						</div>
					</div>
								<div class="col-lg-6 v-center">
									<div class="contact-details">
										<div class="contact-card wow fadeIn" data-wow-delay=".2s">
											<div class="info-card v-center">
												<span><i class="fas fa-phone-alt"></i> Phone:</span>
												<div class="info-body">
													<p>Assistance hours: Monday – Friday, 9 am to 5 pm</p>
													<a href="tel:+2348143440606">+234 8143 440 606</a>
												</div>
											</div>
										</div>
										<div class="email-card mt30 wow fadeIn" data-wow-delay=".5s">
											<div class="info-card v-center">
												<span><i class="fas fa-envelope"></i> Email:</span>
												<div class="info-body">
													<p>Our support team will get back to in 24-h during standard business hours.</p>
													<a href="mailto:support@hydrogentech.com.ng">support@hydrogentech.com.ng</a>
												</div>
											</div>
										</div>
										<div class="skype-card mt30 wow fadeIn" data-wow-delay=".9s">
											<div class="info-card v-center">
												<span><i class="fab fa-facebook"></i> Facebook:</span>
												<div class="info-body">
													<p>We Are Online: Monday – Friday, 9 am to 5 pm</p>
													<a target="_blank" href="https://www.facebook.com/Hydrogen-Technologies-104079737825405">Hydrogen Technologies</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					<!--End Enquire Form-->
                    
                    <x-Offices />
@endsection