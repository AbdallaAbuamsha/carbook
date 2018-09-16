<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_statuses', function (Blueprint $table) {
            $table->increments('id');
            $table->string("status_name", 255);
        });
        DB::table('car_statuses')->insert(array ('status_name'=>'Excellent'));
        DB::table('car_statuses')->insert(array ('status_name'=>'Very good'));
        DB::table('car_statuses')->insert(array ('status_name'=>'good'));
        DB::table('car_statuses')->insert(array ('status_name'=>'bad'));
        DB::table('car_statuses')->insert(array ('status_name'=>'broken'));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('statuses');
    }
}
