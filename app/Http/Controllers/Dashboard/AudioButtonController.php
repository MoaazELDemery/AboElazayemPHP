<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\AudioButton;
use  App\Models\ButtonType;
class AudioButtonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {

    
      

        $Audios = AudioButton::where('buttontype_id',$id)->get();

        return view('dashboard.AudioButton.index',compact('Audios','id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {

        $Types =ButtonType::all();

        return view('dashboard.AudioButton.create',compact('Types','id'));

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
            
            'audio' => 'required',
        ]);
        if ($request->hasFile('audio')) {
            $file = $request->audio;
            $new_file =time() . $file->getClientOriginalName();
            $file->move(public_path() . '/storage/AudioButton', $new_file);
        }
        AudioButton::create([
        
            "name_ar"=>$request->name_ar,
            "name_en"=>$request->name_en,
            "description_ar"=>$request->description_ar,
            "description_en"=>$request->description_en,
            "buttontype_id" => $request->buttontype_id,
            "audio" => $new_file,
            
        ]);
        return redirect()->route('dashboard.AudioButton.index',$request->buttontype_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id,$id_button)
    {
        $Audios =AudioButton::find($id);
        return view('dashboard.AudioButton.show',compact('Audios','id_button'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id,$id_button)
    {
        $Audios =AudioButton::find($id);
        $Types =ButtonType::all();
        return view('dashboard.AudioButton.edit',compact('Audios','Types','id_button'));
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
        
        $Audios =AudioButton::find($id);
        $name = $Audios->audio;

        if ($request->hasFile('audio')) {

            if ($name !== null) {
                unlink(public_path('/storage/AudioButton/') . $name);
            }


            $file = $request->audio;
            $new_file = time() . $file->getClientOriginalName();
            $file->move(public_path() . '/storage/AudioButton', $new_file);
            $Audios->audio = $new_file;
        }

        
        $Audios->name_ar = $request->name_ar;
        $Audios->name_en = $request->name_en;
        $Audios->description_ar = $request->description_ar;
        $Audios->description_en = $request->description_en;
       
        $Audios->buttontype_id = $request->buttontype_id;
        
       
        
        $Audios->update();
        return redirect()->route('dashboard.AudioButton.index',$request->buttontype_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function destroy($id,$id_button)
    {
        $Audios =AudioButton::find($id);
        if($Audios->audio !== null)
        {
            unlink( public_path('/storage/AudioButton/') . $Audios->audio );
        }
        $Audios->destroy($id);
       
        return redirect()->route('dashboard.AudioButton.index',$id_button);
    }
}

