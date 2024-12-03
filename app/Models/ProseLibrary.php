<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProseLibrary extends Model
{
    protected $table = "proselibrary";
    protected $guarded = [];
    // public    $timestamps = false;
    public    $primaryKey='id';
    protected $fillable = [
        'name_ar','name_en',
    ];
    public function ProseText()
    {
        return $this->hasMany(ProseText::class);
    }
    public function ProseCategorie()
    {
        return $this->hasMany(ProseCategorie::class);
    }
}
