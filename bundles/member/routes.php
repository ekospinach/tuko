<?php

Route::get('login', array(
    'uses' => 'member::session@login'
));

Route::get('logout', array(
    'uses' => 'member::session@logout'
));

Route::post('session', array(
    'before'=> 'csrf',
    'uses'  => 'member::session@store'
));

