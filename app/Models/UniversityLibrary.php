<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UniversityLibrary extends Model
{
    protected $table = "universitylibrary";
    protected $guarded = [];
    // public    $timestamps = false;
    public    $primaryKey='id';
    protected $fillable = [
        'name_ar','name_en',
    ];
    public function UniversityText()
    {
        return $this->hasMany(UniversityText::class,'library_id');
    }
    public function UniversityBook()
    {
        return $this->hasMany(UniversityBook::class,'library_id');
    }
}
