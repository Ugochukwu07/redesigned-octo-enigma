<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $table = 'departments';

    protected $fillable = [
        'name', 'users_id', 'description'
    ];

    public function user(){
        return $this->hasOne(Users::class, 'id', 'users_id');
    }
}
