<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('magazine_id')->unsigned();
            $table->integer('magazine_volume')->unsigned()->nullable();
            $table->integer('magazine_number')->unsigned()->nullable();
            $table->integer('work_id')->unsigned();
            $table->timestamps();

            $table->foreign('work_id')->references('id')->on('works');
            $table->foreign('magazine_id')->references('id')->on('magazines');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('articles');
    }
}
