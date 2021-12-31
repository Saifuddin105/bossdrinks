<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'persional_info', 'channel_type','is_retail_store','is_open_store','investment','social_platform','social_info','retail_store_qty', 'number','which_city','why_work','referrence','subscribe','agree_terms','created_at','updated_at'
    ];
}
