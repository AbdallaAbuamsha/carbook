<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_brands', function (Blueprint $table) {
            $table->increments('id');
            $table->string("brand_name", 255);
        });

        DB::table('car_brands')->insert(array ('brand_name' => 'Abarth'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Alfa Romeo'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Alpina'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Armstrong Siddeley'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Aston Martin'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Audi'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Austin Healey'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Austin'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Bedford'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Bentley'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Bertone'));
        DB::table('car_brands')->insert(array ('brand_name' => 'BMW Alpina'));
        DB::table('car_brands')->insert(array ('brand_name' => 'BMW'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Bolwell'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Borgward'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Bugatti'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Buick'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Caterham'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Chery'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Chevrolet'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Chrysler'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Citroen'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Daewoo'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Daihatsu'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Daimler'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Datsun'));
        DB::table('car_brands')->insert(array ('brand_name' => 'De Tomaso'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Dodge'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Eunos'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Ferrari'));
        DB::table('car_brands')->insert(array ('brand_name' => 'FIAT'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Ford'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Foton'));
        DB::table('car_brands')->insert(array ('brand_name' => 'FPV'));
        DB::table('car_brands')->insert(array ('brand_name' => 'FSM'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Geely'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Genesis'));
        DB::table('car_brands')->insert(array ('brand_name' => 'GJM'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Goggomobil'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Great Wall'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Haval'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Hillman'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Hino'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Holden HDT'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Holden'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Honda'));
        DB::table('car_brands')->insert(array ('brand_name' => 'HSV'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Humber'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Hummer'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Hyundai'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Infiniti'));
        DB::table('car_brands')->insert(array ('brand_name' => 'International'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Iso'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Isuzu'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Iveco'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Jaguar'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Jeep'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Jensen'));
        DB::table('car_brands')->insert(array ('brand_name' => 'JMC'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Kia'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Koenigsegg'));
        DB::table('car_brands')->insert(array ('brand_name' => 'KTM'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Lada'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Lamborghini'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Lancia'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Land Rover'));
        DB::table('car_brands')->insert(array ('brand_name' => 'LDV'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Lexus'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Leyland'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Lifan'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Lotus'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Mahindra'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Maserati'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Maybach'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Mazda'));
        DB::table('car_brands')->insert(array ('brand_name' => 'McLaren'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Mercedes-Benz'));
        DB::table('car_brands')->insert(array ('brand_name' => 'MG'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Mini'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Mitsubishi'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Morgan'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Morris'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Nissan'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Opel'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Panther'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Peugeot'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Pontiac'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Porsche'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Prince'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Proton'));
        DB::table('car_brands')->insert(array ('brand_name' => 'RAM'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Rambler'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Renault'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Rolls-Royce'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Rover'));
        DB::table('car_brands')->insert(array ('brand_name' => 'SAAB'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Seat'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Simca'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Singer'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Skoda'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Smart'));
        DB::table('car_brands')->insert(array ('brand_name' => 'SsangYong'));
        DB::table('car_brands')->insert(array ('brand_name' => 'SSC'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Standard'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Studebaker'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Subaru'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Sunbeam'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Suzuki'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Tata'));
        DB::table('car_brands')->insert(array ('brand_name' => 'TD 2000'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Tesla'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Toyota'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Triumph'));
        DB::table('car_brands')->insert(array ('brand_name' => 'TVR'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Vanden Plas'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Vauxhall'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Vespa'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Volkswagen'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Volvo'));
        DB::table('car_brands')->insert(array ('brand_name' => 'Wolseley'));
        DB::table('car_brands')->insert(array ('brand_name' => 'ZX Auto'));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('car_brands');
    }
}
