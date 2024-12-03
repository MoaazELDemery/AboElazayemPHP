<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Quran;
use App\Models\ayat;
use App\Models\imams;
use App\Models\Student_tafser;
use  App\Models\tafser;
use App\Models\Student;
use App\Models\Type;



class QuranController extends Controller
{

    public function aya_filtter()
    {
        $swar_names = Http::get('http://api.quran-tafseer.com/quran/');

        $aa = json_decode($swar_names);

        foreach($aa as $a) {
            $ayats = ayat::where('key_aya',$a->index)->get();
            foreach ($ayats as $ayat)
            {
                $ayat->update([
                    'sora_name' => $a->name
                ]);
            }
        }


        return "success";

    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function swra_name()
    {

        $swar_names = Http::get('http://api.quran-tafseer.com/quran/');

        $aa = json_decode($swar_names);



        return response($aa);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function testquran($index)
    {

        $swar_names = Http::get('http://api.quran-tafseer.com/quran/' . $index . '/1');

        $aa = json_decode($swar_names);



        $swras = Quran::where('SuraID', '=', $index)->get();
        $data['swra_name'] = $aa;
        $data['swra'] = $swras;

        return response($data);
    }




    public function test_tafseer($SuraID, $VerseID)
    {
        //abo alazaym
        $ayaid = ayat::where([

            ['key_aya', '=', $VerseID],
            ['sora_id', '=', $SuraID],

        ])->get('id');

        $tafsers = ayat::with(['tafsers' => function ($q) {
            $q->select('tafsers.id', 'tafser_ar', 'imam_id');
        }])->find($ayaid);



        if (count($tafsers) > 0) {
            foreach ($tafsers as $tafser) {

                if (count($tafser->tafsers) > 0) {
                    foreach ($tafser->tafsers as $tafse) {
                        $tafse->imams;
                        $n = $tafse->imam_id;
                        $imamnames = imams::where('id', '=', $n)->get()->put('name', 'name_ar')->first();
                        $name = $tafsers->push($imamnames);
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
        } else {
            $name = [];
        }

        $ayas = Quran::where([
            ['SuraID', '=', $SuraID],
            ['VerseID', '=', $VerseID],
        ])->get();

        // student

        $ayaStudentID = ayat::where([
            ['key_aya', '=', $SuraID],
            ['sora_id', '=', $VerseID],
        ])->get('id')->pluck('id')->first();

        $StudentName = Student_tafser::where('ayat_id', '=', $ayaStudentID)->with(['student','type'])->get();

        foreach($StudentName as $stu)
        {
            $stu->student;
            $stu->type;

        }



        //get swra name

        $swar_names = Http::get('http://api.quran-tafseer.com/quran/' . $SuraID . '/1');

        $aa = json_decode($swar_names);

        //====================get all tafsers============================
        //====ALmoyasar====
        $GetALmoyasar = Http::get('http://api.quran-tafseer.com/tafseer/1/' . $SuraID . '/' . $VerseID);

        $ALmoyasar = json_decode($GetALmoyasar);

        //========Algalalyn
        $GetAlgalalyn = Http::get('http://api.quran-tafseer.com/tafseer/2/' . $SuraID . '/' . $VerseID);

        $Algalalyn = json_decode($GetAlgalalyn);

        //========Alsaady
        $GetAlsaady = Http::get('http://api.quran-tafseer.com/tafseer/3/' . $SuraID . '/' . $VerseID);

        $Alsaady = json_decode($GetAlsaady);


        //========AbnKatheer
        $GetAbnKatheer = Http::get('http://api.quran-tafseer.com/tafseer/4/' . $SuraID . '/' . $VerseID);

        $AbnKatheer = json_decode($GetAbnKatheer);


        //========Tantawy
        $GetTantawy = Http::get('http://api.quran-tafseer.com/tafseer/5/' . $SuraID . '/' . $VerseID);

        $Tantawy = json_decode($GetTantawy);


        //========Albagfwy
        $GetAlbagfwy = Http::get('http://api.quran-tafseer.com/tafseer/6/' . $SuraID . '/' . $VerseID);

        $Albagfwy = json_decode($GetAlbagfwy);


        //========Alkortaby
        $GetAlkortaby = Http::get('http://api.quran-tafseer.com/tafseer/7/' . $SuraID . '/' . $VerseID);

        $Alkortaby = json_decode($GetAlkortaby);

        //========Altabary
        $GetAltabary = Http::get('http://api.quran-tafseer.com/tafseer/8/' . $SuraID . '/' . $VerseID);

        $Altabary = json_decode($GetAltabary);

        // $data['Quran'] = $name;
        $data['tafsers'] = $tafsers;
        $data['ayas'] = $ayas;
        $data['swar_names'] = $aa;
        $data['ALmoyasar'] = $ALmoyasar;
        $data['Algalalyn'] = $Algalalyn;
        $data['Alsaady'] = $Alsaady;
        $data['AbnKatheer'] = $AbnKatheer;
        $data['Albagfwy'] = $Albagfwy;
        $data['Altabary'] = $Altabary;
        $data['StudentName'] = $StudentName;
        $data['Alkortaby'] = $Alkortaby;
        $data['VerseID'] = $VerseID;
        $data['SuraID'] = $SuraID;



        return response($data);
    }

    public function  test_tafseer_previo($SuraID, $VerseID)
    {

        //abo alazaym
        $ayaid = ayat::where([

            ['key_aya', '=', $VerseID],
            ['sora_id', '=', $SuraID],

        ])->get('id');



        $tafsers = ayat::with(['tafsers' => function ($q) {
            $q->select('tafsers.id', 'tafser_ar', 'imam_id');
        }])->find($ayaid);

        $tas = ayat::with(['tafsers' => function ($q) {
            $q->select('tafsers.id', 'tafser_ar', 'imam_id');
        }])->find($ayaid);

        if (count($tafsers) > 0) {
            foreach ($tas as $tafser) {

               if (count($tafser->tafsers) > 0) {
                    foreach ($tafser->tafsers as $tafse) {
                        $tafse->imams;
                        $n = $tafse->imam_id;
                        $imamnames = imams::where('id', '=', $n)->get()->put('name', 'name_ar')->first();
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
        } else {
            $name = [];
        }

        $ayas = Quran::where([
            ['SuraID', '=', $SuraID],
            ['VerseID', '=', $VerseID],
        ])->get();

        // student

        $ayaStudentID = ayat::where([
            ['key_aya', '=', $SuraID],
            ['sora_id', '=', $VerseID],
        ])->get('id')->pluck('id')->first();

        $StudentName = Student_tafser::where('ayat_id', '=', $ayaStudentID)->get();




        //get swra name

        $swar_names = Http::get('http://api.quran-tafseer.com/quran/' . $SuraID . '/1');

        $aa = json_decode($swar_names);

        //====================get all tafsers============================
        //====ALmoyasar====
        $GetALmoyasar = Http::get('http://api.quran-tafseer.com/tafseer/1/' . $SuraID . '/' . $VerseID);

        $ALmoyasar = json_decode($GetALmoyasar);

        //========Algalalyn
        $GetAlgalalyn = Http::get('http://api.quran-tafseer.com/tafseer/2/' . $SuraID . '/' . $VerseID);

        $Algalalyn = json_decode($GetAlgalalyn);

        //========Alsaady
        $GetAlsaady = Http::get('http://api.quran-tafseer.com/tafseer/3/' . $SuraID . '/' . $VerseID);

        $Alsaady = json_decode($GetAlsaady);


        //========AbnKatheer
        $GetAbnKatheer = Http::get('http://api.quran-tafseer.com/tafseer/4/' . $SuraID . '/' . $VerseID);

        $AbnKatheer = json_decode($GetAbnKatheer);


        //========Tantawy
        $GetTantawy = Http::get('http://api.quran-tafseer.com/tafseer/5/' . $SuraID . '/' . $VerseID);

        $Tantawy = json_decode($GetTantawy);


        //========Albagfwy
        $GetAlbagfwy = Http::get('http://api.quran-tafseer.com/tafseer/6/' . $SuraID . '/' . $VerseID);

        $Albagfwy = json_decode($GetAlbagfwy);


        //========Alkortaby
        $GetAlkortaby = Http::get('http://api.quran-tafseer.com/tafseer/7/' . $SuraID . '/' . $VerseID);

        $Alkortaby = json_decode($GetAlkortaby);

        //========Altabary
        $GetAltabary = Http::get('http://api.quran-tafseer.com/tafseer/8/' . $SuraID . '/' . $VerseID);

        $Altabary = json_decode($GetAltabary);


        $data['Quran'] = $name;
        $data['tafsers'] = $tafsers;
        $data['ayas'] = $ayas;
        $data['swar_names'] = $aa;
        $data['ALmoyasar'] = $ALmoyasar;
        $data['Algalalyn'] = $Algalalyn;
        $data['Alsaady'] = $Alsaady;
        $data['AbnKatheer'] = $AbnKatheer;
        $data['Albagfwy'] = $Albagfwy;
        $data['Altabary'] = $Altabary;
        $data['StudentName'] = $StudentName;
        $data['Alkortaby'] = $Alkortaby;
        $data['VerseID'] = $VerseID;
        $data['SuraID'] = $SuraID;



        return response($data);
    }

    public function test_tafseer_next($SuraID, $VerseID)
    {

        $ayas = Quran::where([
            ['SuraID', '=', $SuraID],
            ['VerseID', '=', $VerseID],
        ])->get();

        if (count($ayas) <= 0) {
            $VerseID = 1;
            $ayas = Quran::where([
                ['SuraID', '=', $SuraID],
                ['VerseID', '=', $VerseID],
            ])->get();
        }


        //abo alazaym
        $ayaid = ayat::where([

            ['key_aya', '=', $VerseID],
            ['sora_id', '=', $SuraID],

        ])->get('id');


        $tafsers = ayat::with(['tafsers' => function ($q) {
            $q->select('tafsers.id', 'tafser_ar', 'imam_id');
        }])->find($ayaid);

        $tas = ayat::with(['tafsers' => function ($q) {
            $q->select('tafsers.id', 'tafser_ar', 'imam_id');
        }])->find($ayaid);

        if (count($tafsers) > 0) {
            foreach ($tas as $tafser) {

               if (count($tafser->tafsers) > 0) {
                    foreach ($tafser->tafsers as $tafse) {
                        $tafse->imams;
                        $n = $tafse->imam_id;
                        $imamnames = imams::where('id', '=', $n)->get()->put('name', 'name_ar')->first();
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
        } else {
            $name = [];
        }




        // student

        $ayaStudentID = ayat::where([
            ['key_aya', '=', $SuraID],
            ['sora_id', '=', $VerseID],
        ])->get('id')->pluck('id')->first();

        $StudentName = Student_tafser::where('ayat_id', '=', $ayaStudentID)->get();




        //get swra name

        $swar_names = Http::get('http://api.quran-tafseer.com/quran/' . $SuraID . '/1');

        $aa = json_decode($swar_names);

        //====================get all tafsers============================
        //====ALmoyasar====
        $GetALmoyasar = Http::get('http://api.quran-tafseer.com/tafseer/1/' . $SuraID . '/' . $VerseID);

        $ALmoyasar = json_decode($GetALmoyasar);

        //========Algalalyn
        $GetAlgalalyn = Http::get('http://api.quran-tafseer.com/tafseer/2/' . $SuraID . '/' . $VerseID);

        $Algalalyn = json_decode($GetAlgalalyn);

        //========Alsaady
        $GetAlsaady = Http::get('http://api.quran-tafseer.com/tafseer/3/' . $SuraID . '/' . $VerseID);

        $Alsaady = json_decode($GetAlsaady);


        //========AbnKatheer
        $GetAbnKatheer = Http::get('http://api.quran-tafseer.com/tafseer/4/' . $SuraID . '/' . $VerseID);

        $AbnKatheer = json_decode($GetAbnKatheer);


        //========Tantawy
        $GetTantawy = Http::get('http://api.quran-tafseer.com/tafseer/5/' . $SuraID . '/' . $VerseID);

        $Tantawy = json_decode($GetTantawy);


        //========Albagfwy
        $GetAlbagfwy = Http::get('http://api.quran-tafseer.com/tafseer/6/' . $SuraID . '/' . $VerseID);

        $Albagfwy = json_decode($GetAlbagfwy);


        //========Alkortaby
        $GetAlkortaby = Http::get('http://api.quran-tafseer.com/tafseer/7/' . $SuraID . '/' . $VerseID);

        $Alkortaby = json_decode($GetAlkortaby);

        //========Altabary
        $GetAltabary = Http::get('http://api.quran-tafseer.com/tafseer/8/' . $SuraID . '/' . $VerseID);

        $Altabary = json_decode($GetAltabary);


        $data['Quran'] = $name;
        $data['tafsers'] = $tafsers;
        $data['ayas'] = $ayas;
        $data['swar_names'] = $aa;
        $data['ALmoyasar'] = $ALmoyasar;
        $data['Algalalyn'] = $Algalalyn;
        $data['Alsaady'] = $Alsaady;
        $data['AbnKatheer'] = $AbnKatheer;
        $data['Albagfwy'] = $Albagfwy;
        $data['Altabary'] = $Altabary;
        $data['StudentName'] = $StudentName;
        $data['Alkortaby'] = $Alkortaby;
        $data['VerseID'] = $VerseID;
        $data['SuraID'] = $SuraID;



        return response($data);
    }

    public function swra_voice($index)
    {
        $swar_names = Http::get('http://api.quran-tafseer.com/quran/' . $index . '/1');

        $aa = json_decode($swar_names);

        Http::withHeaders([
            'accept' => 'application/json'
        ]);

        $shikh_names = Http::get('https://mp3quran.net/api/_arabic.json')->body();

        $jason = json_decode($shikh_names);
        $datas = $jason->reciters;
        $value = str_pad($index, 3, "00", STR_PAD_LEFT);

        $data['swar_names'] = $aa;
        $data['shikh_names'] = $datas;
        $data['value'] = $value;

        return response($data);
    }

    public function shikh_name()
    {
        Http::withHeaders([
            'accept' => 'application/json'
          ]);

        $swar_names = Http::get('https://mp3quran.net/api/_arabic.json')->body();

        $aa = json_decode($swar_names);
        $data = $aa->reciters;






        return response($data);


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



        $data['swar_names'] = $aa;
        $data['url'] = $url;
        $data['name'] = $name;
        $data['rewaya'] = $rewaya;

        return response($data);





    }
    public function shikhname($SuraID, $VerseID)
    {





        //get swra name

        $swar_names = Http::get('http://api.quran-tafseer.com/quran/' . $SuraID . '/1');

        $aa = json_decode($swar_names);

        //====================get all tafsers============================
        //====ALmoyasar====
        $GetALmoyasar = Http::get('http://api.quran-tafseer.com/tafseer/1/' . $SuraID . '/' . $VerseID);

        $ALmoyasar = json_decode($GetALmoyasar);

        //========Algalalyn
        $GetAlgalalyn = Http::get('http://api.quran-tafseer.com/tafseer/2/' . $SuraID . '/' . $VerseID);

        $Algalalyn = json_decode($GetAlgalalyn);

        //========Alsaady
        $GetAlsaady = Http::get('http://api.quran-tafseer.com/tafseer/3/' . $SuraID . '/' . $VerseID);

        $Alsaady = json_decode($GetAlsaady);


        //========AbnKatheer
        $GetAbnKatheer = Http::get('http://api.quran-tafseer.com/tafseer/4/' . $SuraID . '/' . $VerseID);

        $AbnKatheer = json_decode($GetAbnKatheer);


        //========Tantawy
        $GetTantawy = Http::get('http://api.quran-tafseer.com/tafseer/5/' . $SuraID . '/' . $VerseID);

        $Tantawy = json_decode($GetTantawy);


        //========Albagfwy
        $GetAlbagfwy = Http::get('http://api.quran-tafseer.com/tafseer/6/' . $SuraID . '/' . $VerseID);

        $Albagfwy = json_decode($GetAlbagfwy);


        //========Alkortaby
        $GetAlkortaby = Http::get('http://api.quran-tafseer.com/tafseer/7/' . $SuraID . '/' . $VerseID);

        $Alkortaby = json_decode($GetAlkortaby);

        //========Altabary
        $GetAltabary = Http::get('http://api.quran-tafseer.com/tafseer/8/' . $SuraID . '/' . $VerseID);

        $Altabary = json_decode($GetAltabary);



        $data['ALmoyasar'] = $ALmoyasar;
        $data['Algalalyn'] = $Algalalyn;
        $data['Alsaady'] = $Alsaady;
        $data['AbnKatheer'] = $AbnKatheer;
        $data['Albagfwy'] = $Albagfwy;
        $data['Altabary'] = $Altabary;
        $data['Alkortaby'] = $Alkortaby;
        $data['VerseID'] = $VerseID;
        $data['SuraID'] = $SuraID;



        return response($data);
    }
}
