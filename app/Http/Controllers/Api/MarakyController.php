<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\categorie;
use  App\Models\post;
use  App\Models\MarakyText;
class MarakyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         
        $categories =categorie::all();
        foreach($categories as $all)
        {
        $all->post;
        }
        return response( $categories);

        
    }

   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function posts($id)
    {
        $posts =post::find($id);
        return response( $posts);
    }


public function MarakyText()
    {
         
        $Texts =MarakyText::all();
       
        return response( $Texts);

        
    }
    

}
