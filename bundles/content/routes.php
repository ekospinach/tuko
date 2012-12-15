<?php

Route::group(array('before'=>'auth'), function()
{
    Route::get('admin/content', 'content::admin.post@index');

    /* post Posting
     ---------------------------------------------------- */
    Route::get('admin/post', 'content::admin.post@index');
    Route::get('admin/post/insert', 'content::admin.post@insert');
    Route::get('admin/post/update','content::admin.post@update');

    /* Categories
     ---------------------------------------------------- */
    Route::get('admin/categories', 'content::admin.categories@index');
    Route::get('admin/categories/search/(:any?)', 'content::admin.categories@search');
    Route::post('admin/categories', array(
        'before'    => 'csrf',
        'uses'      => 'content::admin.categories@insert'
    ));
    Route::get('admin/categories/(:num?)', 'content::admin.categories@get');
    Route::post('admin/categories/(:num?)', array(
        'before'    => 'csrf',
        'uses'      => 'content::admin.categories@update'
    ));
    Route::post('admin/categories/(:num?)/delete', array(
        'before'    => 'csrf',
        'uses'      => 'content::admin.categories@delete'
    ));

    /* Tags
     ---------------------------------------------------- */
    Route::get('admin/tags', 'content::admin.tags@index');
});