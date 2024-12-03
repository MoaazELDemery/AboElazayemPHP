<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\ImamDisciples;
class ImamDisciplesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $Librarys = ImamDisciples::when($request->search, function ($q) use($request) {

            return $q->where('name_ar','like','%' . $request->search . '%')
            ->orWhere('name_en','like','%' . $request->search . '%');
        })->latest()->paginate(15);
     
        return view('dashboard.ImamDisciples.index', compact('Librarys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.ImamDisciples.create');
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
            $file->move(public_path() . '/storage/ImamDisciples/img', $new_file);
        }
       
        ImamDisciples::create([
           
            "name_ar"=>$request->name_ar,
            "name_en"=>$request->name_en,
            "photo" => $new_file,

        ]);
        return redirect()->route('dashboard.ImamDisciples.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Librarys =ImamDisciples::find($id);
        return view('dashboard.ImamDisciples.show',compact('Librarys'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Librarys =ImamDisciples::find($id);
        return view('dashboard.ImamDisciples.edit',compact('Librarys'));
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

        $Librarys =ImamDisciples::find($id);

        $name = $Librarys->photo;
        if ($request->hasFile('photo')) {
            if ($name !== null) {
                unlink(public_path('/storage/ImamDisciples/img/') . $name);
            }
            $file = $request->photo;
            $new_file = time() . $file->getClientOriginalName();
            $file->move(public_path() . '/storage/ImamDisciples/img', $new_file);
            $Librarys->photo = $new_file;
        }
       
       
        $Librarys->name_ar = $request->name_ar;
        $Librarys->name_en = $request->name_en;
        $Librarys->update();
        return redirect()->route('dashboard.ImamDisciples.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Librarys =ImamDisciples::find($id);
        if ($Librarys->photo !== null) {
            unlink(public_path('storage/ImamDisciples/img/') . $Librarys->photo);
        }
        $Librarys->destroy($id);
        return redirect()->route('dashboard.ImamDisciples.index');
    }
}
