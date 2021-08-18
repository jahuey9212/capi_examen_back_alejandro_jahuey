<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserDomicilio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        if (!Schema::hasColumn('users', 'fecha_nacimento')) {
            // sino existe la columna entonces se agrega en al tabla y BD
            Schema::table('users', function (Blueprint $table) {
                $table->date('fecha_nacimento');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasColumn('users', 'fecha_nacimento')) {
            Schema::dropColumn('fecha_nacimento');
        }
    }
}
