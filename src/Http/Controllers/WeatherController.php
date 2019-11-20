<?php

namespace Wmushtaq\LocalWeather\Http\Controllers;

use App\Http\Controllers\Controller;
use Wmushtaq\LocalWeather\Models\City;

class WeatherController extends Controller
{
    public function index(){
        $city = City::where('selected', 1)->first();
        $json = file_get_contents('https://api.darksky.net/forecast/'.config('weather.key').'/'.$city->lat.','.$city->lng.'?units=si');
        return view('weather::index', compact('city', 'json'));
    }
}
