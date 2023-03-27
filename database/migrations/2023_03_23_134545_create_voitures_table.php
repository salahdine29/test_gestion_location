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
        Schema::create('voitures', function (Blueprint $table) {
            $table->id();
            $table->string('matricule');
            $table->string('anneModele');
            $table->string('couleur');
            $table->string('puissance');
            $table->integer('coutparjour');
            $table->string('image');
            $table->boolean('dispo')->default(0);
            $table->foreignId('modele_id')->references('id')->on('modeles');
            $table->foreignId('carburant_id')->references('id')->on('carburant');
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
        Schema::dropIfExists('voitures');
    }
};
