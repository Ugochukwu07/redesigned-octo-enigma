@extends('layouts.dashboard.app')

@section('title') All Team Member @endsection

@section('content')
    <x-Dashboard.TeamOverview />

    
    <div class="container-fluid mt--7">
        <div class="row">
            
            <div class="col-xl-12 mx-auto order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <h3 class="mb-0">{{ __('All Team Members') }}</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">S/N</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Stack</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($teamMember as $key => $member)
                                <tr>
                                    <th scope="row">
                                        {{ $key + 1 }}
                                    </th>
                                    <td>
                                        <img src="{{ url($member->image) }}" class="img-fuild" width="70px" alt="{{ $member->name }}">
                                    </td>
                                    <td>
                                        {{ $member->name }}
                                    </td>
                                    <td>
                                        {{ $member->email }}
                                    </td>
                                    <td>
                                        {{ $member->stack->name }}
                                    </td>
                                    <td>
                                        <a class="text-info" href="{{ route('dashboard.team.edit', ['id' => $member->id]) }}"><i class="fa-solid fa-pen-to-square"></i></a>
                                        <a class="text-danger" href="{{ route('dashboard.team.delete', ['id' => $member->id]) }}"><i class="fa-solid fa-trash-can"></i></a>
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