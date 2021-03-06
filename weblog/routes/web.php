<?php

// blog is main page
Route::get('/', 'BlogController@index');

// blog
Route::prefix('blog')->group(function () {
    Route::get('/', 'BlogController@main')->name('blog.home');
    Route::get('/{id}', 'BlogController@pairBlog');
});

// contact us
Route::get('/contact',function(){
    return view('blog.contact')->with('page', 'contact');
});

// admin page
Route::prefix('/admin')->group(function(){
    Route::get('/login', 'AdminController@login')->name('login');
    Route::post('/login', 'AdminController@checkLogin');
    Route::get('/weblog', 'AdminController@admin')->name('adminBlog');
    Route::post('/weblog', 'AdminController@storeBlog');
    Route::get('/logout', 'AdminController@logout')->name('logout');
});






