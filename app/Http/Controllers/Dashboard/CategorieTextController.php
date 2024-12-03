<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\CategorieText;
use  App\Models\NazmyCategorie;
class CategorieTextController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,$id)
    {

      
        $Categories =NazmyCategorie::all();

        $Texts = CategorieText::where('nazmycategorie_id',$id)->when($request->search, function ($q) use ($request) {

            return $q->where('name_ar', 'like', '%' . $request->search . '%')
                ->orWhere('name_en', 'like', '%' . $request->search . '%');
        })->latest()->paginate(15);

        return view('dashboard.CategorieText.index',compact('Texts','Categories','id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {

        $Categories =NazmyCategorie::all();

        return view('dashboard.CategorieText.create',compact('Categories','id'));

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

        CategorieText::create([
        
            "name_ar"=>$request->name_ar,
            "name_en"=>$request->name_en,
            "description_ar"=>$request->description_ar,
            "description_en"=>$request->description_en,
            "nazmycategorie_id" => $request->nazmycategorie_id,
        ]);
        return redirect()->route('dashboard.CategorieText.index',$request->nazmycategorie_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id,$id_button)
    {
        $Texts =CategorieText::find($id);
        return view('dashboard.CategorieText.show',compact('Texts','id_button'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id,$id_button)
    {
        $Texts =CategorieText::find($id);
        $Categories =NazmyCategorie::all();
        return view('dashboard.CategorieText.edit',compact('Texts','Categories','id_button'));
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
        
        $Texts =CategorieText::find($id);
       

        
        $Texts->name_ar = $request->name_ar;
        $Texts->name_en = $request->name_en;
        $Texts->description_ar = $request->description_ar;
        $Texts->description_en = $request->description_en;
        
        $Texts->nazmycategorie_id = $request->nazmycategorie_id;
       
        
        $Texts->update();
        return redirect()->route('dashboard.CategorieText.index',$request->nazmycategorie_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id,$id_button)
    {
        $Texts =CategorieText::find($id);
       
        $Texts->destroy($id);
        return redirect()->route('dashboard.CategorieText.index',$id_button);
    }
}