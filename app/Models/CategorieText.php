<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategorieText extends Model
{
    protected $table = "categorietext";
    protected $guarded = [];
    // public    $timestamps = false;
    public    $primaryKey='id';
    protected $fillable = [
        'name_ar','name_en','description_ar', 'description_en', 'nazmycategorie_id',
    ];
    
    public function NazmyCategorie()
    {
        return $this->belongsTo(NazmyCategorie::class,'nazmycategorie_id');
    }


    
   
}
