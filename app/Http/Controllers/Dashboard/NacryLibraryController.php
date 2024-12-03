<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\NacryLibrary;
class NacryLibraryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       
        $Librarys = NacryLibrary::when($request->search, function ($q) use($request) {

            return $q->where('name_ar','like','%' . $request->search . '%')
            ->orWhere('name_en','like','%' . $request->search . '%');
        })->latest()->paginate(15);
        return view('dashboard.NacryLibrary.index', compact('Librarys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.NacryLibrary.create');
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
       
        NacryLibrary::create([
           
            "name_ar"=>$request->name_ar,
            "name_en"=>$request->name_en,
            "title_ar"=>$request->title_ar,
            "title_en"=>$request->title_en,

            
           

        ]);
        return redirect()->route('dashboard.NacryLibrary.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Librarys =NacryLibrary::find($id);
        return view('dashboard.NacryLibrary.show',compact('Librarys'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Librarys =NacryLibrary::find($id);
        return view('dashboard.NacryLibrary.edit',compact('Librarys'));
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
        $Librarys =NacryLibrary::find($id);
       
       
       
        $Librarys->name_ar = $request->name_ar;
        $Librarys->name_en = $request->name_en;

        $Librarys->title_ar = $request->title_ar;
        $Librarys->title_en = $request->title_en;
      
        $Librarys->update();
        return redirect()->route('dashboard.NacryLibrary.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Librarys =NacryLibrary::find($id);
        $Librarys->destroy($id);
        return redirect()->route('dashboard.NacryLibrary.index');
    }
}
