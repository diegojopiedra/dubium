<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('logo_image')->nullable();
            $table->integer('entity_parent_id')->nullable()->unsigned();
            $table->integer('entity_type_id')->unsigned();
            $table->integer('institution_id')->unsigned();
            $table->timestamps();

            $table->foreign('entity_parent_id')->references('id')->on('entities');
            $table->foreign('entity_type_id')->references('id')->on('entity_types');
            $table->foreign('institution_id')->references('id')->on('institutions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('entities');
    }
}
