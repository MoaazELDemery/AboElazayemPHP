<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable =[
        'name_ar',  
        'name_en',
        'imam_id',
    ];

    public function Student_tafser()
    {
        return $this->hasMany(Student_tafser::class,'student_id');
    }
    
    public function imams()
    {
        return $this->belongsTo(imams::class,'imam_id');
    }

    
}
