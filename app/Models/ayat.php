<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ayat extends Model
{
    protected $fillable = [
        'key_aya', 'sora_id', 'sora_name'
    ];
    public function tafsers()
    {
        return $this->belongsToMany(tafser::class,'ayat_tafsers');
    }
    public function Student_tafser()
    {
        return $this->hasMany(Student_tafser::class);
    }
}
