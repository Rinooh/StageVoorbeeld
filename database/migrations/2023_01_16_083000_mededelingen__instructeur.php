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
        Schema::create('Mededelingen_Instructeur', function (Blueprint $table) {
            $table->id('id_mededeling');
            $table->integer('mededeling_nummer');
            $table->string('mededeling');
        });
    }
 
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Mededelingen_Instructeur');
    }
};
