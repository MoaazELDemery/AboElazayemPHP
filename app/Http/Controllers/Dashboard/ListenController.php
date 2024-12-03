<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\Listen;
use  App\Models\poems;

class ListenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $Listens = Listen::whereHas('poems', function ($q) use ($request) {

            return $q->where('pname_ar', 'like', '%' . $request->search . '%');

        })->latest()->paginate(20);
        
        return view('dashboard.listen.index', compact('Listens'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Listens = Listen::all();
        $poemss =poems::all();
        
        return view('dashboard.listen.create', compact('Listens','poemss'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
          
            'name_ar' => 'required',
            'audio' => 'required',

        ]);

        if ($request->hasFile('audio')) {
            $file = $request->audio;
            $new_file = $file->getClientOriginalName();
            $file->move(public_path() . '/storage/listen', $new_file);
        }
        Listen::create([
           
            "name_ar" => $request->name_ar,
            "name_en" => $request->name_en,
            "description_ar" => $request->description_ar,
            
            "poem_id" => $request->poem_id,
            "audio" => $new_file,

        ]);
        return redirect()->route('dashboard.listen.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $Listens =Listen::find($id);

       

        return view('dashboard.listen.show', compact('Listens'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $poemss =poems::all();
        $Listens =Listen::find($id);
        return view('dashboard.listen.edit', compact('Listens','poemss'));
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
        
        $this->validate($request, [
          
            'name_ar' => 'required',
            
            

        ]);
         
        $Listens = Listen::find($id);

        $name = $Listens->audio;

        if ($request->hasFile('audio')) {

            if ($name !== null) {
                unlink(public_path('/storage/listen/') . $name);
            }


            $file = $request->audio;
            $new_file = time() . $file->getClientOriginalName();
            $file->move(public_path() . '/storage/listen', $new_file);
            $Listens->audio = $new_file;
        }

       
        $Listens->name_ar = $request->name_ar;
        $Listens->name_en = $request->name_en;
        $Listens->description_ar = $request->description_ar;
        
        $Listens->poem_id = $request->poem_id;
        $Listens->update();


        return redirect()->route('dashboard.listen.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Listens = Listen::find($id);

        if($Listens->audio !== null)
        {
            unlink( public_path('/storage/listen/') . $Listens->audio );
        }
        $Listens->destroy($id);
        return redirect()->route('dashboard.listen.index');
    }
}
