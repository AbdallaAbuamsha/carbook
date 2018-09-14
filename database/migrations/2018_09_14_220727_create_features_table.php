<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_features', function (Blueprint $table) {
            $table->increments('id');
            $table->string('car_feature_name', 255);
        });
        DB::table('car_features')->insert(array ('car_feature_name'=>'ABS'));
        DB::table('car_features')->insert(array ('car_feature_name'=>'4-Wheel Drive'));
        DB::table('car_features')->insert(array ('car_feature_name'=>'Trailer Coupling'));
        DB::table('car_features')->insert(array ('car_feature_name'=>'Adapted For Disabled'));
        DB::table('car_features')->insert(array ('car_feature_name'=>'Park distance control System'));
        DB::table('car_features')->insert(array ('car_feature_name'=>'Electric Window'));
        DB::table('car_features')->insert(array ('car_feature_name'=>'Leather Interior'));
        DB::table('car_features')->insert(array ('car_feature_name'=>'Alloy Rims'));
        DB::table('car_features')->insert(array ('car_feature_name'=>'Particulate Filter'));
        DB::table('car_features')->insert(array ('car_feature_name'=>'Sunroof'));
        DB::table('car_features')->insert(array ('car_feature_name'=>'Heated Seats'));
        DB::table('car_features')->insert(array ('car_feature_name'=>'ESP'));
        DB::table('car_features')->insert(array ('car_feature_name'=>'Auxilliary Heating'));
        DB::table('car_features')->insert(array ('car_feature_name'=>'Cruise Control'));
        DB::table('car_features')->insert(array ('car_feature_name'=>'Xenon Headlights'));
        DB::table('car_features')->insert(array ('car_feature_name'=>'Centalised Locking'));
        DB::table('car_features')->insert(array ('car_feature_name'=>'True Value'));
        DB::table('car_features')->insert(array ('car_feature_name'=>'Taxi'));
        DB::table('car_features')->insert(array ('car_feature_name'=>'Automatic Transmission'));
        DB::table('car_features')->insert(array ('car_feature_name'=>'Air Condition'));
        DB::table('car_features')->insert(array ('car_feature_name'=>'Warranty'));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('car_features');
    }
}
