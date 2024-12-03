<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutQuran extends Model
{
    protected $table = "aboutquran";
    protected $guarded = [];
    // public    $timestamps = false;
    public    $primaryKey='id';
    protected $fillable = [
        'nuber_aya','nuber_word','nuber_letter', 'down', 'name_en','position',
    ];
    
 
    
   
}
