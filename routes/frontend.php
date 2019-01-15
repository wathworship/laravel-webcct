<?php

Route::get('/','FrontController@Index');
Route::get('/index','FrontController@Index');

/* about */
Route::get('/mission','AboutController@mission');
Route::get('/structure','AboutController@structure');
Route::get('/manager','AboutController@manager');
Route::get('/history','AboutController@history');

/* news */
Route::get('/news','NewController@index');
Route::get('/units','NewController@units');
Route::get('/tender','NewController@tender');
Route::get('/jobs','NewController@jobs');

//Route::get('/detail/{id}','NewController@detail');
Route::resource('detail', 'NewController');

/* journals */
Route::get('journalch','JournalsController@church');
Route::get('journaloth','JournalsController@others');
Route::get('journalre','JournalsController@relation');
Route::get('journalup','JournalsController@upper');

/* articles */
Route::get('generals','ArticleController@generals');
Route::get('sermonies','ArticleController@sermonies');
Route::get('testimonies','ArticleController@testimonies');


/* online*/
Route::get('/online','OnlineController@online');

/* download*/
Route::get('/download','DownloadController@download');

/* contact */
Route::get('/contact','contactController@contact');
Route::get('/office','contactController@office');
Route::get('/education','contactController@education');
Route::get('/medical','contactController@medical');
Route::get('/others','contactController@others');


