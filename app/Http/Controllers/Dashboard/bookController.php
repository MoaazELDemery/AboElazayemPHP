<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\book;



class bookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $Books = book::all();
        return view('dashboard.book.index',compact('Books'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('dashboard.book.create');
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

            'pdf'=>'required|mimes:pdf',

        ]);

        if($request->hasFile('pdf')){
            $file =$request->pdf;
            $pdf_file = $file->getClientOriginalName();
            $file->move(public_path().'/storage/book/pdf',$pdf_file);
        }
        book::create([
            "name_ar"=>$request->name_ar,

            "pdf"=>$pdf_file,

        ]);
        return redirect()->route('dashboard.book.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Books =book::find($id);
        return view('dashboard.book.show',compact('Books'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Books =book::find($id);

        return view('dashboard.book.edit',compact('Books'));
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

        $Books =book::find($id);

        $name_pdf = $Books->pdf;




        if($request->hasFile('pdf')){
            if ($name_pdf !== null) {
                unlink(public_path('/storage/book/pdf/') . $name_pdf);
            }
            $file =$request->pdf;
            $pdf_file = time().$file->getClientOriginalName();
            $file->move(public_path().'/storage/book/pdf',$pdf_file);
            $Books->pdf =$pdf_file;
        }

        $Books->name_ar = $request->name_ar;



        $Books->update();
        return redirect()->route('dashboard.book.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Books =book::find($id);

        if($Books->pdf !== null)
        {
            unlink( public_path('storage/book/pdf/') . $Books->pdf );
        }
        $Books->destroy($id);
        return redirect()->route('dashboard.book.index');
    }
}
