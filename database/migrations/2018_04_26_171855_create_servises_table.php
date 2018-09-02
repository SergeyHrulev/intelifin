<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servises', function (Blueprint $table) {
            $table->increments('id');
            $table->string('metatitle')->nullable();
            $table->string('metakey')->nullable();
            $table->string('metadescription')->nullable();
            $table->string('metacanonical')->nullable();
            $table->string('title')->index();
            $table->string('slug')->index();
            $table->string('anons');
            $table->text('description');
            $table->string('img')->nullable();
            $table->string('preview')->nullable();
            $table->string('alt')->nullable();
            $table->string('img_title')->nullable();
            $table->dateTime('deleted_at');
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
        Schema::dropIfExists('servises');
    }
}
