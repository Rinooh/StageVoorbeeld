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
        Schema::create('Rijles', function (Blueprint $table) {
            $table->id('id_rijles');
            $table->integer('id_leerling');
            $table->integer('id_instructeur');
            $table->datetime('datum_tijd_rijles');
            $table->string('lesdoel');
            $table->string('les_commentaar_instructeur');
            $table->string('ander_ophaal_adres');
            $table->string('les_resultaat');
            $table->timestampsTz($precision = 0);
        });
    }
 
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Rijles');
    }
};
