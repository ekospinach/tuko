<?php

Route::get('admin/dashboard', array(
    'uses' => 'dashboard::admin.dashboard@index'
));