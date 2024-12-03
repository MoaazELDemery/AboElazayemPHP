<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\ProseCategorie;
use  App\Models\ProseLibrary;

class ProseCategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {



        $Categories = ProseCategorie::where('library_id',$id)->get();
        return view('dashboard.ProseCategorie.index', compact('Categories','id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $Librarys = ProseLibrary::all();
        return view('dashboard.ProseCategorie.create', compact('Librarys','id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [

            'name_ar' => 'required',

        ]);

        ProseCategorie::create([

            "library_id" => $request->library_id,
            "name_ar" => $request->name_ar,
            "name_en" => $request->name_en,


        ]);
        return redirect()->route('dashboard.ProseCategorie.index',$request->library_id);
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
    public function edit($id,$id_button)
    {
        $Categories = ProseCategorie::find($id);
        $Librarys = ProseLibrary::all();
        return view('dashboard.ProseCategorie.edit', compact('Categories', 'Librarys','id_button'));
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
        $this->validate($request, [
            'name_ar' => 'required',


        ]);

        $Categories = ProseCategorie::find($id);


        $Categories->name_ar = $request->name_ar;
        $Categories->name_en = $request->name_en;
        $Categories->library_id = $request->library_id;

        $Categories->update();
        return redirect()->route('dashboard.ProseCategorie.index',$request->library_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,$id_button)
    {
        $Categories = ProseCategorie::find($id);

        $Categories->destroy($id);
        return redirect()->route('dashboard.ProseCategorie.index',$id_button);
    }
}
