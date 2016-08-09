<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLobbyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lobby', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('type');
            $table->tinyInteger('rank_min');
            $table->tinyInteger('rank_max');
            $table->string('comment');
            $table->integer('user_id', false, true);
            $table->boolean('is_active');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('lobby');
    }
}
