<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMainArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('main_articles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('section_controllers_id')->unsigned()->index();
            $table->string('main_article_name')->index();
            $table->softDeletes();
            $table->timestamps();

            //$table->foreign('section_controllers_id')->references('id')->on('section_controllers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('main_articles');
    }
}
