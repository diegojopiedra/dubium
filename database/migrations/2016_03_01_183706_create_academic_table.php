<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcademicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academic', function (Blueprint $table) {
            $table->increments('id');
            $table->string('signature')->nullable();
            $table->longText('methodology')->nullable();
            $table->integer('quotations')->unsigned()->nullable();
            $table->integer('work_id')->unsigned()->nullable();
            $table->integer('type_id')->unsigned()->nullable();
            $table->integer('degree_id')->unsigned()->nullable();
            $table->integer('entity_id')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('work_id')->references('id')->on('works');
            $table->foreign('type_id')->references('id')->on('types');
            $table->foreign('degree_id')->references('id')->on('degrees');
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
        Schema::drop('academic');
    }
}
