<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\Home_Quran;

class Home_QuranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $Qurans =Home_Quran::all();
        return view('dashboard.home_quran.index',compact('Qurans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.home_quran.create');
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
            
            'photo'=>'required|mimes:jpeg:jpeg,jpg,png,gif',
            'name_ar'=>'required',

        ]);
        if($request->hasFile('photo')){
            $img = $request->file('photo');
            $ext = $img->getClientOriginalExtension();
            $name = "img-". uniqid() . ".$ext";
            $img->move(public_path().'/storage/home_quran',$name);
        }
        Home_Quran::create([
           
            "name_ar"=>$request->name_ar,
            "name_en"=>$request->name_en,
            "photo"=>$name,

        ]);
        return redirect()->route('dashboard.home_quran.index');
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
        $Qurans =Home_Quran::find($id);
        return view('dashboard.home_quran.edit',compact('Qurans'));
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
       
        $Qurans =Home_Quran::find($id);
        $name = $Qurans->photo;
        if($request->hasFile('photo')){
             
            if ($name !== null) {
                unlink(public_path('/storage/home_quran/') . $name);
            }

            $img = $request->file('photo');
            $ext = $img->getClientOriginalExtension();
            $name = "img-". uniqid() . ".$ext";
            $img->move(public_path().'/storage/home_quran',$name);
            $Qurans->photo =$name;
        }
       
        $Qurans->name_ar = $request->name_ar;
        $Qurans->name_en = $request->name_en;
      
        $Qurans->update();
        return redirect()->route('dashboard.home_quran.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Qurans =Home_Quran::find($id);
        if($Qurans->photo !== null)
        {
            unlink( public_path('/storage/home_quran/') . $Qurans->photo );
        }
        $Qurans->destroy($id);
        return redirect()->route('dashboard.home_quran.index');
    }
}
