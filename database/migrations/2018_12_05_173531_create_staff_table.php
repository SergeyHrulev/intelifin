<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calc_staff', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->double('gross');
            $table->double('nett');
            $table->double('tax');
            $table->double('pension');
            $table->double('oms');
            $table->double('ossvn');
            $table->double('ossnspz');
            $table->double('sum');
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
        Schema::dropIfExists('staff');
    }
}
