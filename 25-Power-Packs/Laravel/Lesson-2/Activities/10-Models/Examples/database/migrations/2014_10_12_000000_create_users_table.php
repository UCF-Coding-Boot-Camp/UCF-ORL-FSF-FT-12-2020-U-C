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
        Schema::create('users', function(Blueprint $table) {
            // Give each new user an id one greater than the previous user's
            $table->increments('id');

            // Create a string column to store our user's name
            $table->string('name');

            // Create a string column to store our user's email.
            //   Only allow one user to use any given email.
            $table->string('email')->unique();

            // Create a string column to store our user's password.
            $table->string('password');

            // Used by Laravel's security internals. Ignore for now.
            $table->rememberToken();

            // Create created_at and and updated_at Date columns.
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
        Schema::drop('users');
    }
}
