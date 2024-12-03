<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Explained extends Model
{
    protected $fillable = [
        'name_ar','name_en','description_ar', 'description_en', 'poem_id',
    ];
    public function poems()
    {
        return $this->belongsTo(poems::class,'poem_id');
    }

}
