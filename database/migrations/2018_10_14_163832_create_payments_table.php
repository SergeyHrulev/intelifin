<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('barticles_id')->unsigned()->index();
            $table->integer('department_id')->unsigned()->index();
            $table->string('payment_name')->index();
            $table->double('summ');
            $table->date('bdr_plan')->nullable();
            $table->date('bdr_fact')->nullable();
            $table->date('bdds_plan')->nullable();
            $table->date('bdds_fact')->nullable();
            $table->softDeletes();
            $table->timestamps();

            //$table->foreign('barticles_id')->referenses('id')->on('barticles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
