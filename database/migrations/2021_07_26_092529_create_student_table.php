<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student', function (Blueprint $table) {
            // $table->id();
            // $table->string('fname');
            // $table->string('lname');
            // $table->enum('gender',['Male','Female']);
            // $table->string('email');
            // $table->string('address');
            // $table->string('phone');
            // $table->string('mobile');
            // $table->string('state');
            // $table->integer('pin');
            // $table->string('city');
            // $table->string('country');
            // $table->string('password');
            // $table->string('cnfpassword');
            // $table->string('ProfileImage');
            // $table->timestamps();

            $table->increments('id');
            $table->string('fname');
            $table->string('lname');
            $table->string('gender',10);
            $table->string('email');
            $table->string('address');
            $table->string('phone');
            $table->string('Mobile');
            $table->string('state');
            $table->integer('pin');
            $table->string('city');
            $table->string('country');
            $table->string('password');
            $table->string('cnfpassword');
            $table->string('file');
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
        Schema::dropIfExists('student');
    }
}
