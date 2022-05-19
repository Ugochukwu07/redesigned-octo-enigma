<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketReplysFiles extends Model
{
    use HasFactory;

    protected $table = 'reply_files';

    //fillable
    protected $fillable = [
        'users_id', 'ticket_id', 'filename', 'location', 'table'
    ];

    
    public function adminUser(){
        return $this->hasOne(User::class, 'id', 'users_id');
    }

    public function client($model){
        return $this->hasOne($model, 'ticket_id', 'ticket_id');
    }
}
