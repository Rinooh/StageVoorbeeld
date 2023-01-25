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
        Schema::create('Instructeur', function (Blueprint $table) {
            $table->id('id_instructeur');
            $table->string('naam_instructeur');
            $table->integer('id_auto');
            $table->integer('laatste_mededeling');
        });
    }
 
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Instructeur');
    }
};
