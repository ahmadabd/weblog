<?php

// weblog
Route::get('/', 'BlogController@index');

Route::prefix('blog')->group(function () {
    Route::get('/', 'BlogController@main')->name('blog.home');
});


// admin page
Route::prefix('admin')->group(function() {
    Route::get('/login', 'AdminController@login');
    Route::get('/admin', 'AdminController@admin');
});



