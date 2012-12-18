<?php

Route::group(array('before'=> 'auth'), function()
{
    Route::get('admin/setting', 'setting::setting@index');
});