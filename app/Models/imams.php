<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class imams extends Model
{
    protected $fillable = [
        'name_ar', 'name_en', 
    ];
    public function tafser()
    {
        return $this->hasMany(tafser::class);
    }
    public function Student()
    {
        return $this->hasMany(Student::class);
    }
}
