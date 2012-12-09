<?php

Route::get('admin/content', array(
    'uses' => 'content::admin.blog@index'
));

/* Blog Posting
 ---------------------------------------------------- */
Route::get('admin/post', array(
    'uses' => 'content::admin.blog@index'
));

Route::get('admin/post/insert', array(
    'uses' => 'content::admin.blog@insert'
));

Route::get('admin/post/update', array(
    'uses' => 'content::admin.blog@update'
));

/* Categories
 ---------------------------------------------------- */
Route::get('admin/categories', array(
    'uses' => 'content::admin.categories@index'
));

/* Tags
 ---------------------------------------------------- */
Route::get('admin/tags', array(
    'uses' => 'content::admin.tags@index'
));