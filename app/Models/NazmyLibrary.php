<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NazmyLibrary extends Model
{
    protected $table = "nazmylibrary";
    protected $guarded = [];
    // public    $timestamps = false;
    public    $primaryKey='id';
    protected $fillable = [
        'name_ar','name_en',"type"
    ];

    public function NazmyText()
    {
        return $this->hasMany(NazmyText::class);
    }

    public function NazmyCategorie()
    {
        return $this->hasMany(NazmyCategorie::class);
    }
}
