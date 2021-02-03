<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformaticoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informatico', function (Blueprint $table) {
            $table->id();
            $table->string('imgInfor');
            $table->string('nombreInfor', 30);
            $table->string('apellInfor', 30);
            $table->string('dniInfor', 9);
            $table->string('tlfInfor', 15);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('informatico');
    }
}
