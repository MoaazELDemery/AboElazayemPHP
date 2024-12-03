<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AudioLibrary extends Model
{
    protected $table = "audiolibrary";
    protected $guarded = [];
    // public    $timestamps = false;
    public    $primaryKey='id';
    protected $fillable = [
        'name_ar','name_en','description_ar', 'description_en', 'buttonlibrary_id','audio',
    ];
     protected $appends = [
        'audio_path'
    ];

    
    
    public function ButtonLibrary()
    {
        return $this->belongsTo(ButtonLibrary::class,'buttonlibrary_id');
    }

   public function getAudioPathAttribute()
    {
        return asset('storage/AudioLibrary/'.$this->audio);
    }

}
