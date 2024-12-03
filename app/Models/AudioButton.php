<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AudioButton extends Model
{
    protected $table = "audiobutton";
    protected $guarded = [];
    // public    $timestamps = false;
    public    $primaryKey='id';
    protected $fillable = [
        'name_ar','name_en','description_ar', 'description_en', 'buttontype_id','audio',
    ];

    
    
    public function ButtonType()
    {
        return $this->belongsTo(ButtonType::class,'buttontype_id');
    }
    
     protected $appends = [
        'audio_path'
    ];

    //audio path =============================================

    public function getaudiopathAttribute()
    {
        return asset('storage/AudioButton/'.$this->audio);
    }

}
