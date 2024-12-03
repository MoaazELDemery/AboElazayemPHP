<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\poem_rawy;
use Illuminate\Http\Request;
use  App\Models\poems;


class poemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $poemss =poems::when($request->search, function ($q) use($request) {

            return $q->where('pname_ar','like','%' . $request->search . '%')
            ->orWhere('name_filter', 'like', '%' . $request->search . '%')
            ->orWhere('pname_en','like','%' . $request->search . '%');
        })->latest()->paginate(15);
       
        return view('dashboard.poems.index',compact('poemss'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('dashboard.poems.create');
        $poemss =poems::all();
        
        return view('dashboard.poems.create',compact('poemss'));

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
            
            // 'num_peom'=>'required',
            // 'date_birth'=>'required',
            // 'date_hijri'=>'required',
            // 'num_verses'=>'required',
        ]);
          $cractur = ['ُ','ْ','َ','ِ','~','ً','ٍ','ٌ','ّ'];
        
         $name_filter = str_replace($cractur, '', $request->pname_ar);
        poems::create([
                "num_peom"=>$request->num_peom,
                "date_birth"=>$request->date_birth,
                "date_hijri"=>$request->date_hijri,
                "num_verses"=>$request->num_verses,
                "pname_ar"=>$request->pname_ar,
                "occasion_ar"=>$request->occasion_ar,
                "Place_ar"=>$request->Place_ar,
                "rawy_ar"=>$request->rawy_ar,
                "name_sea"=>$request->name_sea,
                "name_follow"=>$request->name_follow,
                "name_filter"=>$name_filter,
                
            ]);
        return redirect()->route('dashboard.poems.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $poemss =poems::find($id);
        return view('dashboard.poems.show',compact('poemss'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $poemss =poems::find($id);
      
        return view('dashboard.poems.edit',compact('poemss'));
        // return view('dashboard.poems.edit',compact('poemss'));
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
            
           
            // 'num_peom'=>'required',
           
           
         
            
            // 'date_birth'=>'required',
            // 'date_hijri'=>'required',
            // 'num_verses'=>'required',
        ]);
        $cractur = ['ُ','ْ','َ','ِ','~','ً','ٍ','ٌ','ّ'];
        
        $name_filter = str_replace($cractur, '', $request->pname_ar);
        
        $poemss =poems::find($id);
       
        $poemss->update([
            
            "num_peom"=>$request->num_peom,
            "date_birth"=>$request->date_birth,
            "date_hijri"=>$request->date_hijri,
            "num_verses"=>$request->num_verses,
            "pname_ar"=>$request->pname_ar,
            "occasion_ar"=>$request->occasion_ar,
            "Place_ar"=>$request->Place_ar,
            "rawy_ar"=>$request->rawy_ar,
            "name_sea"=>$request->name_sea,
            "name_follow"=>$request->name_follow,
            "name_filter"=>$name_filter,
        ]);
        return redirect()->route('dashboard.poems.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $poemss =poems::find($id);
        $poemss->destroy($id);
        return redirect()->route('dashboard.poems.index');
    }




    public function editAbyat($poem_id){
        $poem = poems::findOrFail($poem_id);
        $abyat = $poem->poem_rawies;

        return view('dashboard.poem_rawy.edit',compact('abyat','poem'));
    }
    public function updateAbyat(Request  $request ,$poem_id){
        
       
        $poem = poems::findOrFail($poem_id);
        $byts = poem_rawy::where('poem_id',$poem_id)->get();
        foreach ($byts as $byt) {
            $byt->delete();
        }

        $cractur = ['ُ','ْ','َ','ِ','~','ً','ٍ','ٌ','ّ'];
       
        // dd($request->poem_rawys);
        foreach ($request->poem_rawys as $id => $item) {
            // dd($id);
            $filter_left = str_replace($cractur, '', $item['left_ar']);
            $filter_right = str_replace($cractur, '', $item['right_ar']);
            
            
            $byt = new poem_rawy([
                "right_ar" => $item['right_ar'],
                "left_ar" => $item['left_ar'],
                "filter_left"=>$filter_left,
                "filter_right"=>$filter_right,
                "poem_id" => $request->poem_id,
            ]);
            
            $byt->save();
          
           
        }
        return redirect()->route('dashboard.poem_rawy.index');
    }
}
