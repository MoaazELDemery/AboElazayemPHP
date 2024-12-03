<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use  App\Models\MediaLibrary;
use  App\Models\MediaText;
use  App\Models\VideoLibrary;
use  App\Models\AudioLibrary;
use  App\Models\ButtonLibrary;



class VisualsController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Librarys = MediaLibrary::all();
        
         foreach( $Librarys as  $data)
        {
            $data->MediaText;
            $data->ButtonLibrary;
       
           
        }
      
        return response( $Librarys);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function videoeMAX($id)
    {
        $Librarys =MediaLibrary::where('id',$id)->get();
        foreach( $Librarys as  $data)
        {
            $data->MediaText;
            $data->ButtonLibrary;
            $data->VideoLibrary;
           
        }
       
      
        return response( $Librarys);
    }

    public function AudioMAx($id)
    {
        $Librarys =MediaLibrary::where('id',$id)->get();
        foreach( $Librarys as  $data)
        {
            $data->MediaText;
            $data->AudioLibrary;
           
        }
       
      
        return response( $Librarys);
    }
   

   
}
