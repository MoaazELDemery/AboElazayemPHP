<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\AboutProse;
use  App\Models\ProseLibrary;
use  App\Models\ProseBook;
use  App\Models\ProseCategorie;
use  App\Models\ProseText;

class ProseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Abouts = AboutProse::all();
    
        $Librarys = ProseLibrary::all();

        $data['abouts']=$Abouts;
        $data['librarys']=$Librarys;
      
        return response( $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Categories($id)
    {
        $Categories = ProseCategorie::where('library_id',$id)->get();
        $Texts =ProseText::where('library_id',$id)->get();

        $data['categories']=$Categories;
        $data['texts']=$Texts;
      
        return response( $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function ProseBook($id)
    {
        $Books = ProseBook::where('prosecategorie_id',$id)->get();
        return response( $Books);
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
