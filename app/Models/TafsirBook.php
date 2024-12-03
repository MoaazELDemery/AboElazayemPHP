<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TafsirBook extends Model
{
    protected $table = "tafsirbook";
    protected $guarded = [];
    // public    $timestamps = false;
    public    $primaryKey='id';
    protected $fillable = [
        'name_ar','name_en','pdf','library_id',
    ];
    public function TafsirLibrary()
    {
        return $this->belongsTo(TafsirLibrary::class,'library_id');
    }
    

    protected $appends = [
        'pdf_path'
    ];

   

    //image path =============================================

    public function getpdfPathAttribute()
    {
        return asset('storage/TafsirBook/pdf/'.$this->pdf);
    }
    
}
