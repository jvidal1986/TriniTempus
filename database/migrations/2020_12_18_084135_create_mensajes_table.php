<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMensajesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mensajes', function (Blueprint $table) {
            $table->id();
            $table->string('asunto');
            $table->string('contenido');
            $table->unsignedBigInteger('user_id_envio'); // UNSIGNED BIG INT
            $table->foreign('user_id_envio')
                ->references('id')
                ->on('users');

                $table->unsignedBigInteger('user_id_recibido'); // UNSIGNED BIG INT
                $table->foreign('user_id_recibido')
                    ->references('id')
                    ->on('users');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mensajes');
    }
}
