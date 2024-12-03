<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use  App\Models\card;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function card()
    {
       
        $cards =card::all();
        return response( $cards);
    }
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
  
      
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
 
}
