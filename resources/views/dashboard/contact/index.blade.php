@extends('layouts.dashboard.app')

@section('title') {{ $title }} @endsection

@section('content')
    <x-Dashboard.TicketHeader />

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
                                        <th scope="col">Ticket ID</th>
                                        <th scope="col">Full Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Departmemt/Subject</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Message</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($messages as $key => $message)
                                        <tr>
                                            <th scope="row">
                                                {{ $key + 1 }}
                                            </th>
                                            <td>
                                                {{ $message->ticket_id }}
                                            </td>
                                            <td>
                                                {{ $message->name ?? $message->full_name }}
                                            </td>
                                            <td>
                                                {{ $message->email }}
                                            </td>
                                            <td>
                                                {{ $message->department ?? $message->subject }}
                                            </td>
                                            <td>
                                                {{ $message->number ?? $message->phone }}
                                            </td>
                                            <td>
                                                {{ $message->message }}
                                            </td>
                                            @if ($type)
                                                <td>
                                                    <a class="text-info mx-2" title="edit" href="{{ route('dashboard.contact.tickets.reply', ['ticket_id' => $message->ticket_id]) }}"><i class="fa-solid fa-pen-to-square"></i></a>
                                                    <a class="text-danger mx-2" title="delete" href="{{ route('dashboard.contact.tickets.delete', ['ticket_id' => $message->ticket_id]) }}"><i class="fa-solid fa-trash-can"></i></a>
                                                    <a class="text-danger mx-2" title="archive" href="{{ route('dashboard.contact.tickets.archive', ['ticket_id' => $message->ticket_id, 'table' => 1]) }}"><i class="fa-solid fa-box-archive"></i></a>
                                                </td>
                                            @else
                                                <td>
                                                    <a class="text-info mx-2" title="edit" href="{{ route('dashboard.contact.message.reply', ['ticket_id' => $message->ticket_id]) }}"><i class="fa-solid fa-pen-to-square"></i></a>
                                                    <a class="text-danger mx-2" title="delete" href="{{ route('dashboard.contact.message.delete', ['ticket_id' => $message->ticket_id]) }}"><i class="fa-solid fa-trash-can"></i></a>
                                                    <a class="text-danger mx-2" title="archive" href="{{ route('dashboard.contact.message.archive', ['ticket_id' => $message->ticket_id, 'table' => 1]) }}"><i class="fa-solid fa-box-archive"></i></a>
                                                </td>
                                            @endif
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{ $messages->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection