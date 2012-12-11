<?php

Route::get('admin/content', array(
    'before'    => 'auth',
    'uses'      => 'content::admin.post@index'
));

/* post Posting
 ---------------------------------------------------- */
Route::get('admin/post', array(
    'before'    => 'auth',
    'uses'      => 'content::admin.post@index'
));

Route::get('admin/post/insert', array(
    'before'    => 'auth',
    'uses'      => 'content::admin.post@insert'
));

Route::get('admin/post/update', array(
    'uses'      => 'content::admin.post@update'
));

/* Categories
 ---------------------------------------------------- */
Route::get('admin/categories', array(
    'before'    => 'auth',
    'uses'      => 'content::admin.categories@index'
));

Route::get('admin/categories/search/(:any?)', array(
    'before'    => 'auth',
    'uses'      => 'content::admin.categories@search'
));

Route::post('admin/categories', array(
    'before'    => 'auth|csrf',
    'uses'      => 'content::admin.categories@insert'
));

Route::get('admin/categories/(:num?)', array(
    'before'    => 'auth',
    'uses'      => 'content::admin.categories@get'
));

Route::post('admin/categories/(:num?)', array(
    'before'    => 'auth|csrf',
    'uses'      => 'content::admin.categories@update'
));

Route::post('admin/categories/(:num?)/delete', array(
    'before'    => 'auth|csrf',
    'uses'      => 'content::admin.categories@delete'
));

/* Tags
 ---------------------------------------------------- */
Route::get('admin/tags', array(
    'before'    => 'auth',
    'uses'      => 'content::admin.tags@index'
));