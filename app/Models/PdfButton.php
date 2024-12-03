<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PdfButton extends Model
{
    protected $table = "pdfbutton";
    protected $guarded = [];
    // public    $timestamps = false;
    public    $primaryKey='id';
    protected $fillable = [
        'name_ar','name_en','pdf','photo', 'buttontype_id',
    ];

    
    public function ButtonType()
    {
        return $this->belongsTo(ButtonType::class,'buttontype_id');
    }


  protected $appends = [
        'img_path','pdf_path'
    ];

    //image path =============================================

    public function getImgPathAttribute()
    {
        return asset('storage/PdfButton/img/'.$this->photo);
    }

    //image path =============================================

    public function getpdfPathAttribute()
    {
        return asset('storage/PdfButton/pdf/'.$this->pdf);
    }
}
