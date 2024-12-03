<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AyatTafser extends Model
{
    protected $table = 'ayat_tafsers';
    protected $fillable = [
        'ayat_id', 'tafser_id', 
    ];
    
}
