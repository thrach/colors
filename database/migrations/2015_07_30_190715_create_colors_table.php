<?php

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
            $table->string('mouline')->nullable();
            $table->string('coton')->nullable();
            $table->string('rayonne')->nullable();
            $table->string('retors')->nullable();
            $table->string('laine')->nullable();
            $table->string('medicis')->nullable();
            $table->string('broder')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('colors');
    }
}
