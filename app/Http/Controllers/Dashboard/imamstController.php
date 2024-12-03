<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\imams;

class imamstController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $imam =imams::when($request->search, function ($q) use($request) {

            return $q->where('name_ar','like','%' . $request->search . '%')
            ->orWhere('name_en','like','%' . $request->search . '%');
        })->latest()->paginate(15);
        return view('dashboard.imams.index',compact('imam'));
        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $imam =imams::all();
        return view('dashboard.imams.create',compact('imam'));
        
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
        
        imams::create([
            "name_ar"=>$request->name_ar,
            "name_en"=>$request->name_en,   

        ]);
        return redirect()->route('dashboard.imams.index');
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
        $imam =imams::find($id);
       
        return view('dashboard.imams.edit',compact('imam'));
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
        
        $imam =imams::find($id);
       
        $imam->name_ar = $request->name_ar;
        $imam->name_en = $request->name_en;
        $imam->update();

        return redirect()->route('dashboard.imams.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $imam =imams::find($id);
        $imam->destroy($id);
        return redirect()->route('dashboard.imams.index');
    }
}
