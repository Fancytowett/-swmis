<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWasterequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wasterequests', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('recycler_id')->unsigned();
            $table->foreign('recycler_id')->references('id')->on('recyclers')->onDelete('cascade');
            $table->string('email');
            $table->integer('waste_type');
            $table->string('quantity')->default(0);
            $table->integer('status')->default(0);
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
        Schema::dropIfExists('wasterequests');
    }
}
