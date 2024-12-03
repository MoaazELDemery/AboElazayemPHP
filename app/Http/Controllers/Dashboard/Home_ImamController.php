<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\Home_Imam;
class Home_ImamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Imams = Home_Imam::all();
        return view('dashboard.home_imam.index',compact('Imams'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Imams = Home_Imam::all();
        return view('dashboard.home_imam.create',compact('Imams',));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
      
        Home_Imam::create([
            "title_ar"=>$request->title_ar,
            "title_en"=>$request->title_en,
            "name_ar"=>$request->name_ar,
            "name_en"=>$request->name_en,
            "description_ar"=>$request->description_ar,
            "description_en"=>$request->description_en,
           
            
        ]);

        
        
       
        return redirect()->route('dashboard.home_imam.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Imams =Home_Imam::find($id);
        return view('dashboard.home_imam.show',compact('Imams'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Imams =Home_Imam::find($id);
        
        return view('dashboard.home_imam.edit',compact('Imams'));
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
            'title_ar'=>'required',
            'name_ar'=>'required',
            'description_ar'=>'required',
       
        ]);
       
        $Imams =Home_Imam::find($id);
       
        $Imams->title_ar = $request->title_ar;
        $Imams->title_en = $request->title_en;
        $Imams->name_ar = $request->name_ar;
        $Imams->name_en = $request->name_en;
        $Imams->description_ar = $request->description_ar;
        $Imams->description_en = $request->description_en;
      
        $Imams->update();
        return redirect()->route('dashboard.home_imam.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $Imams =Home_Imam::find($id);
       
        $Imams->destroy($id);
        return redirect()->route('dashboard.home_imam.index');
    }
}
