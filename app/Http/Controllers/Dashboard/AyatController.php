<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\ayat;

class AyatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {


        $aya = ayat::when($request->search, function ($q) use ($request) {
            return $q->where('sora_id', 'like', '%' . $request->search . '%');
        })->get();
        return view('dashboard.ayat.index', compact('aya'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $aya = ayat::all();
        return view('dashboard.ayat.create', compact('aya'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [

            'key_aya' => 'required|max:286|min:1',
            'sora_id' => 'required|max:114|min:1',

        ]);

        $ayats = ayat::where([

            ['key_aya','=',$request->key_aya],
            ['sora_id','=',$request->sora_id]

        ])->get();

        if(count($ayats) == 0){

            ayat::create([

                "key_aya" => $request->key_aya,
                "sora_id" => $request->sora_id,

            ]);

        }

        return redirect()->route('dashboard.ayat.index');
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
        $aya = ayat::find($id);
        return view('dashboard.ayat.edit', compact('aya'));
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
            'key_aya' => 'required|max:286|min:1',
            'sora_id' => 'required|max:114|min:1',
        ]);

        $aya = ayat::find($id);

        $aya->key_aya = $request->key_aya;
        $aya->sora_id = $request->sora_id;
        $aya->update();

        return redirect()->route('dashboard.ayat.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aya = ayat::find($id);
        $aya->tafsers()->detach();
        $aya->destroy($id);
        return redirect()->route('dashboard.ayat.index');
    }
}
