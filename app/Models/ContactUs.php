<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    use HasFactory;

    //define table
    protected $table = 'contact_us';

    //define fillables
    protected $fillable = [
        'full_name', 'email', 'subject', 'message', 'phone', 'ticket_id'
    ];
}
