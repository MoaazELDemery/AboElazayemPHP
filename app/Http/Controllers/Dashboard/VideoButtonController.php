<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\VideoButton;
use  App\Models\ButtonType;
class VideoButtonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {

       

        $Videos = VideoButton::where('buttontype_id',$id)->get();

        return view('dashboard.VideoButton.index',compact('Videos','id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {

        $Types =ButtonType::all();


        return view('dashboard.VideoButton.create',compact('Types','id'));

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
        

        VideoButton::create([
        
            "name_ar"=>$request->name_ar,
            "name_en"=>$request->name_en,
            "description_ar"=>$request->description_ar,
            "description_en"=>$request->description_en,
            "buttontype_id" => $request->buttontype_id,
            "video" => $request->video,
            
        ]);
        return redirect()->route('dashboard.VideoButton.index',$request->buttontype_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id,$id_button)
    {
        $Videos =VideoButton::find($id);
        return view('dashboard.VideoButton.show',compact('Videos','id_button'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id,$id_button)
    {
        $Videos =VideoButton::find($id);
        $Types =ButtonType::all();
        return view('dashboard.VideoButton.edit',compact('Videos','Types','id_button'));
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
        
        $Videos =VideoButton::find($id);
       
        
        $Videos->name_ar = $request->name_ar;
        $Videos->name_en = $request->name_en;
        $Videos->description_ar = $request->description_ar;
        $Videos->description_en = $request->description_en;
        $Videos->video = $request->video;
        $Videos->buttontype_id = $request->buttontype_id;
        
       
        
        $Videos->update();
        return redirect()->route('dashboard.VideoButton.index',$request->buttontype_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function destroy($id,$id_button)
    {
        $Videos =VideoButton::find($id);
       
        $Videos->destroy($id);
        return redirect()->route('dashboard.VideoButton.index',$id_button);
    }
}

