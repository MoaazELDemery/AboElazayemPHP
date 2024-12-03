<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quran extends Model
{
    protected $table = 'quran';

    protected $fillable = [
        'DatabaseID','SuraID','VerseID', 'AyahText','filter'
    ];
}
