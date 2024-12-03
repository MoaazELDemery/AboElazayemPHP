<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\madi_two;
use  App\Models\madi;

class Imam_MadiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $madis =madi::get()->first();
       
        $madi_twos =madi_two::all();
  

        $data["imam"]=$madis;
        $data["madi_twos"]=$madi_twos;
        
        return response( $data);
        
    }

   

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function madi_twos()
    {
        $madi_twos =madi_two::all();
        return response( $madi_twos);
    }

  
}
