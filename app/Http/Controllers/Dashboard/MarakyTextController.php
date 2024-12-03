<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\MarakyText;
class MarakyTextController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Texts = MarakyText::all();
        return view('dashboard.MarakyText.index',compact('Texts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('dashboard.MarakyText.create');
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

        MarakyText ::create([
           
            "name_ar"=>$request->name_ar,
            "name_en"=>$request->name_en,

            "description_ar"=>$request->description_ar,
            "description_en"=>$request->description_en,

           
        ]);
        return redirect()->route('dashboard.MarakyText.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Texts = MarakyText ::find($id);
        return view('dashboard.MarakyText.show',compact('Texts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Texts =MarakyText ::find($id);
       
        return view('dashboard.MarakyText.edit',compact('Texts'));
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
        
        $Texts =MarakyText ::find($id);

        
        $Texts->name_ar = $request->name_ar;
        $Texts->name_en = $request->name_en;
        $Texts->description_ar = $request->description_ar;
        $Texts->description_en = $request->description_en;
        
       
        
        $Texts->update();
        return redirect()->route('dashboard.MarakyText.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Texts =MarakyText ::find($id);
        $Texts->destroy($id);
        return redirect()->route('dashboard.MarakyText.index');
    }
}
