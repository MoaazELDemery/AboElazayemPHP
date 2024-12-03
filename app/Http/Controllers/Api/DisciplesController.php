<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\AboutDisciples;
use  App\Models\ImamDisciples;
use  App\Models\DisciplesText;
use  App\Models\ButtonType;

use  App\Models\PdfButton;
use  App\Models\VideoButton;
use  App\Models\AudioButton;





class DisciplesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Abouts = AboutDisciples::all();
      
      
        return response( $Abouts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pdfLibrary($id)
    {
        $Types =ButtonType::with('PdfButton')->find($id);
       
      
        return $Types['PdfButton'];
    }

    public function AudioLibrary($id)
    {
        // $Types =ButtonType::where('imamdisciples_id',$id)->get();
        // foreach( $Types as  $data)
        // {
        //     $data->AudioButton;
           
        // }
        // return response( $Types);
        $Types =ButtonType::with('AudioButton')->find($id);
       
      
        return $Types['AudioButton'];
    }

    public function videoLibrary($id)
    {
        // $Types =ButtonType::where('imamdisciples_id',$id)->get();
        // foreach( $Types as  $data)
        // {
        //     $data->VideoButton;
           
        // }
        // return $Types;
        $Types =ButtonType::with('VideoButton')->find($id);
       
      
        return $Types['VideoButton'];
    }

  
    public function store($id)
    {
        
        $Texts = DisciplesText::where('imamdisciple_id',$id)->get();

      
        
        return response( $Texts);
    }

    public function Disciplesbtu($id)
    {
        
        $Types = ButtonType::where('imamdisciples_id',$id)->get();

      
        
        return response( $Types);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function imam()
    {
        $Iimam = ImamDisciples::all();
      
      
        return response( $Iimam);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
