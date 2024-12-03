<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\AudioLibrary;
use  App\Models\ButtonLibrary;
class AudioLibraryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,$id)
    {

        $Librarys =ButtonLibrary::all();

        $Audios = AudioLibrary::where('buttonlibrary_id',$id)->
        when($request->search, function ($q) use ($request) {

            return $q->where('name_ar', 'like', '%' . $request->search . '%')
                ->orWhere('name_en', 'like', '%' . $request->search . '%');
        })->latest()->paginate(15);

        return view('dashboard.AudioLibrary.index',compact('Audios','Librarys','id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {

        $Librarys =ButtonLibrary::all();

        return view('dashboard.AudioLibrary.create',compact('Librarys','id'));

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
            $file->move(public_path() . '/storage/AudioLibrary', $new_file);
        }
        AudioLibrary::create([
        
            "name_ar"=>$request->name_ar,
            "name_en"=>$request->name_en,
            "description_ar"=>$request->description_ar,
            "description_en"=>$request->description_en,
            "buttonlibrary_id" => $request->buttonlibrary_id,
            "audio" => $new_file,
            
        ]);
        return redirect()->route('dashboard.AudioLibrary.index',$request->buttonlibrary_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id,$id_button)
    {
        $Audios =AudioLibrary::find($id);
        return view('dashboard.AudioLibrary.show',compact('Audios','id_button'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id,$id_button)
    {
        $Audios =AudioLibrary::find($id);
        $Librarys =ButtonLibrary::all();
        return view('dashboard.AudioLibrary.edit',compact('Audios','Librarys','id_button'));
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
        
        $Audios =AudioLibrary::find($id);
        $name = $Audios->audio;

        if ($request->hasFile('audio')) {

            if ($name !== null) {
                unlink(public_path('/storage/AudioLibrary/') . $name);
            }


            $file = $request->audio;
            $new_file = time() . $file->getClientOriginalName();
            $file->move(public_path() . '/storage/AudioLibrary', $new_file);
            $Audios->audio = $new_file;
        }

        
        $Audios->name_ar = $request->name_ar;
        $Audios->name_en = $request->name_en;
        $Audios->description_ar = $request->description_ar;
        $Audios->description_en = $request->description_en;
       
        $Audios->buttonlibrary_id = $request->buttonlibrary_id;
        
       
        
        $Audios->update();
        return redirect()->route('dashboard.AudioLibrary.index',$request->buttonlibrary_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function destroy($id,$id_button)
    {
        $Audios =AudioLibrary::find($id);
        if($Audios->audio !== null)
        {
            unlink( public_path('/storage/AudioLibrary/') . $Audios->audio );
        }
        $Audios->destroy($id);
       
        return redirect()->route('dashboard.AudioLibrary.index',$id_button);
    }
}

