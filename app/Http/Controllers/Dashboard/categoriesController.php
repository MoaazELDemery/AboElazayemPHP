<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\categorie;

class categoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       
        $categories =categorie::when($request->search, function ($q) use($request) {

            return $q->where('name_ar','like','%' . $request->search . '%')
            ->orWhere('name_en','like','%' . $request->search . '%');
        })->latest()->paginate(15);
        return view('dashboard.categories.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories =categorie::all();
        return view('dashboard.categories.create',compact('categories'));
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
        if($request->hasFile('photo')){
            $file =$request->photo;
            $new_file = $file->getClientOriginalName();
            $file->move(public_path().'/storage/categorie',$new_file);


            categorie::create([
                "name_ar"=>$request->name_ar,
                "name_en"=>$request->name_en,
                "parent_id"=>$request->parent_id,
                "photo"=>$new_file,
    
            ]);
            return redirect()->route('dashboard.categorie.index');
        }

        categorie::create([
            "name_ar"=>$request->name_ar,
            "name_en"=>$request->name_en,
            "parent_id"=>$request->parent_id,
        

        ]);
       
        return redirect()->route('dashboard.categorie.index');

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
    public function edit($id)
    {
        
        $categories =categorie::find($id);
        $categoriy =categorie::all();
        return view('dashboard.categories.edit',compact('categories','categoriy'));
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
        
        $categories =categorie::find($id);
        $name = $categories->photo;
       
           
       
           
        if($request->hasFile('photo')){
            if ($name !== null) {
                unlink(public_path('/storage/categorie/') . $name);
            }
            $file =$request->photo;
            $new_file = time().$file->getClientOriginalName();
            

            $file->move(public_path().'/storage/categorie',$new_file);
            $categories->photo =$new_file;
        }
        $categories->name_ar = $request->name_ar;
        $categories->name_en = $request->name_en;
        $categories->parent_id =$request->parent_id;
        $categories->update();

        return redirect()->route('dashboard.categorie.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categories =categorie::find($id);
        if($categories->photo !== null)
        {
            unlink(public_path('/storage/categorie/') . $categories->photo );
            $categories->destroy($id);
            return redirect()->route('dashboard.categorie.index');
          
        }else {
            $categories->destroy($id);
            return redirect()->route('dashboard.categorie.index');
        }
        
    }
}
