<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\AboutNazmy;
use  App\Models\NazmyBook;
use  App\Models\NazmyCategorie;
use  App\Models\NazmyText;
use  App\Models\NazmyLibrary;
use  App\Models\CategorieText;

class NazmyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Abouts = AboutNazmy::all();
    
        $Librarys = NazmyLibrary::all();

        $data['abouts']=$Abouts;
        $data['librarys']=$Librarys;
      
        return response( $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $Categories = NazmyCategorie::where('library_id',$id)->get();
        $Texts =NazmyText::where('library_id',$id)->get();
        
        $data['categories']=$Categories;
        $data['texts']=$Texts;
      
        return response( $data);
        
    }

    public function book($id)
    {
        $Texts = categorietext::where('nazmycategorie_id',$id)->get();
        $Books =NazmyBook::where('nazmycategorie_id',$id)->get();
        
        $data['text']=$Texts;
        $data['book']=$Books;
      
        return response( $data);
        
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
