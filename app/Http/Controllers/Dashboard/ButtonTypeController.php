<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use  App\Models\ButtonType;

use  App\Models\ImamDisciples;

class ButtonTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {


        $Types =ButtonType::where('imamdisciples_id',$id)->get();

        return view('dashboard.ButtonType.index',compact('Types','id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $Disciples =ImamDisciples::all();
        return view('dashboard.ButtonType.create',compact('Disciples','id'));
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

        ButtonType::create([

            "name_ar"=>$request->name_ar,
            "name_en"=>$request->name_en,

            "type"=>$request->type,


            "imamdisciples_id" => $request->imamdisciples_id,
        ]);
        return redirect()->route('dashboard.ButtonType.index',$request->imamdisciples_id);
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
    public function edit($id,$id_button)
    {
        $Types =ButtonType::find($id);
        $Disciples =ImamDisciples::all();
        return view('dashboard.ButtonType.edit',compact('Types','Disciples','id_button'));
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

        $Types =ButtonType::find($id);


        $Types->name_ar = $request->name_ar;
        $Types->name_en = $request->name_en;

        $Types->imamdisciples_id = $request->imamdisciples_id;


        $Types->update();
        return redirect()->route('dashboard.ButtonType.index',$request->imamdisciples_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,$id_button)
    {
        $Types =ButtonType::find($id);
        $Types->destroy($id);
        return redirect()->route('dashboard.ButtonType.index',$id_button);
    }
}
