<?php

Route::get('/', 'startPageController@index');

Route::get('/request', 'RequestController@index');
Route::post('/request/create', 'RequestController@create' )->name('request.create');

Route::get('/calendar', 'EventController@calendar')->name('calendar');

Route::get('/buy_ticket','startPageController@buy_ticket');
Route::get('/about','startPageController@about');
Route::get('/donation', 'startPageController@donation');
Route::get('/vizit','startPageController@vizit');

