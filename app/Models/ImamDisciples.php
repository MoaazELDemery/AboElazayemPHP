<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImamDisciples extends Model
{
    protected $table = "imamdisciples";
    protected $guarded = [];
    // public    $timestamps = false;
    public    $primaryKey='id';
    
    protected $fillable = [
        'name_ar','name_en','photo',
    ];

    public function DisciplesText()
    {
        return $this->hasMany(DisciplesText::class,'imamdisciple_id');
    }

    public function ButtonType()
    {
        return $this->hasMany(ButtonType::class,'imamdisciples_id');
    }
    
    protected $appends = [
        'img_path'
    ];

    //image path =============================================

    public function getImgPathAttribute()
    {
        return asset('storage/ImamDisciples/img/'.$this->photo);
    }
    
   
}
