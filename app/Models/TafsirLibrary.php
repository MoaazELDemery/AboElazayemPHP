<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TafsirLibrary extends Model
{
    protected $table = "tafsirlibrary";
    protected $guarded = [];
    // public    $timestamps = false;
    public    $primaryKey='id';
    protected $fillable = [
        'name_ar','name_en','photo',
    ];
  
    public function TafsirBook()
    {
        return $this->hasMany(TafsirBook::class,'library_id');
    }
    
     protected $appends = [
        'img_path'
    ];

    //image path =============================================

    public function getImgPathAttribute()
    {
        return asset('storage/TafsirLibrary/img/'.$this->photo);
    }

   
}
