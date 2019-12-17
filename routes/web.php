<?php

/* Forntend Component Route */
Route::get('/', 'ForntendController@index')->name('index');
Route::get('/product', 'ForntendController@product')->name('product');


/* Admin Component Route */
Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');
Route::get('/brand/add-brand', 'BrandController@AddBrand')->name('add_brand');
Route::get('/brand/manage-brand', 'BrandController@ManageBrand')->name('manage_brand');



