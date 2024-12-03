<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\EltasofLibrary;

class EltasofLibraryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Librarys = EltasofLibrary::all();
        return view('dashboard.EltasofLibrary.index', compact('Librarys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.EltasofLibrary.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name_ar'=>'required',
           
            

        ]);
       
        EltasofLibrary::create([
           
            "name_ar"=>$request->name_ar,
            "name_en"=>$request->name_en,
           

        ]);
        return redirect()->route('dashboard.EltasofLibrary.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Librarys =EltasofLibrary::find($id);
        return view('dashboard.EltasofLibrary.show',compact('Librarys'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Librarys =EltasofLibrary::find($id);
        return view('dashboard.EltasofLibrary.edit',compact('Librarys'));
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
        $this->validate($request,[
            'name_ar'=>'required',
          
        ]);
        $Librarys =EltasofLibrary::find($id);
       
       
       
        $Librarys->name_ar = $request->name_ar;
        $Librarys->name_en = $request->name_en;
        $Librarys->update();
        return redirect()->route('dashboard.EltasofLibrary.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Librarys =EltasofLibrary::find($id);
        $Librarys->destroy($id);
        return redirect()->route('dashboard.EltasofLibrary.index');
    }
}
