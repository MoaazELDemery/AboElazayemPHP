<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use  App\Models\AboutEltasof;
use  App\Models\EltasofLibrary;

use  App\Models\EltasofBook;
use  App\Models\EltasofText;



class EltasofController extends Controller
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function AboutEltasof()
    {
        $Abouts =AboutEltasof::all();
        $Librarys =EltasofLibrary::all();

        $data['abouts']=$Abouts;
        $data['librarys']=$Librarys;
      
        return response( $data);
    }


    public function book($id)
    {
        $Texts = EltasofText::where('library_id',$id)->get();
        $Books =EltasofBook::where('library_id',$id)->get();
        
        $data['text']=$Texts;
        $data['book']=$Books;
      
        return response( $data);
        
    }

    
}
