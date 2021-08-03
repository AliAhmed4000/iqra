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
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    return 'DONE'; //Return anything
});

Route::get('/', function () {
    return view('index');
});
Route::get('/sign-in', function () {
    return view('sign_in');
});

Route::get('/request-a-quote', function () {
    return view('request_a_quote');
});

// About pages--------------------------------------

Route::get('/company', function () {
    return view('about/company');
});
Route::get('/why-us', function () {
    return view('about/why-us');
});
Route::get('/quality', function () {
    return view('about/quality');
});
Route::get('/clients', function () {
    return view('about/clients');
});
Route::get('/case-studies', function () {
    return view('about/case-studies');
});
Route::get('/useful-resources', function () {
    return view('about/useful-resources');
});
Route::get('/register', function () {
    return view('about/register');
});
Route::get('/blog', function () {
    return view('about/blog');
});

// languages page--------------------------------------
Route::get('/languages', function () {
    return view('languages');
});

// industries pages--------------------------------------
Route::get('/legal-and-law', function () {
    return view('industries/legal_and_law');
});
Route::get('/life-sciences', function () {
    return view('industries/life_sciences');
});
Route::get('/finance', function () {
    return view('industries/finance  ');
});
Route::get('/technical-and-manufacturing', function () {
    return view('industries/technical_and_manufacturing  ');
});
Route::get('/publishing-media', function () {
    return view('industries/publishing_media  ');
});
Route::get('/IT-and-software', function () {
    return view('industries/it_and_software  ');
});
Route::get('/retail', function () {
    return view('industries/retail');
});
Route::get('/game-localization', function () {
    return view('industries/game_localization');
});
Route::get('/government', function () {
    return view('industries/government');
});
Route::get('/hospitality', function () {
    return view('industries/hospitality');
});
Route::get('/energy', function () {
    return view('industries/energy');
});
Route::get('/automotive', function () {
    return view('industries/automotive');
});
// Solutions pages--------------------------------------

Route::get('/translation', function () {
    return view('solutions/translation');
});
Route::get('/transcription ', function () {
    return view('solutions/transcription ');
});
Route::get('/multilingual-voice-over ', function () {
    return view('solutions/multilingual_voice_over ');
});
Route::get('/interpreting', function () {
    return view('solutions/interpreting');
});
Route::get('/telephone-interpreting', function () {
    return view('solutions/telephone_interpreting');
});
Route::get('/subtitling', function () {
    return view('solutions/subtitling');
});
Route::get('/transcreation', function () {
    return view('solutions/transcreation');
});
Route::get('/desktop-publishing-and-typesetting', function () {
    return view('solutions/desktop_publishing_and_typesetting');
});
Route::get('/speech-data-collection', function () {
    return view('solutions/speech_data_collection');
});
Route::get('/multilingual-seo-services', function () {
    return view('solutions/multilingual_seo_services');
});
Route::get('/certified-translation-services', function () {
    return view('solutions/certified_translation_services');
});



Route::get('/contact-us', function () {
    return view('contact_us');
});

// diff languges pages--------------------------------------
Route::get('/deutsch', function () {
    return view('languages/deutsch');
});
Route::get('/français', function () {
    return view('languages/francais');
});
Route::get('/italiano', function () {
    return view('languages/italiano');
});
Route::get('/español', function () {
    return view('languages/espanol');
});
Route::get('/română', function () {
    return view('languages/română');
});
Route::get('/pусский', function () {
    return view('languages/pусский');
});
Route::get('/português', function () {
    return view('languages/portugues');
});
Route::get('/south-africa', function () {
    return view('languages/south_africa');
});
Route::get('/schweiz', function () {
    return view('languages/schweiz');
});
Route::get('/UAE', function () {
    return view('languages/UAE');
});


// Route::post('/search', 'SearchController@search');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
