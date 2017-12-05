<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Bobot extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('bobot', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_user');
            $table->string('B0');
            $table->string('B1');
            $table->string('B2');
            $table->string('B3');
            $table->string('B4');
            $table->string('B5');
            $table->string('B6');
            $table->string('B7');
            $table->string('B8');
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
        //
    }
}
