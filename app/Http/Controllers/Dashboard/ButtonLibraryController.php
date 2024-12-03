<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\ButtonLibrary;

use  App\Models\MediaLibrary;
class ButtonLibraryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $Librarys =MediaLibrary::all();

        $Types = ButtonLibrary::when($request->search, function ($q) use($request) {

            return $q->where('name_ar','like','%' . $request->search . '%')
            ->orWhere('name_en','like','%' . $request->search . '%');
        })->latest()->paginate(15);

        return view('dashboard.ButtonLibrary.index',compact('Types','Librarys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Librarys =MediaLibrary::all();
        return view('dashboard.ButtonLibrary.create',compact('Librarys'));
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

        ButtonLibrary::create([

            "name_ar"=>$request->name_ar,
            "name_en"=>$request->name_en,

            "type"=>$request->type,


            "library_id" => $request->library_id,
        ]);
        return redirect()->route('dashboard.ButtonLibrary.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Types =ButtonLibrary::find($id);
        return view('dashboard.ButtonLibrary.show',compact('Types'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Types =ButtonLibrary::find($id);
        $Librarys =MediaLibrary::all();
        return view('dashboard.ButtonLibrary.edit',compact('Types','Librarys'));
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

        $Types =ButtonLibrary::find($id);


        $Types->name_ar = $request->name_ar;
        $Types->name_en = $request->name_en;
        $Types->library_id = $request->library_id;


        $Types->update();
        return redirect()->route('dashboard.ButtonLibrary.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Types =ButtonLibrary::find($id);
        $Types->destroy($id);
        return redirect()->route('dashboard.ButtonLibrary.index');
    }
}
