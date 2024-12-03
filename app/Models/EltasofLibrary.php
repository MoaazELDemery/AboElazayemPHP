<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EltasofLibrary extends Model
{
    protected $table = "eltasoflibrary";
    protected $guarded = [];
    // public    $timestamps = false;
    public    $primaryKey='id';
    protected $fillable = [
        'name_ar','name_en',
    ];
    public function EltasofText()
    {
        return $this->hasMany(EltasofText::class);
    }
    public function EltasofBook()
    {
        return $this->hasMany(EltasofBook::class);
    }
}
