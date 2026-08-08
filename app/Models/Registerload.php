<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registerload extends Model
{
    //

    protected $table = "register_master";

    protected $fillable = [
        'full_name',
        'password',
        'user_name',
        'mobile',
        'role',
        'user_status',
        'otp',
        'user_status'
    ];
}
