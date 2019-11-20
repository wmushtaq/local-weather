<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Wmushtaq\LocalWeather\Models\City;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('lat');
            $table->string('lng');
            $table->boolean('selected')->default(0);
            $table->timestamps();
        });

        City::insert(
            [
                [
                    'name' => 'Islamabad',
                    'lat' => '33.684422',
                    'lng' => '73.047882',
                    'selected' => 1
                ],
                [
                    'name' => 'Lahore',
                    'lat' => '31.520370',
                    'lng' => '74.358749',
                    'selected' => 0
                ],
                [
                    'name' => 'Karachi',
                    'lat' => '24.860735',
                    'lng' => '67.001137',
                    'selected' => 0
                ]
            ]
            );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cities');
    }
}
