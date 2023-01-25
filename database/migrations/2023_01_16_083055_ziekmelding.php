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
        Schema::create('Ziekmeldings', function (Blueprint $table) {
            $table->id('id_ziekmelding');
            $table->integer('id_gebruiker');
            $table->timestamp('datum_tijd_ziekmelding');
            $table->string('reden_ziekmelding');
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
        Schema::drop('Ziekmeldings');
    }
};
