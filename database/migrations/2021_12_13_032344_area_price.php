<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AreaPrice extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('area', function (Blueprint $table) {
            $table->id('id');
            $table->string('name_area');
            $table->string('price_area');
            $table->string('id_ciudad');
            $table->integer('state')->default(1);
            $table->timestamps();
        });

        Schema::create('coordinate', function (Blueprint $table) {
            $table->id('id');
            $table->string('id_area');
            $table->string('coordinate_x');
            $table->string('coordinate_y');
            $table->integer('state')->default(1);
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
