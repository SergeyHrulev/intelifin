<?php


Route::resource('/structural-unit', 'Budget\StructuralUnitController');

Route::resource('/article', 'Budget\ArticleController');

Route::resource('/section', 'Budget\SectionController');

Route::resource('/main-article', 'Budget\MainArticleController');

Route::resource('/department', 'Budget\DepartmentController');

Route::get('/add-staff', [
    'as' => 'staff.add',
    'uses' => 'Budget\StaffController@create'
]);

Route::get('/add-payment', [
    'as' => 'payment.add',
    'uses' => 'Budget\PaymentController@create'
]);
