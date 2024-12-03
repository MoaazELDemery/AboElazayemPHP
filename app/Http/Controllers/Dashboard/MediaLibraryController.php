<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\MediaLibrary;
class MediaLibraryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Librarys = MediaLibrary::all();
        return view('dashboard.MediaLibrary.index', compact('Librarys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.MediaLibrary.create');
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
            'photo' => 'required|mimes:jpeg:jpeg,jpg,png,gif',
            
            

        ]);
        if ($request->hasFile('photo')) {
            $file = $request->photo;
            $new_file =time() . $file->getClientOriginalName();
            $file->move(public_path() . '/storage/MediaLibrary/img', $new_file);
        }
       
        MediaLibrary::create([
           
            "name_ar"=>$request->name_ar,
            "name_en"=>$request->name_en,
            "photo" => $new_file,

        ]);
        return redirect()->route('dashboard.MediaLibrary.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Librarys =MediaLibrary::find($id);
        return view('dashboard.MediaLibrary.show',compact('Librarys'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Librarys =MediaLibrary::find($id);
        return view('dashboard.MediaLibrary.edit',compact('Librarys'));
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

        $Librarys =MediaLibrary::find($id);

        $name = $Librarys->photo;
        if ($request->hasFile('photo')) {
            if ($name !== null) {
                unlink(public_path('/storage/MediaLibrary/img/') . $name);
            }
            $file = $request->photo;
            $new_file = time() . $file->getClientOriginalName();
            $file->move(public_path() . '/storage/MediaLibrary/img', $new_file);
            $Librarys->photo = $new_file;
        }
       
       
        $Librarys->name_ar = $request->name_ar;
        $Librarys->name_en = $request->name_en;
        $Librarys->update();
        return redirect()->route('dashboard.MediaLibrary.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Librarys =MediaLibrary::find($id);
        if ($Librarys->photo !== null) {
            unlink(public_path('storage/MediaLibrary/img/') . $Librarys->photo);
        }
        $Librarys->destroy($id);
        return redirect()->route('dashboard.MediaLibrary.index');
    }
}