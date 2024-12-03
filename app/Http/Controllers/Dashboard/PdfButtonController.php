<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\PdfButton;
use  App\Models\ButtonType;
class PdfButtonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {


        $Buttons = PdfButton::where('buttontype_id',$id)->get();

        return view('dashboard.PdfButton.index',compact('Buttons','id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $Types =ButtonType::all();
        return view('dashboard.PdfButton.create',compact('Types','id'));
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
            'pdf'=>'required|mimes:pdf',
          

        ]);
        
        if ($request->hasFile('photo')) {
            $file = $request->photo;
            $new_file =time() . $file->getClientOriginalName();
            $file->move(public_path() . '/storage/PdfButton/img', $new_file);
        }

        if ($request->hasFile('pdf')) {
            $file = $request->pdf;
            $pdf_file =time() . $file->getClientOriginalName();
            $file->move(public_path() . '/storage/PdfButton/pdf', $pdf_file);
        }


        PdfButton::create([
            "name_ar"=>$request->name_ar,
            "name_en"=>$request->name_en,
            "pdf"=>$pdf_file,
            "photo" => $new_file,
            "buttontype_id" => $request->buttontype_id,
        ]);
        return redirect()->route('dashboard.PdfButton.index',$request->buttontype_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id,$id_button)
    {
        $Buttons =PdfButton::find($id);
        return view('dashboard.PdfButton.show',compact('Buttons','id_button'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id,$id_button)
    {
        $Buttons =PdfButton::find($id);
        $Types =ButtonType::all();
        return view('dashboard.PdfButton.edit',compact('Buttons','Types','id_button'));
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
        
        $Buttons =PdfButton::find($id);
        $name = $Buttons->photo;
        $name_pdf = $Buttons->pdf;
        if ($request->hasFile('photo')) {
            if ($name !== null) {
                unlink(public_path('/storage/PdfButton/img/') . $name);
            }
            $file = $request->photo;
            $new_file = time() . $file->getClientOriginalName();
            $file->move(public_path() . '/storage/PdfButton/img', $new_file);
            $Buttons->photo = $new_file;
        }

        if ($request->hasFile('pdf')) {
            if ($name_pdf !== null) {
                unlink(public_path('/storage/PdfButton/pdf/') . $name_pdf);
            }
            $file = $request->pdf;
            $pdf_file = time() . $file->getClientOriginalName();
            $file->move(public_path() . '/storage/PdfButton/pdf', $pdf_file);
            $Buttons->pdf = $pdf_file;
        }

        
        $Buttons->name_ar = $request->name_ar;
        $Buttons->name_en = $request->name_en;
        
        $Buttons->buttontype_id = $request->buttontype_id;
       
        
        $Buttons->update();
        return redirect()->route('dashboard.PdfButton.index',$request->buttontype_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,$id_button)
    {
        $Buttons =PdfButton::find($id);
        if ($Buttons->photo !== null) {
            unlink(public_path('storage/PdfButton/img/') . $Buttons->photo);
        }
        if ($Buttons->pdf !== null) {
            unlink(public_path('storage/PdfButton/pdf/') . $Buttons->pdf);
        }
        $Buttons->destroy($id);
        return redirect()->route('dashboard.PdfButton.index',$id_button);
    }
}
