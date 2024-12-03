<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NazmyText extends Model
{
    protected $table = "nazmytext";
    protected $guarded = [];
    // public    $timestamps = false;
    public    $primaryKey='id';
    protected $fillable = [
        'name_ar','name_en','description_ar', 'description_en', 'library_id',
    ];
    public function NazmyLibrary()
    {
        return $this->belongsTo(NazmyLibrary::class,'library_id');
    }

}
