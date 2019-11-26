<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifTansfertintermediaires extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('transfert_intermediaires', function(Blueprint $table) {
            $table->time('heure_trans')->after('origine');
            $table->date('date_trans')->after('origine');
            $table->string('id_vol', 20)->change();
            $table->string('id_hotel',100)->change();
            $table->string('id_agence',100)->change();
            $table->string('etat',20)->change();  //En attente, Planifié, Réalisé
            $table->renameColumn('id_hotel', 'nom_hotel');
            $table->renameColumn('id_agence', 'nom_agence');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
