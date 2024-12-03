<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\poems;
use  App\Models\poem_rawy;
use  App\Models\Listen;
use  App\Models\Explained;

class poemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $poemss = poems::when($request->pname_ar, function ($q) use ($request) {
        //     return $q->where('pname_ar', 'like', '%' . $request->pname_ar . '%')
        //         ->orWhere('name_filter', 'like', '%' . $request->pname_ar . '%')
        //         ->orWhere('pname_en', 'like', '%' . $request->pname_ar . '%');
        // })->when($request->num_peom, function ($q) use ($request) {
        //     return $q->where('num_peom', intVal($request->num_peom));
        // })
        //     ->when($request->occasion_ar, function ($q) use ($request) {
        //         return $q->where('occasion_ar', 'like', '%' . $request->occasion_ar . '%')
        //             ->orWhere('occasion_en', 'like', '%' . $request->occasion_ar . '%');
        //     })
        //     ->when($request->Place_ar, function ($q) use ($request) {
        //         return $q->where('Place_ar', 'like', '%' . $request->Place_ar . '%')
        //             ->orWhere('Place_en', 'like', '%' . $request->Place_ar . '%');
        //     })
        //     ->when($request->date, function ($q) use ($request) {
        //         return $q->where('date_birth', $request->date);
        //     })
        //     ->when($request->date, function ($q) use ($request) {
        //         return $q->orwhere('date_hijri', $request->date);
        //     })
        //     ->when($request->num_verses, function ($q) use ($request) {
        //         return $q->where('num_verses', intVal($request->num_verses));
        //     })
        //     ->when($request->rawy_ar, function ($q) use ($request) {
        //         return $q->where('rawy_ar', 'like', '%' . $request->rawy_ar . '%')
        //             ->orWhere('rawy_en', 'like', '%' . $request->rawy_ar . '%');
        //     })
        //     ->when($request->rawy_id, function ($q) use ($request) {
        //         return $q->where('rawy_id', 'like', '%' . $request->rawy_id . '%');
        //     })->latest()->paginate(18);
        // foreach ($poemss as $index => $poem) {
        //     $abyat = poem_rawy::where(function ($query) use ($request) {
        //         $query->where('right_en', 'LIKE', '%' . $request->word . '%')
        //             ->orWhere('right_ar', 'LIKE', '%' . $request->word . '%')
        //             ->orWhere('left_ar', 'LIKE', '%' . $request->word . '%')
        //              ->orWhere('filter_left', 'LIKE', '%' . $request->word . '%')
        //             ->orWhere('filter_right', 'LIKE', '%' . $request->word . '%')
        //             ->orWhere('left_en', 'LIKE', '%' . $request->word . '%');
        //     })
        //         ->where('poem_id', $poem->id)->get()->first();
        //     if (is_null($abyat)) {
        //         unset($poemss[$index]);
        //         // dd($poem);   
        //     }
        // }

        $poem_rawys = poem_rawy::all();
        //        $poemss = poems::all();
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



        return view('frontend.poems', compact('poem_rawys', 'poemss'));
        //        return view('frontend.poems');

    }
    //////////////////////////////
    public function index2(Request $request)
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
        
       

        return view('frontend.poems3', compact('poemss'));
    }
    // /////////////////////////////////////////////


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {


        // return view('frontend.poems2',compact('pomee'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function listen($id)
    {
        $Listens = Listen::where('poem_id', $id)->get();
        $poem = poems::find($id);


        return view('frontend.listen', compact('Listens', 'poem'));
    }


    public function testone()
    {



        return view('frontend.testone');
    }


    /////////////////////////



    public function explained($id)
    {
        $Explaineds = Explained::where('poem_id', $id)->get();
        $poem = poems::find($id);
        return view('frontend.explained', compact('Explaineds', 'poem'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        //        $poem = poem_rawys::find($id);
        //        return view('frontend.poems3',compact('poem'));

        $poem = poems::find($id);
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

        return view('frontend.poems2', compact('poem', 'poemss'));
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
}
