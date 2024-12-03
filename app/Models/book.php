<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    protected $fillable = [
        'name_ar' ,'pdf', 
    ];
   
    protected $appends = [
        'pdf_path'
    ];


    //image path =============================================

    public function getpdfPathAttribute()
    {
        return asset('storage/book/pdf/'.$this->pdf);
    }
}
