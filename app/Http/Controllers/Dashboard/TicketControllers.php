<?php

namespace App\Http\Controllers\Dashboard;

use App\Mail\TicketReply;
use App\Models\ContactUs;
use App\Models\TicketReplys;
use Illuminate\Http\Request;
use App\Models\ContactQuestion;
use App\Models\TicketReplysFiles;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class TicketControllers extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function allTickets(){
        $tickets = ContactQuestion::where('archive', 0)->orderBy('created_at', 'desc')->paginate(20);

        return view('dashboard.contact.index', [
            'title' => 'Question Tickets',
            'messages' => $tickets,
            'type' => true
        ]);
    }

    public function allMessage(){
        $tickets = ContactUs::where('archive', 0)->orderBy('created_at', 'desc')->paginate(20);

        return view('dashboard.contact.index', [
            'title' => 'Contact Us Tickets',
            'messages' => $tickets,
            'type' => false
        ]);
    }

    public function replyTickets($ticket_id){
        $ticket = ContactQuestion::where('ticket_id', $ticket_id)->first();

        return view('dashboard.contact.reply', [
            'message' => $ticket,
            'table' => 'ticket_question'
        ]);
    }

    public function deleteTickets($ticket_id){
        $ticket = ContactQuestion::where('ticket_id', $ticket_id)->first();

        $ticket->delete();
        toastr()->success('Question Ticket Deleted');
        return back();
    }

    public function replyMessage($ticket_id){
        $ticket = ContactUs::where('ticket_id', $ticket_id)->first();

        return view('dashboard.contact.reply', [
            'message' => $ticket,
            'table' => 'contact_us'
        ]);
    }

    public function deleteMessage($ticket_id){
        $ticket = ContactUs::where('ticket_id', $ticket_id)->first();

        $ticket->delete();
        toastr()->success('Contact Us Ticket Deleted');
        return back();
    }

    public function archiveMessage($ticket_id, $table)
    {
        switch ($table) {
            case 1:
                $this->archive(new ContactQuestion(), ['ticket_id', $ticket_id]);
                break;
            
            default:
                $this->archive(new ContactUs(), ['ticket_id', $ticket_id]);
                break;
        }

        toastr()->success('Message archived');
        return back();
    }

    public function replySave(Request $request){
        $request->validate([
            'reply' => 'required'
        ]);

        $saveReply = TicketReplys::create([
            'reply' => $request->input('reply'),
            'users_id' => auth()->user()->id,
            'ticket_id' => $request->input('ticket_id'),
            'table' => $request->input('table'),
        ]);

        if($request->input('fileCheck') == 'on'){
            toastr()->success('Upload your files');
            return redirect()->route('dashboard.contact.reply.file', ['ticket_id' => $request->input('ticket_id'), 'table' => $request->input('table')]);
        }else{
            //send mail
            Mail::to($request->email, $request->name)->send(new TicketReply($request));
        }
    }

    public function replyFile($ticket_id, $table){
        return view('dashboard.contact.file', [
            'ticket_id' => $ticket_id,
            'table' => $table
        ]);
    }

    public function replyFileSave(Request $request){
        $data = array();

        $validator = Validator::make($request->all(), [
             'file' => 'required|mimes:png,jpg,jpeg,pdf,dot,docm,docx,dotx,gif,csv,xlsx,xlsm,xlsb,xltx,svg|max:15360',
             'ticket_id' => 'required|regex:/(^(HTECH-)([0-9]{5}))/'
        ]);

        if ($validator->fails()) {

            $data['success'] = 0;
            $data['message'] = $validator->errors()->all();// Error response

        }else{
             if($request->file('file')) {

                $file = $request->file('file');
                $filename = $file->hashName();

                  // File upload location
                  $location = 'storage/contacts/files';

                  // Upload file
                  $file->move($location,$filename);

                  TicketReplysFiles::create([
                    'location' => $location.'/'.$filename,
                    'filename' => $file->getClientOriginalName(),
                    'users_id' => auth()->user()->id,
                    'ticket_id' => $request->ticket_id,
                    'table' => $request->table
                  ]);

                toastr()->success('You uploaded a .' . $file->getClientOriginalExtension() . ' file');
                
                  // Response
                  $data['success'] = 1;
                  $data['message'] = 'Your file was uploaded successfully!';

             }else{
                   // Response
                   $data['success'] = 0;
                   $data['message'] = 'Your file not uploaded.'; 
             }
        }

        return response()->json($data);
    }

    public function replySend($id){
        $reply = TicketReplys::where('id', $id)->first();
        if($reply->table == 'contact_us'){
            $ticket = ContactUs::where('ticket_id', $reply->ticket_id)->first();
            $reply->name = $ticket->full_name;
            $reply->subject = $ticket->department;
        }else{
            $ticket = ContactQuestion::where('ticket_id', $reply->ticket_id)->first();
            $reply->name = $ticket->name;
            $reply->subject = $ticket->subject;
        }
        //send mail
        Mail::to($ticket->email, $reply->name)->send(new TicketReply($reply));

        return redirect()->route('dashboard.contact.message.index');
    }
}
