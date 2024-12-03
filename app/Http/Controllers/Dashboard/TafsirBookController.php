<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\TafsirLibrary;
use  App\Models\TafsirBook;
class TafsirBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
       
        $Books = TafsirBook::where('library_id',$id)->get();


        return view('dashboard.TafsirBook.index', compact('Books','id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {

        $Librarys = TafsirLibrary::all();
        return view('dashboard.TafsirBook.create', compact('Librarys','id'));
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
          
            'pdf' => 'required|mimes:pdf',
        ]);
       
        if ($request->hasFile('pdf')) {
            $file = $request->pdf;
            $pdf_file =time() . $file->getClientOriginalName();
            $file->move(public_path() . '/storage/TafsirBook/pdf', $pdf_file);
        }
        TafsirBook::create([

            "library_id" => $request->library_id,
            "name_ar" => $request->name_ar,
            "name_en" => $request->name_en,
            "pdf" => $pdf_file,

        ]);
        return redirect()->route('dashboard.TafsirBook.index',$request->library_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id,$id_button)
    {
        $Books = TafsirBook::find($id);
        return view('dashboard.TafsirBook.show', compact('Books',',id_button'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id,$id_button)
    {
        $Books = TafsirBook::find($id);
        $Librarys = TafsirLibrary::all();
        return view('dashboard.TafsirBook.edit', compact('Books', 'Librarys',',id_button'));
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

        $Books = TafsirBook::find($id);
       
        $name_pdf = $Books->pdf;

       


        if ($request->hasFile('pdf')) {
            if ($name_pdf !== null) {
                unlink(public_path('/storage/TafsirBook/pdf/') . $name_pdf);
            }
            $file = $request->pdf;
            $pdf_file = time() . $file->getClientOriginalName();
            $file->move(public_path() . '/storage/TafsirBook/pdf', $pdf_file);
            $Books->pdf = $pdf_file;
        }

        $Books->name_ar = $request->name_ar;
        $Books->name_en = $request->name_en;
        $Books->library_id = $request->library_id;

        $Books->update();
        return redirect()->route('dashboard.TafsirBook.index',$request->library_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,$id_button)
    {
        $Books = TafsirBook::find($id);
       
        if ($Books->pdf !== null) {
            unlink(public_path('storage/TafsirBook/pdf/') . $Books->pdf);
        }
        $Books->destroy($id);
        return redirect()->route('dashboard.TafsirBook.index',$id_button);
    }
}
