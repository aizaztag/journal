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

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/manuscript', function () {
    return view('frontend.test');
});

Route::get('/test', function () {

    $cate =  new \App\Models\Journal();
             $cate->title = 'dfdf';
             $cate->user_id = '1';
             $cate->category_id = '1';
             $cate->save();


});
