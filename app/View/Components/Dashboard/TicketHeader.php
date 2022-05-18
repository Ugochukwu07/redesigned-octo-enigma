<?php

namespace App\View\Components\Dashboard;

use App\Models\ContactQuestion;
use App\Models\ContactUs;
use Illuminate\View\Component;
use stdClass;

class TicketHeader extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function ticket(){
        $ticket = new stdClass;

        $ticket->questions = ContactQuestion::all()->count();
        $ticket->contact = ContactUs::all()->count();

        $ticket->archives = ContactQuestion::where('archive', 1)->count() + ContactUs::where('archive', 1)->count();
        $ticket->read = ContactQuestion::where('read', 1)->count() + ContactUs::where('read', 1)->count();

        return $ticket;
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.dashboard.ticket-header');
    }
}
