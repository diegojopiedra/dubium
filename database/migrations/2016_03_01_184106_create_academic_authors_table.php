<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcademicAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academic_authors', function (Blueprint $table) {
            $table->integer('author_id')->unsigned();
            $table->integer('academic_id')->unsigned();
            $table->timestamps();

            $table->primary(['author_id', 'academic_id']);
            $table->foreign('author_id')->references('id')->on('authors');
            $table->foreign('academic_id')->references('id')->on('academic');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('academic_authors');
    }
}
