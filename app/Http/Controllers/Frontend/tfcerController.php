<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\tafser;
use  App\Models\imams;
use  App\Models\ayat;
use App\Models\Student;
use App\Models\Type;

class tfcerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $tafsers =tafser::all();
        $imam =imams::all();
        $aya =ayat::all();
        $students = Student::all();
        $types = Type::all();
        return view('frontend.tefser',compact('tafsers','imam','aya','students','types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

    public function getTafser($sura, $aya){
        $aya= ayat::where([
            'key_aya'=>$aya,
            'sora_id'=>$sura
        ])->get()->first();

        $html= '';
        $drop_down = '';
        $tafsers = '';
        if(!is_null($aya))
        {
            foreach ($aya->tafsers as $tafser)
            {
                $drop_down .= '<option class="'.str_replace(' ','_',$tafser->imams->name_ar).'">'.$tafser->imams->name_ar.'</option>';
                $tafsers .= '<div class="imam_tafser" id="'.str_replace(' ','_',$tafser->imams->name_ar).'" style="padding-top: 20px;display:none;" class="text-p">تفسير الامام : <span>'.$tafser->tafser_ar.'</span> </div>';
            }
        }
        $array = array($drop_down,$tafsers);
        echo json_encode($array);
    }
    public function getButtons($sura, $aya){
        $aya= ayat::where([
            'key_aya'=>$aya,
            'sora_id'=>$sura
        ])->get()->first();
        $student_tafsers = $aya->Student_tafser;
        $html= '';
        // $drop_down = '';
        $tafsers_types = '';
        $tafser_students= '';
        if(!is_null($student_tafsers))
        {
            foreach ($student_tafsers as $tafser)
            {
                if(!is_null($tafser->type_id))
                {
                    $tafsers_types .= '<div class="type_tafcer show-type-'. $tafser->type_id.'" style="display: none;">
                        <hr class="sold">
                        <p class="text-p">'. $tafser->type->name_ar .':<span>'.$tafser->description_ar.'</span></p>
                    </div>';
                }
                else
                {
                    $tafser_students .= '<div class="student_tafcer wrapper-tab show-student-'.$tafser->student_id.'" style="display: none;">
                        <hr class="sold" id="on">
                        <p class="text-p tab_1 "> '.$tafser->student->name_ar.' :<span>'.$tafser->description_ar.'</span></p>
                    </div>';
                }
            
                // $drop_down .= '<option class="'.str_replace(' ','_',$tafser->imams->name_ar).'">'.$tafser->imams->name_ar.'</option>';
            }
        }
        $array = array($tafsers_types,$tafser_students);
        echo json_encode($array);
    }
}
