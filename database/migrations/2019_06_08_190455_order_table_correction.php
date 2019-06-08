<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OrderTableCorrection extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn('deadline');
            $table->dropForeign('orders_course_id_foreign');
            $table->dropColumn('course_id')->unsigned();

            $table->integer('stream_id')->unsigned();
            $table->foreign('stream_id')
                ->references('id')
                ->on('streams');
        });

        DB::unprepared('DROP TRIGGER `deadline_trigger`');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
