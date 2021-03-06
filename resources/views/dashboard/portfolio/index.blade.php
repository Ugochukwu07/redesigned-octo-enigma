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
                            <h3 class="mb-0">{{ __('All Our Portfoilos') }}</h3></div>
                            <div class="col-md-6 text-center text-md-right">
                                @include('layouts.dashboard.modals.portfoilo.add')
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
                                    <th scope="col">Image</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Department</th>
                                    <th scope="col">Tags</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($portfolios as $key => $portfolio)
                                <tr>
                                    <th scope="row">
                                        {{ $key + 1 }}
                                    </th>
                                    <td>
                                        <img src="{{ url($portfolio->file) }}" class="img-fuild" width="70px" alt="{{ $portfolio->name }}">
                                    </td>
                                    <td>
                                        {{ $portfolio->name }}
                                    </td>
                                    <td>
                                        {{ $portfolio->department->name }}
                                    </td>
                                    <td>
                                        {{ $portfolio->tags }}
                                    </td>
                                    <td>
                                        {!! $portfolio->description !!}
                                    </td>
                                    <td>
                                        <a class="text-info mx-2" title="edit" href="{{ route('dashboard.portfolio.edit', ['portfolio_id' => $portfolio->id]) }}"><i class="fa-solid fa-pen-to-square"></i></a>
                                        <a class="text-danger mx-2" title="delete" href="{{ route('dashboard.portfolio.delete', ['portfolio_id' => $portfolio->id]) }}"><i class="fa-solid fa-trash-can"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{ $portfolios->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection