<?php
/**
 * Created by Swadhin Saha <rahul@mazegeek.com>
 * User: rahul
 * Date: 4/9/19
 * Time: 10:08 AM
 */

Route::group(['namespace' => "Bojra\Contact\Http\Controllers"], function () {

    Route::get('contact', 'ContactController@index')->name('contact');

    Route::post('contact', 'ContactController@send');

});

