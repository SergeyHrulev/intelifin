<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barticles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('main_articles_id')->unsigned()->index();
            $table->integer('article_code')->index();
            $table->string('article_name')->index();
            $table->softDeletes();
            $table->timestamps();

            //$table->foreign('main_articles_id')->references('id')->on('main_articles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barticles');
    }
}
