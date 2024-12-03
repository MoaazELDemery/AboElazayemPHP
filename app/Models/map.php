<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class map extends Model
{
    protected $fillable = [
        'map', 'mobile', 'email','address_ar', 'address_en',
    ];
}
