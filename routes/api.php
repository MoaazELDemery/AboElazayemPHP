<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::namespace('Api')->group(function () {

    // about
    Route::get('about', 'AboutController@index');
    Route::get('about_title', 'AboutController@about_two');
    Route::get('about_card', 'AboutController@card');
    Route::get('about_description_one', 'AboutController@about_threes');
    Route::get('about_description_tow', 'AboutController@about_fours');

    // imam madi
    Route::get('madi', 'Imam_MadiController@index');
    Route::get('madi_description', 'Imam_MadiController@madi_twos');

    // Library
    Route::get('maktaby', 'LibraryController@index');
    Route::get('book/{id}', 'LibraryController@book');
    Route::get('Library', 'LibraryController@Library');
    

    // disciples_imam
    Route::get('imam', 'Disciples_ImamController@index');
    Route::get('details_imam', 'Disciples_ImamController@Pupil_twos');

    // maraky
    Route::get('categories', 'MarakyController@index');
    Route::get('MarakyText', 'MarakyController@MarakyText');
    Route::get('post/{id}', 'MarakyController@posts');

    

    // Visuals
    Route::get('sheikhs', 'VisualsController@index');
    Route::get('details_sheikh/{id}', 'VisualsController@Sheikh_ones');
    Route::get('visuals_sheikh/{id}', 'VisualsController@Visuals');
    Route::get('pupils_sheikh/{id}', 'VisualsController@Card_pupils');
    Route::get('description_sheikh/{id}', 'VisualsController@Sheikh_texts');

    // audios
    Route::get('sheikhs', 'AudiosController@index');
    Route::get('details_sheikh/{id}', 'AudiosController@Sheikh_ones');
    Route::get('audios_sheikh/{id}', 'AudiosController@Audios');
    Route::get('pupils_sheikh/{id}', 'AudiosController@Card_pupils');
    Route::get('description_sheikh/{id}', 'AudiosController@Sheikh_texts');
    Route::get('sheikh_show/{id}', 'AudiosController@show');

    // eltasof
    Route::get('eltasof_details', 'EltasofController@index');

    Route::get('eltasof_description', 'EltasofController@eltasof_twos');

    Route::get('AboutEltasof', 'EltasofController@AboutEltasof');

    Route::get('EltasofBook/{id}', 'EltasofController@book');

    

    

    // Connect 

    Route::get('details_contact', 'ContactController@index');
    Route::post('contact', 'ContactController@store');


    // posm
    Route::get('poems', 'poemsController@index');
    Route::post('search', 'poemsController@search');
    Route::get('show/{id}', 'poemsController@show');
    Route::get('rawy', 'poemsController@create');
    Route::get('conversations', 'poemsController@books');


    

    // quran
    Route::get('swra_name', 'QuranController@swra_name');
    //  // // // // // // // // // // // // // // // // // // //

    Route::get('quran/{index}', 'QuranController@testquran');

    Route::get('swra_voice/{index}', 'QuranController@swra_voice')->name('swra_voice');
    //  // // // // // // // // // // // // // // // // // // //

    Route::get('tafseer/{SuraID}/verse/{VerseID}', 'QuranController@test_tafseer');
    Route::get('previo_tafseer/{SuraID}/verse/{VerseID}', 'QuranController@test_tafseer_previo');

    Route::get('next_tafseer/{SuraID}/verse/{VerseID}', 'QuranController@test_tafseer_next');
    //  // // // // // // // // // // // // // // // // // // //

    Route::get('shikh', 'QuranController@shikh_name');
    // 
    Route::get('voice/{id}', 'QuranController@sowra_voise');
    Route::get('name/{SuraID}/verse/{VerseID}', 'QuranController@shikhname');

    // New New New New New

    // Home
    Route::get('Home', 'HomeController@index');

    //Imam
    Route::get('AboutImam', 'AboutImamController@index');
    Route::get('ImamLibrary', 'AboutImamController@ImamLibrary');

    //University
    Route::get('AboutUniversity', 'AboutUniversityController@index');
    Route::get('UniversityLibrary', 'AboutUniversityController@UniversityLibrary');

    
    //Tafsir
    Route::get('Tafsir', 'TafsirController@index');

    //Prose
    Route::get('Prosehome', 'ProseController@index');

    Route::get('proseLibrary/{id}', 'ProseController@Categories');

    Route::get('ProseBook/{id}', 'ProseController@ProseBook');


    //AboutNazmy
    Route::get('AboutNazmy', 'NazmyController@index');
    Route::get('NazmyLibrary/{id}', 'NazmyController@create');
    Route::get('Nazmybook/{id}', 'NazmyController@book');
    
     // index
    Route::get('AboutDisciples', 'DisciplesController@index');
    
     Route::get('Disciplesimam', 'DisciplesController@imam');

    Route::get('Disciplestext/{id}', 'DisciplesController@store');

    Route::get('Disciplesbtu/{id}', 'DisciplesController@Disciplesbtu');

    Route::get('pdfLibrary/{id}', 'DisciplesController@pdfLibrary');

    Route::get('AudioLibrary/{id}', 'DisciplesController@AudioLibrary');

    Route::get('videoLibrary/{id}', 'DisciplesController@videoLibrary');
    
    
    // VisualsController

    Route::get('homeMAX', 'VisualsController@index');

    // Route::get('videoeMAX/{id}', 'VisualsController@videoeMAX');

    // Route::get('AudioeMAX/{id}', 'VisualsController@AudioMAx');





    

    Route::get('aya_filtter', 'QuranController@aya_filtter');
    


    
    
});
