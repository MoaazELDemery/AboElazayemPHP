<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\card;

class cardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cards = card::all();
        return view('dashboard.card.index', compact('cards'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.card.create');
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
            'description_ar' => 'required',
            'photo' => 'required|mimes:jpeg:jpeg,jpg,png,gif',
        ]);

        if ($request->hasFile('photo')) {
            $file = $request->photo;
            $new_file = $file->getClientOriginalName();
            $file->move(public_path() . '/storage/card', $new_file);
        }
        
        card::create([
           
            "description_ar" => $request->description_ar,
            
            "photo" => $new_file,

        ]);
        return redirect()->route('dashboard.card.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cards = card::find($id);
        return view('dashboard.card.show', compact('cards'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cards = card::find($id);
        return view('dashboard.card.edit', compact('cards'));
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
            'description_ar' => 'required',


        ]);
        $cards = card::find($id);
        $name = $cards->photo;






        if ($request->hasFile('photo')) {
            if ($name !== null) {
                unlink(public_path('/storage/card/') . $name);
            }

            $file = $request->photo;
            $new_file =time() . $file->getClientOriginalName();
            $file->move(public_path() . '/storage/card', $new_file);
            $cards->photo = $new_file;
        }

      
        $cards->description_ar = $request->description_ar;
        $cards->update();
        return redirect()->route('dashboard.card.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $cards = card::find($id);
        if ($cards->photo !== null) {
            unlink(public_path('/storage/card/') . $cards->photo);
        }
        $cards->destroy($id);
        return redirect()->route('dashboard.card.index');
    }
}
