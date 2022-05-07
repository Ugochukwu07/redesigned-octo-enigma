<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ContactUs extends Model
{
    use HasFactory, Notifiable;

    //define table
    protected $table = 'contact_us';

    //define fillables
    protected $fillable = [
        'full_name', 'email', 'department', 'message', 'phone', 'ticket_id'
    ];
}
