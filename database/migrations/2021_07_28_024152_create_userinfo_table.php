<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserinfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userinfo', function (Blueprint $table) {
          
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
            $table->string('fimg');
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
        Schema::dropIfExists('userinfo');
    }
}
