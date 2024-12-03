<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\book;
use  App\Models\Library;

class LibraryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books =book::all();
        return response( $books);
    }

  

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function book($id)
    {
         $books =book::find($id); 
        return response( $books);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Library()
    {
        $Librarys =Library::all();
        foreach( $Librarys as $Library)
        {
        $Library->book;
       
        }
        return response( $Librarys);
    }

   
}
