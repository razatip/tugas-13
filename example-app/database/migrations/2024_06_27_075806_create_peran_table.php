<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peran', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->unsignedBigInteger('id_cast');
            $table->unsignedBigInteger('id_film');
            $table->string('nama', 255);
            $table->foreign('id_cast')->references('id')->on('cast');
            $table->foreign('id_film')->references('id')->on('film');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peran');
    }
}
