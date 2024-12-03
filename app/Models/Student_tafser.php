<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student_tafser extends Model
{
    protected $fillable = [
        'description_ar', 'description_en', 'student_id','type_id','ayat_id'
    ];

    public function student()
    {
        return $this->belongsTo(Student::class,'student_id');
    }

    public function type()
    {
        return $this->belongsTo(Type::class,'type_id');
    }
    
    public function ayat()
    {
        return $this->belongsTo(ayat::class,'ayat_id');
    }
}
