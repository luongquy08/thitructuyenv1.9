<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uet_subjects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
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
        Schema::drop('uet_subjects');
    }
}
