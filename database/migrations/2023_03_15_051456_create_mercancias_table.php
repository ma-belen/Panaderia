<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMercanciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mercancias', function (Blueprint $table) {
            $table->id();

            $table->integer('codigo');
            $table->string('tipo');
            $table->string('nombre_producto');
            $table->string('tamaño');
            $table->double('precio');
            $table->integer('cantidad'); 
            $table->string('fotografia');  

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
        Schema::dropIfExists('mercancias');
    }
}
