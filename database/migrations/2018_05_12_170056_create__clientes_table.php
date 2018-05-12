<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * 
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('NomeCompleto', 900);
            $table->string('CPF', 11);
            $table->int('idTipoCliente');
            $table->date('dataNascimento');
            $table->double('pretensaoCache', 8, 2);
            $table->double('valorHora', 8, 2);
            $table->int('idTipoMusico');
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
        Schema::dropIfExists('_clientes');
    }
}
