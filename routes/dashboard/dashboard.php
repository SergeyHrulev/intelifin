<?php

Route::get('/main', 'Dashboard\PagesController@dashboard')->name('dashboard');
Route::get('/mainPopular', 'Dashboard\PagesController@createArticle')->name('createArticle');
Route::get('/mainProductDay', 'Dashboard\PagesController@mainProductDay')->name('mainProductDay');
Route::get('/mainRecommended', 'Dashboard\PagesController@mainRecommended')->name('mainRecommended');
Route::get('/mainSets', 'Dashboard\PagesController@mainSets')->name('mainSets');
Route::get('/mainInteresting', 'Dashboard\PagesController@mainInteresting')->name('mainInteresting');
Route::get('/mainSale', 'Dashboard\PagesController@mainSale')->name('mainSale');
Route::get('/mainManuf', 'Dashboard\PagesController@mainManuf')->name('mainManuf');
Route::get('/mainAbout', 'Dashboard\PagesController@mainAbout')->name('mainAbout');

Route::resource('article', 'Dashboard\ArticleController');
