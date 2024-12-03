<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\ImamText;
use  App\Models\ImamLibrary;
class ImamTextController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
       
       
        $Texts =ImamText::where('library_id',$id)->get();

        return view('dashboard.ImamText.index',compact('Texts','id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $Librarys = ImamLibrary::all();
        return view('dashboard.ImamText.create',compact('Librarys','id'));
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

        ImamText::create([
           
            "name_ar"=>$request->name_ar,
            "name_en"=>$request->name_en,

            "description_ar"=>$request->description_ar,
            "description_en"=>$request->description_en,

            "library_id" => $request->library_id,
        ]);
        return redirect()->route('dashboard.ImamText.index', $request->library_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id,$id_button)
    {
        $Texts =ImamText::find($id);
        return view('dashboard.ImamText.show',compact('Texts','id_button'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id,$id_button)
    {
        $Texts =ImamText::find($id);
        $Librarys = ImamLibrary::all();
        return view('dashboard.ImamText.edit',compact('Texts','Librarys','id_button'));
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
        
        $Texts =ImamText::find($id);

        
        $Texts->name_ar = $request->name_ar;
        $Texts->name_en = $request->name_en;
        $Texts->description_ar = $request->description_ar;
        $Texts->description_en = $request->description_en;
        $Texts->library_id = $request->library_id;
       
        
        $Texts->update();
        return redirect()->route('dashboard.ImamText.index',$request->library_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,$id_button)
    {
        $Texts =ImamText::find($id);
        $Texts->destroy($id);
        return redirect()->route('dashboard.ImamText.index',$id_button);
    }
}
