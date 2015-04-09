<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::controller('/admin', 'AdminController');

$languages = array('ru','en');
$locale = Request::segment(1);

if($locale != 'admin'){
    if(!in_array($locale, $languages)){
        header('Location: /ru');
        exit;
    }
    \App::setLocale($locale);
}


Route::group(['prefix' => $locale], function(){
    Route::controller('', 'MainController');
});



