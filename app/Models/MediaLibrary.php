<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MediaLibrary extends Model
{
    protected $table = "medialibrary";
    protected $guarded = [];
    // public    $timestamps = false;
    public    $primaryKey='id';
    protected $fillable = [
        'name_ar','name_en','photo',
    ];
  
    public function MediaText()
    {
        return $this->hasMany(MediaText::class,'library_id');
    }
    public function ButtonLibrary()
    {
        return $this->hasMany(ButtonLibrary::class,'library_id');
    }
}
