<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->bigIncrements('Pid');
            $table->string('Firstname');
            $table->string('Lastname');
            $table->integer('Age');
            $table->integer('Gender');
            $table->float('Height');
            $table->integer('Weight');
            $table->string('CNIC');
            $table->string('Address');
            $table->string('Contactno');
            $table->integer('Cholestrol');
            $table->integer('Cardio');
            $table->integer('Glucose');
            $table->integer('Smoking');
            $table->integer('Active');
            $table->string('Hospital');
            $table->string('City');
            $table->string('Postalcode');
            $table->string('Email');
            $table->string('Username');
            $table->string('Password');
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
        Schema::dropIfExists('patients');
    }
}
