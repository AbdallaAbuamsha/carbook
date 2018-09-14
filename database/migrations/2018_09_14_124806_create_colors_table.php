<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('color_name');
            $table->string("hex");
        });
        DB::table('colors')->insert(array ('color_name'=>'lightsalmon','hex'=>'#FFA07A'));
        DB::table('colors')->insert(array ('color_name'=>'salmon', 'hex'=>'#FA8072'));
        DB::table('colors')->insert(array ('color_name'=>'darksalmon', 'hex'=>'#E9967A'));
        DB::table('colors')->insert(array ('color_name'=>'lightcoral', 'hex'=>'#F08080'));
        DB::table('colors')->insert(array ('color_name'=>'indianred', 'hex'=>'#CD5C5C'));
        DB::table('colors')->insert(array ('color_name'=>'crimson', 'hex'=>'#DC143C'));
        DB::table('colors')->insert(array ('color_name'=>'firebrick', 'hex'=>'#B22222'));
        DB::table('colors')->insert(array ('color_name'=>'red', 'hex'=>'#FF0000'));
        DB::table('colors')->insert(array ('color_name'=>'darkred', 'hex'=>'#8B0000'));
        DB::table('colors')->insert(array ('color_name'=>'coral', 'hex'=>'#FF7F50'));
        DB::table('colors')->insert(array ('color_name'=>'tomato', 'hex'=>'#FF6347'));
        DB::table('colors')->insert(array ('color_name'=>'orangered', 'hex'=>'#FF4500'));
        DB::table('colors')->insert(array ('color_name'=>'gold', 'hex'=>'#FFD700'));
        DB::table('colors')->insert(array ('color_name'=>'orange', 'hex'=>'#FFA500'));
        DB::table('colors')->insert(array ('color_name'=>'darkorange', 'hex'=>'#FF8C00'));
        DB::table('colors')->insert(array ('color_name'=>'lightyellow', 'hex'=>'#FFFFE0'));
        DB::table('colors')->insert(array ('color_name'=>'lemonchiffon', 'hex'=>'#FFFACD'));
        DB::table('colors')->insert(array ('color_name'=>'lightgoldenrodyellow', 'hex'=>'#FAFAD2'));
        DB::table('colors')->insert(array ('color_name'=>'papayawhip', 'hex'=>'#FFEFD5'));
        DB::table('colors')->insert(array ('color_name'=>'moccasin', 'hex'=>'#FFE4B5'));
        DB::table('colors')->insert(array ('color_name'=>'peachpuff', 'hex'=>'#FFDAB9'));
        DB::table('colors')->insert(array ('color_name'=>'palegoldenrod', 'hex'=>'#EEE8AA'));
        DB::table('colors')->insert(array ('color_name'=>'khaki', 'hex'=>'#F0E68C'));
        DB::table('colors')->insert(array ('color_name'=>'darkkhaki', 'hex'=>'#BDB76B'));
        DB::table('colors')->insert(array ('color_name'=>'yellow', 'hex'=>'#FFFF00'));
        DB::table('colors')->insert(array ('color_name'=>'lawngreen', 'hex'=>'#7CFC00'));
        DB::table('colors')->insert(array ('color_name'=>'chartreuse', 'hex'=>'#7FFF00'));
        DB::table('colors')->insert(array ('color_name'=>'limegreen', 'hex'=>'#32CD32'));
        DB::table('colors')->insert(array ('color_name'=>'lime', 'hex'=>'#00FF00'));
        DB::table('colors')->insert(array ('color_name'=>'forestgreen', 'hex'=>'#228B22'));
        DB::table('colors')->insert(array ('color_name'=>'green', 'hex'=>'#008000'));
        DB::table('colors')->insert(array ('color_name'=>'darkgreen', 'hex'=>'#006400'));
        DB::table('colors')->insert(array ('color_name'=>'greenyellow', 'hex'=>'#ADFF2F'));
        DB::table('colors')->insert(array ('color_name'=>'yellowgreen', 'hex'=>'#9ACD32'));
        DB::table('colors')->insert(array ('color_name'=>'springgreen', 'hex'=>'#00FF7F'));
        DB::table('colors')->insert(array ('color_name'=>'mediumspringgreen', 'hex'=>'#00FA9A'));
        DB::table('colors')->insert(array ('color_name'=>'lightgreen', 'hex'=>'#90EE90'));
        DB::table('colors')->insert(array ('color_name'=>'palegreen', 'hex'=>'#98FB98'));
        DB::table('colors')->insert(array ('color_name'=>'darkseagreen', 'hex'=>'#8FBC8F'));
        DB::table('colors')->insert(array ('color_name'=>'mediumseagreen', 'hex'=>'#3CB371'));
        DB::table('colors')->insert(array ('color_name'=>'seagreen', 'hex'=>'#2E8B57'));
        DB::table('colors')->insert(array ('color_name'=>'olive', 'hex'=>'#808000'));
        DB::table('colors')->insert(array ('color_name'=>'darkolivegreen', 'hex'=>'#556B2F'));
        DB::table('colors')->insert(array ('color_name'=>'olivedrab', 'hex'=>'#6B8E23'));
        DB::table('colors')->insert(array ('color_name'=>'lightcyan', 'hex'=>'#E0FFFF'));
        DB::table('colors')->insert(array ('color_name'=>'cyan', 'hex'=>'#00FFFF'));
        DB::table('colors')->insert(array ('color_name'=>'aqua', 'hex'=>'#00FFFF'));
        DB::table('colors')->insert(array ('color_name'=>'aquamarine', 'hex'=>'#7FFFD4'));
        DB::table('colors')->insert(array ('color_name'=>'mediumaquamarine', 'hex'=>'#66CDAA'));
        DB::table('colors')->insert(array ('color_name'=>'paleturquoise', 'hex'=>'#AFEEEE'));
        DB::table('colors')->insert(array ('color_name'=>'turquoise', 'hex'=>'#40E0D0'));
        DB::table('colors')->insert(array ('color_name'=>'mediumturquoise', 'hex'=>'#48D1CC'));
        DB::table('colors')->insert(array ('color_name'=>'darkturquoise', 'hex'=>'#00CED1'));
        DB::table('colors')->insert(array ('color_name'=>'lightseagreen', 'hex'=>'#20B2AA'));
        DB::table('colors')->insert(array ('color_name'=>'cadetblue', 'hex'=>'#5F9EA0'));
        DB::table('colors')->insert(array ('color_name'=>'darkcyan', 'hex'=>'#008B8B'));
        DB::table('colors')->insert(array ('color_name'=>'teal', 'hex'=>'#008080'));
        DB::table('colors')->insert(array ('color_name'=>'powderblue', 'hex'=>'#B0E0E6'));
        DB::table('colors')->insert(array ('color_name'=>'lightblue', 'hex'=>'#ADD8E6'));
        DB::table('colors')->insert(array ('color_name'=>'lightskyblue', 'hex'=>'#87CEFA'));
        DB::table('colors')->insert(array ('color_name'=>'skyblue', 'hex'=>'#87CEEB'));
        DB::table('colors')->insert(array ('color_name'=>'deepskyblue', 'hex'=>'#00BFFF'));
        DB::table('colors')->insert(array ('color_name'=>'lightsteelblue', 'hex'=>'#B0C4DE'));
        DB::table('colors')->insert(array ('color_name'=>'dodgerblue', 'hex'=>'#1E90FF'));
        DB::table('colors')->insert(array ('color_name'=>'cornflowerblue', 'hex'=>'#6495ED'));
        DB::table('colors')->insert(array ('color_name'=>'steelblue', 'hex'=>'#4682B4'));
        DB::table('colors')->insert(array ('color_name'=>'royalblue', 'hex'=>'#4169E1'));
        DB::table('colors')->insert(array ('color_name'=>'blue', 'hex'=>'#0000FF'));
        DB::table('colors')->insert(array ('color_name'=>'mediumblue', 'hex'=>'#0000CD'));
        DB::table('colors')->insert(array ('color_name'=>'darkblue', 'hex'=>'#00008B'));
        DB::table('colors')->insert(array ('color_name'=>'navy', 'hex'=>'#000080'));
        DB::table('colors')->insert(array ('color_name'=>'midnightblue', 'hex'=>'#191970'));
        DB::table('colors')->insert(array ('color_name'=>'mediumslateblue', 'hex'=>'#7B68EE'));
        DB::table('colors')->insert(array ('color_name'=>'slateblue', 'hex'=>'#6A5ACD'));
        DB::table('colors')->insert(array ('color_name'=>'darkslateblue', 'hex'=>'#483D8B'));
        DB::table('colors')->insert(array ('color_name'=>'lavender', 'hex'=>'#E6E6FA'));
        DB::table('colors')->insert(array ('color_name'=>'thistle', 'hex'=>'#D8BFD8'));
        DB::table('colors')->insert(array ('color_name'=>'plum', 'hex'=>'#DDA0DD'));
        DB::table('colors')->insert(array ('color_name'=>'violet', 'hex'=>'#EE82EE'));
        DB::table('colors')->insert(array ('color_name'=>'orchid', 'hex'=>'#DA70D6'));
        DB::table('colors')->insert(array ('color_name'=>'fuchsia', 'hex'=>'#FF00FF'));
        DB::table('colors')->insert(array ('color_name'=>'magenta', 'hex'=>'#FF00FF'));
        DB::table('colors')->insert(array ('color_name'=>'mediumorchid', 'hex'=>'#BA55D3'));
        DB::table('colors')->insert(array ('color_name'=>'mediumpurple', 'hex'=>'#9370DB'));
        DB::table('colors')->insert(array ('color_name'=>'blueviolet', 'hex'=>'#8A2BE2'));
        DB::table('colors')->insert(array ('color_name'=>'darkviolet', 'hex'=>'#9400D3'));
        DB::table('colors')->insert(array ('color_name'=>'darkorchid', 'hex'=>'#9932CC'));
        DB::table('colors')->insert(array ('color_name'=>'darkmagenta', 'hex'=>'#8B008B'));
        DB::table('colors')->insert(array ('color_name'=>'purple', 'hex'=>'#800080'));
        DB::table('colors')->insert(array ('color_name'=>'indigo', 'hex'=>'#4B0082'));
        DB::table('colors')->insert(array ('color_name'=>'pink', 'hex'=>'#FFC0CB'));
        DB::table('colors')->insert(array ('color_name'=>'lightpink', 'hex'=>'#FFB6C1'));
        DB::table('colors')->insert(array ('color_name'=>'hotpink', 'hex'=>'#FF69B4'));
        DB::table('colors')->insert(array ('color_name'=>'deeppink', 'hex'=>'#FF1493'));
        DB::table('colors')->insert(array ('color_name'=>'palevioletred', 'hex'=>'#DB7093'));
        DB::table('colors')->insert(array ('color_name'=>'mediumvioletred', 'hex'=>'#C71585'));
        DB::table('colors')->insert(array ('color_name'=>'white', 'hex'=>'#FFFFFF'));
        DB::table('colors')->insert(array ('color_name'=>'snow', 'hex'=>'#FFFAFA'));
        DB::table('colors')->insert(array ('color_name'=>'honeydew', 'hex'=>'#F0FFF0'));
        DB::table('colors')->insert(array ('color_name'=>'mintcream', 'hex'=>'#F5FFFA'));
        DB::table('colors')->insert(array ('color_name'=>'azure', 'hex'=>'#F0FFFF'));
        DB::table('colors')->insert(array ('color_name'=>'aliceblue', 'hex'=>'#F0F8FF'));
        DB::table('colors')->insert(array ('color_name'=>'ghostwhite', 'hex'=>'#F8F8FF'));
        DB::table('colors')->insert(array ('color_name'=>'whitesmoke', 'hex'=>'#F5F5F5'));
        DB::table('colors')->insert(array ('color_name'=>'seashell', 'hex'=>'#FFF5EE'));
        DB::table('colors')->insert(array ('color_name'=>'beige', 'hex'=>'#F5F5DC'));
        DB::table('colors')->insert(array ('color_name'=>'oldlace', 'hex'=>'#FDF5E6'));
        DB::table('colors')->insert(array ('color_name'=>'floralwhite', 'hex'=>'#FFFAF0'));
        DB::table('colors')->insert(array ('color_name'=>'ivory', 'hex'=>'#FFFFF0'));
        DB::table('colors')->insert(array ('color_name'=>'antiquewhite', 'hex'=>'#FAEBD7'));
        DB::table('colors')->insert(array ('color_name'=>'linen', 'hex'=>'#FAF0E6'));
        DB::table('colors')->insert(array ('color_name'=>'lavenderblush', 'hex'=>'#FFF0F5'));
        DB::table('colors')->insert(array ('color_name'=>'mistyrose', 'hex'=>'#FFE4E1'));
        DB::table('colors')->insert(array ('color_name'=>'gainsboro', 'hex'=>'#DCDCDC'));
        DB::table('colors')->insert(array ('color_name'=>'lightgray', 'hex'=>'#D3D3D3'));
        DB::table('colors')->insert(array ('color_name'=>'silver', 'hex'=>'#C0C0C0'));
        DB::table('colors')->insert(array ('color_name'=>'darkgray', 'hex'=>'#A9A9A9'));
        DB::table('colors')->insert(array ('color_name'=>'gray', 'hex'=>'#808080'));
        DB::table('colors')->insert(array ('color_name'=>'dimgray', 'hex'=>'#696969'));
        DB::table('colors')->insert(array ('color_name'=>'lightslategray', 'hex'=>'#778899'));
        DB::table('colors')->insert(array ('color_name'=>'slategray', 'hex'=>'#708090'));
        DB::table('colors')->insert(array ('color_name'=>'darkslategray', 'hex'=>'#2F4F4F'));
        DB::table('colors')->insert(array ('color_name'=>'black', 'hex'=>'#000000'));
        DB::table('colors')->insert(array ('color_name'=>'cornsilk', 'hex'=>'#FFF8DC'));
        DB::table('colors')->insert(array ('color_name'=>'blanchedalmond', 'hex'=>'#FFEBCD'));
        DB::table('colors')->insert(array ('color_name'=>'bisque', 'hex'=>'#FFE4C4'));
        DB::table('colors')->insert(array ('color_name'=>'navajowhite', 'hex'=>'#FFDEAD'));
        DB::table('colors')->insert(array ('color_name'=>'wheat', 'hex'=>'#F5DEB3'));
        DB::table('colors')->insert(array ('color_name'=>'burlywood', 'hex'=>'#DEB887'));
        DB::table('colors')->insert(array ('color_name'=>'tan', 'hex'=>'#D2B48C'));
        DB::table('colors')->insert(array ('color_name'=>'rosybrown', 'hex'=>'#BC8F8F'));
        DB::table('colors')->insert(array ('color_name'=>'sandybrown', 'hex'=>'#F4A460'));
        DB::table('colors')->insert(array ('color_name'=>'goldenrod', 'hex'=>'#DAA520'));
        DB::table('colors')->insert(array ('color_name'=>'peru', 'hex'=>'#CD853F'));
        DB::table('colors')->insert(array ('color_name'=>'chocolate', 'hex'=>'#D2691E'));
        DB::table('colors')->insert(array ('color_name'=>'saddlebrown', 'hex'=>'#8B4513'));
        DB::table('colors')->insert(array ('color_name'=>'sienna', 'hex'=>'#A0522D'));
        DB::table('colors')->insert(array ('color_name'=>'brown', 'hex'=>'#A52A2A'));
        DB::table('colors')->insert(array ('color_name'=>'maroon', 'hex'=>'#800000'));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('colors');
    }
}
