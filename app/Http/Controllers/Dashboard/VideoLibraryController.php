<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\VideoLibrary;
use  App\Models\ButtonLibrary;
class VideoLibraryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,$id)
    {

        
        $Librarys =ButtonLibrary::all();

        $Videos = VideoLibrary::where('buttonlibrary_id',$id)
        ->when($request->search, function ($q) use ($request) {

            return $q->where('name_ar', 'like', '%' . $request->search . '%')
                ->orWhere('name_en', 'like', '%' . $request->search . '%');
        })->latest()->paginate(15);

        return view('dashboard.VideoLibrary.index',compact('Videos','Librarys','id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {

        $Librarys =ButtonLibrary::all();


        return view('dashboard.VideoLibrary.create',compact('Librarys','id'));

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
        

        VideoLibrary::create([
        
            "name_ar"=>$request->name_ar,
            "name_en"=>$request->name_en,
            "description_ar"=>$request->description_ar,
            "description_en"=>$request->description_en,
            "buttonlibrary_id" => $request->buttonlibrary_id,
            "video" => $request->video,
            
        ]);
        return redirect()->route('dashboard.VideoLibrary.index',$request->buttonlibrary_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id,$id_button)
    {
        $Videos =VideoLibrary::find($id);
        return view('dashboard.VideoLibrary.show',compact('Videos','id_button'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id,$id_button)
    {
        $Videos =VideoLibrary::find($id);
        $Librarys =ButtonLibrary::all();
        return view('dashboard.VideoLibrary.edit',compact('Videos','Librarys','id_button'));
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
        
        $Videos =VideoLibrary::find($id);
       
        
        $Videos->name_ar = $request->name_ar;
        $Videos->name_en = $request->name_en;
        $Videos->description_ar = $request->description_ar;
        $Videos->description_en = $request->description_en;
        $Videos->video = $request->video;
        $Videos->buttonlibrary_id = $request->buttonlibrary_id;
        
       
        
        $Videos->update();
        return redirect()->route('dashboard.VideoLibrary.index',$request->buttonlibrary_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function destroy($id,$id_button)
    {
        $Videos =VideoLibrary::find($id);
       
        $Videos->destroy($id);
        return redirect()->route('dashboard.VideoLibrary.index',$id_button);
    }
}

