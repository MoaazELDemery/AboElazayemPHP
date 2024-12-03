<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $fillable = [
        'name_ar', 'name_en',
    ];
    public function Student_tafser()
    {
        return $this->hasMany(Student_tafser::class);
    }
}
