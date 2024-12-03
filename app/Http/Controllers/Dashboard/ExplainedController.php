<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\Explained;
use  App\Models\poems;

class ExplainedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $Explaineds = Explained::whereHas('poems', function ($q) use ($request) {

            return $q->where('pname_ar', 'like', '%' . $request->search . '%');

        })->latest()->paginate(20);
        return view('dashboard.explained.index',compact('Explaineds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $poemss =poems::all();
        $Explaineds =Explained::all();
        return view('dashboard.explained.create',compact('Explaineds','poemss'));
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
            'description_ar'=>'required',
        ]);

        Explained::create([
           
            "name_ar"=>$request->name_ar,
           
            "description_ar"=>$request->description_ar,
           
            "poem_id" => $request->poem_id,
        ]);
        return redirect()->route('dashboard.explained.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Explaineds =Explained::find($id);
        return view('dashboard.explained.show',compact('Explaineds'));
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
        $Explaineds =Explained::find($id);
        return view('dashboard.explained.edit',compact('Explaineds','poemss'));
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
            'description_ar'=>'required',
        ]);
        $Explaineds =Explained::find($id);

        
        $Explaineds->name_ar = $request->name_ar;
        $Explaineds->name_en = $request->name_en;
        $Explaineds->description_ar = $request->description_ar;
        $Explaineds->description_en = $request->description_en;
        $Explaineds->poem_id = $request->poem_id;
        $Explaineds->update();
        return redirect()->route('dashboard.explained.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Explaineds =Explained::find($id);
        $Explaineds->destroy($id);
        return redirect()->route('dashboard.explained.index');
    }
}
