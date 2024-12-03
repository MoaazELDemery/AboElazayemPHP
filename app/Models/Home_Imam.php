<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Home_Imam extends Model
{
    protected $fillable = [
        'title_ar', 'title_en', 'name_ar','name_en','description_ar', 'description_en', 
    ];
}
