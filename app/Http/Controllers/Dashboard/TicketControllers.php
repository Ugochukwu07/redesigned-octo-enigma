<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\ContactQuestion;
use App\Models\ContactUs;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

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

        return;
    }

    public function deleteTickets($ticket_id){
        $ticket = ContactQuestion::where('ticket_id', $ticket_id)->first();

        $ticket->delete();
        toastr()->success('Question Ticket Deleted');
        return back();
    }

    public function replyMessage($ticket_id){
        $ticket = ContactUs::where('ticket_id', $ticket_id)->first();

        return;
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
}
