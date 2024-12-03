<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NacryText extends Model
{
    protected $table = "nacrytext";
    protected $guarded = [];
    // public    $timestamps = false;
    public    $primaryKey='id';
    protected $fillable = [
        'name_ar','name_en','description_ar', 'description_en', 'library_id',
    ];
    public function NacryLibrary()
    {
        return $this->belongsTo(NacryLibrary::class,'library_id');
    }

}
