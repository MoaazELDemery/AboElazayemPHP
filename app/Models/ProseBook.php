<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProseBook extends Model
{
    protected $table = "prosebook";
    protected $guarded = [];
    // public    $timestamps = false;
    public    $primaryKey='id';
    protected $fillable = [
         'name_ar','name_en', 'photo','pdf','prosecategorie_id',
    ];
   public function ProseCategorie()
    {
        return $this->belongsTo(ProseCategorie::class,'prosecategorie_id');
    }


    protected $appends = [
        'img_path','pdf_path'
    ];

    //image path =============================================

    public function getImgPathAttribute()
    {
        return asset('storage/ProseBook/img/'.$this->photo);
    }

    //image path =============================================

    public function getpdfPathAttribute()
    {
        return asset('storage/ProseBook/pdf/'.$this->pdf);
    }
}
