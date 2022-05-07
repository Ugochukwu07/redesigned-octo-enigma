<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use App\Models\EmailList;
use Illuminate\Http\Request;
use App\Models\ContactQuestion;
use App\Http\Traits\TicketTraits;
use App\Notifications\TicketReceived;
use Illuminate\Support\Facades\Validator;
use Lunaweb\RecaptchaV3\Facades\RecaptchaV3;

class TicketController extends Controller
{

    
    public function questionSave(Request $request){

        $validate = Validator::make(
            $request->all(),
            [
                'full_name' => 'required|min:6|max:40',
                'email' => 'email|required',
                'number' => 'required',
                'subject' => 'required',
                'terms' => 'accepted',
                'message' => 'required|min:50',
                'g-recaptcha-response' => 'required|recaptchav3:askQuestion,0.7'
            ]
        );

        if($validate->fails()){
            toastr()->error('Something went wrong');
            dd($validate->errors());
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

                $client->notify(new TicketReceived($this->ticketData()));

            }else{
                toastr()->error('Something went wrong, try again later');
            }

            return back();
        }
    }

    //Contact Us
    public function contactUsSave(Request $request){
        $validate = Validator::make(
            $request->all(),
            [
                'full_name' => 'required|min:6|max:40',
                'email' => 'email|required',
                'phone' => 'required',
                'department' => 'required',
                'message' => 'required|min:50'
                /*
                * i am unable to implimemt it the secound time
                * 'g-recaptcha-response' => 'required|recaptchav3:contactUs,0.5'
                */
            ]
        );

        if($validate->fails()){
            toastr()->error('Something went wrong');
            dd($validate->errors());
            $validate->validate();
            return back();
        }else{
            //Store in mail list
            EmailList::addEmail([
                'full_name' => $request->input('full_name'),
                'email' => $request->input('email')
            ]);
            //store ticket
            $publicId = $this->assignPublicId(new ContactUs());

            $newTicket = ContactUs::create([
                'ticket_id' => $publicId,
                'full_name' => $request->input('full_name'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'department' => $request->input('department'),
                'message' => strip_tags($request->input('message')) 
            ]);

            //alert client
            if($newTicket){
                toastr()->success('Your ticket has be created successfully');

                //send Notification
                $client = ContactUs::where('ticket_id', $publicId)->first();

                $client->notify(new TicketReceived($this->ticketData()));

            }else{
                toastr()->error('Something went wrong, try again later');
            }

            return back();
        }
    }
}
