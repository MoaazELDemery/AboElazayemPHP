<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\tafser;
use  App\Models\imams;
use  App\Models\ayat;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;


class TafserController extends Controller
{

    public function getSoura ()
    {
        $swar_names = Http::get('http://api.quran-tafseer.com/quran/');

        $aa = json_decode($swar_names);

        return response()->json($aa);
    }

    public function getAya ($id)
    {
        $ayats = ayat::where('sora_id',$id)->get();

        return response()->json($ayats);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $tafsers =tafser::whereHas('imams', function ($q) use ($request) {

            return $q->where('name_ar', 'like', '%' . $request->search . '%');

        })->paginate(20);

        $aya = ayat::all();

        return view('dashboard.tafser.index', compact('tafsers', 'aya'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tafsers = tafser::all();
        $imam = imams::all();
        $aya = ayat::all();
        $swar_names = Http::get('http://api.quran-tafseer.com/quran/');

        $aa = json_decode($swar_names);
        return view('dashboard.tafser.create', compact('tafsers', 'imam', 'aya','aa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        foreach ($request->aya as $index => $aya) {
            // Check If Aya Exist in database
            $check_aya = ayat::where('key_aya', $aya['key_aya'])->where('sora_id', $aya['sora_id'])->get()->first();
            if (is_null($check_aya)) {
                return redirect()->back()->withErrors('الآية غير موجودة');
            }
            $ayat[] = $check_aya->id;
        }
        $this->validate($request, [
            'imam_id' => 'required',
        ]);
        foreach ($request->tafser as $index => $tafser) {
            $validator = Validator::make($tafser, [
                'tafser_ar' => 'required',

            ]);
            if ($validator->fails()) {
                return back()->withErrors('التفسير مطلوب ');
            }
            $tafser = tafser::create([
                "tafser_ar" => $tafser['tafser_ar'],

                "imam_id" => $request['imam_id'],
            ]);
            $tafser->ayat()->attach($ayat);
        }


        return redirect()->route('dashboard.tafser.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tafsers = tafser::find($id);

        return view('dashboard.tafser.show', compact('tafsers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tafsers = tafser::find($id);
        $imam = imams::all();
        $aya = ayat::all();
        return view('dashboard.tafser.edit', compact('tafsers', 'imam', 'aya'));
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
            'imam_id' => 'required',
            'tafser_ar' => 'required',

        ]);
        $tafsers = tafser::find($id);
        $imam = imams::all();
        $aya = ayat::all();
        $tafsers->tafser_ar = $request->tafser_ar;
        $tafsers->tafser_en = $request->tafser_en;
        $tafsers->imam_id = $request->imam_id;
        $tafsers->update();

        return redirect()->route('dashboard.tafser.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tafsers = tafser::find($id);
        $tafsers->ayat()->detach();
        $tafsers->destroy($id);
        return redirect()->route('dashboard.tafser.index');
    }
}
