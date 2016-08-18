<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcademicThematicDescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academic_thematic_descriptions', function (Blueprint $table) {
            $table->integer('thematic_description_id')->unsigned();
            $table->integer('academic_id')->unsigned();
            $table->timestamps();

            $table->primary(['thematic_description_id', 'academic_id'], 'pk_academic_thematic');
            $table->foreign('thematic_description_id')->references('id')->on('thematic_descriptions');
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
        Schema::drop('academic_thematic_descriptions');
    }
}
