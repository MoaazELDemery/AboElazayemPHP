<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EltasofBook extends Model
{
    protected $table = "eltasofbook";
    protected $guarded = [];
    // public    $timestamps = false;
    public    $primaryKey='id';
    protected $fillable = [
        'name_ar','name_en', 'photo','pdf', 'library_id',
    ];
    public function EltasofLibrary()
    {
        return $this->belongsTo(EltasofLibrary::class,'library_id');
    }
    
      protected $appends = [
        'img_path','pdf_path'
    ];

     //image path =============================================

     public function getImgPathAttribute()
     {
         return asset('storage/EltasofBook/img/'.$this->photo);
     }
 
     //image path =============================================
 
     public function getpdfPathAttribute()
     {
         return asset('storage/EltasofBook/pdf/'.$this->pdf);
     }
    
}
