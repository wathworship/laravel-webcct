<?php

Route::get('/','FrontController@index');
Route::get('/index','FrontController@index');

/* about */
Route::get('/mission','AboutController@mission');
Route::get('/structure','AboutController@structure');
Route::get('/manager','AboutController@manager');
Route::get('/history','AboutController@history');



/* download*/
Route::get('/download','DownloadController@download');


/* online*/
Route::get('/online','OnlineController@online');

