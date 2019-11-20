<?php

Route::namespace('Wmushtaq\LocalWeather\Http\Controllers')->group(function(){
    Route::get('/weather', 'WeatherController@index');
});