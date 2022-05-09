<div class="footer-row1">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="email-subs">
            <h3>Get New Insights Weekly</h3>
            <p>So you can be the first to find out the latest news and tips about applications, as well as general {{ config('app.name') }} updates throughout the year.</p>
          </div>
        </div>
        <div class="col-lg-6 v-center">
          <div class="email-subs-form">
            <form action="{{ route('newsletter.save') }}" method="POST">
              @csrf
              <input type="email" placeholder="Email Your Address" name="news_email">
              <button type="submit" name="submit" class="lnk btn-main bg-btn">Subscribe <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>