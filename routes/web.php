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

Route::get('/', function () {
    $cat = App\Category::all();
    $fedcat = App\FeedbackCategory::all();    
    return view('welcome',['cat'=>$cat,'fedcat'=>$fedcat]);
});

Route::get('/add', function () {
    App\Trainer::create([
        'rates' => '10,6,8,7,4,7,8,9,8,6', // you can easily assign an actual integer array here
        'label' => 'Outstanding'
    ]);
});
Route::get('/fetch', function () {
    $t = App\Trainer::latest()->first();
    $array = explode(',', $t->rates);
    dd($array);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/tickets/new', 'HomeController@newtick')->name('createticket');
Route::post('/ticket/create', 'HomeController@createtick');
Route::get('/tickets', 'HomeController@tick')->name('userticket');
Route::get('/tickets/resolved', 'HomeController@resolvedtick');
Route::get('/ticket/open/{id}', 'HomeController@opentick');
Route::post('/ticket/reply', 'HomeController@replytick');

Route::get('/staff/home', 'StaffController@index');
Route::get('/staff/tickets', 'StaffController@tick')->name('staffticket');
Route::get('/staff/ticket/open/{id}', 'StaffController@opentick');
Route::post('/ticket/reply', 'StaffController@replytick');
Route::get('/staff/tickets/resolved', 'StaffController@resolvedtick');

Route::get('/admin/home', 'AdminController@index');
Route::get('/admin/category{id?}', 'AdminController@category');
Route::get('/admin/manage/category', 'AdminController@managecategory');