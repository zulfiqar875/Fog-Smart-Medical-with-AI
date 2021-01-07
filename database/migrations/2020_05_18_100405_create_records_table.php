<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records', function (Blueprint $table) {
            $table->bigIncrements('rid');
            $table->biginteger('RPid');
            $table->integer('Hiper');
            $table->integer('Loper');
            $table->integer('BMI');
            $table->integer('Plusrate');
            $table->integer('Pred1');
            $table->integer('Pred2');
            $table->integer('Pred3');
            $table->integer('Status');
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
        Schema::dropIfExists('records');
    }
}
