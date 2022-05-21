<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected $table = 'portfolios';

    protected $fillable = [
        'name', 'file', 
        'users_id', 'department_id', 
        'tags', 'description'
    ];

    
    public function user(){
        return $this->hasOne(Users::class, 'id', 'users_id');
    }

    public function department(){
        return $this->hasOne(Department::class, 'id', 'department_id');
    }
}
