<?php

Route::get('/', function () {
    return view('welcome');
});

//Login OK
    Route::get('/success', function () {
        return view('Customer.index');
    });

//客戶資料
    Route::group(['prefix' => 'GroupSms'],function (){

        Route::get('/', function () {
            return view('Customer.GroupSms.index');
        })->name('GroupSms');

        Route::get('/create', function () {
            return view('Customer.GroupSms.create');
        })->name('GroupSms.create');

        Route::get('/edit/{id}', function ($id) {
            return view('Customer.GroupSms.edit',compact('id'));
        })->name('GroupSms.edit');

    });

//Index
    Route::get('/sms', function () {
        return view('Customer.send');
    });

    Route::get('/headinfo', function () {
        return view('Customer.headinfo');
    });

    Route::get('/create', function () {
        return view('Customer.create');
    });

    Route::get('/edit', function () {
        return view('Customer.edit');
    });

//errors
    Route::group(['prefix' => 'errors'],function (){

        Route::get('/403', function () {
            return view('errors.403');
        })->name('errors.403');

        Route::get('/404', function () {
            return view('errors.404');
        })->name('errors.404');

        Route::get('/443', function () {
            return view('errors.443');
        })->name('errors.443');

        Route::get('/500', function () {
            return view('errors.500');
        })->name('errors.500');

        Route::get('/503', function () {
            return view('errors.503');
        })->name('errors.503');

    });