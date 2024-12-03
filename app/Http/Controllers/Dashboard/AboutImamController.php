<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\AboutImam;
class AboutImamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       
        $Abouts = AboutImam::when($request->search, function ($q) use ($request) {

            return $q->where('name_ar', 'like', '%' . $request->search . '%')
                ->orWhere('name_en', 'like', '%' . $request->search . '%');
        })->latest()->paginate(15);
        return view('dashboard.AboutImam.index',compact('Abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.AboutImam.create');
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

        AboutImam::create([
           
            "name_ar"=>$request->name_ar,
            "name_en"=>$request->name_en,
            "description_ar"=>$request->description_ar,
            "description_en"=>$request->description_en,
        ]);
        return redirect()->route('dashboard.AboutImam.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Abouts =AboutImam::find($id);
        return view('dashboard.AboutImam.show',compact('Abouts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Abouts =AboutImam::find($id);
        return view('dashboard.AboutImam.edit',compact('Abouts'));
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
        
        $Abouts =AboutImam::find($id);

        
        $Abouts->name_ar = $request->name_ar;
        $Abouts->name_en = $request->name_en;
        $Abouts->description_ar = $request->description_ar;
        $Abouts->description_en = $request->description_en;
        $Abouts->update();
        return redirect()->route('dashboard.AboutImam.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Abouts =AboutImam::find($id);
        $Abouts->destroy($id);
        return redirect()->route('dashboard.AboutImam.index');
    }
}
