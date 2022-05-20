@extends('layouts.dashboard.app')

@section('title') Add File to {{ $ticket_id }} @endsection
@section('css')
    <!-- Plugins css -->
    <link href="{{ asset('assets/js/dropzone/min/dropzone.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

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
                        <form action="{{ route('dashboard.contact.reply.file.save') }}" class="dropzone">
                            @csrf
                            <input type="hidden" name="ticket_id" value="{{ $ticket_id }}">
                            <input type="hidden" name="table" value="{{ $table }}">
                            <div class="fallback">
                                <input name="file" type="file" multiple="multiple">
                            </div>
                            <div class="dz-message needsclick">
                                <div class="mb-3">
                                    <i class="display-4 text-muted mdi mdi-cloud-upload-outline"></i>
                                </div>
                                
                                <h4>Drop files here to upload</h4>
                            </div>
                        </form>
                        <a href="{{ route('dashboard.contact.reply.send', ['ticket_id' => $ticket_id]) }}" class="btn btn-success">Send Mail</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('scripts')
<!-- dropzone js -->
<script src="{{ asset('assets/js/dropzone/min/dropzone.min.js') }}"></script>

<script>
    //var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");

    Dropzone.autoDiscover = false;
    var myDropzone = new Dropzone(".dropzone",{ 
         maxFilesize: 15, // 2 mb
         acceptedFiles: ".jpeg,.jpg,.png,.pdf,.dot,.docm,.docx,.dotx,.gif,.csv,.xlsx,.xlsm,.xlsb,.xltx,.svg",
    });
    myDropzone.on("sending", function(file, xhr, formData) {
         //formData.append("_token", CSRF_TOKEN);
    }); 
    /* myDropzone.options.uiDZResume = {
        success: function(file, response){
            alert(response);
        }
    }; */
    myDropzone.on("success", function(file, response) {
        if(response.success == 0){ // Error
            /* Swal.fire({
                   title: "An error occured",
                   text: response.message,
                   icon: 'warning'
            }); */
            alert("An error occured")
        }else{
            /* Swal.fire({
                   title: "Upload Success",
                   text: response.message,
                   icon: 'success'
               }); */

               alert('Upload Success')
        }

    });
    </script>
@endsection