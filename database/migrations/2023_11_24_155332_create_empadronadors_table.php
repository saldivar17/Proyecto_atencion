<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpadronadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empadronadors', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 50);
            $table->string('apellidos', 50);
            $table->string('dni', 8);
            $table->string('celular', 9)->nullable();
            $table->string('estado', 1);
            $table->string('responsable', 100);
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
        Schema::dropIfExists('empadronadors');
    }
}
