<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIntershipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interships', function (Blueprint $table) {
            $table->integer('author_id')->unsigned();
            $table->integer('entity_id')->unsigned();
            $table->timestamps();

            $table->primary(['author_id', 'entity_id']);
            $table->foreign('author_id')->references('id')->on('authors');
            $table->foreign('entity_id')->references('id')->on('entities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('interships');
    }
}
