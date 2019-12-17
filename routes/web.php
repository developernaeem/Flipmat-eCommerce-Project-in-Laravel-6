<?php

/* Forntend Component Route */
Route::get('/', 'ForntendController@index')->name('index');
Route::get('/product', 'ForntendController@product')->name('product');


/* Admin Component Route */
Auth::routes();

/* Admin Route Here.... */
Route::get('/admin', 'HomeController@index')->name('home');

/* Add Brand Route Here.... */
Route::get('/brand/add-brand', 'BrandController@AddBrand')->name('add_brand');
Route::post('/brand/store-brand', 'BrandController@StoreBrand')->name('store_brand');

/* Manage Brand Route Here.... */
Route::get('/brand/manage-brand', 'BrandController@ManageBrand')->name('manage_brand');



