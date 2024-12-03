<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\map;
class MapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $maps =map::all();
        return view('dashboard.map.index',compact('maps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.map.create');
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
            'map'=>'required',
            'mobile'=>'required',
            'email'=>'required',
            'address_ar'=>'required',
        
        ]);

        map::create([
            "map"=>$request->map,
            "mobile"=>$request->mobile,
            "email"=>$request->email,
            "address_ar"=>$request->address_ar,
            "address_en"=>$request->address_en,

        ]);
        return redirect()->route('dashboard.map.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $maps =map::find($id);
        return view('dashboard.map.show',compact('maps'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $maps =map::find($id);
        return view('dashboard.map.edit',compact('maps'));
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
            'map'=>'required',
            'mobile'=>'required',
            'email'=>'required',
            'address_ar'=>'required',
            
        ]);
        $maps =map::find($id);
        $maps->map = $request->map;
        $maps->mobile = $request->mobile;
        $maps->email = $request->email;
        $maps->address_ar = $request->address_ar;
        $maps->address_en = $request->address_en;
        $maps->update();
        return redirect()->route('dashboard.map.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $maps=map::find($id);
        $maps->destroy($id);
        return redirect()->route('dashboard.map.index');
    }
}
