<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcademicGeographicalDescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academic_geographical_descriptions', function (Blueprint $table) {
            $table->integer('geographical_description_id')->unsigned();
            $table->integer('academic_id')->unsigned();
            $table->timestamps();

            $table->primary(['geographical_description_id', 'academic_id'], 'pk_academic_geographical');
            $table->foreign('geographical_description_id', 'geo_description_fk')->references('id')->on('geographical_descriptions');
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
        Schema::drop('academic_geographical_descriptions');
    }
}
