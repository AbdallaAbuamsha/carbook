<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('name', 255);
            $table->float('price');                                                         // $
            $table->integer('number_of_owners') ->unsigned();                               // owner
            $table->string('car_location', 255);                                                 // only string
            $table->integer("exterior_color")   ->unsigned()    ->nullable();               //
            $table->integer("interior_color")   ->unsigned()    ->nullable();               //
            $table->integer('car_transmission');                                            // 6 speeds
            $table->boolean('is_auto');                                                     // true -> auto | false -> manual
            $table->float('drive')                              ->nullable();               // 3.6L
            $table->integer('horse_power')                      ->nullable();               // without rbm
            $table->integer('torque')                           ->nullable();               // without rbm
            $table->integer("id_brand")         ->unsigned();                               // FK
            $table->integer("id_model")         ->unsigned();                               // FK
            $table->integer("year");                                                        // FK
            $table->integer("fuel")             ->unsigned()    ->nullable();               // FK
            $table->text("un_repaired_problems")                ->nullable();               //
            $table->text("description")                         ->nullable();               //
            $table->text("more_details")                        ->nullable();               //
            $table->boolean('is_used');                                                         // true -> used | false -> new
            $table->integer("front_lights")     ->unsigned()->nullable();                   // FK
            $table->integer("front_bumpers")    ->unsigned()->nullable();                   // FK
            $table->integer("bonnet")           ->unsigned()->nullable();                   // FK
            $table->integer("wind_screen")      ->unsigned()->nullable();                   // FK
            $table->integer("rear_lights")      ->unsigned()->nullable();                   // FK
            $table->integer("rear_bumpers")     ->unsigned()->nullable();                   // FK
            $table->integer("tailgate")         ->unsigned()->nullable();                   // FK
            $table->integer("door_mirrors")     ->unsigned()->nullable();                   // FK
            $table->integer("carpets")          ->unsigned()->nullable();                   // FK
            $table->integer("stereo_navigate_etc")->unsigned()->nullable();                 // FK
            $table->integer("style")            ->unsigned()->nullable();                   // FK
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
