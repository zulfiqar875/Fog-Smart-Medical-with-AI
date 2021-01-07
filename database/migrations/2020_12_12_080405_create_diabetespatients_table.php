<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiabetespatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diabetespatients', function (Blueprint $table) {
            $table->bigIncrements('did');
            $table->integer('pid');
            $table->integer('diabetes');
            $table->integer('bp');
            $table->integer('bmi');
            $table->integer('status');
            $table->integer('pred1');
            $table->integer('pred2');
            $table->integer('pred3');
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
        Schema::dropIfExists('diabetespatients');
    }
}
