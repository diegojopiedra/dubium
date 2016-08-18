<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('publication_place_id')->nullable()->unsigned();
            $table->integer('editorial_id')->nullable()->unsigned();
            $table->integer('work_id')->unsigned();
            $table->timestamps();

            $table->foreign('publication_place_id')->references('id')->on('publication_places');
            $table->foreign('editorial_id')->references('id')->on('editorials');
            $table->foreign('work_id')->references('id')->on('works');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('books');
    }
}
