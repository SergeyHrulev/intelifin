<?php

use Spatie\Sitemap\SitemapGenerator;

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
Route::get('/index.html', function (){
    return Redirect::route('main');
});
Route::get('/vuetify', function (){
    return view('welcome');
});
Route::get('/', 'PageController@main')->name('main');
Route::get('/servises', 'PageController@servises')->name('servises');
Route::get('/fin-dictionary', 'PageController@finDictionary')->name('fin-dictionary');
Route::get('/credit-expert', 'ServiseController@creditExpert')->name('credit-expert');
Route::get('/chief-financial-officer', 'ServiseController@cfo')->name('chief-financial-officer');
Route::get('/cfo-school', 'ServiseController@cfoSchool')->name('cfo-school');
Route::get('/easy-start', 'ServiseController@easyStart')->name('easy-start');
Route::get('/business-security', 'ServiseController@businessSecurity')->name('business-security');
Route::get('/personal-banking', 'ServiseController@personalBanking')->name('personal-banking');
Route::get('/contacts', 'PageController@contacts')->name('contacts');
Route::get('/htmlmap', 'PageController@htmlmap')->name('htmlmap');

Route::group(['prefix' => 'articles'], function (){
    Route::get('/', 'ArticleController@index')->name('articles');
    Route::get('/{slug}', 'ArticleController@getArticle');
});

Route::group(['prefix' => 'events'], function (){
    Route::get('/', 'EventController@index')->name('events');
    Route::get('/{slug}', 'EventController@getEvent');
});

/*
 * @ returns site map
 */
Route::get('/sitemap.xml', 'SitemapController@index');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'budget'], function (){
   require base_path('routes/budget.php');
});
