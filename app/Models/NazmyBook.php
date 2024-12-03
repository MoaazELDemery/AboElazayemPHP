<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NazmyBook extends Model
{
    protected $table = "nazmybook";
    protected $guarded = [];
    // public    $timestamps = false;
    public    $primaryKey='id';

    protected $fillable = [
        'name_ar','name_en', 'photo','pdf', 'nazmycategorie_id',
    ];

    public function NazmyCategorie()
    {
        return $this->belongsTo(NazmyCategorie::class,'nazmycategorie_id');
    }
    
       protected $appends = [
        'img_path','pdf_path'
    ];

    //image path =============================================

    public function getImgPathAttribute()
    {
        return asset('storage/NazmyBook/img/'.$this->photo);
    }

    //image path =============================================

    public function getpdfPathAttribute()
    {
        return asset('storage/NazmyBook/pdf/'.$this->pdf);
    }
    
}
