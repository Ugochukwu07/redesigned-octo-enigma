@extends('layouts.app')

@section('title')
    {{ $member->name }}
@endsection

@section('content')
     <!--Breadcrumb Area-->
  <section class="breadcrumb-area banner-4" style="background-image: url({{ url($member->image) }})">
    <div class="text-block">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 v-center">
            <div class="bread-inner">
              <div class="bread-menu">
                <ul>
                  <li><a href="{{ route('home') }}">Home</a></li>
                  <li><a href="{{ route('team') }}">Team</a></li>
                  <li><a href="{{ route('team.single', ['id' => $member->id]) }}">{{ $member->name }} Details</a></li>
                </ul>
              </div>
              <div class="bread-title">
                <h2>{{ $member->name }}</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--End Breadcrumb Area-->
  <!--Start Team Details-->
  <section class="team pad-tb deep-dark">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-5">
          <div class="image-block upset bg-shape">
            <div class="image-div"><a href="#"><img src="{{ url($member->image) }}" alt="{{ $member->name }}" class="img-fluid"/></a></div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="full-image-card mt0">
            <div class="info-text-block">
              <h4><a href="#">{{ $member->name }}</a></h4>
              <p>{{ $member->stack->name }}</p>
            </div>
            <div class="otherinfo">
              <p>{{ $member->description }}</p>
              <div class="social-media-profile">
                <a href="{{ $member->facebook_link }}" target="blank"><i class="fab fa-facebook"></i></a>
                <a href="{{ $member->twitter_link }}" target="blank"><i class="fab fa-twitter"></i></a>
                <a href="{{ $member->github_link }}" target="blank"><i class="fab fa-github"></i></a>
                <a href="{{ $member->linkedin_link }}" target="blank"><i class="fab fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--End Team Details-->
@endsection