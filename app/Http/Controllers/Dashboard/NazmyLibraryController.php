<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use  App\Models\NazmyLibrary;



class NazmyLibraryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $Librarys = NazmyLibrary::when($request->search, function ($q) use($request) {

            return $q->where('name_ar','like','%' . $request->search . '%')
            ->orWhere('name_en','like','%' . $request->search . '%');
        })->latest()->paginate(15);
        return view('dashboard.NazmyLibrary.index', compact('Librarys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.NazmyLibrary.create');
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

        NazmyLibrary::create([

            "name_ar"=>$request->name_ar,
            "type"=>$request->type,
        ]);
        return redirect()->route('dashboard.NazmyLibrary.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Librarys =NazmyLibrary::find($id);
        return view('dashboard.NazmyLibrary.show',compact('Librarys'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Librarys =NazmyLibrary::find($id);
        return view('dashboard.NazmyLibrary.edit',compact('Librarys'));
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
        $Librarys =NazmyLibrary::find($id);



        $Librarys->name_ar = $request->name_ar;
//        $Librarys->name_en = $request->name_en;
//        $Librarys->type = $request->type;
        $Librarys->update();
        return redirect()->route('dashboard.NazmyLibrary.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Librarys =NazmyLibrary::find($id);
        $Librarys->destroy($id);
        return redirect()->route('dashboard.NazmyLibrary.index');
    }
}
