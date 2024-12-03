<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\Student;
use  App\Models\imams;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $imam =imams::all();
        $Students =Student::all();
        return view('dashboard.student.index',compact('Students','imam'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $imam =imams::all();
        $Students =Student::all();
        return view('dashboard.student.create',compact('Students','imam'));
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
           
            'imam_id'=>'required',
          
        ]);

        Student::create([
           
            "name_ar"=>$request->name_ar,
            "name_en"=>$request->name_en,
            "imam_id" => $request->imam_id,
        ]);
        return redirect()->route('dashboard.student.index');
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
        $Students =Student::find($id);
        $imam =imams::all();
        return view('dashboard.student.edit',compact('Students','imam'));
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
           
            'imam_id'=>'required',
          
        ]);
        
        $Students =Student::find($id);

        
        $Students->name_ar = $request->name_ar;
        $Students->name_en = $request->name_en;
        $Students->imam_id = $request->imam_id;
        $Students->update();
        return redirect()->route('dashboard.student.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Students =Student::find($id);
        $Students->destroy($id);
        return redirect()->route('dashboard.student.index');
    }
}
