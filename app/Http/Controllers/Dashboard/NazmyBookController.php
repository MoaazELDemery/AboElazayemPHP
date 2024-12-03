<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\NazmyBook;
use  App\Models\NazmyCategorie;
class NazmyBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,$id)
    {
        $Categories = NazmyCategorie::all();

        $Books = NazmyBook::where('nazmycategorie_id',$id)->
        when($request->search, function ($q) use ($request) {

            return $q->where('name_ar', 'like', '%' . $request->search . '%')
                ->orWhere('name_en', 'like', '%' . $request->search . '%');
        })->latest()->paginate(15);


        return view('dashboard.NazmyBook.index', compact('Books', 'Categories','id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {

        $Categories = NazmyCategorie::all();
        return view('dashboard.NazmyBook.create', compact('Categories','id'));
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
            'nazmycategorie_id' => 'required',
            'photo' => 'required|mimes:jpeg:jpeg,jpg,png,gif',
            'pdf' => 'required|mimes:pdf',


        ]);
        if ($request->hasFile('photo')) {
            $file = $request->photo;
            $new_file =time() . $file->getClientOriginalName();
            $file->move(public_path() . '/storage/NazmyBook/img', $new_file);
        }
        if ($request->hasFile('pdf')) {
            $file = $request->pdf;
            $pdf_file =time() . $file->getClientOriginalName();
            $file->move(public_path() . '/storage/NazmyBook/pdf', $pdf_file);
        }
        NazmyBook::create([

            "nazmycategorie_id" => $request->nazmycategorie_id,
            "name_ar" => $request->name_ar,
            "name_en" => $request->name_en,
            "photo" => $new_file,
            "pdf" => $pdf_file,

        ]);
        return redirect()->route('dashboard.NazmyBook.index',$request->nazmycategorie_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id,$id_button)
    {
        $Books = NazmyBook::find($id);
        return view('dashboard.NazmyBook.show', compact('Books','id_button'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id,$id_button)
    {
        $Books = NazmyBook::find($id);
        $Categories = NazmyCategorie::all();
        return view('dashboard.NazmyBook.edit', compact('Books', 'Categories','id_button'));
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

        $Books = NazmyBook::find($id);
        $name = $Books->photo;
        $name_pdf = $Books->pdf;

        if ($request->hasFile('photo')) {
            if ($name !== null) {
                unlink(public_path('/storage/NazmyBook/img/') . $name);
            }
            $file = $request->photo;
            $new_file = time() . $file->getClientOriginalName();
            $file->move(public_path() . '/storage/NazmyBook/img', $new_file);
            $Books->photo = $new_file;
        }


        if ($request->hasFile('pdf')) {
            if ($name_pdf !== null) {
                unlink(public_path('/storage/NazmyBook/pdf/') . $name_pdf);
            }
            $file = $request->pdf;
            $pdf_file = time() . $file->getClientOriginalName();
            $file->move(public_path() . '/storage/NazmyBook/pdf', $pdf_file);
            $Books->pdf = $pdf_file;
        }

        $Books->name_ar = $request->name_ar;
        $Books->name_en = $request->name_en;
        $Books->nazmycategorie_id = $request->nazmycategorie_id;

        $Books->update();
        return redirect()->route('dashboard.NazmyBook.index',$request->nazmycategorie_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,$id_button)
    {
        $Books = NazmyBook::find($id);
        if ($Books->photo !== null) {
            unlink(public_path('storage/NazmyBook/img/') . $Books->photo);
        }
        if ($Books->pdf !== null) {
            unlink(public_path('storage/NazmyBook/pdf/') . $Books->pdf);
        }
        $Books->destroy($id);
        return redirect()->route('dashboard.NazmyBook.index',$id_button);
    }
}
