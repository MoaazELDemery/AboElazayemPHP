<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use  App\Models\card;

use  App\Models\book;

use  App\Models\map;


use  App\Models\Home_Imam;


use  App\Models\Home_Quran;


use Illuminate\Support\Facades\Redirect;





class frontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     
        $Imams = Home_Imam::all();
 
       
        $Qurans = Home_Quran::all();
       
        $cards = card::all();
        return view('frontend.index', compact('Imams','Qurans','cards'));
    }
    // ////////////////////////////////

    
  
    public function contact()
    {
        $maps = map::all();
        return view('frontend.contact', compact('maps'));
    }
    // ////////////////////////////////
  
   
   
   
    
  
 // ////////////////////////////////
    public function magazine()
    {

        return view('frontend.magazine');
    }



    // ////////////////////////////////
    public function conversations()
    {

        $Books = book::all();
        return view('frontend.conversations', compact('Books'));
    }
    // ////////////////////////////////
    public function conversationspdf($id)
    {
        $Books = book::find($id);
        return view('frontend.conversationspdf', compact('Books'));
    }

 


    
     
   
    
   
   
   
    

    
    


    

    
}
