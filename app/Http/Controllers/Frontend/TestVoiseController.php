<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Response;
class TestVoiseController extends Controller
{
    public function shikh_name()
    {
        Http::withHeaders([
            'accept' => 'application/json'
          ]);

        $swar_names = Http::get('https://mp3quran.net/api/_arabic.json')->body();
      
        $aa = json_decode($swar_names);
        $data = $aa->reciters;
        // \dd($data['name']);
        
      
      
     

        return view('frontend.testShikhName',compact('data'));

    }

    public function sowra_voise($id)
    {
       
        Http::withHeaders([
            'accept' => 'application/json'
          ]);

        $swar_names = Http::get('https://mp3quran.net/api/_arabic.json')->body();
       
        $aa = json_decode($swar_names);
        $data = $aa->reciters;
        $url = $data[$id]->Server;
        $name = $data[$id]->name;
        $rewaya = $data[$id]->rewaya;

        $swar_names = Http::get('http://api.quran-tafseer.com/quran/');
    
        $aa = json_decode($swar_names);

        // $suras = $data[$id]->suras;
        // $swar = Http::get($url/'001.mp3')->body();
      
        
        
      
      
     

        return view('frontend.testvoice',compact( 'aa','url','name','rewaya'));

    }

}


// @for ($i = '001' ; $i <= '114'; $i++)
//             {{$value = str_pad($i, 3, "00", STR_PAD_LEFT)}}
            
//             <audio class="single-audio-inner  " controls="">

//                 <source src="{{$url}}/{{$value}}.mp3" type="audio/ogg">
//                 <source src="{{$url}}/{{$value}}.mp3" type="audio/mpeg">

//             </audio>
//             @endfor
