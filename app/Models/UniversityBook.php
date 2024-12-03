<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UniversityBook extends Model
{
    protected $table = "universitybook";
    protected $guarded = [];
    // public    $timestamps = false;
    public    $primaryKey='id';
    protected $fillable = [
         'name_ar','name_en', 'photo','pdf', 'library_id',
    ];
   public function UniversityLibrary()
    {
        return $this->belongsTo(UniversityLibrary::class,'library_id');
    }

    
    protected $appends = [
        'img_path','pdf_path'
    ];

    //image path =============================================

    public function getImgPathAttribute()
    {
        return asset('storage/UniversityBook/img/'.$this->photo);
    }

    //image path =============================================

    public function getpdfPathAttribute()
    {
        return asset('storage/UniversityBook/pdf/'.$this->pdf);
    }
    
}
