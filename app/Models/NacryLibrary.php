<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NacryLibrary extends Model
{
    protected $table = "nacrylibrary";
    protected $guarded = [];
    // public    $timestamps = false;
    public    $primaryKey='id';
    protected $fillable = [
        'name_ar','name_en','title_ar','title_en',
    ];

    public function NacryText()
    {
        return $this->hasMany(NacryText::class);
    }

   
}
