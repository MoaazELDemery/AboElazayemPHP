<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\AboutProse;
use  App\Models\ProseLibrary;
use  App\Models\ProseText;
use  App\Models\ProseBook;
use  App\Models\ProseCategorie;


class ProseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Abouts =AboutProse::all();
        $Librarys = ProseLibrary::all();
        return view('frontend.prosebox',compact('Abouts','Librarys'));
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function prosegroup(Request $request, $id)
    {
      
       $ProseCategorie = ProseCategorie::find($id);

        $Books = ProseBook::where(function ($query) use ($id) {
            $query->where('prosecategorie_id','=', $id);
        })->when($request->search, function ($q) use ($request) {

            return $q->where('name_ar', 'like', '%' . $request->search . '%')
                ->orWhere('name_en', 'like', '%' . $request->search . '%');
        })->latest()->paginate(9);
        return view('frontend.prosegroup',compact('Books','id','ProseCategorie'));
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function prosepdf($id)
    {
        $Books = ProseBook::find($id);
        return view('frontend.prosepdf',compact('Books'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ProseCategorie($id)
    {
        $Texts =ProseText::where('library_id',$id)->get();
        $Categories = ProseCategorie::where('library_id',$id)->get();
        return view('frontend.ProseCategorie',compact('Categories','Texts'));
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
