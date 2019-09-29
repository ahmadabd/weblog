<?php

// weblog
Route::get('/', 'BlogController@index');

Route::prefix('blog')->group(function () {
    Route::get('/', 'BlogController@main')->name('blog.home');
});


// admin page
Route::get('/login', 'BlogController@login');


