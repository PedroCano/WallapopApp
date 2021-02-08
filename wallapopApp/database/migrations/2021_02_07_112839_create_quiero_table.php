<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuieroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quiero', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('idUsuario')->unsigned;
            $table->bigInteger('idProducto')->unsigned;
            $table->timestamps();
            $table->foreign('idUsuario')->references('id')->on('users');
            $table->foreign('idProducto')->references('id')->on('producto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quiero');
    }
}
