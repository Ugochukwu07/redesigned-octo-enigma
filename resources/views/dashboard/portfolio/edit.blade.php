@extends('layouts.dashboard.app')

@section('title')
    Portfolios
@endsection

@section('content')
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
    </div>
        
    <div class="container-fluid mt--7">
        <div class="row">
            
            <div class="col-xl-12 mx-auto order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <h3 class="mb-0">{{ __('Edit Portfolios') }}</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <form enctype="multipart/form-data" action="{{ route('dashboard.portfolio.edit.save') }}" method="POST">
                            @csrf
                            <input type="hidden" name="portfolio_id" value="{{ $portfolio->id }}">
                            <div class="mb-3 form-group{{ $errors->has('file') ? ' has-danger' : '' }}">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input form-control-alternative{{ $errors->has('file') ? ' is-invalid' : '' }}" name="file" lang="en">
                                    <label class="custom-file-label" for="file" name="file">Select Portfolio Image</label>
                                @if ($errors->has('file'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('file') }}</strong>
                                    </span>
                                @endif
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <input class="form-control" placeholder="Portfolio Name" type="text" value="{{ old('name') ?? $portfolio->name }}" name="name">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <input class="form-control" placeholder="portfolio Tags" type="text" value="{{ old('tags') ?? $portfolio->tags }}" name="tags">
                                @error('tags')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            
                            <div class="form-group{{ $errors->has('department') ? ' has-danger' : '' }}">
                                <label class="form-control-label" for="department">{{ __('Department') }}</label>
                                <select class="form-control form-control-alternative{{ $errors->has('department') ? ' is-invalid' : '' }}" name="department" id="department">
                                    <option></option>
                                    @foreach ($departments as $department)
                                        <option @if($department->id == ($portfolio->department->id || old('department'))) selected @endif value="{{ $department->id }}">{{ $department->name }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('department'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('department') }}</strong>
                                    </span>
                                @endif
                                <a class="text-underline text-info float-right" href="{{ route('dashboard.department.all') }}">Add new Department</a>
                            </div>

                            <div class="form-group mb-3">
                                <textarea class="form-control" id="elm1" cols="30" rows="10" placeholder="portfolio Description"name="description">{{ old('description') ?? $portfolio->description }}</textarea>
                                @error('description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary my-4">Add Portfolio</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

<!--quill js-->
<script src="{{ asset('assets/js/quill/quill.min.js') }}"></script>

<!--tinymce js-->
<script src="{{ asset('assets/js/tinymce/tinymce.min.js') }}"></script>

<!-- init js -->
<script src="{{ asset('assets/js/form-editor.init.js') }}"></script>

@endsection