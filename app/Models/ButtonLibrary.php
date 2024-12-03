<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ButtonLibrary extends Model
{
    protected $table = "buttonlibrary";
    protected $guarded = [];
    // public    $timestamps = false;
    public    $primaryKey='id';

    protected $fillable = [
        'name_ar','name_en','type','library_id',
    ];
    
    protected $appends = [
        'video','audio'
    ];
    
    public function MediaLibrary()
    {
        return $this->belongsTo(MediaLibrary::class,'library_id');
    }

    public function VideoLibrary()
    {
        return $this->hasMany(VideoLibrary::class,'buttonlibrary_id','id');
    }

    public function AudioLibrary()
    {
        return $this->hasMany(AudioLibrary::class,'buttonlibrary_id','id');
    }
    
    ////////appends
    
     public function getVideoAttribute()
    {
        return $this->VideoLibrary()->get();
    }
    public function getAudioAttribute()
    {
        return $this->AudioLibrary()->get();
    }
    
    

   

    


    
   
}
