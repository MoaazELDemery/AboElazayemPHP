<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Quran;
use App\Models\ayat;
use App\Models\imams;
use App\Models\Student_tafser;
use App\Models\AboutQuran;
use DB;


class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function swra_name(Request $request)
    {
        $search = $request->search;
        
        $swar_names = Http::get('http://api.quran-tafseer.com/quran/');
    
        $jason = json_decode($swar_names);
        $aa = [];
        foreach($jason as $a)
        {
            if($a->index == $search){
                $aa[] = $a;
              
                return response()->view('frontend.testSwraName',compact('aa'));
            }elseif($a->name == $search)
            {
                $aa[] = $a;
                  
                return response()->view('frontend.testSwraName',compact('aa'));
            }
        }

        if(count($aa) == 0)
        {
            $aa = $jason;
        }
 
 

        return response()->view('frontend.testSwraName',compact('aa'));

    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function testquran(Request $request , $index)
    {
        $swar_names = Http::get('http://api.quran-tafseer.com/quran/');

        $jason = json_decode($swar_names);

        $b = null;

        foreach($jason as $a)
        {
            if($a->index == $request->search){
               $b = $a;
              
            }elseif($a->name == $request->search)
            {
                $b =  $a;
                  
            }
        }

        if($b != null)
        {
            $index = $b->index;
        }
           

        $swar_names = Http::get('http://api.quran-tafseer.com/quran/'.$index.'/1');
   
        $aa = json_decode($swar_names);
        
        $AboutQurans = AboutQuran::find($index);

        $swras = Quran::where('SuraID','=',$index)->get();
        $drop_downs = Quran::where('SuraID','=',$index)->get();
        if($request->to)
        {
            $swraas = Quran::where('SuraID','=',$index)->get();
            $swras = [];
            foreach($swraas as $swra)
            {
                if($swra->VerseID >= $request->from && $swra->VerseID <= $request->to)
                {
                    $swras[] = $swra;
                }
            }
        }
        
        return response()->view('frontend.testquran',compact('swras','aa','index','AboutQurans','drop_downs'));
 
    }




    public function test_tafseer($SuraID,$VerseID)
    {
        //abo alazaym
        $ayaid = ayat::where([

            ['key_aya','=',$VerseID],
            ['sora_id','=',$SuraID],
            
        ])->get('id');
      
        $tafsers= ayat::with(['tafsers'=>function($q){
            $q->select('tafsers.id','tafser_ar','imam_id');
        }] )->find($ayaid);

        $tas= ayat::with(['tafsers'=>function($q){
            $q->select('tafsers.id','tafser_ar','imam_id');
        }] )->find($ayaid);
     
        if (count($tafsers) > 0) {
            
            foreach($tas as $tafser){

                if (count($tafser->tafsers) > 0) {
                    foreach($tafser->tafsers as $tafse){
                
                        $n=$tafse->imam_id;
                        
                        $imamnames = imams::where('id','=',$n)->get()->put('name','name_ar')->first();
                    
                        $name = $tas->push($imamnames);
        
                    }
                    unset(
                        $tafser->id,
                        $tafser->key_aya,
                        $tafser->sora_id,
                    
                        
                    );
                }else{
                    $name=[];
                }
               
                
            }
        }else{
            $name=[];
        }

        $ayas =Quran::where([
            ['SuraID', '=', $SuraID],
            ['VerseID', '=', $VerseID],
        ])->get();

        // student 

        $ayaStudentID = ayat::where([ 
            ['key_aya', '=', $VerseID],
            ['sora_id', '=',  $SuraID],
        ])->get('id')->pluck('id')->first();
        
        $StudentName = Student_tafser::where('ayat_id', '=', $ayaStudentID)->get();
        



        //get swra name
           
        $swar_names = Http::get('http://api.quran-tafseer.com/quran/'.$SuraID.'/1');
    
        $aa = json_decode($swar_names);

        //====================get all tafsers============================
        //====ALmoyasar====
        $GetALmoyasar = Http::get('http://api.quran-tafseer.com/tafseer/1/'.$SuraID.'/'.$VerseID);
    
        $ALmoyasar = json_decode($GetALmoyasar);

        //========Algalalyn
        $GetAlgalalyn = Http::get('http://api.quran-tafseer.com/tafseer/2/'.$SuraID.'/'.$VerseID);

        $Algalalyn = json_decode($GetAlgalalyn);

        //========Alsaady
        $GetAlsaady = Http::get('http://api.quran-tafseer.com/tafseer/3/'.$SuraID.'/'.$VerseID);

        $Alsaady = json_decode($GetAlsaady);
        

        //========AbnKatheer
        $GetAbnKatheer = Http::get('http://api.quran-tafseer.com/tafseer/4/'.$SuraID.'/'.$VerseID);

        $AbnKatheer = json_decode($GetAbnKatheer);
    

        //========Tantawy
        $GetTantawy = Http::get('http://api.quran-tafseer.com/tafseer/5/'.$SuraID.'/'.$VerseID);

        $Tantawy = json_decode($GetTantawy);
        

        //========Albagfwy
        $GetAlbagfwy = Http::get('http://api.quran-tafseer.com/tafseer/6/'.$SuraID.'/'.$VerseID);

        $Albagfwy = json_decode($GetAlbagfwy);
        

        //========Alkortaby
        $GetAlkortaby = Http::get('http://api.quran-tafseer.com/tafseer/7/'.$SuraID.'/'.$VerseID);

        $Alkortaby = json_decode($GetAlkortaby);
        
        //========Altabary
        $GetAltabary = Http::get('http://api.quran-tafseer.com/tafseer/8/'.$SuraID.'/'.$VerseID);

        $Altabary = json_decode($GetAltabary);
        

        return response()->view('frontend.testtafsir',compact('name','tafsers','ayas','aa','ALmoyasar','Algalalyn','Alsaady','AbnKatheer','Tantawy','Albagfwy','Alkortaby','Altabary','StudentName','VerseID','SuraID'));

    }

    public function  test_tafseer_previo($SuraID,$VerseID)
    {
       
        //abo alazaym
        $ayaid = ayat::where([

            ['key_aya','=',$VerseID],
            ['sora_id','=',$SuraID],
            
        ])->get('id');
       


        $tafsers= ayat::with(['tafsers'=>function($q){
            $q->select('tafsers.id','tafser_ar','imam_id');
        }] )->find($ayaid);

        $tas= ayat::with(['tafsers'=>function($q){
            $q->select('tafsers.id','tafser_ar','imam_id');
        }] )->find($ayaid);

       if (count($tafsers) > 0) {
            
            foreach($tas as $tafser){

                if (count($tafser->tafsers) > 0) {
                    foreach($tafser->tafsers as $tafse){
                
                        $n=$tafse->imam_id;
                        
                        $imamnames = imams::where('id','=',$n)->get()->put('name','name_ar')->first();
                    
                        $name = $tas->push($imamnames);
        
                    }
                    unset(
                        $tafser->id,
                        $tafser->key_aya,
                        $tafser->sora_id,
                    
                        
                    );
                }else{
                    $name=[];
                }
               
                
            }
        }else{
            $name=[];
        }

        $ayas =Quran::where([
            ['SuraID', '=', $SuraID],
            ['VerseID', '=', $VerseID],
        ])->get();

        // student 

        $ayaStudentID = ayat::where([ 
            ['key_aya', '=', $VerseID],
            ['sora_id', '=',  $SuraID],
        ])->get('id')->pluck('id')->first();
        
        $StudentName = Student_tafser::where('ayat_id', '=', $ayaStudentID)->get();
        



        //get swra name
           
        $swar_names = Http::get('http://api.quran-tafseer.com/quran/'.$SuraID.'/1');
    
        $aa = json_decode($swar_names);

        //====================get all tafsers============================
        //====ALmoyasar====
        $GetALmoyasar = Http::get('http://api.quran-tafseer.com/tafseer/1/'.$SuraID.'/'.$VerseID);
    
        $ALmoyasar = json_decode($GetALmoyasar);

        //========Algalalyn
        $GetAlgalalyn = Http::get('http://api.quran-tafseer.com/tafseer/2/'.$SuraID.'/'.$VerseID);

        $Algalalyn = json_decode($GetAlgalalyn);

        //========Alsaady
        $GetAlsaady = Http::get('http://api.quran-tafseer.com/tafseer/3/'.$SuraID.'/'.$VerseID);

        $Alsaady = json_decode($GetAlsaady);
        

        //========AbnKatheer
        $GetAbnKatheer = Http::get('http://api.quran-tafseer.com/tafseer/4/'.$SuraID.'/'.$VerseID);

        $AbnKatheer = json_decode($GetAbnKatheer);
    

        //========Tantawy
        $GetTantawy = Http::get('http://api.quran-tafseer.com/tafseer/5/'.$SuraID.'/'.$VerseID);

        $Tantawy = json_decode($GetTantawy);
        

        //========Albagfwy
        $GetAlbagfwy = Http::get('http://api.quran-tafseer.com/tafseer/6/'.$SuraID.'/'.$VerseID);

        $Albagfwy = json_decode($GetAlbagfwy);
        

        //========Alkortaby
        $GetAlkortaby = Http::get('http://api.quran-tafseer.com/tafseer/7/'.$SuraID.'/'.$VerseID);

        $Alkortaby = json_decode($GetAlkortaby);
        
        //========Altabary
        $GetAltabary = Http::get('http://api.quran-tafseer.com/tafseer/8/'.$SuraID.'/'.$VerseID);

        $Altabary = json_decode($GetAltabary);
        

        return response()->view('frontend.testtafsir',compact('name','tafsers','ayas','aa','ALmoyasar','Algalalyn','Alsaady','AbnKatheer','Tantawy','Albagfwy','Alkortaby','Altabary','StudentName','VerseID','SuraID'));

    }

    public function test_tafseer_next($SuraID,$VerseID)
    {
        
        $ayas =Quran::where([
            ['SuraID', '=', $SuraID],
            ['VerseID', '=', $VerseID],
        ])->get();
   
       if(count($ayas) <= 0){
        $VerseID=1;
        $ayas =Quran::where([
            ['SuraID', '=', $SuraID],
            ['VerseID', '=', $VerseID],
        ])->get();
       }
      
     
        //abo alazaym
        $ayaid = ayat::where([

            ['key_aya','=',$VerseID],
            ['sora_id','=',$SuraID],
            
        ])->get('id');


        $tafsers= ayat::with(['tafsers'=>function($q){
            $q->select('tafsers.id','tafser_ar','imam_id');
        }] )->find($ayaid);

        $tas= ayat::with(['tafsers'=>function($q){
            $q->select('tafsers.id','tafser_ar','imam_id');
        }] )->find($ayaid);

        if (count($tafsers) > 0) {
            
            foreach($tas as $tafser){

                if (count($tafser->tafsers) > 0) {
                    foreach($tafser->tafsers as $tafse){
                
                        $n=$tafse->imam_id;
                        
                        $imamnames = imams::where('id','=',$n)->get()->put('name','name_ar')->first();
                    
                        $name = $tas->push($imamnames);
        
                    }
                    unset(
                        $tafser->id,
                        $tafser->key_aya,
                        $tafser->sora_id,
                    
                        
                    );
                }else{
                    $name=[];
                }
               
                
            }
        }else{
            $name=[];
        }
     

        

        // student 

        $ayaStudentID = ayat::where([ 
            ['key_aya', '=', $VerseID],
            ['sora_id', '=',  $SuraID],
        ])->get('id')->pluck('id')->first();
        
        $StudentName = Student_tafser::where('ayat_id', '=', $ayaStudentID)->get();
        



        //get swra name
           
        $swar_names = Http::get('http://api.quran-tafseer.com/quran/'.$SuraID.'/1');
    
        $aa = json_decode($swar_names);

        //====================get all tafsers============================
        //====ALmoyasar====
        $GetALmoyasar = Http::get('http://api.quran-tafseer.com/tafseer/1/'.$SuraID.'/'.$VerseID);
    
        $ALmoyasar = json_decode($GetALmoyasar);

        //========Algalalyn
        $GetAlgalalyn = Http::get('http://api.quran-tafseer.com/tafseer/2/'.$SuraID.'/'.$VerseID);

        $Algalalyn = json_decode($GetAlgalalyn);

        //========Alsaady
        $GetAlsaady = Http::get('http://api.quran-tafseer.com/tafseer/3/'.$SuraID.'/'.$VerseID);

        $Alsaady = json_decode($GetAlsaady);
        

        //========AbnKatheer
        $GetAbnKatheer = Http::get('http://api.quran-tafseer.com/tafseer/4/'.$SuraID.'/'.$VerseID);

        $AbnKatheer = json_decode($GetAbnKatheer);
    

        //========Tantawy
        $GetTantawy = Http::get('http://api.quran-tafseer.com/tafseer/5/'.$SuraID.'/'.$VerseID);

        $Tantawy = json_decode($GetTantawy);
        

        //========Albagfwy
        $GetAlbagfwy = Http::get('http://api.quran-tafseer.com/tafseer/6/'.$SuraID.'/'.$VerseID);

        $Albagfwy = json_decode($GetAlbagfwy);
        

        //========Alkortaby
        $GetAlkortaby = Http::get('http://api.quran-tafseer.com/tafseer/7/'.$SuraID.'/'.$VerseID);

        $Alkortaby = json_decode($GetAlkortaby);
        
        //========Altabary
        $GetAltabary = Http::get('http://api.quran-tafseer.com/tafseer/8/'.$SuraID.'/'.$VerseID);

        $Altabary = json_decode($GetAltabary);
        

        return response()->view('frontend.testtafsir',compact('name','tafsers','ayas','aa','ALmoyasar','Algalalyn','Alsaady','AbnKatheer','Tantawy','Albagfwy','Alkortaby','Altabary','StudentName','VerseID','SuraID'));

    }

    public function swra_voice($index)
    {
        $swar_names = Http::get('http://api.quran-tafseer.com/quran/'.$index.'/1');
        
        $aa = json_decode($swar_names);
     
        Http::withHeaders([
            'accept' => 'application/json'
          ]);

        $shikh_names = Http::get('https://mp3quran.net/api/_arabic.json')->body();
       
        $jason = json_decode($shikh_names);
        $datas = $jason->reciters;
        $value = str_pad($index, 3, "00", STR_PAD_LEFT);

        return response()->view('frontend.testswravoice',compact('datas','value','aa'));
 
    }
}
