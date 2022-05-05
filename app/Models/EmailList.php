<?php

namespace App\Models;

use App\Http\Traits\EmailListTraits;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EmailList extends Model
{
    use HasFactory, EmailListTraits;
    protected $table = 'email_list';

    //fillable
    protected $fillable = [
        'full_name', 'email'
    ];
}
