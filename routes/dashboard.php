<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Dashboard\DashboardController;
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

Route::prefix('dashboard')->name('dashboard.')->group(function () {
    Route::prefix('contact')->name('contact.')->group(function () {

        Route::get('index', 'ContactsController@index')->name('index');
        Route::get('create', 'ContactsController@create')->name('create');
        Route::post('store', 'ContactsController@store')->name('store');
        Route::get('edit/{id}', 'ContactsController@edit')->name('edit');
        Route::get('show/{id}', 'ContactsController@show')->name('show');
        Route::post('update/{id}', 'ContactsController@update')->name('update');
        Route::get('destroy/{id}', 'ContactsController@destroy')->name('destroy');
    });
});

Route::middleware(['auth'])->prefix('dashboard')->name('dashboard.')->group(function () {

    Route::get('index', 'DashboardController@index')->name('index');


    // home page
    // // // // // // // // // // // // // // // // // // // // // // // // // // //
    Route::prefix('card')->name('card.')->group(function () {

        Route::get('index', 'cardController@index')->name('index');
        Route::get('create', 'cardController@create')->name('create');
        Route::post('store', 'cardController@store')->name('store');
        Route::get('show/{id}', 'cardController@show')->name('show');
        Route::get('edit/{id}', 'cardController@edit')->name('edit');
        Route::post('update/{id}', 'cardController@update')->name('update');
        Route::get('destroy/{id}', 'cardController@destroy')->name('destroy');
    });

    Route::prefix('home_quran')->name('home_quran.')->group(function () {

        Route::get('index', 'Home_QuranController@index')->name('index');
        Route::get('create', 'Home_QuranController@create')->name('create');
        Route::post('store', 'Home_QuranController@store')->name('store');
        Route::get('edit/{id}', 'Home_QuranController@edit')->name('edit');
        Route::post('update/{id}', 'Home_QuranController@update')->name('update');
        Route::get('destroy/{id}', 'Home_QuranController@destroy')->name('destroy');
    });
     // end  home page
     // // // // // // // // // // // // // // // // // // // // // // // // // // //


     // about imam page
    // // // // // // // // // // // // // // // // // // // // // // // // // // //
    Route::prefix('home_imam')->name('home_imam.')->group(function () {

        Route::get('index', 'Home_ImamController@index')->name('index');
        Route::get('create', 'Home_ImamController@create')->name('create');
        Route::post('store', 'Home_ImamController@store')->name('store');
        Route::get('show/{id}', 'Home_ImamController@show')->name('show');
        Route::get('edit/{id}', 'Home_ImamController@edit')->name('edit');
        Route::post('update/{id}', 'Home_ImamController@update')->name('update');
        Route::get('destroy/{id}', 'Home_ImamController@destroy')->name('destroy');
    });

    Route::prefix('AboutImam')->name('AboutImam.')->group(function () {

        Route::get('index', 'AboutImamController@index')->name('index');
        Route::get('create', 'AboutImamController@create')->name('create');
        Route::post('store', 'AboutImamController@store')->name('store');
        Route::get('show/{id}', 'AboutImamController@show')->name('show');
        Route::get('edit/{id}', 'AboutImamController@edit')->name('edit');
        Route::post('update/{id}', 'AboutImamController@update')->name('update');
        Route::get('destroy/{id}', 'AboutImamController@destroy')->name('destroy');
    });

    Route::prefix('ImamLibrary')->name('ImamLibrary.')->group(function () {

        Route::get('index', 'ImamLibraryController@index')->name('index');
        Route::get('create', 'ImamLibraryController@create')->name('create');
        Route::post('store', 'ImamLibraryController@store')->name('store');
        Route::get('edit/{id}', 'ImamLibraryController@edit')->name('edit');
        Route::post('update/{id}', 'ImamLibraryController@update')->name('update');
        Route::get('destroy/{id}', 'ImamLibraryController@destroy')->name('destroy');
    });


    Route::prefix('ImamBook')->name('ImamBook.')->group(function () {

        Route::get('index/{id}', 'ImamBookController@index')->name('index');
        Route::get('create/{id}', 'ImamBookController@create')->name('create');
        Route::post('store', 'ImamBookController@store')->name('store');
        Route::get('show/{id}/{id_button}', 'ImamBookController@show')->name('show');
        Route::get('edit/{id}/{id_button}', 'ImamBookController@edit')->name('edit');
        Route::post('update/{id}', 'ImamBookController@update')->name('update');
        Route::get('destroy/{id}/{id_button}', 'ImamBookController@destroy')->name('destroy');
    });

    Route::prefix('ImamText')->name('ImamText.')->group(function () {

        Route::get('index/{id}', 'ImamTextController@index')->name('index');
        Route::get('create/{id}', 'ImamTextController@create')->name('create');
        Route::post('store', 'ImamTextController@store')->name('store');
        Route::get('show/{id}/{id_button}', 'ImamTextController@show')->name('show');
        Route::get('edit/{id}/{id_button}', 'ImamTextController@edit')->name('edit');
        Route::post('update/{id}', 'ImamTextController@update')->name('update');
        Route::get('destroy/{id}/{id_button}', 'ImamTextController@destroy')->name('destroy');
    });
     // end about imam page
    // // // // // // // // // // // // // // // // // // // // // // // // // // //



    // about University page
    // // // // // // // // // // // // // // // // // // // // // // // // // // //
    Route::prefix('AboutUniversity')->name('AboutUniversity.')->group(function () {

        Route::get('index', 'AboutUniversityController@index')->name('index');
        Route::get('create', 'AboutUniversityController@create')->name('create');
        Route::post('store', 'AboutUniversityController@store')->name('store');
        Route::get('show/{id}', 'AboutUniversityController@show')->name('show');
        Route::get('edit/{id}', 'AboutUniversityController@edit')->name('edit');
        Route::post('update/{id}', 'AboutUniversityController@update')->name('update');
        Route::get('destroy/{id}', 'AboutUniversityController@destroy')->name('destroy');
    });

    Route::prefix('UniversityLibrary')->name('UniversityLibrary.')->group(function () {

        Route::get('index', 'UniversityLibraryController@index')->name('index');
        Route::get('create', 'UniversityLibraryController@create')->name('create');
        Route::post('store', 'UniversityLibraryController@store')->name('store');
        Route::get('edit/{id}', 'UniversityLibraryController@edit')->name('edit');
        Route::post('update/{id}', 'UniversityLibraryController@update')->name('update');
        Route::get('destroy/{id}', 'UniversityLibraryController@destroy')->name('destroy');
    });
    Route::prefix('UniversityBook')->name('UniversityBook.')->group(function () {

        Route::get('index/{id}', 'UniversityBookController@index')->name('index');
        Route::get('create/{id}', 'UniversityBookController@create')->name('create');
        Route::post('store', 'UniversityBookController@store')->name('store');
        Route::get('show/{id}/{id_button}', 'UniversityBookController@show')->name('show');
        Route::get('edit/{id}/{id_button}', 'UniversityBookController@edit')->name('edit');
        Route::post('update/{id}', 'UniversityBookController@update')->name('update');
        Route::get('destroy/{id}/{id_button}', 'UniversityBookController@destroy')->name('destroy');
    });

    Route::prefix('UniversityText')->name('UniversityText.')->group(function () {

        Route::get('index/{id}', 'UniversityTextController@index')->name('index');
        Route::get('create/{id}', 'UniversityTextController@create')->name('create');
        Route::post('store', 'UniversityTextController@store')->name('store');
        Route::get('show/{id}/{id_button}', 'UniversityTextController@show')->name('show');
        Route::get('edit/{id}/{id_button}', 'UniversityTextController@edit')->name('edit');
        Route::post('update/{id}', 'UniversityTextController@update')->name('update');
        Route::get('destroy/{id}/{id_button}', 'UniversityTextController@destroy')->name('destroy');
    });
    // end about University page
    // // // // // // // // // // // // // // // // // // // // // // // // // // //

    //  Tafsir pdf  page
    // // // // // // // // // // // // // // // // // // // // // // // // // // //

    Route::prefix('TafsirBook')->name('TafsirBook.')->group(function () {

        Route::get('index/{id}', 'TafsirBookController@index')->name('index');
        Route::get('create/{id}', 'TafsirBookController@create')->name('create');
        Route::post('store', 'TafsirBookController@store')->name('store');
        Route::get('show/{id}/{id_button}', 'TafsirBookController@show')->name('show');
        Route::get('edit/{id}/{id_button}', 'TafsirBookController@edit')->name('edit');
        Route::post('update/{id}', 'TafsirBookController@update')->name('update');
        Route::get('destroy/{id}/{id_button}', 'TafsirBookController@destroy')->name('destroy');
    });

    Route::prefix('TafsirLibrary')->name('TafsirLibrary.')->group(function () {

        Route::get('index', 'TafsirLibraryController@index')->name('index');
        Route::get('create', 'TafsirLibraryController@create')->name('create');
        Route::post('store', 'TafsirLibraryController@store')->name('store');
        Route::get('edit/{id}', 'TafsirLibraryController@edit')->name('edit');
        Route::post('update/{id}', 'TafsirLibraryController@update')->name('update');
        Route::get('destroy/{id}', 'TafsirLibraryController@destroy')->name('destroy');
    });
    // end  Tafsir pdf page
    // // // // // // // // // // // // // // // // // // // // // // // // // // //

    //  Nacry  page
    // // // // // // // // // // // // // // // // // // // // // // // // // // //
    Route::prefix('AboutProse')->name('AboutProse.')->group(function () {

        Route::get('index', 'AboutProseController@index')->name('index');
        Route::get('create', 'AboutProseController@create')->name('create');
        Route::post('store', 'AboutProseController@store')->name('store');
        Route::get('show/{id}', 'AboutProseController@show')->name('show');
        Route::get('edit/{id}', 'AboutProseController@edit')->name('edit');
        Route::post('update/{id}', 'AboutProseController@update')->name('update');
        Route::get('destroy/{id}', 'AboutProseController@destroy')->name('destroy');
    });

    Route::prefix('ProseLibrary')->name('ProseLibrary.')->group(function () {

        Route::get('index', 'ProseLibraryController@index')->name('index');
        Route::get('create', 'ProseLibraryController@create')->name('create');
        Route::post('store', 'ProseLibraryController@store')->name('store');
        Route::get('edit/{id}', 'ProseLibraryController@edit')->name('edit');
        Route::post('update/{id}', 'ProseLibraryController@update')->name('update');
        Route::get('destroy/{id}', 'ProseLibraryController@destroy')->name('destroy');
    });
    Route::prefix('ProseBook')->name('ProseBook.')->group(function () {

        Route::get('index/{id}', 'ProseBookController@index')->name('index');
        Route::get('create/{id}', 'ProseBookController@create')->name('create');
        Route::post('store', 'ProseBookController@store')->name('store');
        Route::get('show/{id}/{id_button}', 'ProseBookController@show')->name('show');
        Route::get('edit/{id}/{id_button}', 'ProseBookController@edit')->name('edit');
        Route::post('update/{id}', 'ProseBookController@update')->name('update');
        Route::get('destroy/{id}/{id_button}', 'ProseBookController@destroy')->name('destroy');
    });
    Route::prefix('ProseText')->name('ProseText.')->group(function () {

        Route::get('index/{id}', 'ProseTextController@index')->name('index');
        Route::get('create/{id}', 'ProseTextController@create')->name('create');
        Route::post('store', 'ProseTextController@store')->name('store');
        Route::get('show/{id}/{id_button}', 'ProseTextController@show')->name('show');
        Route::get('edit/{id}/{id_button}', 'ProseTextController@edit')->name('edit');
        Route::post('update/{id}', 'ProseTextController@update')->name('update');
        Route::get('destroy/{id}/{id_button}', 'ProseTextController@destroy')->name('destroy');
    });
    Route::prefix('NacryLibrary')->name('NacryLibrary.')->group(function () {

        Route::get('index', 'NacryLibraryController@index')->name('index');
        Route::get('create', 'NacryLibraryController@create')->name('create');
        Route::post('store', 'NacryLibraryController@store')->name('store');
        Route::get('edit/{id}}', 'NacryLibraryController@edit')->name('edit');
        Route::post('update/{id}', 'NacryLibraryController@update')->name('update');
        Route::get('destroy/{id}', 'NacryLibraryController@destroy')->name('destroy');
    });
    Route::prefix('NacryText')->name('NacryText.')->group(function () {

        Route::get('index/{id}', 'NacryTextController@index')->name('index');
        Route::get('create/{id}', 'NacryTextController@create')->name('create');
        Route::post('store', 'NacryTextController@store')->name('store');
        Route::get('show/{id}/{id_button}', 'NacryTextController@show')->name('show');
        Route::get('edit/{id}/{id_button}', 'NacryTextController@edit')->name('edit');
        Route::post('update/{id}', 'NacryTextController@update')->name('update');
        Route::get('destroy/{id}/{id_button}', 'NacryTextController@destroy')->name('destroy');
    });
    Route::prefix('ProseCategorie')->name('ProseCategorie.')->group(function () {

        Route::get('index/{id}', 'ProseCategorieController@index')->name('index');
        Route::get('create/{id}', 'ProseCategorieController@create')->name('create');
        Route::post('store', 'ProseCategorieController@store')->name('store');
        Route::get('edit/{id}/{id_button}', 'ProseCategorieController@edit')->name('edit');
        Route::post('update/{id}', 'ProseCategorieController@update')->name('update');
        Route::get('destroy/{id}/{id_button}', 'ProseCategorieController@destroy')->name('destroy');
    });

    // end  Nacry  page
    // // // // // // // // // // // // // // // // // // // // // // // // // // //


     //   Nazmy  page
    // // // // // // // // // // // // // // // // // // // // // // // // // // //
    Route::prefix('AboutNazmy')->name('AboutNazmy.')->group(function () {
        Route::get('index', 'AboutNazmyController@index')->name('index');
        Route::get('create', 'AboutNazmyController@create')->name('create');
        Route::post('store', 'AboutNazmyController@store')->name('store');
        Route::get('show/{id}', 'AboutNazmyController@show')->name('show');
        Route::get('edit/{id}', 'AboutNazmyController@edit')->name('edit');
        Route::post('update/{id}', 'AboutNazmyController@update')->name('update');
        Route::get('destroy/{id}', 'AboutNazmyController@destroy')->name('destroy');
    });
    Route::prefix('NazmyLibrary')->name('NazmyLibrary.')->group(function () {

        Route::get('index', 'NazmyLibraryController@index')->name('index');
        Route::get('create', 'NazmyLibraryController@create')->name('create');
        Route::post('store', 'NazmyLibraryController@store')->name('store');
        Route::get('edit/{id}', 'NazmyLibraryController@edit')->name('edit');
        Route::post('update/{id}', 'NazmyLibraryController@update')->name('update');
        Route::get('destroy/{id}', 'NazmyLibraryController@destroy')->name('destroy');
    });
    Route::prefix('NazmyBook ')->name('NazmyBook.')->group(function () {

        Route::get('index/{id}', 'NazmyBookController@index')->name('index');
        Route::get('create/{id}', 'NazmyBookController@create')->name('create');
        Route::post('store', 'NazmyBookController@store')->name('store');
        Route::get('show/{id}/{id_button}', 'NazmyBookController@show')->name('show');
        Route::get('edit/{id}/{id_button}', 'NazmyBookController@edit')->name('edit');
        Route::post('update/{id}', 'NazmyBookController@update')->name('update');
        Route::get('destroy/{id}/{id_button}', 'NazmyBookController@destroy')->name('destroy');
    });
    Route::prefix('NazmyText')->name('NazmyText.')->group(function () {

        Route::get('index/{id}', 'NazmyTextController@index')->name('index');
        Route::get('create/{id}', 'NazmyTextController@create')->name('create');
        Route::post('store', 'NazmyTextController@store')->name('store');
        Route::get('show/{id}/{id_button}', 'NazmyTextController@show')->name('show');
        Route::get('edit/{id}/{id_button}', 'NazmyTextController@edit')->name('edit');
        Route::post('update/{id}', 'NazmyTextController@update')->name('update');
        Route::get('destroy/{id}/{id_button}', 'NazmyTextController@destroy')->name('destroy');
    });
    Route::prefix('CategorieText')->name('CategorieText.')->group(function () {

        Route::get('index/{id}', 'CategorieTextController@index')->name('index');
        Route::get('create/{id}', 'CategorieTextController@create')->name('create');
        Route::post('store', 'CategorieTextController@store')->name('store');
        Route::get('show/{id}/{id_button}', 'CategorieTextController@show')->name('show');
        Route::get('edit/{id}/{id_button}', 'CategorieTextController@edit')->name('edit');
        Route::post('update/{id}', 'CategorieTextController@update')->name('update');
        Route::get('destroy/{id}/{id_button}', 'CategorieTextController@destroy')->name('destroy');
    });
    Route::prefix('NazmyCategorie')->name('NazmyCategorie.')->group(function () {

        Route::get('index/{id}', 'NazmyCategorieController@index')->name('index');
        Route::get('create/{id}', 'NazmyCategorieController@create')->name('create');
        Route::post('store', 'NazmyCategorieController@store')->name('store');
        Route::get('edit/{id}/{id_button}', 'NazmyCategorieController@edit')->name('edit');
        Route::post('update/{id}', 'NazmyCategorieController@update')->name('update');
        Route::get('destroy/{id}/{id_button}', 'NazmyCategorieController@destroy')->name('destroy');
    });

    // end  Nazmy  page
    // // // // // // // // // // // // // // // // // // // // // // // // // // //


     //   poem  page
    // // // // // // // // // // // // // // // // // // // // // // // // // // //
    Route::prefix('poems')->name('poems.')->group(function () {

        Route::get('index', 'poemsController@index')->name('index');
        Route::get('create', 'poemsController@create')->name('create');
        Route::post('store', 'poemsController@store')->name('store');
        Route::get('edit/{id}', 'poemsController@edit')->name('edit');
        Route::get('show/{id}', 'poemsController@show')->name('show');
        Route::post('update/{id}', 'poemsController@update')->name('update');
        Route::get('destroy/{id}', 'poemsController@destroy')->name('destroy');
        Route::get('abyat/edit/{id}', 'poemsController@editAbyat')->name('edit_abyat');
        Route::put('abyat/update/{id}', 'poemsController@updateAbyat')->name('update_abyat');
    });
    Route::prefix('poem_rawy')->name('poem_rawy.')->group(function () {

        Route::get('index', 'poem_rawyController@index')->name('index');
        Route::get('create/{id}', 'poem_rawyController@create')->name('create');
        Route::get('show/{id}', 'poem_rawyController@show')->name('show');
        Route::post('store', 'poem_rawyController@store')->name('store');
        Route::get('edit/{id}', 'poem_rawyController@edit')->name('edit');
        Route::post('update/{id}', 'poem_rawyController@update')->name('update');
        Route::get('destroy/{id}', 'poem_rawyController@destroy')->name('destroy');

        Route::get('export', 'poem_rawyController@export')->name('export');
        Route::get('importExportView', 'poem_rawyController@importExportView');
        Route::post('import', 'poem_rawyController@import')->name('import');
    });
    Route::prefix('listen')->name('listen.')->group(function () {

        Route::get('index', 'ListenController@index')->name('index');
        Route::get('create', 'ListenController@create')->name('create');
        Route::post('store', 'ListenController@store')->name('store');
        Route::get('show/{id}', 'ListenController@show')->name('show');
        Route::get('edit/{id}', 'ListenController@edit')->name('edit');
        Route::post('update/{id}', 'ListenController@update')->name('update');
        Route::get('destroy/{id}', 'ListenController@destroy')->name('destroy');
    });
    Route::prefix('explained')->name('explained.')->group(function () {

        Route::get('index', 'ExplainedController@index')->name('index');
        Route::get('create', 'ExplainedController@create')->name('create');
        Route::post('store', 'ExplainedController@store')->name('store');
        Route::get('show/{id}', 'ExplainedController@show')->name('show');
        Route::get('edit/{id}', 'ExplainedController@edit')->name('edit');
        Route::post('update/{id}', 'ExplainedController@update')->name('update');
        Route::get('destroy/{id}', 'ExplainedController@destroy')->name('destroy');
    });
     // end  poem  page
    // // // // // // // // // // // // // // // // // // // // // // // // // // //




     //   Maraky  page
    // // // // // // // // // // // // // // // // // // // // // // // // // // //
    Route::prefix('categorie')->name('categorie.')->group(function () {
        Route::get('index', 'categoriesController@index')->name('index');
        Route::get('create', 'categoriesController@create')->name('create');
        Route::post('store', 'categoriesController@store')->name('store');
        Route::get('edit/{id}', 'categoriesController@edit')->name('edit');
        Route::post('update/{id}', 'categoriesController@update')->name('update');
        Route::get('destroy/{id}', 'categoriesController@destroy')->name('destroy');

        Route::get('export', 'categoriesController@export')->name('export');
        Route::get('importExportView', 'categoriesController@importExportView');
        Route::post('import', 'categoriesController@import')->name('import');
    });
    Route::prefix('MarakyText')->name('MarakyText.')->group(function () {

        Route::get('index', 'MarakyTextController@index')->name('index');
        Route::get('create', 'MarakyTextController@create')->name('create');
        Route::post('store', 'MarakyTextController@store')->name('store');
        Route::get('edit/{id}', 'MarakyTextController@edit')->name('edit');
        Route::post('update/{id}', 'MarakyTextController@update')->name('update');
        Route::get('destroy/{id}', 'MarakyTextController@destroy')->name('destroy');
    });
    Route::prefix('post')->name('post.')->group(function () {

        Route::get('index/{id}', 'PostController@index')->name('index');
        Route::get('create/{id}', 'PostController@create')->name('create');
        Route::post('store', 'PostController@store')->name('store');
        Route::get('edit/{id}/{id_button}', 'PostController@edit')->name('edit');
        Route::get('show/{id}/{id_button}', 'PostController@show')->name('show');
        Route::post('update/{id}', 'PostController@update')->name('update');
        Route::get('destroy/{id}/{id_button}', 'PostController@destroy')->name('destroy');
    });
     // end  Maraky  page
    // // // // // // // // // // // // // // // // // // // // // // // // // // //


      //   quran  page
    // // // // // // // // // // // // // // // // // // // // // // // // // // //
    Route::prefix('imams')->name('imams.')->group(function () {

        Route::get('index', 'imamstController@index')->name('index');
        Route::get('create', 'imamstController@create')->name('create');
        Route::post('store', 'imamstController@store')->name('store');
        Route::get('edit/{id}', 'imamstController@edit')->name('edit');
        Route::post('update/{id}', 'imamstController@update')->name('update');
        Route::get('destroy/{id}', 'imamstController@destroy')->name('destroy');
    });
    Route::prefix('ayat')->name('ayat.')->group(function () {

        Route::get('index', 'AyatController@index')->name('index');
        Route::get('create', 'AyatController@create')->name('create');
        Route::post('store', 'AyatController@store')->name('store');
        Route::get('edit/{id}', 'AyatController@edit')->name('edit');
        Route::post('update/{id}', 'AyatController@update')->name('update');
        Route::get('destroy/{id}', 'AyatController@destroy')->name('destroy');
    });
    Route::prefix('student_tafser')->name('student_tafser.')->group(function () {

        Route::get('index', 'Student_tafserController@index')->name('index');
        Route::get('create', 'Student_tafserController@create')->name('create');
        Route::post('store', 'Student_tafserController@store')->name('store');
        Route::get('edit/{id}', 'Student_tafserController@edit')->name('edit');
        Route::get('show/{id}', 'Student_tafserController@show')->name('show');
        Route::post('update/{id}', 'Student_tafserController@update')->name('update');
        Route::get('destroy/{id}', 'Student_tafserController@destroy')->name('destroy');
    });
    Route::prefix('tafser')->name('tafser.')->group(function () {

        Route::get('index', 'TafserController@index')->name('index');
        Route::get('create', 'TafserController@create')->name('create');
        Route::post('store', 'TafserController@store')->name('store');
        Route::get('edit/{id}', 'TafserController@edit')->name('edit');
        Route::get('show/{id}', 'TafserController@show')->name('show');
        Route::post('update/{id}', 'TafserController@update')->name('update');
        Route::get('destroy/{id}', 'TafserController@destroy')->name('destroy');
        Route::get('getAya/{id}', 'TafserController@getAya')->name('getAya');
        Route::get('getSoura', 'TafserController@getSoura')->name('getSoura');
    });
    Route::prefix('student')->name('student.')->group(function () {

        Route::get('index', 'StudentController@index')->name('index');
        Route::get('create', 'StudentController@create')->name('create');
        Route::post('store', 'StudentController@store')->name('store');
        Route::get('edit/{id}', 'StudentController@edit')->name('edit');
        Route::post('update/{id}', 'StudentController@update')->name('update');
        Route::get('destroy/{id}', 'StudentController@destroy')->name('destroy');
    });
    Route::prefix('type')->name('type.')->group(function () {

        Route::get('index', 'TypeController@index')->name('index');
        Route::get('create', 'TypeController@create')->name('create');
        Route::post('store', 'TypeController@store')->name('store');
        Route::get('edit/{id}', 'TypeController@edit')->name('edit');
        Route::post('update/{id}', 'TypeController@update')->name('update');
        Route::get('destroy/{id}', 'TypeController@destroy')->name('destroy');
    });
      // end quran  page
    // // // // // // // // // // // // // // // // // // // // // // // // // // //



      //   Disciples  page
    // // // // // // // // // // // // // // // // // // // // // // // // // // //
    Route::prefix('AboutDisciples')->name('AboutDisciples.')->group(function () {

        Route::get('index', 'AboutDisciplesController@index')->name('index');
        Route::get('create', 'AboutDisciplesController@create')->name('create');
        Route::post('store', 'AboutDisciplesController@store')->name('store');
        Route::get('show/{id}', 'AboutDisciplesController@show')->name('show');
        Route::get('edit/{id}', 'AboutDisciplesController@edit')->name('edit');
        Route::post('update/{id}', 'AboutDisciplesController@update')->name('update');
        Route::get('destroy/{id}', 'AboutDisciplesController@destroy')->name('destroy');
    });
    Route::prefix('ImamDisciples')->name('ImamDisciples.')->group(function () {

        Route::get('index', 'ImamDisciplesController@index')->name('index');
        Route::get('create', 'ImamDisciplesController@create')->name('create');
        Route::post('store', 'ImamDisciplesController@store')->name('store');
        Route::get('edit/{id}', 'ImamDisciplesController@edit')->name('edit');
        Route::post('update/{id}', 'ImamDisciplesController@update')->name('update');
        Route::get('destroy/{id}', 'ImamDisciplesController@destroy')->name('destroy');
    });
    Route::prefix('DisciplesText')->name('DisciplesText.')->group(function () {

        Route::get('index/{id}', 'DisciplesTextController@index')->name('index');
        Route::get('create/{id}', 'DisciplesTextController@create')->name('create');
        Route::post('store', 'DisciplesTextController@store')->name('store');
        Route::get('show/{id}/{id_button}', 'DisciplesTextController@show')->name('show');
        Route::get('edit/{id}/{id_button}', 'DisciplesTextController@edit')->name('edit');
        Route::post('update/{id}', 'DisciplesTextController@update')->name('update');
        Route::get('destroy/{id}/{id_button}', 'DisciplesTextController@destroy')->name('destroy');
    });
    Route::prefix('ButtonType')->name('ButtonType.')->group(function () {

        Route::get('index/{id}', 'ButtonTypeController@index')->name('index');
        Route::get('create/{id}', 'ButtonTypeController@create')->name('create');
        Route::post('store', 'ButtonTypeController@store')->name('store');
        Route::get('edit/{id}/{id_button}', 'ButtonTypeController@edit')->name('edit');
        Route::post('update/{id}', 'ButtonTypeController@update')->name('update');
        Route::get('destroy/{id}/{id_button}', 'ButtonTypeController@destroy')->name('destroy');
    });
    Route::prefix('PdfButton')->name('PdfButton.')->group(function () {

        Route::get('index/{id}', 'PdfButtonController@index')->name('index');
        Route::get('create/{id}', 'PdfButtonController@create')->name('create');
        Route::post('store', 'PdfButtonController@store')->name('store');
        Route::get('show/{id}/{id_button}', 'PdfButtonController@show')->name('show');
        Route::get('edit/{id}/{id_button}', 'PdfButtonController@edit')->name('edit');
        Route::post('update/{id}', 'PdfButtonController@update')->name('update');
        Route::get('destroy/{id}/{id_button}', 'PdfButtonController@destroy')->name('destroy');
    });
    Route::prefix('TextButton')->name('TextButton.')->group(function () {

        Route::get('index/{id}', 'TextButtonController@index')->name('index');
        Route::get('create/{id}', 'TextButtonController@create')->name('create');
        Route::post('store', 'TextButtonController@store')->name('store');
        Route::get('show/{id}/{id_button}', 'TextButtonController@show')->name('show');
        Route::get('edit/{id}/{id_button}', 'TextButtonController@edit')->name('edit');
        Route::post('update/{id}', 'TextButtonController@update')->name('update');
        Route::get('destroy/{id}/{id_button}', 'TextButtonController@destroy')->name('destroy');
    });
    Route::prefix('VideoButton')->name('VideoButton.')->group(function () {

        Route::get('index/{id}', 'VideoButtonController@index')->name('index');
        Route::get('create/{id}', 'VideoButtonController@create')->name('create');
        Route::post('store', 'VideoButtonController@store')->name('store');
        Route::get('show/{id}/{id_button}', 'VideoButtonController@show')->name('show');
        Route::get('edit/{id}/{id_button}', 'VideoButtonController@edit')->name('edit');
        Route::post('update/{id}', 'VideoButtonController@update')->name('update');
        Route::get('destroy/{id}/{id_button}', 'VideoButtonController@destroy')->name('destroy');
    });
    Route::prefix('AudioButton')->name('AudioButton.')->group(function () {

        Route::get('index/{id}', 'AudioButtonController@index')->name('index');
        Route::get('create/{id}', 'AudioButtonController@create')->name('create');
        Route::post('store', 'AudioButtonController@store')->name('store');
        Route::get('show/{id}/{id_button}', 'AudioButtonController@show')->name('show');
        Route::get('edit/{id}/{id_button}', 'AudioButtonController@edit')->name('edit');
        Route::post('update/{id}', 'AudioButtonController@update')->name('update');
        Route::get('destroy/{id}/{id_button}', 'AudioButtonController@destroy')->name('destroy');
    });

       // end Disciples  page
    // // // // // // // // // // // // // // // // // // // // // // // // // // //




     //  Eltasof  page
    // // // // // // // // // // // // // // // // // // // // // // // // // // //
    Route::prefix('AboutEltasof')->name('AboutEltasof.')->group(function () {

        Route::get('index', 'AboutEltasofController@index')->name('index');
        Route::get('create', 'AboutEltasofController@create')->name('create');
        Route::post('store', 'AboutEltasofController@store')->name('store');
        Route::get('show/{id}', 'AboutEltasofController@show')->name('show');
        Route::get('edit/{id}', 'AboutEltasofController@edit')->name('edit');
        Route::post('update/{id}', 'AboutEltasofController@update')->name('update');
        Route::get('destroy/{id}', 'AboutEltasofController@destroy')->name('destroy');
    });
    Route::prefix('EltasofLibrary')->name('EltasofLibrary.')->group(function () {

        Route::get('index', 'EltasofLibraryController@index')->name('index');
        Route::get('create', 'EltasofLibraryController@create')->name('create');
        Route::post('store', 'EltasofLibraryController@store')->name('store');
        Route::get('edit/{id}', 'EltasofLibraryController@edit')->name('edit');
        Route::post('update/{id}', 'EltasofLibraryController@update')->name('update');
        Route::get('destroy/{id}', 'EltasofLibraryController@destroy')->name('destroy');
    });
    Route::prefix('EltasofBook')->name('EltasofBook.')->group(function () {

        Route::get('index/{id}', 'EltasofBookController@index')->name('index');
        Route::get('create/{id}', 'EltasofBookController@create')->name('create');
        Route::post('store', 'EltasofBookController@store')->name('store');
        Route::get('show/{id}/{id_button}', 'EltasofBookController@show')->name('show');
        Route::get('edit/{id}/{id_button}', 'EltasofBookController@edit')->name('edit');
        Route::post('update/{id}', 'EltasofBookController@update')->name('update');
        Route::get('destroy/{id}/{id_button}', 'EltasofBookController@destroy')->name('destroy');
    });
    Route::prefix('EltasofText ')->name('EltasofText.')->group(function () {
        Route::get('index/{id}', 'EltasofTextController@index')->name('index');
        Route::get('create/{id}', 'EltasofTextController@create')->name('create');
        Route::post('store', 'EltasofTextController@store')->name('store');
        Route::get('show/{id}/{id_button}', 'EltasofTextController@show')->name('show');
        Route::get('edit/{id}/{id_button}', 'EltasofTextController@edit')->name('edit');
        Route::post('update/{id}', 'EltasofTextController@update')->name('update');
        Route::get('destroy/{id}/{id_button}', 'EltasofTextController@destroy')->name('destroy');
    });
     // end Eltasof  page
    // // // // // // // // // // // // // // // // // // // // // // // // // // //


     //  Library  Audio and Video  page
    // // // // // // // // // // // // // // // // // // // // // // // // // // //
    Route::prefix('MediaLibrary')->name('MediaLibrary.')->group(function () {

        Route::get('index', 'MediaLibraryController@index')->name('index');
        Route::get('create', 'MediaLibraryController@create')->name('create');
        Route::post('store', 'MediaLibraryController@store')->name('store');
        Route::get('edit/{id}', 'MediaLibraryController@edit')->name('edit');
        Route::post('update/{id}', 'MediaLibraryController@update')->name('update');
        Route::get('destroy/{id}', 'MediaLibraryController@destroy')->name('destroy');
    });
    Route::prefix('MediaText')->name('MediaText.')->group(function () {

        Route::get('index/{id}', 'MediaTextController@index')->name('index');
        Route::get('create/{id}', 'MediaTextController@create')->name('create');
        Route::post('store', 'MediaTextController@store')->name('store');
        Route::get('show/{id}}/{id_button}', 'MediaTextController@show')->name('show');
        Route::get('edit/{id}/{id_button}', 'MediaTextController@edit')->name('edit');
        Route::post('update/{id}', 'MediaTextController@update')->name('update');
        Route::get('destroy/{id}/{id_button}', 'MediaTextController@destroy')->name('destroy');
    });
    Route::prefix('ButtonLibrary')->name('ButtonLibrary.')->group(function () {

        Route::get('index', 'ButtonLibraryController@index')->name('index');
        Route::get('create', 'ButtonLibraryController@create')->name('create');
        Route::post('store', 'ButtonLibraryController@store')->name('store');
        Route::get('show/{id}}', 'ButtonLibraryController@show')->name('show');
        Route::get('edit/{id}', 'ButtonLibraryController@edit')->name('edit');
        Route::post('update/{id}', 'ButtonLibraryController@update')->name('update');
        Route::get('destroy/{id}', 'ButtonLibraryController@destroy')->name('destroy');
    });
    Route::prefix('AudioLibrary')->name('AudioLibrary.')->group(function () {

        Route::get('index/{id}', 'AudioLibraryController@index')->name('index');
        Route::get('create/{id}', 'AudioLibraryController@create')->name('create');
        Route::post('store', 'AudioLibraryController@store')->name('store');
        Route::get('show/{id}}/{id_button}', 'AudioLibraryController@show')->name('show');
        Route::get('edit/{id}/{id_button}', 'AudioLibraryController@edit')->name('edit');
        Route::post('update/{id}', 'AudioLibraryController@update')->name('update');
        Route::get('destroy/{id}/{id_button}', 'AudioLibraryController@destroy')->name('destroy');
    });
    Route::prefix('VideoLibrary')->name('VideoLibrary.')->group(function () {

        Route::get('index/{id}', 'VideoLibraryController@index')->name('index');
        Route::get('create/{id}', 'VideoLibraryController@create')->name('create');
        Route::post('store', 'VideoLibraryController@store')->name('store');
        Route::get('show/{id}}/{id_button}', 'VideoLibraryController@show')->name('show');
        Route::get('edit/{id}/{id_button}', 'VideoLibraryController@edit')->name('edit');
        Route::post('update/{id}', 'VideoLibraryController@update')->name('update');
        Route::get('destroy/{id}/{id_button}', 'VideoLibraryController@destroy')->name('destroy');
    });
     // end  Library  Audio and Video  page
    // // // // // // // // // // // // // // // // // // // // // // // // // // //




      //  contact  page
    // // // // // // // // // // // // // // // // // // // // // // // // // // //
    Route::prefix('map')->name('map.')->group(function () {

        Route::get('index', 'MapController@index')->name('index');
        Route::get('create', 'MapController@create')->name('create');
        Route::post('store', 'MapController@store')->name('store');
        Route::get('show/{id}', 'MapController@show')->name('show');
        Route::get('edit/{id}', 'MapController@edit')->name('edit');
        Route::post('update/{id}', 'MapController@update')->name('update');
        Route::get('destroy/{id}', 'MapController@destroy')->name('destroy');
    });

      //  end contact  page
    // // // // // // // // // // // // // // // // // // // // // // // // // // //



      //  conversations  page
    // // // // // // // // // // // // // // // // // // // // // // // // // // //
    Route::prefix('book')->name('book.')->group(function () {

        Route::get('index', 'bookController@index')->name('index');
        Route::get('create', 'bookController@create')->name('create');
        Route::post('store', 'bookController@store')->name('store');
        Route::get('show/{id}', 'bookController@show')->name('show');
        Route::get('edit/{id}', 'bookController@edit')->name('edit');
        Route::post('update/{id}', 'bookController@update')->name('update');
        Route::get('destroy/{id}', 'bookController@destroy')->name('destroy');
    });
      //  end conversations  page
    // // // // // // // // // // // // // // // // // // // // // // // // // // //


    Route::group(['middleware' => ['admin']], function () {
        // user routes
        Route::resource('users', 'UserController')->except(['show']);
    });
});
