<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTableSurveys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surveys', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')
                ->references('id')
                ->on('users');
            $table->integer('age');
            $table->integer('skin_type');
            $table->integer('skin_tone');
            $table->string('skin_photo');
            $table->integer('skin_problems');
            $table->integer('tone_pressure');
            $table->integer('tone_finish');
            $table->integer('make_type');
            $table->string('eye_color');
            $table->string('hair_color');
            $table->integer('emphasize');
            $table->string('important');
            $table->string('fav_color');
            $table->integer('outfit');
            $table->integer('cosmetics');
            $table->string('cosmetics_photo');

            $table->boolean('status')->default(true);
            $table->softDeletes();
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
        Schema::dropIfExists('surveys');
    }
}
