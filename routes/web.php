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
Route::get('/brand/brand-list', 'BrandController@BrandList')->name('brand_list');
Route::get('/brand/edit-brand/{id}', 'BrandController@EditBrand')->name('edit_brand');
Route::post('/brand/update-brand', 'BrandController@UpdateBrand')->name('update_brand');
Route::get('/brand/delete-brand/{id}', 'BrandController@DeleteBrand')->name('delete_brand');
Route::get('/brand/brandStatus/{id}/{s}', 'BrandController@brandStatus')->name('brandStatus');

/* Add Category Route Here.... */
Route::get('/category/add-category', 'CategoryController@AddCategory')->name('add_category');
Route::post('/category/store-category', 'CategoryController@StoreCategory')->name('store_category');
Route::get('/category/category-list', 'CategoryController@CategoryList')->name('category_list');
Route::get('/category/edit-category/{id}', 'CategoryController@EditCategory')->name('edit_category');
Route::post('/category/update-category', 'CategoryController@UpdateCategory')->name('update_category');
Route::get('/category/delete-category/{id}', 'CategoryController@DeleteCategory')->name('delete_category');
Route::get('/category/categoryStatus/{id}/{s}', 'CategoryController@categoryStatus')->name('categoryStatus');

/* Add SubCategory Route Here.... */
Route::get('/category/subcategory-list', 'SubCategoryController@SubCategoryList')->name('subcategory_list');


/* Add Sub SubCategory Route Here.... */
Route::get('/category/sub-subcategory-list', 'SubsubCategoryController@SubsubCategoryList')->name('sub_subcategory_list');


