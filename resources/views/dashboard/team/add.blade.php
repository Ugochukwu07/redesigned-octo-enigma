@extends('layouts.dashboard.app')

@section('title') Add New Team Member @endsection

@section('content')
    <x-Dashboard.TeamOverview />

    
    <div class="container-fluid mt--7">
        <div class="row">
            
            <div class="col-xl-10 order-xl-1 mx-auto">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <h3 class="mb-0">{{ __('Add New Team Member') }}</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('dashboard.team.save') }}" autocomplete="off">
                            @csrf
                            <h6 class="heading-small text-muted mb-4">{{ __('User information') }}</h6>
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('image') ? ' has-danger' : '' }}">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="image" lang="en">
                                        <label class="custom-file-label" for="image" name="image">Select Team Member Image</label>
                                    </div>
                                    @if ($errors->has('image'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('image') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Full Name') }}</label>
                                    <input type="text" name="name" id="input-name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-email">{{ __('Email') }}</label>
                                    <input type="email" name="email" id="input-email" class="form-control form-control-alternative{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('status') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="status">{{ __('Member Status') }}</label>
                                    <select class="form-control" name="status" id="status">
                                        <option></option>
                                        @foreach ($memberStatus as $status)
                                        <option value="{{ $status->id }}">{{ $status->name }}</option>
                                        @endforeach
                                    </select>
                                    
                                    @if ($errors->has('status'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('status') }}</strong>
                                    </span>
                                    @endif
                                    
                                    <a class="text-underline text-info float-right" href="{{ route('dashboard.team.status.add') }}">Add new Status</a>
                                </div>
                                
                                <h3>Social Links</h3>
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group{{ $errors->has('facebook-link') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="facebook-link">{{ __('Facebook Link') }}</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1"><i class="fa-brands fa-facebook"></i></span>
                                                </div>
                                                <input class="form-control" name="facebook-link" type="url" value="{{ old('facebook-link') }}" id="facebook-link">
                                            </div>
                                        </div>
                                        @if ($errors->has('facebook-link'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('facebook-link') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    {{-- Twitter --}}
                                    <div class="col-md-6 col-12">
                                        <div class="form-group{{ $errors->has('twitter-link') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="twitter-link">{{ __('Twitter Link') }}</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1"><i class="fa-brands fa-twitter"></i></span>
                                                </div>
                                                <input class="form-control" name="twitter-link" type="url" value="{{ old('twitter-link') }}" id="twitter-link">
                                            </div>
                                        </div>
                                        @if ($errors->has('twitter-link'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('twitter-link') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    {{-- linkedin --}}
                                    <div class="col-md-6 col-12">
                                        <div class="form-group{{ $errors->has('linkedin-link') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="linkedin-link">{{ __('Linkedin Link') }}</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1"><i class="fa-brands fa-linkedin"></i></span>
                                                </div>
                                                <input class="form-control" name="linkedin-link" type="url" value="{{ old('linkedin-link') }}" id="linkedin-link">
                                            </div>
                                        </div>
                                        @if ($errors->has('linkedin-link'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('linkedin-link') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    {{-- github --}}
                                    <div class="col-md-6 col-12">
                                        <div class="form-group{{ $errors->has('github-link') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="github-link">{{ __('Github Link') }}</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1"><i class="fa-brands fa-github"></i></span>
                                                </div>
                                                <input class="form-control" name="github-link" type="url" value="{{ old('github-link') }}" id="github-link">
                                            </div>
                                        </div>
                                        @if ($errors->has('github-link'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('github-link') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="description">{{ __('Description') }}</label>
                                    <textarea name="description" class="form-control" placeholder="Team Member Description" id="description" cols="30" rows="10">{{ old('description') }}</textarea>
                                    @if ($errors->has('description'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('description') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                
                                  <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Add Member') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection