<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketReplys extends Model
{
    use HasFactory;

    protected $table = 'ticket_replys';

    //fillable
    protected $fillable = [
        'reply', 'users_id', 'ticket_id', 'table'
    ];

    public function adminUser(){
        return $this->hasOne(User::class, 'id', 'users_id');
    }

    public function client($model){
        return $this->hasOne($model, 'ticket_id', 'ticket_id');
    }

    public function files(){
        return $this->hasMany(TicketReplysFiles::class, 'ticket_id', 'ticket_id');
    }
}
