<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\poems;
use  App\Models\poem_rawy;
use App\Exports\EmployeesExport;
use App\Imports\EmployeesImport;
use Maatwebsite\Excel\Facades\Excel;


class poem_rawyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {




        return view('dashboard.poem_rawy.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {

        $poem_rawys = poem_rawy::all();

        $poemss = poems::all();
        return view('dashboard.poem_rawy.create', compact('poemss', 'poem_rawys','id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $poems = poem_rawy::where('poem_id','=',$request->poem_id)->get();
   
        if(count($poems) == 0)
        {
            Excel::import(new EmployeesImport,request()->file('file'));

            $poems = poem_rawy::where('poem_id','=',null)->get();
      
            $cractur = ['ُ', 'ْ', 'َ', 'ِ', '~', 'ً', 'ٍ', 'ٌ', 'ّ'];
    
            foreach ($poems as $item) {
                $filter_left = str_replace($cractur, '', $item['left_ar']);
                $filter_right = str_replace($cractur, '', $item['right_ar']);
                $item->update([
                    "filter_left" => $filter_left,
                    "filter_right" => $filter_right,
                    "poem_id" => $request->poem_id,
                ]);
            }

        }else{

            foreach ($poems as $item) {
               
                $item->delete();
            }

            Excel::import(new EmployeesImport,request()->file('file'));

            $poems = poem_rawy::where('poem_id','=',null)->get();
      
            $cractur = ['ُ', 'ْ', 'َ', 'ِ', '~', 'ً', 'ٍ', 'ٌ', 'ّ'];
    
            foreach ($poems as $item) {
                $filter_left = str_replace($cractur, '', $item['left_ar']);
                $filter_right = str_replace($cractur, '', $item['right_ar']);
                $item->update([
                    "filter_left" => $filter_left,
                    "filter_right" => $filter_right,
                    "poem_id" => $request->poem_id,
                ]);
            }
        }

    
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
        $poem_rawys = poem_rawy::where('poem_id', $id)->get();
        $poemss = poems::find($id);
        return view('dashboard.poem_rawy.show', compact('poem_rawys', 'id', 'poemss'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $poem_rawys = poem_rawy::find($id);
        $poemss = poems::all();
      
        return view('dashboard.poem_rawy.edit', compact('poemss', 'poem_rawys'));
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

        $cractur = ['ُ', 'ْ', 'َ', 'ِ', '~', 'ً', 'ٍ', 'ٌ', 'ّ'];
        $filter_left = str_replace($cractur, '', $request->left_ar);
        $filter_right = str_replace($cractur, '', $request->right_ar);

        $poem_rawys = poem_rawy::find($id);
      
       
        $poem_rawys->right_ar = $request->right_ar;
        $poem_rawys->right_en = $request->right_en;
        $poem_rawys->left_ar = $request->left_ar;
        $poem_rawys->left_en = $request->left_en;

        $poem_rawys->filter_left = $filter_left;
        $poem_rawys->filter_right = $filter_right;

        $poem_rawys->poem_id = $request->poem_id;
        $poem_rawys->update();
        return redirect()->route('dashboard.poem_rawy.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $poem_rawys = poem_rawy::find($id);
        $poem_rawys->destroy($id);
        return redirect()->back();
    }


    public function importExportView()
    {
       return view('create');
    }
   
    /**
    * @return \Illuminate\Support\Collection
    */
    public function export() 
    {

        return Excel::download(new EmployeesExport, 'employees.xlsx');
    }
   

}
