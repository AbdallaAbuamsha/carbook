<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFuelTypesTablel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fuel_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fuel_type_name', 255);
        });

        DB::table('fuel_types')->insert(array ('fuel_type_name'=>'Premium unleaded petrol'));
        DB::table('fuel_types')->insert(array ('fuel_type_name'=>'Super unleaded petrol'));
        DB::table('fuel_types')->insert(array ('fuel_type_name'=>'Diesel'));
        DB::table('fuel_types')->insert(array ('fuel_type_name'=>'LPG Auto-gas'));
        DB::table('fuel_types')->insert(array ('fuel_type_name'=>'Biofuels'));
        DB::table('fuel_types')->insert(array ('fuel_type_name'=>'Electric'));
        DB::table('fuel_types')->insert(array ('fuel_type_name'=>'Hybrid'));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fuel_types');
    }
}
