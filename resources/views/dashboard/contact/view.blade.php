@extends('layouts.dashboard.app')

@section('title')
    {{ $message->subject ?? $message->department }}
@endsection

@section('content') 
    <x-Dashboard.TicketHeader />

    <div class="col-xl-10 order-xl-1 mx-auto">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <h3 class="mb-0">{{ __('View Ticket') }}</h3>
                </div>
            </div>
            <div class="card-body">
                <dl class="row mb-0">
                    <dt class="col-sm-3">Name</dt>
                    <dd class="col-sm-9">
                        {{ $message->name ?? $message->full_name}}
                    </dd>
                    <hr>
                    <dt class="col-sm-3">Ticket ID</dt>
                    <dd class="col-sm-9">
                        {{ $message->ticket_id }}
                    </dd>
                    <hr>
                    <dt class="col-sm-3">Email</dt>
                    <dd class="col-sm-9">
                        {{ $message->email}}
                    </dd>
                    <hr>
                    <dt class="col-sm-3">Subject</dt>
                    <dd class="col-sm-9">
                        {{ $message->department ?? $message->subject }}
                    </dd>
                    <hr>
                    <dt class="col-sm-3">Phone Number</dt>
                    <dd class="col-sm-9">
                        {{ $message->number ?? $message->phone }}
                    </dd>
                    <hr>
                    <dt class="col-sm-3">Message</dt>
                    <dd class="col-sm-9">
                        {{ $message->message }}
                    </dd>
                    <hr>
                    <dt class="col-sm-3">Action</dt>
                    <dd class="col-sm-9">
                        @if ($message->type)
                            <td>
                                <a class="text-info mx-2" data-toggle="tooltip" data-placement="top" title="Reply" href="{{ route('dashboard.contact.tickets.reply', ['ticket_id' => $message->ticket_id]) }}"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a class="text-danger mx-2" data-toggle="tooltip" data-placement="top" title="delete" href="{{ route('dashboard.contact.tickets.delete', ['ticket_id' => $message->ticket_id]) }}"><i class="fa-solid fa-trash-can"></i></a>
                                <a class="text-warning mx-2" data-toggle="tooltip" data-placement="top" title="archive" href="{{ route('dashboard.contact.tickets.archive', ['ticket_id' => $message->ticket_id, 'table' => 1]) }}"><i class="fa-solid fa-box-archive"></i></a>
                            </td>
                        @else
                            <td>
                                <a class="text-info mx-2" data-toggle="tooltip" data-placement="top" title="Reply" href="{{ route('dashboard.contact.message.reply', ['ticket_id' => $message->ticket_id]) }}"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a class="text-danger mx-2" data-toggle="tooltip" data-placement="top" title="delete" href="{{ route('dashboard.contact.message.delete', ['ticket_id' => $message->ticket_id]) }}"><i class="fa-solid fa-trash-can"></i></a>
                                <a class="text-warning mx-2" data-toggle="tooltip" data-placement="top" title="archive" href="{{ route('dashboard.contact.message.archive', ['ticket_id' => $message->ticket_id, 'table' => 1]) }}"><i class="fa-solid fa-box-archive"></i></a>
                            </td>
                        @endif
                    </dd>
                    <hr>
                </dl>
            </div>
        </div>
    </div>    
@endsection