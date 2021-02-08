<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('idUsuario')->unsigned;
            $table->bigInteger('idCategoria')->unsigned;
            $table->string('nombre');
            $table->longtext('descripcion');
            $table->string('uso');
            $table->decimal('precio', 7, 2);
            $table->date('fecha');
            $table->string('estado');
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('idUsuario')->references('id')->on('users');
            $table->foreign('idCategoria')->references('id')->on('categoria');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('producto');
    }
}
