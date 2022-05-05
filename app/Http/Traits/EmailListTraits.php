<?php

namespace App\Http\Traits;

use App\Models\EmailList;


trait EmailListTraits
{
    static function addEmail($data){
        $extisingEmail = EmailList::where('email', $data['email'])->first();
        if(!$extisingEmail){
            EmailList::create([
                'full_name' => $data['full_name'],
                'email' => $data['email']
            ]);
        }
    }
}
