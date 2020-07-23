<?php

Route::group(['prefix'  =>  'admin'], function () {

    Route::get('login', 'Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'Admin\LoginController@login')->name('admin.login.post');
    Route::get('logout', 'Admin\LoginController@logout')->name('admin.logout');

    Route::group(['middleware' => ['auth:admin']], function () {
        Route::get('/', function () {
            return view('admin.dashboard.index');
        })->name('admin.dashboard');

    /*category*/
    Route::group(['prefix' => 'categories'], function () {
        Route::get('/', 'Admin\CategoryController@index')->name('admin.categories.index');
        Route::get('/create', 'Admin\CategoryController@create')->name('admin.categories.create');
        Route::post('/store', 'Admin\CategoryController@store')->name('admin.categories.store');
        Route::get('/{id}/edit', 'Admin\CategoryController@edit')->name('admin.categories.edit');
        Route::post('/update', 'Admin\CategoryController@update')->name('admin.categories.update');
        Route::get('/{id}/delete', 'Admin\CategoryController@delete')->name('admin.categories.delete');

        // Load all sections on the page load
        Route::post('sections/load', 'Admin\CategorySectionController@loadSections');
        // Load category sections on the page load
        Route::post('sections', 'Admin\CategorySectionController@categorySections');
        //insert section to category in pivot table
        Route::post('sections/insert', 'Admin\CategorySectionController@insertCategorySections');
        //delete section category
        Route::post('sections/delete', 'Admin\CategorySectionController@deleteCategorySections');
    });
    /*section*/
    Route::group(['prefix'  =>   'sections'], function() {
        Route::get('/', 'Admin\SectionController@index')->name('admin.sections.index');
        Route::get('/create', 'Admin\SectionController@create')->name('admin.sections.create');
        Route::post('/store', 'Admin\SectionController@store')->name('admin.sections.store');
        Route::get('/{id}/edit', 'Admin\SectionController@edit')->name('admin.sections.edit');
        Route::post('/update', 'Admin\SectionController@update')->name('admin.sections.update');
        Route::get('/{id}/delete', 'Admin\SectionController@delete')->name('admin.sections.delete');
    });

  });//end of admin middleware

});