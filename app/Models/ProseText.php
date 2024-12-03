<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProseText extends Model
{
    protected $table = "prosetext";
    protected $guarded = [];
    // public    $timestamps = false;
    public    $primaryKey='id';
    protected $fillable = [
        'name_ar','name_en','description_ar', 'description_en', 'library_id',
    ];
    public function ProseLibrary()
    {
        return $this->belongsTo(ProseLibrary::class,'library_id');
    }


    
   
}
