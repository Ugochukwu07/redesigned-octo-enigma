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
                            <div class="col-md-6">
                            <h3 class="mb-0">{{ __('All Our Department') }}</h3></div>
                            <div class="col-md-6 text-center text-md-right">
                                @include('layouts.dashboard.modals.department.add')
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">S/N</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($departments as $key => $department)
                                <tr>
                                    <th scope="row">
                                        {{ $key + 1 }}
                                    </th>
                                    <td>
                                        {{ $department->name }}
                                    </td>
                                    <td>
                                        {!! $department->description !!}
                                    </td>
                                    <td>
                                        <a class="text-info mx-2" title="edit" href="{{ route('dashboard.department.edit', ['department_id' => $department->id]) }}"><i class="fa-solid fa-pen-to-square"></i></a>
                                        <a class="text-danger mx-2" title="delete" href="{{ route('dashboard.department.delete', ['department_id' => $department->id]) }}"><i class="fa-solid fa-trash-can"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{ $departments->links() }}
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