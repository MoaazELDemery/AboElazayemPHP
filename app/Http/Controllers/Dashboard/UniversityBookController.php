<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\UniversityBook;
use  App\Models\UniversityLibrary;

class UniversityBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( $id)
    {
        
       

        $Books = UniversityBook::where('library_id',$id)->get();


        return view('dashboard.UniversityBook.index', compact('Books','id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {

        $Librarys = UniversityLibrary::all();
        return view('dashboard.UniversityBook.create', compact('Librarys','id'));
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
            'photo' => 'required|mimes:jpeg:jpeg,jpg,png,gif',
            'pdf' => 'required|mimes:pdf',


        ]);
        if ($request->hasFile('photo')) {
            $file = $request->photo;
            $new_file =time() . $file->getClientOriginalName();
            $file->move(public_path() . '/storage/UniversityBook/img', $new_file);
        }
        if ($request->hasFile('pdf')) {
            $file = $request->pdf;
            $pdf_file =time() . $file->getClientOriginalName();
            $file->move(public_path() . '/storage/UniversityBook/pdf', $pdf_file);
        }
        UniversityBook::create([

            "library_id" => $request->library_id,
            "name_ar" => $request->name_ar,
            "name_en" => $request->name_en,
            "photo" => $new_file,
            "pdf" => $pdf_file,

        ]);
        return redirect()->route('dashboard.UniversityBook.index',$request->library_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id,$id_button)
    {
        $Books = UniversityBook::find($id);
        return view('dashboard.UniversityBook.show', compact('Books','id_button'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id,$id_button)
    {
        $Books = UniversityBook::find($id);
        $Librarys = UniversityLibrary::all();
        return view('dashboard.UniversityBook.edit', compact('Books', 'Librarys','id_button'));
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

        $Books = UniversityBook::find($id);
        $name = $Books->photo;
        $name_pdf = $Books->pdf;

        if ($request->hasFile('photo')) {
            if ($name !== null) {
                unlink(public_path('/storage/UniversityBook/img/') . $name);
            }
            $file = $request->photo;
            $new_file = time() . $file->getClientOriginalName();
            $file->move(public_path() . '/storage/UniversityBook/img', $new_file);
            $Books->photo = $new_file;
        }


        if ($request->hasFile('pdf')) {
            if ($name_pdf !== null) {
                unlink(public_path('/storage/UniversityBook/pdf/') . $name_pdf);
            }
            $file = $request->pdf;
            $pdf_file = time() . $file->getClientOriginalName();
            $file->move(public_path() . '/storage/UniversityBook/pdf', $pdf_file);
            $Books->pdf = $pdf_file;
        }

        $Books->name_ar = $request->name_ar;
        $Books->name_en = $request->name_en;
        $Books->library_id = $request->library_id;

        $Books->update();
        return redirect()->route('dashboard.UniversityBook.index',$request->library_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,$id_button)
    {
        $Books = UniversityBook::find($id);
        if ($Books->photo !== null) {
            unlink(public_path('storage/UniversityBook/img/') . $Books->photo);
        }
        if ($Books->pdf !== null) {
            unlink(public_path('storage/UniversityBook/pdf/') . $Books->pdf);
        }
        $Books->destroy($id);
        return redirect()->route('dashboard.UniversityBook.index',$id_button);
    }
}
