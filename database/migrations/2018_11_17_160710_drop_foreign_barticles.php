<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropForeignBarticles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('barticles', function (Blueprint $table) {
            $table->dropForeign(['main_articles_id']);
            $table->dropColumn('main_articles_id');

            $table->integer('section_id')->unsigned();
            $table->foreign('section_id')->references('id')->on('sections')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('barticles', function (Blueprint $table) {
            $table->integer('main_articles_id')->unsigned();
            $table->dropColumn('section_id');
        });
    }
}
