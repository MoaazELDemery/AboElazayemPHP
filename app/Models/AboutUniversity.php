<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutUniversity extends Model
{
    protected $table = "aboutuniversity";
    protected $guarded = [];
    // public    $timestamps = false;
    public    $primaryKey='id';
    protected $fillable = [
        'name_ar','name_en','description_ar', 'description_en', 
    ];

    
   
}
