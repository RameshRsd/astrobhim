<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTraineesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('ctzn_number')->unique()->nullable();
            $table->enum('gender',['Male','Female']);
            $table->string('token_number')->unique()->nullable();
            $table->string('phone_number1');
            $table->string('phone_number2');
            $table->enum('training',['Beautician','Building Electrician','Junior Plumber','Tailoring']);
            $table->string('training_event');
            $table->string('location');

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
        Schema::dropIfExists('trainees');
    }
}
