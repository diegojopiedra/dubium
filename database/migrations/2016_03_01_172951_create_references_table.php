<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReferencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('references', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('text')->nullable();
            $table->integer('work_id')->unsigned()->nullable();
            $table->integer('work_refered_id')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('work_id')->references('id')->on('works');
            $table->foreign('work_refered_id')->references('id')->on('works');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('references');
    }
}
