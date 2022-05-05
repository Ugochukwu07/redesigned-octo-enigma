<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactQuestion extends Model
{
    use HasFactory;
    protected $table = 'ticket_question';

    //fillable
    protected $fillable = [
        'full_name', 'email',
        'number', 'subject',
        'message', 'ticket_id'
    ];
}
