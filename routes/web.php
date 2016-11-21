<?php

Route::get('/', 'startPageController@index');

Route::get('/request', 'RequestController@index');
Route::post('/request/create', 'RequestController@create' )->name('request.create');

Route::get('/calendar', 'EventController@calendar')->name('calendar');
