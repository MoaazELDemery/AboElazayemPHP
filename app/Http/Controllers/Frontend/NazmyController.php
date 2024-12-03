<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\AboutNazmy;
use  App\Models\NazmyLibrary;
use  App\Models\NazmyText;
use  App\Models\NazmyBook;
use  App\Models\NazmyCategorie;
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
        $Abouts =AboutNazmy::all();
        $Librarys = NazmyLibrary::orderBy('created_at', 'DESC')->get();
        return view('frontend.Nazmybox',compact('Abouts','Librarys'));
        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Nazmygroup(Request $request, $id)
    {
        $Categories = NazmyCategorie::find($id);
       
        $Texts = CategorieText::where('nazmycategorie_id',$id)->get();
        $Books = NazmyBook::where(function ($query) use ($id) {
            $query->where('nazmycategorie_id','=', $id);
        })->when($request->search, function ($q) use ($request) {

            return $q->where('name_ar', 'like', '%' . $request->search . '%')
                ->orWhere('name_en', 'like', '%' . $request->search . '%');
        })->latest()->paginate(9);
        return view('frontend.Nazmygroup',compact('Books','Categories','id','Texts'));
       
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Nazmypdf($id)
    {
        $Books = NazmyBook::find($id);
        return view('frontend.Nazmypdf',compact('Books'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function NazmyText($id)
    {
        $Librarys = NazmyLibrary::find($id);
        $Texts = NazmyText::where('library_id',$id)->latest()->paginate(5);
        return view('frontend.NazmyText',compact('Texts','Librarys'));
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function NazmyCategorie($id)
    {
        $Texts = NazmyText::where('library_id',$id)->get();
        $Categories = NazmyCategorie::where('library_id',$id)->get();
        return view('frontend.NazmyCategorie',compact('Categories','Texts'));
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
