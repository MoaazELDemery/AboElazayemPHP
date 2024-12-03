<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\poems;
use  App\Models\poem_rawy;
use  App\Models\Listen;
use  App\Models\Explained;
use  App\Models\book;



class poemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $poem =poems::all();

            foreach( $poem as $poemss)
            
                {
                    $poemss->rawy;
                    
                    $poemss->sea;

                    $poemss->poem_rawies;

                    $poemss->Listen;

                    $poemss->Explained;

            
                }
            return response( $poem);
    }
    public function search(Request $request)

    {
        
        $poemss = poems::when($request->search, function ($q) use ($request) {

            return $q->where('pname_ar', 'like', '%' . $request->search . '%')
                ->orWhere('name_filter', 'like', '%' . $request->search . '%')
                ->orWhere('num_peom', 'like', '%' . $request->search . '%')
                ->orWhere('occasion_ar', 'like', '%' . $request->search . '%')
                ->orWhere('Place_ar', 'like', '%' . $request->search . '%')
                ->orWhere('date_birth', 'like', '%' . $request->search . '%')
                ->orWhere('date_hijri', 'like', '%' . $request->search . '%')
                ->orWhere('num_verses', 'like', '%' . $request->search . '%')
                ->orWhere('rawy_ar', 'like', '%' . $request->search . '%')
                ->orWhere('name_follow', 'like', '%' . $request->search . '%')
                ->orWhere('name_sea', 'like', '%' . $request->search . '%');
        })->latest()->paginate(18);

        if(count($poemss) == 0)
        {
            $poemss = poems::latest()->paginate(18);
            foreach ($poemss as $index => $poem) {

                $abyat = poem_rawy::where(function ($query) use ($request) {
    
                    $query->where('right_ar', 'LIKE', '%' . $request->search . '%')
                    ->orWhere('left_ar', 'LIKE', '%' . $request->search . '%')
                    ->orWhere('filter_left', 'LIKE', '%' . $request->search . '%')
                    ->orWhere('filter_right', 'LIKE', '%' . $request->search . '%');
    
                })->where('poem_id', $poem->id)->get()->first();
    
                if (is_null($abyat)) {
    
                    unset($poemss[$index]);  
                }
            }
        }

        foreach($poemss as $poems)
        {
        $poems->poem_rawies;
        $poems->Listen;
        $poems->Explained;
        }

        return response()->json($poemss);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $poem =poems::where('id',$id)->get();
        foreach( $poem as $poemss)
        {
            $poemss->rawy;
            $poemss->sea;
            $poemss->poem_rawies;
            $poemss->Listen;
            $poemss->Explained;
        }
        return response( $poem);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function books()
    {
        $books =book::all();
      
        return response( $books);
    }
    
}
