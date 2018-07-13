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



/*
Route::get('/hellow', function () {
    //return view('welcome');
    return '<h1>Hellow<h1>';
});

Route::get('/users/{id}/{name}', function($id, $name){
  return 'This is User is '.$id. ' with the Full aliase ' . $name;
});


Route::get('/', function () {
    return view('welcome');
    // return 'Hellow';
});
*/

Route::get('/', 'PagesController@index');
Route::get('/partnerlist', 'PagesController@partnerlist');
Route::get('/wheretobuy', 'PagesController@wheretobuy');
Route::get('/faq', 'PagesController@faq');
Route::get('/about', 'PagesController@about');
Route::get('/contactus', 'PagesController@contactus');
Route::get('/services', 'PagesController@services');

Route::resource('posts','PostController');
// Route::get('/about', function(){
//   return view('pages.about');
// });

Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
