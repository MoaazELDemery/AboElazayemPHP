<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EltasofText extends Model
{
    protected $table = "eltasoftext";
    protected $guarded = [];
    // public    $timestamps = false;
    public    $primaryKey='id';
    protected $fillable = [
        'name_ar','name_en','description_ar', 'description_en', 'library_id',
    ];
    public function EltasofLibrary()
    {
        return $this->belongsTo(EltasofLibrary::class,'library_id');
    }


    
   
}
