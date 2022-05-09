<?php

namespace App\Models;

use App\Http\Traits\EmailListTraits;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class NewsLetter extends Model
{
    use HasFactory, EmailListTraits, Notifiable;

    protected $table = 'newsletter_list';

    protected $fillable = [
        'email'
    ];
}
