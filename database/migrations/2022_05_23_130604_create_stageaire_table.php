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
        Schema::create('stageaire', function (Blueprint $table) {
            $table->id();
            $table->boolean('sex');
            $table->string('prenom');
            $table->string('nom');
            $table->string('cin');
            $table->string('email');
            $table->integer('tele');
            $table->string('ville');
            $table->string('metier');
            $table->string('experience');
            $table->string('etude');
            $table->string('ecole');
            $table->string('file_pdf');
            $table->boolean('region');
            $table->boolean('dateDebut');
            $table->boolean('dateFin');
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
        Schema::dropIfExists('stageaire');
    }
};
