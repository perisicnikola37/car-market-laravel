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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->index()->nullable();
            $table->string('gorivo_id')->index()->nullable();
            $table->string('pogon_id')->index()->nullable();
            $table->string('stanje_id')->index()->nullable();
            $table->string('file');
            $table->string('slug')->index()->nullable();
            $table->string('proizvodjac')->nullable();
            $table->string('model')->nullable();
            $table->integer('kilometraza')->nullable();
            $table->integer('kubikaza')->nullable();
            $table->string('oznaka')->nullable();
            $table->string('lokacija')->nullable();
            $table->integer('godiste')->nullable();
            $table->integer('snaga')->nullable();
            $table->string('boja')->nullable();
            $table->string('mijenjac')->nullable();
            $table->string('opis')->nullable();
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
        Schema::dropIfExists('cars');
    }
};
