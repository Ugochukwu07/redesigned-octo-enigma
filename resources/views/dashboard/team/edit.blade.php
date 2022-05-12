@extends('layouts.dashboard.app')

@section('title') Edit Team Member @endsection

@section('content')
    <x-Dashboard.TeamOverview />

    
    <div class="container-fluid mt--7">
        <div class="row">
            
            <div class="col-xl-10 order-xl-1 mx-auto">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <h3 class="mb-0">{{ __('Edit Team Member') }}</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" enctype="multipart/form-data" action="{{ route('dashboard.team.save') }}" autocomplete="off">
                            @csrf
                            <h6 class="heading-small text-muted mb-4">{{ __('User information') }}</h6>
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('image') ? ' has-danger' : '' }}">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input form-control-alternative{{ $errors->has('image') ? ' is-invalid' : '' }}" name="image" lang="en">
                                        <label class="custom-file-label" for="image" name="image">Select Team Member Image</label>
                                    @if ($errors->has('image'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('image') }}</strong>
                                        </span>
                                    @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Full Name') }}</label>
                                    <input type="text" name="name" id="input-name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('name') ? $member->name : old('name') }}"  autofocus>
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-email">{{ __('Email') }}</label>
                                    <input type="email" name="email" id="input-email" class="form-control form-control-alternative{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" value="{{ old('email') ? $member->email : old('email')}}" >

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('status') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="status">{{ __('Member Status') }}</label>
                                    <select class="form-control form-control-alternative{{ $errors->has('status') ? ' is-invalid' : '' }}" name="status" id="status">
                                        <option></option>
                                        @foreach ($memberStatus as $status)
                                            <option @if($status == ($member->stack->id || old('status'))) selected @endif value="{{ $status->id }}">{{ $status->name }}</option>
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
                                        <div class="form-group{{ $errors->has('facebook_link') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="facebook_link">{{ __('Facebook Link') }}</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1"><i class="fa-brands fa-facebook"></i></span>
                                                </div>
                                                <input class="form-control form-control-alternative{{ $errors->has('facebook_link') ? ' is-invalid' : '' }}" name="facebook_link" type="url" value="{{ old('facebook_link') ? $member->facebook_link : old('facebook_link') }}" id="facebook_link">
                                                @if ($errors->has('facebook_link'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('facebook_link') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Twitter --}}
                                    <div class="col-md-6 col-12">
                                        <div class="form-group{{ $errors->has('twitter_link') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="twitter_link">{{ __('Twitter Link') }}</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1"><i class="fa-brands fa-twitter"></i></span>
                                                </div>
                                                <input class="form-control form-control-alternative{{ $errors->has('twitter_link') ? ' is-invalid' : '' }}" name="twitter_link" type="url" value="{{ old('twitter_link') ? $member->twitter_link : old('twitter') }}" id="twitter_link">
                                                @if ($errors->has('twitter_link'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('twitter_link') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    {{-- linkedin --}}
                                    <div class="col-md-6 col-12">
                                        <div class="form-group{{ $errors->has('linkedin_link') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="linkedin_link">{{ __('Linkedin Link') }}</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1"><i class="fa-brands fa_linkedin"></i></span>
                                                </div>
                                                <input class="form-control form-control-alternative{{ $errors->has('linkedin_link') ? ' is-invalid' : '' }}" name="linkedin_link" type="url" value="{{ old('linkedin_link') ? $member->linkedin_link : old('linkedin_link') }}" id="linkedin_link">
                                                @if ($errors->has('linkedin_link'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('linkedin_link') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    {{-- github --}}
                                    <div class="col-md-6 col-12">
                                        <div class="form-group{{ $errors->has('github_link') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="github_link">{{ __('Github Link') }}</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1"><i class="fa-brands fa-github"></i></span>
                                                </div>
                                                <input class="form-control form-control-alternative{{ $errors->has('github_link') ? ' is-invalid' : '' }}" name="github_link" type="url" value="{{ old('github_link') ? $member->github_link : old('github_link') }}" id="github_link">
                                                @if ($errors->has('github_link'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('github_link') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="description">{{ __('Description') }}</label>
                                    <textarea name="description" class="form-control form-control-alternative{{ $errors->has('description') ? ' is-invalid' : '' }}" placeholder="Team Member Description" id="description" cols="30" rows="10">{{ old('description') ? $member->description : old('description')}}</textarea>
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