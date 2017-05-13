<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uet_questions', function (Blueprint $table) {
            $table->increments('id');
            $table->mediumText('content');
            $table->integer('test_id')->unsigned();
            $table->foreign('test_id')->references('id')->on('uet_tests')->onDelete('cascade');
            $table->integer('correct_answer');
            $table->mediumText('source')->nullable();
            $table->integer('user_id')->unsigned()->default(1);
            $table->foreign('user_id')->references('id')->on('uet_users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('uet_questions');
    }
}
