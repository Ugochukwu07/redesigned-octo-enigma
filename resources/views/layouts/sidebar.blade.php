		<!--Start sidebar -->    
		<div class="niwaxofcanvas offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample">
            <div class="offcanvas-body">
              <div class="cbtn animation">
                <div class="btnclose"> <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button></div>
              </div>
              <div class="form-block sidebarform">
                <h4>Request A Quote</h4>
                <form id="contactForm" data-bs-toggle="validator" class="shake mt20">
                  <div class="row">
                    <div class="form-group col-sm-12">
                      <input type="text"  id="name" placeholder="Enter name" required data-error="Please fill Out">
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group col-sm-12">
                      <input type="email"  id="email" placeholder="Enter email" required>
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-sm-12">
                      <input type="text" id="mobile" placeholder="Enter mobile" required data-error="Please fill Out">
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group col-sm-12">
                      <select name="Dtype" id="Dtype" required>
                        <option value="">Select Requirement</option>
                        <option value="web">web</option>
                        <option value="graphic">graphic</option>
                        <option value="video">video</option>
                      </select>
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="form-group">
                    <textarea id="message" rows="5" placeholder="Enter your message" required></textarea>
                    <div class="help-block with-errors"></div>
                  </div>
                  <button type="submit" id="form-submit" class="btn lnk btn-main bg-btn">Submit <span class="circle"></span></button>
                  <div id="msgSubmit" class="h3 text-center hidden"></div>
                  <div class="clearfix"></div>
                </form>
              </div>
              <div class="getintouchblock mt30">
                <h4>Get In Touch</h4>
                <p class="mt10">Please fill out the form below if you have a plan or project in mind that you'd like to share with us.</p>
                <div class="media mt15">
                  <div class="icondive"><img src="{{ asset('assets/open') }}/images/icons/call.svg" alt="icon"></div>
                  <div class="media-body getintouchinfo">
                    <a href="tel:{{ config('hydro.phone.call') }}">{{ config('hydro.phone.call') }} <span>Mon-Fri 9am - 6pm</span></a>
                  </div>
                </div>
                <div class="media mt15">
                  <div class="icondive"><img src="{{ asset('assets/open') }}/images/icons/whatsapp.svg" alt="icon"></div>
                  <div class="media-body getintouchinfo">
                    <a href="tel:{{ config('hydro.phone.whatsapp') }}">{{ config('hydro.phone.whatsapp') }} <span>Mon-Fri 9am - 6pm</span></a>
                  </div>
                </div>
                <div class="media mt15">
                  <div class="icondive"><img src="{{ asset('assets/open') }}/images/icons/mail.svg" alt="icon"></div>
                  <div class="media-body getintouchinfo">
                    <a href="mailto:{{ config('hydro.email.support') }}">{{ config('hydro.email.support') }} <span>Online Support</span></a>
                  </div>
                </div>
                <div class="media mt15">
                  <div class="icondive"><img src="{{ asset('assets/open') }}/images/icons/map.svg" alt="icon"></div>
                  <div class="media-body getintouchinfo">
                    <a href="mailto:{{ config('hydro.email.info') }}">Awka, Anamabra, Nigeria<span>Visit Our Office</span></a>
                  </div>
                </div>
              </div>
              <div class="contact-data mt30">
                <h4>Follow Us On:</h4>
                <div class="social-media-linkz mt10">
                  <a href="{{ config('hydro.links.facebook') }}" target="blank"><i class="fab fa-facebook"></i></a>
                  <a href="javascript:void(0)" target="blank"><i class="fab fa-twitter"></i></a>
                  <a href="javascript:void(0)" target="blank"><i class="fab fa-instagram"></i></a>
                  <a href="javascript:void(0)" target="blank"><i class="fab fa-linkedin"></i></a>
                  <a href="javascript:void(0)" target="blank"><i class="fab fa-youtube"></i></a>
                  <a href="javascript:void(0)" target="blank"><i class="fab fa-pinterest-p"></i></a>             			  
                </div>
              </div>
            </div>
          </div>
