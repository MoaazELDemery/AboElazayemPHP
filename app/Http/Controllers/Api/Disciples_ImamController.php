<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\Pupil_one;
use  App\Models\Pupil_two;

class Disciples_ImamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        
        

        $Pupil_ones =Pupil_one::get()->first();
        $Pupil_twos =Pupil_two::all();
  

        $data["Pupil-1"]=$Pupil_ones;
        $data["Pupil-2"]=$Pupil_twos;
        
        return response( $data);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function Pupil_twos()
    {
        $Pupil_twos =Pupil_two::all();
        return response( $Pupil_twos);
    }

    

    
}
