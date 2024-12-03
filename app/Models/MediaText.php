<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MediaText extends Model
{
    protected $table = "mediatext";
    protected $guarded = [];
    // public    $timestamps = false;
    public    $primaryKey='id';
    protected $fillable = [
        'name_ar','name_en','description_ar', 'description_en', 'library_id',
    ];


    public function MediaLibrary()
    {
        return $this->belongsTo(MediaLibrary::class,'library_id');
    }

}
