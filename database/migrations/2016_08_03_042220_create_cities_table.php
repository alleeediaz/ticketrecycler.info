<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitiesTable extends Migration
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
         * cve
         * name
         * latlong
         * state_id
         */
        Schema::create('cities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code',5);
            $table->string('name');
            $table->string('latlong',100)->nullable();
            $table->integer('states_id');
            $table->timestamps(); # Adds created_at and updated_at columns.
            $table->softDeletes(); # Adds deleted_at column for soft deletes.

            $table->index('name');
            $table->index('code');
            $table->index('states_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cities');
    }
}
