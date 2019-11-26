<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransfertIntermediairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transfert_intermediaires', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->unsignedInteger('id_transfert');
            $table->unsignedInteger('id_vol');
            $table->unsignedInteger('id_hotel');
            $table->unsignedInteger('id_agence');
            $table->time('heure_d');
            $table->time('heure_a');
            $table->time('heure_d_retard');     //Horaire de dépard retardé
            $table->time('heure_a_retard');     //Horaire d'arrivée retardé
            $table->integer('nbperso');
            $table->unsignedInteger('etat');    // 0 : En attente   => dde agence non planifié ni affectée
                                                // 1 : Planifié  => affecté à un chauffeur mais non encore effectué
                                                // 2 : Réalisé  => planifié, affecté et effectué
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transfert_intermediaires');
    }
}
