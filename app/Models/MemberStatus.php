<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberStatus extends Model
{
    use HasFactory;
    protected $table = 'member_status';

    //fillables
    protected $fillable = [
        'name', 'description', 'users_id', 'department'
    ];
}
