<?php

Route::get('/', 'startPageController@index');

Route::get('/request', 'RequestController@index');
Route::post('/request/create', 'RequestController@create' )->name('request.create');

