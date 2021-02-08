<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacto', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('vendedor')->unsigned;
            $table->bigInteger('comprador')->unsigned;
            $table->bigInteger('idProducto')->unsigned;
            $table->longtext('mensaje');
            $table->timestamps();
            $table->foreign('vendedor')->references('id')->on('users');
            $table->foreign('comprador')->references('id')->on('users');
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
        Schema::dropIfExists('contacto');
    }
}
