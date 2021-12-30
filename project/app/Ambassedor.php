<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ambassedor extends Model
{
    protected $fillable = [
        'email', 'first_name', 'last_name', 'description','instagram','website','facebook','youtube','twitter','payple_email','agree_terms','agree_referral','agree_post','created_at','updated_at'
    ];
}
