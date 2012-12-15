<?php

Route::group(array('before'=>'auth'), function()
{
    Route::get('admin/dashboard', 'dashboard::admin.dashboard@index');
});
