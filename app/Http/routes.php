<?php

Route::get('/',function(){
    return view('welcome');
});
Route::post('colors/search/mouline','MainController@getColors');

