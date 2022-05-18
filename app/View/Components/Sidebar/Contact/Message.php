<?php

namespace App\View\Components\Sidebar\Contact;

use App\Models\ContactUs;
use Illuminate\View\Component;

class Message extends Component
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

    public function message(){
        return ContactUs::where('read', 0)->count();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.sidebar.contact.message');
    }
}
