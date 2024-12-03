<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImamLibrary extends Model
{
    protected $table = "imamlibrary";
    protected $guarded = [];
    // public    $timestamps = false;
    public    $primaryKey='id';
    protected $fillable = [
        'name_ar','name_en',
    ];
    public function imamtext()
    {
        return $this->hasMany(ImamText::class,'library_id');
    }
    public function ImamBook()
    {
        return $this->hasMany(ImamBook::class,'library_id');
    }
}
