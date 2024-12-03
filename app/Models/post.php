<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $fillable = [
        'title_ar', 'title_en', 'name_ar','name_en','description_ar', 'description_en', 'photo','category_id',
    ];
    public function categorie()
    {
        return $this->belongsTo(categorie::class,'category_id');
    }
    protected $appends = [
        'img_path'
    ];

    //image path =============================================

    public function getImgPathAttribute()
    {
        return asset('storage/post/'.$this->photo);
    }
    
}
