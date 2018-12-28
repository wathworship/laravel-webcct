<?php

Route::get('/','FrontController@index');
Route::get('/index','FrontController@index');

/* about */
Route::get('/mission','AboutController@mission');
Route::get('/structure','AboutController@structure');
Route::get('/manager','AboutController@manager');
Route::get('/history','AboutController@history');

/* news */
Route::get('/relations','NewsController@relations');
Route::get('/units','NewsController@units');
Route::get('/tender','NewsController@tender');
Route::get('/jobs','NewsController@jobs');
Route::get('/detail','NewsController@detail');

/* journals */
Route::get('journalch','JournalsController@church');
Route::get('journaloth','JournalsController@others');
Route::get('journalre','JournalsController@relation');
Route::get('journalup','JournalsController@upper');

/* online*/
Route::get('/online','OnlineController@online');

/* download*/
Route::get('/download','DownloadController@download');




