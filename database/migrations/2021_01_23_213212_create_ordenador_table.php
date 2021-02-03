<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdenadorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordenador', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('idInfor')->unsigned();
            $table->string('marcaPc', 30);
            $table->string('modeloPc', 30)->nullable;
            $table->timestamps();
            $table->foreign('idInfor')->references('id')->on('informatico'); /*En esta linea declaramos la foreingkey, que en este caso,
            hace referencia al campo id de la tabla informatico*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ordenador');
    }
}
