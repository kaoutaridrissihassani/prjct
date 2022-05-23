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
        Schema::create('stage', function (Blueprint $table) {
            $table->id();
            $table->string('sex');
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
            $table->text('motivation');
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
        Schema::dropIfExists('stage');
    }
};

