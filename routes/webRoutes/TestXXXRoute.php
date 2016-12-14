<?php
Route::get('testXXX/open/{id}', 'TestXXXController@open')->name('testXXX.open');
Route::resource('testXXX','TestXXXController');