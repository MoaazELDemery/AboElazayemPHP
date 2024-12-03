<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DisciplesText extends Model
{
    protected $table = "disciplestext";
    protected $guarded = [];
    // public    $timestamps = false;
    public    $primaryKey='id';
    protected $fillable = [
        'name_ar','name_en','description_ar', 'description_en', 'imamdisciple_id',
    ];
    public function ImamDisciples()
    {
        return $this->belongsTo(ImamDisciples::class,'imamdisciple_id');
    }


    
   
}
