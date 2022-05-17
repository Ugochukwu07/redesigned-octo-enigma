<?php

namespace App\View\Components\Dashboard;

use stdClass;
use App\Models\Members;
use Illuminate\View\Component;

class TeamOverview extends Component
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

    public function team(){
        $team = new stdClass;
        $team->all = Members::where('admin', 0)->count();
        $team->admin = Members::where('admin', 1)->count();

        return $team;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.dashboard.team-overview');
    }
}
