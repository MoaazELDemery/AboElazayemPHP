<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\MediaLibrary;
use  App\Models\MediaText;
use  App\Models\ButtonLibrary;
use  App\Models\VideoLibrary;
use  App\Models\AudioLibrary;




class LibraryController extends Controller
{
    // ////////////////////////////////
    public function max()
    {
        $Librarys = MediaLibrary::all();
        return view('frontend.max', compact('Librarys'));
    }


    // ////////////////////////////////
    public function maximams($id)
    {
        $Texts=MediaText::find($id);
        $Types = ButtonLibrary::where('library_id',$id)->get();
        return view('frontend.maximams', compact('Types','Texts'));
    }
   

    // ////////////////////////////////
    public function maxaudios($id)
    {
        
        $Audios = AudioLibrary::where('buttonlibrary_id',$id)->get();
        return view('frontend.maxaudios',compact('Audios'));
    }
    // ////////////////////////////////
    public function maxvisuals($id)
    {
        $Videos = VideoLibrary::where('buttonlibrary_id',$id)->get();
        return view('frontend.maxvisuals',compact('Videos'));
    }
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
