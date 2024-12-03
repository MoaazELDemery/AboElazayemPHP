<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class poems extends Model
{
    protected $fillable = [
        'pname_ar',  'num_peom','occasion_ar', 'Place_ar','date_birth','date_hijri','num_verses',
        'rawy_ar','name_filter','name_sea','name_follow',
    ];
  
    public function poem_rawies()
    {
        return $this->hasMany(poem_rawy::class,'poem_id');
    }
    public function Listen()
    {
        return $this->hasMany(Listen::class,'poem_id');
    }
    public function Explained()
    {
        return $this->hasMany(Explained::class,'poem_id');
    }
}
