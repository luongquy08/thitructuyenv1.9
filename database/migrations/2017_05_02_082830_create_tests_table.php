<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uet_tests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('subject_id')->unsigned();
            $table->foreign('subject_id')->references('id')->on('uet_subjects')->onDelete('cascade');
            $table->integer('user_id')->unsigned()->default(1);
            $table->foreign('user_id')->references('id')->on('uet_users');
            $table->string('slug');
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
        Schema::drop('uet_tests');
    }
}
