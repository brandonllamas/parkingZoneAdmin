<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PuntoParkinh extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('tienda', function (Blueprint $table) {
            $table->id('id');
            $table->string('name_parking');
            $table->string('cellphoneparking')->nullable();
            $table->string('direction')->nullable();
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
