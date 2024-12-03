<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class tafser extends Model
{
    protected $fillable = [
        'tafser_ar', 'tafser_en', 'imam_id',
    ];
    public function imams()
    {
        return $this->belongsTo(imams::class,'imam_id');
    }
    public function ayat()
    {
        return $this->belongsToMany(ayat::class,'ayat_tafsers');
    }
}
