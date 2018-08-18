<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDayToWasteproducersschedules extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
 Schema::table('wasteproducersschedules',function($table){
     $table->integer('day');

 });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */

        public function down()
    {
        Schema::table('wasteproducersschedules', function($table) {
            $table->dropColumn('day');
        });
    }

}
