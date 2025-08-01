<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'name',
        'email',
        'industry',
        'phone_number',
        'company_name',
        'message'
    ];
}
