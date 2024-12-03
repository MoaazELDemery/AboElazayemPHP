<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use  App\Models\DisciplesText;

use  App\Models\ImamDisciples;

class DisciplesTextController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        
        
       
        $Texts =DisciplesText::where('imamdisciple_id',$id)->get();

        return view('dashboard.DisciplesText.index',compact('Texts','id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $Disciples =ImamDisciples::all();
        return view('dashboard.DisciplesText.create',compact('Disciples','id'));
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

        DisciplesText::create([
           
            "name_ar"=>$request->name_ar,
            "name_en"=>$request->name_en,

            "description_ar"=>$request->description_ar,
            "description_en"=>$request->description_en,

            "imamdisciple_id" => $request->imamdisciple_id,
        ]);
        return redirect()->route('dashboard.DisciplesText.index',$request->imamdisciple_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id,$id_button)
    {
        $Texts =DisciplesText::find($id);
        return view('dashboard.DisciplesText.show',compact('Texts','id_button'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id,$id_button)
    {
        $Texts =DisciplesText::find($id);
        $Disciples =ImamDisciples::all();
        return view('dashboard.DisciplesText.edit',compact('Texts','Disciples','id_button'));
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
        
        $Texts =DisciplesText::find($id);

        
        $Texts->name_ar = $request->name_ar;
        $Texts->name_en = $request->name_en;
        $Texts->description_ar = $request->description_ar;
        $Texts->description_en = $request->description_en;
        $Texts->imamdisciple_id = $request->imamdisciple_id;
       
        
        $Texts->update();
        return redirect()->route('dashboard.DisciplesText.index',$request->imamdisciple_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,$id_button)
    {
        $Texts =DisciplesText::find($id);
        $Texts->destroy($id);
        return redirect()->route('dashboard.DisciplesText.index',$id_button);
    }
}
