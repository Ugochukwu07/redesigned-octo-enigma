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
                            <h3 class="mb-0">{{ __('Edit Department') }}</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('dashboard.department.edit.save') }}" method="POST">
                            @csrf
                            <input type="hidden" name="department_id" value="{{ $department->id }}">
                            <div class="form-group mb-3">
                                <input class="form-control" placeholder="Department Name" type="text" value="{{ old('name') ?? $department->name }}" name="name">
                                @error('name')
                                    <span class="text-danger bg-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            
                            <div class="form-group mb-3">
                                <textarea class="form-control" id="elm1" cols="30" rows="10" placeholder="Department Description" name="description">{{ old('description') ?? $department->description }}</textarea>
                                @error('description')
                                    <span class="text-danger bg-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary my-4">Update Department</button>
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