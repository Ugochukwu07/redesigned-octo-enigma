<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    use HasFactory;

    protected $table = 'members';

    //fillable
    protected $fillable = [
        'name', 'email', 'facebook_link', 'github_link',
        'twitter_link', 'linkedin_link', 'description',
        'member_status_id', 'users_id', 'image'
    ];

    public function stack(){
        return $this->hasOne(MemberStatus::class, 'id', 'member_status_id');
    }
}
