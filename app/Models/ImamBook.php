<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImamBook extends Model
{
    protected $table = "imambook";
    protected $guarded = [];
    // public    $timestamps = false;
    public    $primaryKey='id';
    protected $fillable = [
         'name_ar','name_en', 'photo','pdf', 'library_id',
    ];
     public function ImamLibrary()
    {
        return $this->belongsTo(ImamLibrary::class,'library_id');
    }

    protected $appends = [
        'img_path','pdf_path'
    ];

    //image path =============================================

    public function getImgPathAttribute()
    {
        return asset('storage/ImamBook/img/'.$this->photo);
    }

    //image path =============================================

    public function getpdfPathAttribute()
    {
        return asset('storage/ImamBook/pdf/'.$this->pdf);
    }
    
}
