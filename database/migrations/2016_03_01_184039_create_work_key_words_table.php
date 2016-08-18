<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkKeyWordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_key_words', function (Blueprint $table) {
            $table->integer('key_word_id')->unsigned();
            $table->integer('work_id')->unsigned();
            $table->timestamps();

            $table->primary(['key_word_id', 'work_id']);
            $table->foreign('key_word_id')->references('id')->on('key_words');
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
        Schema::drop('work_key_words');
    }
}
