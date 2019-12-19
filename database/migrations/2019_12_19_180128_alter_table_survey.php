<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableSurvey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('surveys', function (Blueprint $table) {
            $table->string('age')->change();
            $table->string('skin_type')->change();
            $table->string('skin_tone')->change();
            $table->string('skin_photo')->change();
            $table->string('skin_problems')->change();
            $table->string('tone_pressure')->change();
            $table->string('tone_finish')->change();
            $table->string('make_type')->change();
            $table->string('eye_color')->change();
            $table->string('hair_color')->change();
            $table->string('emphasize')->change();
            $table->string('important')->change();
            $table->string('fav_color')->change();
            $table->string('outfit')->change();
            $table->string('cosmetics')->change();
            $table->string('cosmetics_photo')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('surveys', function (Blueprint $table) {
            $table->integer('age')->change();
            $table->integer('skin_type')->change();
            $table->integer('skin_tone')->change();
            $table->string('skin_photo')->change();
            $table->integer('skin_problems')->change();
            $table->integer('tone_pressure')->change();
            $table->integer('tone_finish')->change();
            $table->integer('make_type')->change();
            $table->string('eye_color')->change();
            $table->string('hair_color')->change();
            $table->integer('emphasize')->change();
            $table->string('important')->change();
            $table->string('fav_color')->change();
            $table->integer('outfit')->change();
            $table->integer('cosmetics')->change();
            $table->string('cosmetics_photo')->change();
        });
    }
}
