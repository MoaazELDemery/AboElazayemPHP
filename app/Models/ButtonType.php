<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ButtonType extends Model
{
    protected $table = "buttontype";
    protected $guarded = [];
    // public    $timestamps = false;
    public    $primaryKey='id';

    protected $fillable = [
        'name_ar','name_en','type','imamdisciples_id',
    ];
    
    public function ImamDisciples()
    {
        return $this->belongsTo(ImamDisciples::class,'imamdisciples_id');
    }

    public function PdfButton()
    {
        return $this->hasMany(PdfButton::class,'buttontype_id');
    }
    public function VideoButton()
    {
        return $this->hasMany(VideoButton::class,'buttontype_id');
    }
    public function AudioButton()
    {
        return $this->hasMany(AudioButton::class,'buttontype_id');
    }
    public function ButtonType()
    {
        return $this->hasMany(ButtonType::class);
    }

    


    
   
}
