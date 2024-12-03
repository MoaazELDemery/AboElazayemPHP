<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProseCategorie extends Model
{
    protected $table = "prosecategorie";
    protected $guarded = [];
    // public    $timestamps = false;
    public    $primaryKey='id';
    
    protected $fillable = [
        'name_ar','name_en','library_id',
    ];

    public function ProseLibrary()
    {
        return $this->belongsTo(ProseLibrary::class,'library_id');
    }
   
    public function ProseBook()
    {
        return $this->hasMany(ProseBook::class);
    }
}
