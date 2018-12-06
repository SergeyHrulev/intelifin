<?php


Route::resource('/structural-unit', 'Budget\StructuralUnitController');

Route::resource('/article', 'Budget\ArticleController');

Route::resource('/section', 'Budget\SectionController');

Route::resource('/main-article', 'Budget\MainArticleController');

Route::resource('/department', 'Budget\DepartmentController');
Route::get('/department/reports/all', 'Budget\BudgetReportController@index');
Route::post('/department/reports/select', 'Budget\BudgetReportController@showDepartmentsReport');
Route::get('/department/reports/budget', 'Budget\BudgetReportController@budget');

Route::get('/add-staff', [
    'as' => 'staff.add',
    'uses' => 'Budget\StaffController@create'
]);

Route::resource('/payment', 'Budget\PaymentController');

