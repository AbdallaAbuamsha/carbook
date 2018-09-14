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
        Schema::create('brands', function (Blueprint $table) {
            $table->increments('id');
            $table->string("brand_name", 255);
        });

        DB::table('brands')->insert(array ('brand_name' => 'Abarth'));
        DB::table('brands')->insert(array ('brand_name' => 'Alfa Romeo'));
        DB::table('brands')->insert(array ('brand_name' => 'Alpina'));
        DB::table('brands')->insert(array ('brand_name' => 'Alpine'));
        DB::table('brands')->insert(array ('brand_name' => 'Armstrong Siddeley'));
        DB::table('brands')->insert(array ('brand_name' => 'Asia Motors'));
        DB::table('brands')->insert(array ('brand_name' => 'Aston Martin'));
        DB::table('brands')->insert(array ('brand_name' => 'Audi'));
        DB::table('brands')->insert(array ('brand_name' => 'Austin'));
        DB::table('brands')->insert(array ('brand_name' => 'Austin Healey'));
        DB::table('brands')->insert(array ('brand_name' => 'Automobili'));
        DB::table('brands')->insert(array ('brand_name' => 'Automobili Pininfarina'));
        DB::table('brands')->insert(array ('brand_name' => 'Bedford'));
        DB::table('brands')->insert(array ('brand_name' => 'Bentley'));
        DB::table('brands')->insert(array ('brand_name' => 'Bertone'));
        DB::table('brands')->insert(array ('brand_name' => 'BMW'));
        DB::table('brands')->insert(array ('brand_name' => 'BMW Alpina'));
        DB::table('brands')->insert(array ('brand_name' => 'Bolwell'));
        DB::table('brands')->insert(array ('brand_name' => 'Borgward'));
        DB::table('brands')->insert(array ('brand_name' => 'Bufori'));
        DB::table('brands')->insert(array ('brand_name' => 'Bugatti'));
        DB::table('brands')->insert(array ('brand_name' => 'Buick'));
        DB::table('brands')->insert(array ('brand_name' => 'Cadillac'));
        DB::table('brands')->insert(array ('brand_name' => 'Caterham'));
        DB::table('brands')->insert(array ('brand_name' => 'Chery'));
        DB::table('brands')->insert(array ('brand_name' => 'Chevrolet'));
        DB::table('brands')->insert(array ('brand_name' => 'Chrysler'));
        DB::table('brands')->insert(array ('brand_name' => 'Citroen'));
        DB::table('brands')->insert(array ('brand_name' => 'Corsa Specialised Vehicles'));
        DB::table('brands')->insert(array ('brand_name' => 'Daewoo'));
        DB::table('brands')->insert(array ('brand_name' => 'Daihatsu'));
        DB::table('brands')->insert(array ('brand_name' => 'Daimler'));
        DB::table('brands')->insert(array ('brand_name' => 'Datsun'));
        DB::table('brands')->insert(array ('brand_name' => 'De Tomaso'));
        DB::table('brands')->insert(array ('brand_name' => 'Dodge'));
        DB::table('brands')->insert(array ('brand_name' => 'Eunos'));
        DB::table('brands')->insert(array ('brand_name' => 'Ferrari'));
        DB::table('brands')->insert(array ('brand_name' => 'FIAT'));
        DB::table('brands')->insert(array ('brand_name' => 'Ford'));
        DB::table('brands')->insert(array ('brand_name' => 'Foton'));
        DB::table('brands')->insert(array ('brand_name' => 'FPV'));
        DB::table('brands')->insert(array ('brand_name' => 'FSM'));
        DB::table('brands')->insert(array ('brand_name' => 'Geely'));
        DB::table('brands')->insert(array ('brand_name' => 'Genesis'));
        DB::table('brands')->insert(array ('brand_name' => 'Giocattolo'));
        DB::table('brands')->insert(array ('brand_name' => 'GJM'));
        DB::table('brands')->insert(array ('brand_name' => 'GMC'));
        DB::table('brands')->insert(array ('brand_name' => 'Goggomobil'));
        DB::table('brands')->insert(array ('brand_name' => 'Great Wall'));
        DB::table('brands')->insert(array ('brand_name' => 'Haval'));
        DB::table('brands')->insert(array ('brand_name' => 'Hillman'));
        DB::table('brands')->insert(array ('brand_name' => 'Hino'));
        DB::table('brands')->insert(array ('brand_name' => 'Holden'));
        DB::table('brands')->insert(array ('brand_name' => 'Holden HDT'));
        DB::table('brands')->insert(array ('brand_name' => 'Honda'));
        DB::table('brands')->insert(array ('brand_name' => 'HSV'));
        DB::table('brands')->insert(array ('brand_name' => 'Humber'));
        DB::table('brands')->insert(array ('brand_name' => 'Hummer'));
        DB::table('brands')->insert(array ('brand_name' => 'Hyundai'));
        DB::table('brands')->insert(array ('brand_name' => 'Infiniti'));
        DB::table('brands')->insert(array ('brand_name' => 'International'));
        DB::table('brands')->insert(array ('brand_name' => 'Iso'));
        DB::table('brands')->insert(array ('brand_name' => 'Isuzu'));
        DB::table('brands')->insert(array ('brand_name' => 'Iveco'));
        DB::table('brands')->insert(array ('brand_name' => 'Jaguar'));
        DB::table('brands')->insert(array ('brand_name' => 'Jeep'));
        DB::table('brands')->insert(array ('brand_name' => 'Jensen'));
        DB::table('brands')->insert(array ('brand_name' => 'JMC'));
        DB::table('brands')->insert(array ('brand_name' => 'Kia'));
        DB::table('brands')->insert(array ('brand_name' => 'Koenigsegg'));
        DB::table('brands')->insert(array ('brand_name' => 'KTM'));
        DB::table('brands')->insert(array ('brand_name' => 'Lada'));
        DB::table('brands')->insert(array ('brand_name' => 'Lamborghini'));
        DB::table('brands')->insert(array ('brand_name' => 'Lancia'));
        DB::table('brands')->insert(array ('brand_name' => 'Land Rover'));
        DB::table('brands')->insert(array ('brand_name' => 'LDV'));
        DB::table('brands')->insert(array ('brand_name' => 'Lexus'));
        DB::table('brands')->insert(array ('brand_name' => 'Leyland'));
        DB::table('brands')->insert(array ('brand_name' => 'Lifan'));
        DB::table('brands')->insert(array ('brand_name' => 'Lotus'));
        DB::table('brands')->insert(array ('brand_name' => 'Mahindra'));
        DB::table('brands')->insert(array ('brand_name' => 'Maserati'));
        DB::table('brands')->insert(array ('brand_name' => 'Maybach'));
        DB::table('brands')->insert(array ('brand_name' => 'Mazda'));
        DB::table('brands')->insert(array ('brand_name' => 'McLaren'));
        DB::table('brands')->insert(array ('brand_name' => 'Mercedes-Benz'));
        DB::table('brands')->insert(array ('brand_name' => 'MG'));
        DB::table('brands')->insert(array ('brand_name' => 'Mini'));
        DB::table('brands')->insert(array ('brand_name' => 'Mitsubishi'));
        DB::table('brands')->insert(array ('brand_name' => 'Mitsubishi Fuso'));
        DB::table('brands')->insert(array ('brand_name' => 'Morgan'));
        DB::table('brands')->insert(array ('brand_name' => 'Morris'));
        DB::table('brands')->insert(array ('brand_name' => 'Nissan'));
        DB::table('brands')->insert(array ('brand_name' => 'Nissan Specials Division'));
        DB::table('brands')->insert(array ('brand_name' => 'NSU'));
        DB::table('brands')->insert(array ('brand_name' => 'Opel'));
        DB::table('brands')->insert(array ('brand_name' => 'Panther'));
        DB::table('brands')->insert(array ('brand_name' => 'Peugeot'));
        DB::table('brands')->insert(array ('brand_name' => 'Pontiac'));
        DB::table('brands')->insert(array ('brand_name' => 'Porsche'));
        DB::table('brands')->insert(array ('brand_name' => 'Prince'));
        DB::table('brands')->insert(array ('brand_name' => 'Proton'));
        DB::table('brands')->insert(array ('brand_name' => 'RAM'));
        DB::table('brands')->insert(array ('brand_name' => 'Rambler'));
        DB::table('brands')->insert(array ('brand_name' => 'Renault'));
        DB::table('brands')->insert(array ('brand_name' => 'Rolls-Royce'));
        DB::table('brands')->insert(array ('brand_name' => 'Rover'));
        DB::table('brands')->insert(array ('brand_name' => 'SAAB'));
        DB::table('brands')->insert(array ('brand_name' => 'Seat'));
        DB::table('brands')->insert(array ('brand_name' => 'Simca'));
        DB::table('brands')->insert(array ('brand_name' => 'Singer'));
        DB::table('brands')->insert(array ('brand_name' => 'Skoda'));
        DB::table('brands')->insert(array ('brand_name' => 'Smart'));
        DB::table('brands')->insert(array ('brand_name' => 'SsangYong'));
        DB::table('brands')->insert(array ('brand_name' => 'SSC'));
        DB::table('brands')->insert(array ('brand_name' => 'Standard'));
        DB::table('brands')->insert(array ('brand_name' => 'Studebaker'));
        DB::table('brands')->insert(array ('brand_name' => 'Subaru'));
        DB::table('brands')->insert(array ('brand_name' => 'Sunbeam'));
        DB::table('brands')->insert(array ('brand_name' => 'Suzuki'));
        DB::table('brands')->insert(array ('brand_name' => 'Tata'));
        DB::table('brands')->insert(array ('brand_name' => 'TD 2000'));
        DB::table('brands')->insert(array ('brand_name' => 'Tesla'));
        DB::table('brands')->insert(array ('brand_name' => 'Toyota'));
        DB::table('brands')->insert(array ('brand_name' => 'Triumph'));
        DB::table('brands')->insert(array ('brand_name' => 'TVR'));
        DB::table('brands')->insert(array ('brand_name' => 'Vanden Plas'));
        DB::table('brands')->insert(array ('brand_name' => 'Vauxhall'));
        DB::table('brands')->insert(array ('brand_name' => 'Vespa'));
        DB::table('brands')->insert(array ('brand_name' => 'Volkswagen'));
        DB::table('brands')->insert(array ('brand_name' => 'Volvo'));
        DB::table('brands')->insert(array ('brand_name' => 'Wolseley'));
        DB::table('brands')->insert(array ('brand_name' => 'Zeta'));
        DB::table('brands')->insert(array ('brand_name' => 'ZX Auto'));
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('brands');
    }
}
