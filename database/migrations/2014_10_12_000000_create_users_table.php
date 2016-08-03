<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',50);
            $table->string('lastname1',50);
            $table->string('lastname2',50);
            $table->string('cellphone',15)->nullable();
            $table->integer('state')->unsigned()->nullable();
            $table->integer('city')->unsigned()->nullable();
            $table->string('zipcode',5)->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes(); # Adds deleted_at column for soft deletes.

            $table->index(['name','lastname1','lastname2']);
            $table->index(['state','city']);
            $table->index('email');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
