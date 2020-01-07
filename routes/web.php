<?php

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
// REACT APP
Route::group(['prefix' => 'app'], function() {
    // all routes that using react-router
    Route::view('/{path?}', 'app');
});

Route::get('/', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::post('contact-form', [
    'as' => 'contact-form',
    'uses' => 'ContactformController@post'
]);

Route::get('privacy-legal', function(){
    return view('drsculpt.pages.privacy.privacy');
})->name('privacy-legal');

Route::get('cool-sculpting', function(){
    return view('drsculpt.pages.cool-sculpting.cool-sculpting');
})->name('cool-sculpting');

Route::get('cool-tone', function(){
    return view('drsculpt.pages.cool-tone.cool-tone');
})->name('cool-tone');

Route::get('supporting-articles-research', function(){
    return view('drsculpt.pages.articles.articles');
})->name('supporting-articles-research');

Route::get('faqs', function(){
    return view('drsculpt.pages.faqs.faqs');
})->name('faqs');

Route::get('videos', function(){
    return view('drsculpt.pages.videos.videos');
})->name('videos');

Route::get('prices', function(){
    return view('drsculpt.pages.prices.prices');
})->name('prices');

Route::get('gallery', function(){
    return view('drsculpt.pages.gallery.gallery');
})->name('gallery');