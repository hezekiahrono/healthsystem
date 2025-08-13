<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('spouse_id');
            $table->string('name');
            $table->date('birthday');
            $table->string('idNumber');
            $table->string('address');
            $table->string('residence');
            $table->string('estate');
            $table->string('town');
            $table->string('county');
            $table->integer('registrationFee');
            $table->integer('contribution');
            $table->string('occupation');
            $table->string('gender');
            $table->string('maritalStatus')->nullable();
            $table->foreign('spouse_id')->references('id')->on('spouse')->onDelete('cascade');
            $table->string('phone');
            $table->string('usertype')->nullable();
            $table->string('email')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
