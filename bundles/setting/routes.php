<?php

Route::group(array('before'=> 'auth'), function()
{
    Route::get('setting', 'setting::admin.setting@index');
});