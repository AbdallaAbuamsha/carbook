<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarStylesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_styles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('car_style_name', 255);
            $table->string('car_style_image_name', 255);
        });

        DB::table('car_styles')->insert(array ('car_style_name'=>'HATCH', 'car_style_image_name' => 'HATCH.png'));
        DB::table('car_styles')->insert(array ('car_style_name'=>'COMMERCIAL', 'car_style_image_name' => 'COMMERCIAL.png'));
        DB::table('car_styles')->insert(array ('car_style_name'=>'SUVCROSS', 'car_style_image_name' => 'SUVCROSS.png'));
        DB::table('car_styles')->insert(array ('car_style_name'=>'VANMV', 'car_style_image_name' => 'VANMV.png'));
        DB::table('car_styles')->insert(array ('car_style_name'=>'LUXURY', 'car_style_image_name' => 'LUXURY.png'));
        DB::table('car_styles')->insert(array ('car_style_name'=>'AWD4WD', 'car_style_image_name' => 'AWD4WD.png'));
        DB::table('car_styles')->insert(array ('car_style_name'=>'CONVERT', 'car_style_image_name' => 'CONVERT.png'));
        DB::table('car_styles')->insert(array ('car_style_name'=>'TRUCKS', 'car_style_image_name' => 'TRUCKS.png'));
        DB::table('car_styles')->insert(array ('car_style_name'=>'HYBEL', 'car_style_image_name' => 'HYBEL.png'));
        DB::table('car_styles')->insert(array ('car_style_name'=>'WAGON', 'car_style_image_name' => 'WAGON.png'));
        DB::table('car_styles')->insert(array ('car_style_name'=>'COUPE', 'car_style_image_name' => 'COUPE.png'));
        DB::table('car_styles')->insert(array ('car_style_name'=>'SEDAN', 'car_style_image_name' => 'SEDAN.png'));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('car_styles');
    }
}
