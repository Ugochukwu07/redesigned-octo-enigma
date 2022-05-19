@extends('layouts.dashboard.app')

@section('title') All Team Member Status @endsection

@section('content')
    <x-Dashboard.TeamOverview />

    
    <div class="container-fluid mt--7">
        <div class="row">
            
            <div class="col-xl-12 mx-auto order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <h3 class="mb-0">{{ __('All Team Status') }}</h3>
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
                                    <th scope="col">Department</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($memberStatus as $key => $status)
                                <tr>
                                    <th scope="row">
                                        {{ $key + 1 }}
                                    </th>
                                    <td>
                                        {{ $status->name }}
                                    </td>
                                    <td>
                                        {{ $status->department }}
                                    </td>
                                    <td>
                                        {{ $status->description }}
                                    </td>
                                    <td>
                                        <a class="text-info mx-2" title="edit" href="{{ route('dashboard.team.status.edit', ['id' => $status->id]) }}"><i class="fa-solid fa-pen-to-square"></i></a>
                                        <a class="text-danger mx-2" title="delete" href="{{ route('dashboard.team.status.delete', ['id' => $status->id]) }}"><i class="fa-solid fa-trash-can"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection