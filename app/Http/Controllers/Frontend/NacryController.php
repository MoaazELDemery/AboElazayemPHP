<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\NacryLibrary;
use  App\Models\NacryText;



class NacryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Nacry(Request $request)
    {
        $Librarys = NacryLibrary::when($request->search, function ($q) use ($request) {

            return $q->where('name_ar', 'like', '%' . $request->search . '%')
                ->orWhere('name_en', 'like', '%' . $request->search . '%')
                ->orWhere('title_ar', 'like', '%' . $request->search . '%')
                ->orWhere('title_en', 'like', '%' . $request->search . '%');
        })->latest()->paginate(12);
        return view('frontend.Nacry',compact('Librarys'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function TextNacry($id)
    {
        $Librarys = NacryLibrary::find($id);
        $Texts = NacryText::where('library_id',$id)->get();
        return view('frontend.TextNacry',compact('Librarys','Texts'));
    }

     // ////////////////////////////////
     public function Search(Request $request)
     {
        $Librarys = NacryLibrary::when($request->pname_ar, function ($q) use ($request) {
            return $q->where('name_ar', 'like', '%' . $request->name . '%')
                ->orWhere('name_en', 'like', '%' . $request->name . '%');
        })->when($request->num_peom, function ($q) use ($request) {
            return $q->where('num_peom', intVal($request->num_peom));
        })->latest()->paginate(12);
         return view('frontend.Search',compact('Librarys'));
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
