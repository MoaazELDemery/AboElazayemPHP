<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VideoButton extends Model
{
    protected $table = "videobutton";
    protected $guarded = [];
    // public    $timestamps = false;
    public    $primaryKey='id';
    protected $fillable = [
        'name_ar','name_en','description_ar', 'description_en', 'buttontype_id','video',
    ];

    
    public function ButtonType()
    {
        return $this->belongsTo(ButtonType::class,'buttontype_id');
    }

}
