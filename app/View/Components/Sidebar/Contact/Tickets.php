<?php

namespace App\View\Components\Sidebar\Contact;

use App\Models\ContactQuestion;
use Illuminate\View\Component;

class Tickets extends Component
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

    public function question(){
        return ContactQuestion::where('read', 0)->count();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.sidebar.contact.tickets');
    }
}
