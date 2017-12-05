<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class X extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('x', function (Blueprint $table) {
            $table->increments('id');
            $table->string('C0');
            $table->string('C1');
            $table->string('C2');
            $table->string('C3');
            $table->string('C4');
            $table->string('C5');
            $table->string('C6');
            $table->string('C7');
            $table->string('C8');
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
