<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/ar');
});

Route::get('/clear-cache', function() {
    Artisan::call('config:cache');
    return "Cache is cleared";
});



Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {
        Route::namespace('Frontend')->group(function () {
         
            // frontController
            Route::get('/', 'frontController@index')->name('index');
            //  // // // // // // // // // // // // // // // // // // //
            Route::get('imam', 'frontController@imam')->name('imam');
            //  // // // // // // // // // // // // // // // // // // //
            Route::get('eltasof', 'frontController@eltasof')->name('eltasof');
            //  // // // // // // // // // // // // // // // // // // //
            Route::get('audios', 'frontController@audios')->name('audios');
            //  // // // // // // // // // // // // // // // // // // //
            Route::get('audios_details/{id}', 'frontController@audios2')->name('audios_details');
            //  // // // // // // // // // // // // // // // // // // //
            Route::get('visuals', 'frontController@visuals')->name('visuals');
            //  // // // // // // // // // // // // // // // // // // //
            Route::get('visuals2/{id}', 'frontController@visuals2')->name('visuals2');
            //  // // // // // // // // // // // // // // // // // // //
            Route::get('maktaby/{id}', 'frontController@maktaby')->name('maktaby');
            //  // // // // // // // // // // // // // // // // // // //
            Route::get('book/{id}', 'frontController@book')->name('book');
            //  // // // // // // // // // // // // // // // // // // //
            Route::get('madi', 'frontController@madi')->name('madi');
            //  // // // // // // // // // // // // // // // // // // //
            Route::get('contact', 'frontController@contact')->name('contact');
            //  // // // // // // // // // // // // // // // // // // //
            Route::get('about', 'frontController@about')->name('about');
            //  // // // // // // // // // // // // // // // // // // //
            Route::get('imambox', 'frontController@imambox')->name('imambox');
            //  // // // // // // // // // // // // // // // // // // //
            Route::get('pupliimam', 'STudentBookController@pupliimam')->name('pupliimam');
            //  // // // // // // // // // // // // // // // // // // //
            Route::get('textimam/{id}', 'STudentBookController@textimam')->name('textimam');
              //  // // // // // // // // // // // // // // // // // // //
              Route::get('magazine', 'frontController@magazine')->name('magazine');

              Route::get('conversationspdf/{id}', 'frontController@conversationspdf')->name('conversationspdf');
              //  // // // // // // // // // // // // // // // // // // //
              Route::get('conversations', 'frontController@conversations')->name('conversations');

               
              



              //  // // // // // // // // // // // // // // // // // // //
              Route::get('Search', 'NacryController@Search')->name('Search');
              //  // // // // // // // // // // // // // // // // // // //
              Route::get('Nacry', 'NacryController@Nacry')->name('Nacry');
            //  // // // // // // // // // // // // // // // // // // //
            Route::get('TextNacry/{id}', 'NacryController@TextNacry')->name('TextNacry');

              

              


              

            



             // LibraryController
            //  // // // // // // // // // // // // // // // // // // //
            Route::get('max', 'LibraryController@max')->name('max');
            //  // // // // // // // // // // // // // // // // // // //
            Route::get('maximam', 'LibraryController@maximam')->name('maximam');
            //  // // // // // // // // // // // // // // // // // // //
            Route::get('maxaudios/{id}', 'LibraryController@maxaudios')->name('maxaudios');
            //  // // // // // // // // // // // // // // // // // // //
            Route::get('maxvisuals/{id}', 'LibraryController@maxvisuals')->name('maxvisuals');
            //  // // // // // // // // // // // // // // // // // // //
            Route::get('maximams/{id}', 'LibraryController@maximams')->name('maximams');

            // STudentBookController
            //  // // // // // // // // // // // // // // // // // // //
            Route::get('videoSTudent/{id}', 'STudentBookController@videoSTudent')->name('videoSTudent');
            //  // // // // // // // // // // // // // // // // // // //
            Route::get('audioSTudent/{id}', 'STudentBookController@audioSTudent')->name('audioSTudent');
            //  // // // // // // // // // // // // // // // // // // //
            Route::get('bookSTudent/{id}', 'STudentBookController@bookSTudent')->name('bookSTudent');
             //  // // // // // // // // // // // // // // // // // // //
             Route::get('pdfSTudent/{id}', 'STudentBookController@pdfSTudent')->name('pdfSTudent');

            

            
           


            // TafsirImamController
            //  // // // // // // // // // // // // // // // // // // //
            Route::get('Total', 'TafsirImamController@index')->name('Total');
            //  // // // // // // // // // // // // // // // // // // //
            Route::get('imamSwraName/{id}', 'TafsirImamController@imamSwraName')->name('imamSwraName');
            //  // // // // // // // // // // // // // // // // // // //
            Route::get('SwraNamePdf/{id}', 'TafsirImamController@SwraNamePdf')->name('SwraNamePdf');



            // ImamController
            //  // // // // // // // // // // // // // // // // // // //
            Route::get('imamus', 'ImamController@index')->name('imamus');
            //  // // // // // // // // // // // // // // // // // // //
            Route::get('imamgroup/{id}', 'ImamController@imamgroup')->name('imamgroup');
            //  // // // // // // // // // // // // // // // // // // //
            Route::get('imampdf/{id}', 'ImamController@imampdf')->name('imampdf');

            // AboutController
            //  // // // // // // // // // // // // // // // // // // //
            Route::get('Abouts', 'AboutController@index')->name('Abouts');
            //  // // // // // // // // // // // // // // // // // // //
            Route::get('aboutgroup/{id}', 'AboutController@aboutgroup')->name('aboutgroup');
            //  // // // // // // // // // // // // // // // // // // //
            Route::get('aboutpdf/{id}', 'AboutController@aboutpdf')->name('aboutpdf');
            

            // EltasofController
            //  // // // // // // // // // // // // // // // // // // //
            Route::get('eltasofbox', 'EltasofController@index')->name('eltasofbox');
            //  // // // // // // // // // // // // // // // // // // //
            Route::get('eltasofgroup/{id}', 'EltasofController@eltasofgroup')->name('eltasofgroup');
            //  // // // // // // // // // // // // // // // // // // //
            Route::get('eltasofpdf/{id}', 'EltasofController@eltasofpdf')->name('eltasofpdf');

            // ProseController
            //  // // // // // // // // // // // // // // // // // // //
            Route::get('prosebox', 'ProseController@index')->name('prosebox');
            //  // // // // // // // // // // // // // // // // // // //
            Route::get('prosegroup/{id}', 'ProseController@prosegroup')->name('prosegroup');
            //  // // // // // // // // // // // // // // // // // // //
            Route::get('prosepdf/{id}', 'ProseController@prosepdf')->name('prosepdf');
            //  // // // // // // // // // // // // // // // // // // //
            Route::get('ProseCategorie/{id}', 'ProseController@ProseCategorie')->name('ProseCategorie');


            // NazmyController
            //  // // // // // // // // // // // // // // // // // // //
            Route::get('Nazmybox', 'NazmyController@index')->name('Nazmybox');
            //  // // // // // // // // // // // // // // // // // // //
            Route::get('Nazmygroup/{id}', 'NazmyController@Nazmygroup')->name('Nazmygroup');
            //  // // // // // // // // // // // // // // // // // // //
            Route::get('Nazmypdf/{id}', 'NazmyController@Nazmypdf')->name('Nazmypdf');
            //  // // // // // // // // // // // // // // // // // // //
            Route::get('NazmyText/{id}', 'NazmyController@NazmyText')->name('NazmyText');
            //  // // // // // // // // // // // // // // // // // // //
            Route::get('NazmyCategorie/{id}', 'NazmyController@NazmyCategorie')->name('NazmyCategorie');

            

            
            

            // poemsController

            Route::get('testone', 'poemsController@testone')->name('testone');

            Route::get('poem1', 'poemsController@index')->name('poem1');
            //  // // // // // // // // // // // // // // // // // // //
            Route::get('poem2', 'poemsController@index1')->name('poem2');
            //  // // // // // // // // // // // // // // // // // // //
            Route::get('poem3', 'poemsController@index2')->name('poem3');
            //  // // // // // // // // // // // // // // // // // // //
            Route::get('show/{id}', 'poemsController@show')->name('show');
            //  // // // // // // // // // // // // // // // // // // //
            Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
            //  // // // // // // // // // // // // // // // // // // //
            Route::get('listen/{id}', 'poemsController@listen')->name('listen');
            //  // // // // // // // // // // // // // // // // // // //
            Route::get('explained/{id}', 'poemsController@explained')->name('explained');
            //  // // // // // // // // // // // // // // // // // // //










            // tfcerController

            Route::get('tfcer', 'tfcerController@index')->name('tfcer');
            //  // // // // // // // // // // // // // // // // // // //
            Route::get('tafser/{sura}/aya/{aya}', 'tfcerController@getTafser');
            //  // // // // // // // // // // // // // // // // // // //
            Route::get('buttons/{sura}/aya/{aya}', 'tfcerController@getButtons');







            // marakyController

            Route::get('maraky', 'marakyController@index')->name('maraky');
            //  // // // // // // // // // // // // // // // // // // //
            Route::get('sharia/{id}', 'marakyController@sharia')->name('sharia');
            //  // // // // // // // // // // // // // // // // // // //
            Route::get('truth', 'marakyController@truth')->name('truth');
            //  // // // // // // // // // // // // // // // // // // //
            Route::get('method', 'marakyController@method')->name('method');
            //  // // // // // // // // // // // // // // // // // // //

            Route::get('manhg', 'marakyController@manhg')->name('manhg');
            //  // // // // // // // // // // // // // // // // // // //

            Route::get('line', 'marakyController@line')->name('line');
            //  // // // // // // // // // // // // // // // // // // //


            Route::get('swra_name', 'TestController@swra_name')->name('swra_name');
            //  // // // // // // // // // // // // // // // // // // //

            Route::get('quran/{index}', 'TestController@testquran')->name('testquran');
            Route::get('swra_voice/{index}', 'TestController@swra_voice')->name('swra_voice');
            //  // // // // // // // // // // // // // // // // // // //

            Route::get('tafseer/{SuraID}/verse/{VerseID}', 'TestController@test_tafseer')->name('test_tafseer');

            Route::get('previo_tafseer/{SuraID}/verse/{VerseID}', 'TestController@test_tafseer_previo')->name('previo_tafseer');

            Route::get('next_tafseer/{SuraID}/verse/{VerseID}', 'TestController@test_tafseer_next')->name('next_tafseer');
            //  // // // // // // // // // // // // // // // // // // //

            Route::get('shikh', 'TestVoiseController@shikh_name')->name('test_shikh');
            Route::get('voice/{id}', 'TestVoiseController@sowra_voise')->name('testvoice');
        });


        Auth::routes();
    }
);






Route::get('/home', 'HomeController@index')->name('home');
