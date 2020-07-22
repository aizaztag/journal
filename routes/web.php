<?php
require 'admin.php';

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

/*Route::get('/', function () {
    return view('frontend.index');
});*/

Route::get('/' , 'HomeController@index');

Route::get('/manuscript', function () {
    return view('frontend.manuscript');
});

Route::get('/test', function () {

   $name = 'Test Name';

   $cat =  new \App\Models\Category();
   $cat->name = $name;
   $cat->slug = $name;
   $cat->launched = '2020-07-20 23:36:56';
   $cat->issn = 'issn';
   $cat->current_issue = 'current_issue';
   $cat->if = '2.3';

   $cat->save(); die;

return view('frontend.test');

});

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/journals', 'JournalController@journal')->name('journals');
Route::get('/journals/{category}', 'JournalController@category')->name('category');












