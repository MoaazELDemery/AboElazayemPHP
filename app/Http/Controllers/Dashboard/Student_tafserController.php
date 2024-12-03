<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\Student_tafser;
use  App\Models\ayat;
use  App\Models\Student;
use  App\Models\Type;

class Student_tafserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
     $ayas = ayat::orderBy('created_at', 'DESC')->get();
        $Student_tafsers =Student_tafser::whereHas('Student', function ($q) use ($request) {

            return $q->where('name_ar', 'like', '%' . $request->search . '%');

        })->orwhereHas('ayat', function ($q) use ($request) {

            return $q->where('ayats.id', 'like', '%' . $request->search . '%');

        })->orderBy('id', 'desc')->paginate(20);

        return view('dashboard.student_tafser.index', compact('Student_tafsers','ayas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $Types = Type::all();
        $ayas = ayat::orderBy('created_at', 'DESC')->get();
        $Students = Student::all();
        return view('dashboard.student_tafser.create', compact('Types', 'ayas', 'Students'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($request->type_id == 0) {
            $request_data['type_id'] = null;
            $data = $request->except('type_id');
            $request_data =  $data;

        }else{
            $request_data = $request->all();
        }


        $this->validate($request, [
            'description_ar' => 'required',

            'student_id' => 'required',
            'sora_id' => 'required',
            'key_aya' => 'required',

        ]);

        $ayats = ayat::where([
            ['sora_id',$request->sora_id],
            ['key_aya',$request->key_aya],
        ])->first();

        $request_data['ayat_id'] = $ayats->id;

        Student_tafser::create($request_data);
        return redirect()->route('dashboard.student_tafser.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Student_tafsers = Student_tafser::find($id);
        $Types = Type::find($id);
        $ayas = ayat::find($id);
        $Students = Student::find($id);
        return view('dashboard.student_tafser.show', compact('Student_tafsers', 'Types', 'ayas', 'Students'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Student_tafsers = Student_tafser::find($id);
        $Types = Type::all();
        $ayas = ayat::all();
        $Students = Student::all();
        return view('dashboard.student_tafser.edit', compact('Student_tafsers', 'Types', 'ayas', 'Students'));
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

            'student_id' => 'required',
            'ayat_id' => 'required',

        ]);
        $Student_tafsers = Student_tafser::find($id);


        $Student_tafsers->description_ar = $request->description_ar;
        $Student_tafsers->description_en = $request->description_en;
        $Student_tafsers->student_id = $request->student_id;
        $Student_tafsers->type_id = $request->type_id;
        $Student_tafsers->ayat_id = $request->ayat_id;
        $Student_tafsers->update();
        return redirect()->route('dashboard.student_tafser.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Student_tafsers = Student_tafser::find($id);
        $Student_tafsers->destroy($id);
        return redirect()->route('dashboard.student_tafser.index');
    }
}
