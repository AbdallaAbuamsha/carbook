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
        Schema::create('statuses', function (Blueprint $table) {
            $table->increments('id');
            $table->string("status_name", 255);
        });
        DB::table('statuses')->insert(array ('status_name'=>'Excellent'));
        DB::table('statuses')->insert(array ('status_name'=>'Very good'));
        DB::table('statuses')->insert(array ('status_name'=>'good'));
        DB::table('statuses')->insert(array ('status_name'=>'bad'));
        DB::table('statuses')->insert(array ('status_name'=>'broken'));
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
