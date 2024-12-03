<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use  App\Models\NazmyCategorie;
use  App\Models\NazmyLibrary;

class NazmyCategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,$id)
    {
       
        $Librarys = NazmyLibrary::all();

        $Categories = NazmyCategorie::where('library_id',$id)
        ->when($request->search, function ($q) use ($request) {

            return $q->where('name_ar', 'like', '%' . $request->search . '%')
                ->orWhere('name_en', 'like', '%' . $request->search . '%');
        })->latest()->paginate(15);


        return view('dashboard.NazmyCategorie.index', compact('Categories','Librarys','id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $Librarys = NazmyLibrary::all();
        return view('dashboard.NazmyCategorie.create', compact('Librarys','id'));
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
            'library_id' => 'required',
            'name_ar' => 'required',
           
        ]);
      
        NazmyCategorie::create([

            "library_id" => $request->library_id,
            "name_ar" => $request->name_ar,
            "name_en" => $request->name_en,
           

        ]);
        return redirect()->route('dashboard.NazmyCategorie.index',$request->library_id);
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
        $Categories = NazmyCategorie::find($id);
        $Librarys = NazmyLibrary::all();
        return view('dashboard.NazmyCategorie.edit', compact('Categories', 'Librarys','id_button'));
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

        $Categories = NazmyCategorie::find($id);
     
        
        $Categories->name_ar = $request->name_ar;
        $Categories->name_en = $request->name_en;
        $Categories->library_id = $request->library_id;

        $Categories->update();
        return redirect()->route('dashboard.NazmyCategorie.index',$request->library_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,$id_button)
    {
        $Categories = NazmyCategorie::find($id);
    
        $Categories->destroy($id);
        return redirect()->route('dashboard.NazmyCategorie.index',$id_button);
    }
}
