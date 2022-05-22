      <!--Stat Projects-->
      <section class="featured-project pad-tb">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <div class="common-heading ptag">
                <span>Our Projects</span>
                <h2>Some of Our Works</h2>
                <p class="mb0">We think big and have hands in all leading technology platforms to provide you wide array of services.</p>
              </div>
            </div>
          </div>
          <div class="row">
              @foreach ($portfolios as $key => $portfolio)
                <div class="col-lg-3 col-md-4 wow fadeInUp" data-wow-delay=".{{ $key + 3 }}s">
                    <div class="isotope_item hover-scale">
                        <div class="item-image">
                            <a href="#"><img src="{{ url($portfolio->file) }}" alt="{{ $portfolio->name }}" class="img-fluid"/> </a>
                        </div>
                        <div class="item-info">
                            <h4><a href="#">{{ $portfolio->name }} </a></h4>
                            <p>{{ $portfolio->tags }}</p>
                        </div>
                    </div>
                </div>
              @endforeach
          </div>
          <div class="row">
            <div class="col-lg-12 mt60">
                {{ $portfolios->links() }}
            </div>
            <div class="col-lg-12 maga-btn mt60">
              <a href="{{ route('portfolio') }}" class="btn-outline">View More Projects <i class="fas fa-chevron-right fa-icon"></i></a>
            </div>
          </div>
        </div>
      </section>
      <!--End Projects-->