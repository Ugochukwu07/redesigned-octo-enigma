@extends('layouts.app')

@section('title') Our Portfolio @endsection

@section('content')
    <!--Breadcrumb Area-->
<section class="breadcrumb-area banner-3" style="background-image: url('{{ asset('assets/open/images/portfolio/portfolio-bg.jpg') }}')">
    <div class="text-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 v-center">
                    <div class="bread-inner">
                        <div class="bread-menu">
                            <ul>
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
                            </ul>
                        </div>
                        <div class="bread-title">
                            <h2>Our Projects</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Breadcrumb Area-->
<!--Start Portfolio-->
    <section class="portfolio-page pad-tb">
        <div class="container">
            <div class="row justify-content-left">
                <div class="col-lg-6">
                    <div class="common-heading pp">
                        <span>Our Work</span>
                        <h2>Portfolio</h2>
                    </div>
                </div>
                <div class="col-lg-6 v-center">
                    <div class="filters">
                        <ul class="filter-menu">
                            <li data-filter="*" class="is-checked">All</li>
                            @foreach ($departments as $department)
                                <li data-filter=".{{ $department->id }}">{{ $department->name }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row card-list">
                <div class="col-lg-4 col-md-6 grid-sizer"></div>
                @foreach ($portfolios as $portfolio)
                    <div class="col-lg-4 col-sm-4 mt40 single-card-item {{ $portfolio->department->id }}">
                        <div class="isotope_item up-hor">
                            <div class="item-image" data-tilt data-tilt-max="2" data-tilt-speed="1000">
                                <a href="#"><img src="{{ url($portfolio->file) }}" alt="{{ $portfolio->name }}" class="img-fluid" /> </a>
                            </div>
                            <div class="item-info-div shdo">
                                <h4><a href="#">{{ $portfolio->name }}</a></h4>
                                    <p>{{ $portfolio->tags }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="col-lg-12 col-md-12">
                    {{ $portfolios->links() }}
                </div>
            </div>
        </div>
    </section>
    <!--End Portfolio-->
@endsection