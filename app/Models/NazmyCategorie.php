<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NazmyCategorie extends Model
{
    protected $table = "nazmycategorie";
    protected $guarded = [];
    // public    $timestamps = false;
    public    $primaryKey='id';
    protected $fillable = [
        'name_ar','name_en', 'library_id',
    ];


    public function NazmyLibrary()
    {
        return $this->belongsTo(NazmyLibrary::class,'library_id');
    }

    public function NazmyBook()
    {
        return $this->hasMany(NazmyBook::class,'nazmycategorie_id','nazmycategorie_id');
    }
    
    public function CategorieText()
    {
        return $this->hasMany(CategorieText::class,'nazmycategorie_id');
    }

    

}
