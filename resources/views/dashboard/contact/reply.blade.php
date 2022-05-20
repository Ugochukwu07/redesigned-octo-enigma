@extends('layouts.dashboard.app')

@section('title') Reply {{ $message->subject ?? $message->department }} @endsection

@section('content')
    <x-Dashboard.TicketHeader />

    <div class="container-fluid mt--7">
        <div class="row">
            
            <div class="col-xl-10 order-xl-1 mx-auto">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <h3 class="mb-0">{{ __('Reply Ticket') }}</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" enctype="multipart/form-data" action="{{ route('dashboard.contact.reply.save') }}" autocomplete="off">
                            @csrf
                            <h6 class="heading-small text-muted mb-4">{{ __('User information') }}</h6>
                            <div class="pl-lg-4">
                                <input type="hidden" name="ticket_id" value="{{ $message->ticket_id }}">
                                <input type="hidden" name="table" value="{{ $table }}">
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-name">{{ __('Full Name') }}</label>
                                            <input type="text" name="name" id="input-name" class="form-control" readonly value="{{ $message->name ?? $message->full_name }}"  autofocus>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-email">{{ __('Email') }}</label>
                                            <input type="email" name="email" id="input-email" class="form-control" readonly value="{{ $message->email }}" >
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-email">{{ __('Phone') }}</label>
                                            <input type="text" name="phone" id="input-email" class="form-control" readonly value="{{ $message->phone ?? $message->number }}" >
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-subject">{{ __('Subject') }}</label>
                                            <input type="text" name="subject" id="input-subject" class="form-control" readonly value="{{ $message->subject ?? $message->department }}" >
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label" for="description">{{ __('Reply') }}</label>
                                            <textarea name="reply" class="form-control" placeholder="Your Reply Here" id="elm1" cols="30" rows="10">{{ old('reply') }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-12 col-lg-12">
                                        <label>
                                            <input type="checkbox" name="fileCheck"> Add Files
                                        </label>
                                    </div>
                                </div>
                                  <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Reply') }}</button>
                                </div>
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