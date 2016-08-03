<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         * Debemos considerar para un ticket
         * Tipo de Ticket -> Alimentos -> Gasolina -> Hospedaje -> Transporte
         * Numero de Ticket
         * Fecha de Emision
         * Estado
         * Municipio
         * Importe Total
         *
         * Sitio Web para facturar
         * Codigo1 para facturar
         * Codigo2 para facturar
         * Codigo3 para facturar
         * Codigo4 para facturar
         *
         * Adjuntar Foto
         */
        Schema::create('tickets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('type', ['Alimentos', 'Gasolina','SAMS','WALMART','LACOMER','SORIANA']);
            $table->string('number',50);
            $table->date('date');
            $table->integer('state')->unsigned(); # FK
            $table->integer('city')->unsigned(); # FK
            $table->decimal('amount',15,2);
            $table->string('site',50)->nullable();
            $table->string('code1',50)->nullable();
            $table->string('code2',50)->nullable();
            $table->string('code3',50)->nullable();
            $table->string('code4',50)->nullable();
            $table->string('code5',50)->nullable();
            $table->binary('attachment')->nullable();
            $table->timestamps(); # Adds created_at and updated_at columns.
            $table->softDeletes(); # Adds deleted_at column for soft deletes.

            $table->index(['type','state','city']);
            $table->index('number');
            $table->index('date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tickets');
    }
}
