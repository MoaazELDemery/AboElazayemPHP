<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UniversityText extends Model
{
    protected $table = "universitytext";
    protected $guarded = [];
    // public    $timestamps = false;
    public    $primaryKey='id';
    protected $fillable = [
        'name_ar','name_en','description_ar', 'description_en', 'library_id',
    ];
    public function UniversityLibrary()
    {
        return $this->belongsTo(UniversityLibrary::class,'library_id');
    }


    
   
}
