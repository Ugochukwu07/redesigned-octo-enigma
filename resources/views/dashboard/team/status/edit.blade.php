@extends('layouts.dashboard.app')

@section('title') Update New Status @endsection

@section('content')
    <x-Dashboard.TeamOverview />

    
    <div class="container-fluid mt--7">
        <div class="row">
            
            <div class="col-xl-10 order-xl-1 mx-auto">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <h3 class="mb-0">{{ __('Update New Status') }}</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('dashboard.team.status.edit.save') }}" autocomplete="off">
                            @csrf
                            <input type="hidden" name="status_id" value="{{ $status->id }}">
                            <h6 class="heading-small text-muted mb-4">{{ __('Status information') }}</h6>
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Name') }}</label>
                                    <input type="text" name="name" id="input-name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('name') ?? $status->name }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('department') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="department">{{ __('Member department') }}</label>
                                    <select class="form-control form-control-alternative{{ $errors->has('department') ? ' is-invalid' : '' }}" name="department" id="department">
                                        <option></option>
                                        <option @if ($status->department === 1)
                                            selected
                                        @endif value="1">Logo and Branding</option>
                                        <option @if ($status->department === 2)
                                            selected
                                        @endif value="2">Web Developemnt</option>
                                        <option @if ($status->department === 3)
                                            selected
                                        @endif value="3">Mobile Apps</option>
                                        <option @if ($status->department === 4)
                                            selected
                                        @endif value="4">UI/UX</option>
                                        <option @if ($status->department === 5)
                                            selected
                                        @endif value="5">Technical Support</option>
                                    </select>
                                    @if ($errors->has('department'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('department') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="description">{{ __('Description') }}</label>
                                    <textarea name="description" class="form-control" placeholder="Status Description" id="description" cols="30" rows="10">{{ old('description') ?? $status->description }}</textarea>
                                    @if ($errors->has('description'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('description') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Save') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection