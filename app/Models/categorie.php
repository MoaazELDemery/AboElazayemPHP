<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class categorie extends Model
{
    protected $fillable = [
        'name_ar', 'name_en', 'parent_id','photo',
    ];
    public function parent()
    {
        return $this->belongsTo(categorie::class,'parent_id');
    }
    public function post()
    {
        return $this->hasone(post::class,'category_id');
    }
    protected $appends = [
        'img_path'
    ];

    //image path =============================================

    public function getImgPathAttribute()
    {
        return asset('storage/categorie/'.$this->photo);
    }
    
}
