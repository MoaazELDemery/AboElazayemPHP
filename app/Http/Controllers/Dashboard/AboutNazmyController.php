<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\AboutNazmy;

class AboutNazmyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Abouts =AboutNazmy::all();
        return view('dashboard.AboutNazmy.index',compact('Abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.AboutNazmy.create');
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
            'description_ar'=>'required',
          

        ]);

        AboutNazmy::create([
           
            "name_ar"=>$request->name_ar,
            "name_en"=>$request->name_en,
            "description_ar"=>$request->description_ar,
            "description_en"=>$request->description_en,
        ]);
        return redirect()->route('dashboard.AboutNazmy.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Abouts =AboutNazmy::find($id);
        return view('dashboard.AboutNazmy.show',compact('Abouts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Abouts =AboutNazmy::find($id);
        return view('dashboard.AboutNazmy.edit',compact('Abouts'));
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
            'description_ar'=>'required',
          

        ]);
        
        $Abouts =AboutNazmy::find($id);

        
        $Abouts->name_ar = $request->name_ar;
        $Abouts->name_en = $request->name_en;
        $Abouts->description_ar = $request->description_ar;
        $Abouts->description_en = $request->description_en;
        $Abouts->update();
        return redirect()->route('dashboard.AboutNazmy.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Abouts =AboutNazmy::find($id);
        $Abouts->destroy($id);
        return redirect()->route('dashboard.AboutNazmy.index');
    }
}
