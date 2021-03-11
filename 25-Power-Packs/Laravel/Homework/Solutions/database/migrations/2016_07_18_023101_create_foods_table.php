<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foods', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('meal_id')->unsigned()->indexed();

            $table->string('name');
            $table->integer('protein')->unsigned();
            $table->integer('carbohydrates')->unsigned();
            $table->integer('fat')->unsigned();


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
        Schema::drop('foods');
    }
}
