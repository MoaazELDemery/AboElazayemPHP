<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\post;
use  App\Models\categorie;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
       

        $posts =post::where('category_id',$id)->get();
        return view('dashboard.post.index',compact('posts','id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $posts =post::all();
        $categories = categorie::all();
        return view('dashboard.post.create',compact('posts','categories','id'));
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
            'title_ar'=>'required',
            'name_ar'=>'required',
            'description_ar'=>'required',
      
            'photo'=>'required|mimes:jpeg:jpeg,jpg,png,gif',

        ]);
        if($request->hasFile('photo')){
            $file =$request->photo;
            $new_file = $file->getClientOriginalName();
            $file->move(public_path().'/storage/post',$new_file);
        }
        post::create([
            "title_ar"=>$request->title_ar,
            "title_en"=>$request->title_en,
            "name_ar"=>$request->name_ar,
            "name_en"=>$request->name_en,
            "description_ar"=>$request->description_ar,
            "description_en"=>$request->description_en,
            "category_id"=>$request->category_id,
            "photo"=>$new_file,
        ]);

        
        
       
        return redirect()->route('dashboard.post.index',$request->category_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id,$id_button)
    {
        $posts =post::find($id);
        return view('dashboard.post.show',compact('posts','id_button'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id,$id_button)
    {
        $posts =post::find($id);
        $categories = categorie::all();
        return view('dashboard.post.edit',compact('posts','categories','id_button'));
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
            'title_ar'=>'required',
            'name_ar'=>'required',
            'description_ar'=>'required',
       
        ]);
       
        $posts =post::find($id);
        $name = $posts->photo;
        $categories = categorie::all();
        if($request->hasFile('photo')){
            if ($name !== null) {
                unlink(public_path('/storage/post/') . $name);
            }
            $file =$request->photo;
            $new_file = time().$file->getClientOriginalName();
            $file->move(public_path().'/storage/post',$new_file);
            $posts->photo =$new_file;
        }
       
        $posts->title_ar = $request->title_ar;
        $posts->title_en = $request->title_en;
        $posts->name_ar = $request->name_ar;
        $posts->name_en = $request->name_en;
        $posts->description_ar = $request->description_ar;
        $posts->description_en = $request->description_en;
        $posts->category_id = $request->category_id;
        $posts->update();
        return redirect()->route('dashboard.post.index',$request->category_id);

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,$id_button)
    {
       
        $posts =post::find($id);
        if($posts->photo !== null)
        {
            unlink( public_path('/storage/post/') . $posts->photo );
        }
        $posts->destroy($id);
        return redirect()->route('dashboard.post.index',$id_button);
    }
}
