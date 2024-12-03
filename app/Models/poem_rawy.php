<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class poem_rawy extends Model
{
    
    protected $fillable = [
        'right_ar', 'left_ar', 'poem_id','filter_left','filter_right'
    ];


    public function poems()
    {
        return $this->belongsTo(poems::class,'poem_id');
    }

}
