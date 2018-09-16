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
            $table->string('car_location', 255);                                      // only string
            $table->integer("exterior_color")   ->unsigned()    ->nullable();               // FK
            $table->foreign('exterior_color')->references('id')->on('colors')->onDelete('set null');
            $table->integer("interior_color")   ->unsigned()    ->nullable();               // FK
            $table->foreign('interior_color')->references('id')->on('colors')->onDelete('set null');
            $table->integer('car_transmission');                                            // 6 speeds
            $table->boolean('is_auto');                                                     // true -> auto | false -> manual
            $table->float('drive')                              ->nullable();               // 3.6L
            $table->integer('horse_power')                      ->nullable();               // without rbm
            $table->integer('torque')                           ->nullable();               // without rbm
            $table->integer("id_brand")         ->unsigned()    ->nullable();               // FK
            $table->foreign("id_brand")->references('id')->on('car_brands')->onDelete('set null');
            $table->integer("id_model")         ->unsigned()->nullable();                               // FK
            $table->foreign("id_model")->references('id')->on('car_models')->onDelete('set null');
            $table->integer("year");                                                        //
            $table->integer("fuel_type")             ->unsigned()    ->nullable();               // FK
            $table->foreign("fuel_type")->references('id')->on('car_fuel_types')->onDelete('set null');
            $table->text("un_repaired_problems")                ->nullable();               //
            $table->text("description")                         ->nullable();               //
            $table->text("more_details")                        ->nullable();               //
            $table->boolean('is_used');                                                     // true -> used | false -> new
            $table->integer("front_lights")     ->unsigned()->nullable();                   // FK
            $table->foreign("front_lights")->references('id')->on('car_statuses')->onDelete('set null');
            $table->integer("front_bumpers")    ->unsigned()->nullable();                   // FK
            $table->foreign("front_bumpers")->references('id')->on('car_statuses')->onDelete('set null');
            $table->integer("bonnet")           ->unsigned()->nullable();                   // FK
            $table->foreign("bonnet")->references('id')->on('car_statuses')->onDelete('set null');
            $table->integer("wind_screen")      ->unsigned()->nullable();                   // FK
            $table->foreign("wind_screen")->references('id')->on('car_statuses')->onDelete('set null');
            $table->integer("rear_lights")      ->unsigned()->nullable();                   // FK
            $table->foreign("rear_lights")->references('id')->on('car_statuses')->onDelete('set null');
            $table->integer("rear_bumpers")     ->unsigned()->nullable();                   // FK
            $table->foreign("rear_bumpers")->references('id')->on('car_statuses')->onDelete('set null');
            $table->integer("tailgate")         ->unsigned()->nullable();                   // FK
            $table->foreign("tailgate")->references('id')->on('car_statuses')->onDelete('set null');
            $table->integer("door_mirrors")     ->unsigned()->nullable();                   // FK
            $table->foreign("door_mirrors")->references('id')->on('car_statuses')->onDelete('set null');
            $table->integer("carpets")          ->unsigned()->nullable();                   // FK
            $table->foreign("carpets")->references('id')->on('car_statuses')->onDelete('set null');
            $table->integer("stereo_navigate_etc")->unsigned()->nullable();                 // FK
            $table->foreign("stereo_navigate_etc")->references('id')->on('car_statuses')->onDelete('set null');
            $table->integer("style")            ->unsigned()->nullable();                   // FK
            $table->foreign("style")->references('id')->on('car_styles')->onDelete('set null');
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
