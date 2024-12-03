<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use  App\Models\AboutDisciples;
use  App\Models\ImamDisciples;
use  App\Models\DisciplesText;
use  App\Models\ButtonType;
use  App\Models\VideoButton;
use  App\Models\AudioButton;
use  App\Models\TextButton;
use  App\Models\PdfButton;

use Illuminate\Http\Request;

class STudentBookController extends Controller
{
    
    public function pupliimam(Request $request)
    {
        $Abouts =AboutDisciples::all();
        
        $Librarys = ImamDisciples::when($request->search, function ($q) use ($request) {

            return $q->where('name_ar', 'like', '%' . $request->search . '%')
                ->orWhere('name_en', 'like', '%' . $request->search . '%');
        })->paginate(9);
        return view('frontend.pupliimam',compact('Abouts','Librarys'));
    }

    public function textimam($id)
    {
        $Texts =DisciplesText::where('imamdisciple_id',$id)->get();
        $Types =ButtonType::where('imamdisciples_id',$id)->get();
        return view('frontend.textimam',compact('Texts','id','Types'));
    }
    public function videoSTudent($id)
    {
        $Videos = VideoButton::where('buttontype_id',$id)->get();
        return view('frontend.videoSTudent',compact('Videos','id'));
    }
    public function audioSTudent($id)
    {
        $Audios = AudioButton::where('buttontype_id',$id)->get();
        return view('frontend.audioSTudent',compact('Audios','id'));
    }
    
    public function bookSTudent(Request $request, $id)
    {
        $Types =ButtonType::find($id);

        $Texts = TextButton::where('buttontype_id',$id)->get();
        
        $Buttons = PdfButton::where(function ($query) use ($id) {
            $query->where('buttontype_id','=', $id);
        })->when($request->search, function ($q) use ($request) {

            return $q->where('name_ar', 'like', '%' . $request->search . '%')
                ->orWhere('name_en', 'like', '%' . $request->search . '%');
        })->latest()->paginate(9);
        return view('frontend.bookSTudent',compact('Texts','id','Buttons','Types'));
    }
    public function pdfSTudent($id)
    {
       
        $Buttons = PdfButton::find($id);
        return view('frontend.pdfSTudent',compact('Buttons'));
    }

    
    

}
