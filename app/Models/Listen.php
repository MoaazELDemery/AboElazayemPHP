<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Listen extends Model
{
    protected $fillable = [
        'name_ar','name_en','audio', 'poem_id','description_ar'
    ];
    
    public function poems()
    {
        return $this->belongsTo(poems::class,'poem_id');
    }
    protected $appends = [
        'audio_path'
    ];

    //audio path =============================================

    public function getaudiopathAttribute()
    {
        return asset('storage/listen/'.$this->audio);
    }

    
    
}
