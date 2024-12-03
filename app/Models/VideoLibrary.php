<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VideoLibrary extends Model
{
    protected $table = "videolibrary";
    protected $guarded = [];
    // public    $timestamps = false;
    public    $primaryKey='id';
    protected $fillable = [
        'name_ar','name_en','description_ar', 'description_en', 'buttonlibrary_id','video',
    ];

    
    public function ButtonLibrary()
    {
        return $this->belongsTo(ButtonLibrary::class,'buttonlibrary_id');
    }

}
