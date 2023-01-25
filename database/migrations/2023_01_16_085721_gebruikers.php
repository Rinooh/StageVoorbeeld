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
        Schema::create('Gebruikers', function (Blueprint $table) {
            $table->id('id');
            $table->string('naam_gebruiker');
            $table->string('wachtwoord_gebruiker');
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
        Schema::drop('Gebruikers');
    }
};
