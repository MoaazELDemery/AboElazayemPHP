<?php

namespace App\Http\Controllers\Dashboard;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\TextButton;
use  App\Models\ButtonType;
class TextButtonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $Texts = TextButton::where('buttontype_id',$id)->get();
        return view('dashboard.TextButton.index',compact('Texts','id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {

        $Types =ButtonType::all();

        return view('dashboard.TextButton.create',compact('Types','id'));

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

        TextButton::create([
        
            "name_ar"=>$request->name_ar,
            "name_en"=>$request->name_en,
            "description_ar"=>$request->description_ar,
            "description_en"=>$request->description_en,
            "buttontype_id" => $request->buttontype_id,
        ]);
        return redirect()->route('dashboard.TextButton.index',$request->buttontype_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id,$id_button)
    {
        $Texts =TextButton::find($id);
        return view('dashboard.TextButton.show',compact('Texts','id_button'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id,$id_button)
    {
        $Texts =TextButton::find($id);
        $Types =ButtonType::all();
        return view('dashboard.TextButton.edit',compact('Texts','Types','id_button'));
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
        
        $Texts =TextButton::find($id);
       

        
        $Texts->name_ar = $request->name_ar;
        $Texts->name_en = $request->name_en;
        $Texts->description_ar = $request->description_ar;
        $Texts->description_en = $request->description_en;
        
        $Texts->buttontype_id = $request->buttontype_id;
       
        
        $Texts->update();
        return redirect()->route('dashboard.TextButton.index',$request->buttontype_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id,$id_button)
    {
        $Texts =TextButton::find($id);
       
        $Texts->destroy($id);
        return redirect()->route('dashboard.TextButton.index',$id_button);
    }
}
