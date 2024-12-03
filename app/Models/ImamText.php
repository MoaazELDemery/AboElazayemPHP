<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImamText extends Model
{
    protected $table = "imamtext";
    protected $guarded = [];
    // public    $timestamps = false;
    public    $primaryKey='id';
    protected $fillable = [
        'name_ar','name_en','description_ar', 'description_en', 'library_id',
    ];
    
    public function ImamLibrary()
    {
        return $this->belongsTo(ImamLibrary::class,'library_id');
    }


    
   
}
