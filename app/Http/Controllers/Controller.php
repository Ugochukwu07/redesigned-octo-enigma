<?php

namespace App\Http\Controllers;

use App\Http\Traits\TicketTraits;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests, TicketTraits;

    public function ticketData(){ 
        return [
            'body' => 'We have recived your ticket, We will get our support team on your request immediatly',
            'text' => 'See Portfolio',
            'thankYou' => 'Thank you for chosing ' . config('app.name'),
            'url' => route('portfolio')
        ];
    }
}
