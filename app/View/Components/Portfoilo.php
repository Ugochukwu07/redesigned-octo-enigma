<?php

namespace App\View\Components;

use App\Models\Portfolio;
use Illuminate\View\Component;

class Portfoilo extends Component
{
    public $departmentId;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($departmentId)
    {
        $this->departmentId = $departmentId;
    }

    public function portfolios(){
        return Portfolio::where('department_id', $this->departmentId)->orderBy('created_at', 'desc')->paginate(10);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.portfoilo');
    }
}
