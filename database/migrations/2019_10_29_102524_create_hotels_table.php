<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('nom',150);
            $table->string('responsable',100);
            $table->bigInteger('mobileresp');
            $table->bigInteger('telfixe');
            $table->double('lattitude');
            $table->bigInteger('longitude');
            $table->string('email',150);
            $table->string('logo',200);
            $table->text('adresse');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotels');
    }
}
