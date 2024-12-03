<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\Sheikh_one;
use  App\Models\sheikh;
use  App\Models\audios;
use  App\Models\Card_pupil;
use  App\Models\Sheikh_text;

class AudiosController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sheikhs =sheikh::all();
        foreach( $sheikhs as $sheikh)
            {
                $sheikh->Sheikh_one;
                $sheikh->audios;
                $sheikh->Sheikh_text;
                $sheikh->Visual;
                $sheikh->Card_pupil;
            }
        return response( $sheikhs);
    }


    public function show($id)
    {
        $sheikhs =sheikh::where('id',$id)->first();
        $sheikhs->Sheikh_one;
        $sheikhs->audios;
        $sheikhs->Sheikh_text;
        $sheikhs->Visual;
        $sheikhs->Card_pupil;

        return response( $sheikhs);
    }

   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function Sheikh_ones($id)
    {
        $Sheikh_ones = Sheikh_one::find($id);
        return response( $Sheikh_ones);
    }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function Audios($id)
    {
        $Audios = audios::find($id);
        return response( $Audios);
    }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function Card_pupils($id)
    {
        $Card_pupils =Card_pupil::find($id);
        return response( $Card_pupils);
    }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function Sheikh_texts($id)
    {
        $Sheikh_texts =Sheikh_text::find($id);
        return response( $Sheikh_texts);
    }

}
