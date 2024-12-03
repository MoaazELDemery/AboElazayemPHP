<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\categorie;
use  App\Models\post;
use  App\Models\Library;
use  App\Models\MarakyText;


class marakyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories =categorie::where(function ($query) {
            $query->where('parent_id', '=', 0 );         
        })->get();

        $Texts = MarakyText::all();
        return view('frontend.maraky',compact('categories','Texts'));
    }
    // ///////////////////////////////////////////
    public function sharia(Request $request,$id)
    {
        // $books =book::when($request->search, function ($q) use($request) {

        //     return $q->where('name_ar','like','%' . $request->search . '%')
        //     ->orWhere('name_en','like','%' . $request->search . '%');
        // })->latest()->paginate(12);


        $category =categorie::find($id);
        $posts = $category->post;
        
        $chiled_categories = categorie::where('parent_id',$id)
        ->when($request->search, function ($q) use($request) {

            return $q->where('name_ar','like','%' . $request->search . '%')
            ->orWhere('name_en','like','%' . $request->search . '%');
        })->get();
        return view('frontend.sharia',compact('posts','chiled_categories'));
    }
    // //////////////////////////////////////////////
    // public function truth()
    // {
    //     return view('frontend.truth');
    // }
    // ///////////////////////////////////////////////
    // public function method()
    // {
    //     return view('frontend.method');
    // }
    // ///////////////////////////////////////////////
    // public function manhg()
    // {
    //     return view('frontend.manhg');
    // }

    public function line(Request $request)
    {
        $Librarys =Library::when($request->search, function ($q) use($request) {

            return $q->where('name_ar','like','%' . $request->search . '%')
            ->orWhere('name_en','like','%' . $request->search . '%');
        })->paginate(12);
      

       
       
        return view('frontend.line',compact('Librarys'));
    }
   
  
}
