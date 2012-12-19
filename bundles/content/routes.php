<?php

Route::group(array('before'=>'auth'), function()
{
    Route::get('admin/content', 'content::admin.post@index');

    /* post Posting
     ---------------------------------------------------- */
    Route::get('admin/post', 'content::admin.post@index');
    Route::get('admin/post/insert', 'content::admin.post@insert');
    Route::post('admin/post/insert', array(
        'before'    => 'csrf',
        'uses'      => 'content::admin.post@insert'
    ));
    Route::get('admin/post/(:num?)','content::admin.post@update');
    Route::post('admin/post/(:num?)', array(
        'before'    => 'csrf',
        'uses'      => 'content::admin.post@update'
    ));
    Route::post('admin/post/preview','content::admin.post@preview');
    Route::post('admin/post/media', array(
        'before'    => 'crsf',
        'uses'      => 'content::admin.post@media'
    ));

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

Route::get('/','content::blog@index');
Route::any('robots.txt', function()
{
    return 'User-agent: *';
});
Route::get('(:num)-(:any)','content::blog@read');