<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('controlar_administradors', function (Blueprint $table) {
            $table->id();
            $table->string('Id_Admin');
            $table->string('Id_Sadmin');
            $table->integer('Calificacion');
            $table->string('Retroalimentacion');
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
        Schema::dropIfExists('controlar_administradors');
    }
};
