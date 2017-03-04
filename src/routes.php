<?php

Route::group(['namespace' => 'Jes\LogiChargify\Controllers', 'prefix'=>'kw'], function() {
    // Your route goes here
    Route::get('/chargify', 'ChargifyController@index');
});