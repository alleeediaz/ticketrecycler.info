<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillingInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         * Debemos considerar para el catalogo de Municipios
         * id
         * RFC DIGA831215UVA
         * Razon Social
         * Calle
         * No Ext
         * No Int
         * Colonia
         * Municipio
         * Estado
         * CP
         * Pais
         */
        Schema::create('billinginfo', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rfc',13);
            $table->string('razon_social');
            $table->string('calle',150);
            $table->string('no_int',150);
            $table->string('no_ext',150)->nullable();
            $table->string('municipio',150);
            $table->string('estado',100);
            $table->string('cp',5);
            $table->enum('pais', ['Mexico'])->default('Mexico');
            $table->timestamps(); # Adds created_at and updated_at columns.
            $table->softDeletes(); # Adds deleted_at column for soft deletes.

            $table->index('rfc');
            $table->unique('rfc');
            $table->index('razon_social');
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
        
        Schema::drop('billinginfo');
    }
}
