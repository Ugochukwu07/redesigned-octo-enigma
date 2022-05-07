    <!--Start Enquire Form-->
    <section class="enquire-form pad-tb" id="contact">
        <div class="container">
            <div class="row light-bgs">
                <div class="col-lg-6">
                    <div class="common-heading text-l">
                        <span>Contact Now</span>
                        <h2 class="mt0">Have Question? Write a Message</h2>
                    </div>
                    <div class="form-block">
                        <form action="{{ route('question.save') }}" method="post">
                            @csrf
                            <div class="fieldsets row">
                                <div class="col-md-6">
                                    @error('full_name')
                                        <span class="alert alert-danger mt-1 mb-1">{{ $message }}</span>
                                    @enderror
                                    <input type="text" value="{{ old('full_name') }}" placeholder="Full Name" name="full_name">
                                </div>
                                <div class="col-md-6">
                                    @error('email')
                                        <span class="alert alert-danger mt-1 mb-1">{{ $message }}</span>
                                    @enderror
                                    <input type="email" value="{{ old('email') }}" placeholder="Email Address" name="email">
                                </div>
                            </div>
                            <div class="fieldsets row">
                                <div class="col-md-6">
                                    @error('number')
                                        <span class="alert alert-danger mt-1 mb-1">{{ $message }}</span>
                                    @enderror
                                    <input type="number" value="{{ old('number') }}" placeholder="Contact Number" name="number"></div>
                                <div class="col-md-6">
                                    @error('subject')
                                        <span class="alert alert-danger mt-1 mb-1">{{ $message }}</span>
                                    @enderror
                                    <input type="text" value="{{ old('subject') }}" placeholder="Subject" name="subject">
                                </div>
                            </div>
                            <div class="fieldsets">
                                @error('message')
                                    <span class="alert alert-danger mt-1 mb-1">{{ $message }}</span>
                                @enderror
                                <textarea placeholder="Message" name="message">{{ old('message') }}</textarea>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="Terms" name="terms" checked="checked">
                                <label class="custom-control-label" for="Terms">I agree to the <a href="javascript:void(0)">Terms &amp; Conditions</a> of {{ config('app.name') }}.</label>
                            </div>
                            @error('terms')
                                <span class="alert alert-danger mt-1 mb-1">{{ $message }}</span>
                            @enderror
                            @if (request()->is('home'))
                                <div class="fieldsets">
                                    {!! RecaptchaV3::field('askQuestion') !!}
                                    @error('g-recaptcha-response')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
							@endif
                            <div class="fieldsets mt20">
                                <button type="submit" name="submit" class="lnk btn-main bg-btn">Submit <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></button>
                            </div>
                            <p class="trm"><i class="fas fa-lock"></i>We hate spam, and we respect your privacy.</p>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 v-center">
                    <div class="enquire-image">
                        <img src="{{ asset('assets/open/images/hero/contact-index.jpg') }}" alt="enquire" class="img-fluid rounded" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Enquire Form-->