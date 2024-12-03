<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\AboutProse;
use  App\Models\ProseLibrary;
class AboutProseController extends Controller
{    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
       $Abouts =AboutProse::all();
       $Librarys = ProseLibrary::all();
       return view('dashboard.AboutProse.index',compact('Abouts','Librarys'));
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
       return view('dashboard.AboutProse.create');
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

       AboutProse::create([
          
           "name_ar"=>$request->name_ar,
           "name_en"=>$request->name_en,
           "description_ar"=>$request->description_ar,
           "description_en"=>$request->description_en,
       ]);
       return redirect()->route('dashboard.AboutProse.index');
   }

   /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function show($id)
   {
       $Abouts =AboutProse::find($id);
       return view('dashboard.AboutProse.show',compact('Abouts'));
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function edit($id)
   {
       $Abouts =AboutProse::find($id);
       return view('dashboard.AboutProse.edit',compact('Abouts'));
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
       
       $Abouts =AboutProse::find($id);

       
       $Abouts->name_ar = $request->name_ar;
       $Abouts->name_en = $request->name_en;
       $Abouts->description_ar = $request->description_ar;
       $Abouts->description_en = $request->description_en;
       $Abouts->update();
       return redirect()->route('dashboard.AboutProse.index');
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function destroy($id)
   {
       $Abouts =AboutProse::find($id);
       $Abouts->destroy($id);
       return redirect()->route('dashboard.AboutProse.index');
   }
}