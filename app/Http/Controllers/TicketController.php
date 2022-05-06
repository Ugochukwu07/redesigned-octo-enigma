<?php

namespace App\Http\Controllers;

use App\Models\EmailList;
use Illuminate\Http\Request;
use App\Models\ContactQuestion;
use App\Http\Traits\TicketTraits;
use App\Notifications\TicketReceived;
use Illuminate\Support\Facades\Validator;

class TicketController extends Controller
{
    use TicketTraits;
    public function questionSave(Request $request){

        $validate = Validator::make(
            $request->all(),
            [
                'full_name' => 'required|min:6|max:40',
                'email' => 'email|required',
                'number' => 'required',
                'subject' => 'required',
                'terms' => 'accepted',
                'message' => 'required|min:50'
            ]
            );

        if($validate->fails()){
            toastr()->error('Something went wrong');
            $validate->validate();
            return back();
        }else{
            //Store in mail list
            EmailList::addEmail([
                'full_name' => $request->input('full_name'),
                'email' => $request->input('email')
            ]);
            //store ticket
            $publicId = $this->assignPublicId(new ContactQuestion());

            $newQuestion = ContactQuestion::create([
                'ticket_id' => $publicId,
                'full_name' => $request->input('full_name'),
                'email' => $request->input('email'),
                'number' => $request->input('number'),
                'subject' => $request->input('subject'),
                'message' => strip_tags($request->input('message')) 
            ]);

            //alert client
            if($newQuestion){
                toastr()->success('Your ticket has be created successfully');

                //send Notification
                $client = ContactQuestion::where('ticket_id', $publicId)->first();

                $ticketData = [
                    'body' => 'We have recived your ticket',
                    'text' => 'We will get our support team on your request immediatly',
                    'thankYou' => 'Thank you for chosing ' . config('app.name'),
                    'url' => route('home')
                ];

                $client->notify(new TicketReceived($ticketData));

            }else{
                toastr()->error('Something went wrong, try again later');
            }

            return back();
        }
    }
}
