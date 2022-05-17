<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use App\Models\EmailList;
use App\Models\NewsLetter;
use Illuminate\Http\Request;
use App\Models\ContactQuestion;
use App\Http\Traits\TicketTraits;
use App\Notifications\AddedEmailToNewsletter;
use Illuminate\Support\Facades\URL;
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
                /* 'g-recaptcha-response' => 'required|recaptchav3:askQuestion,0.7' */
            ]
        );

        if($validate->fails()){
            toastr()->error('Something went wrong');
            //dd($validate->errors());
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

    //addNewEmailToNewsletter
    public function addNewEmailToNewsletter(Request $request){
        $validator = Validator::make(
            $request->all(),
            [
                'news_email' => 'required|email|unique:newsletter_list,email'
            ],
            [
                'news_email.required' => 'Email Is required',
                'news_email.unique' => 'Your email is already in our database',
                'news_email.email' => 'Email filed must be an email'
            ]
            );

        if($validator->fails()){
            toastr()->error($validator->errors()->toArray()["news_email"][0]);
            $backUrl = URL::previous() . "#footer";
            return redirect($backUrl);
        }else{
            //Store in mail list
            NewsLetter::addEmail([
                'full_name' => 'Subcriber',
                'email' => $request->input('news_email')
            ]);

            //add email to database
            $addedEmail = NewsLetter::create([
                'email' => $request->input('news_email')
            ]);

            if($addedEmail){
                //send notification to user
                $newsLetterData = [
                    'body' => 'Your email has been added to our email list for weekly insights. You will be reciving our exsiting updates.',
                    'url' => route('home'),
                    'text' => 'Visit our Website',
                    'thankYou' => 'Thank you for subcribing to our newsletter package, and also for choosing' . config('app.name')
                ];
                $addedEmail->notify(new AddedEmailToNewsletter($newsLetterData));

                //tostr
                toastr()->success('Email has been added to our database');

            }else{
                toastr()->error('Something went wrong, try again later');
            }
            return back();
        }
    }
}
