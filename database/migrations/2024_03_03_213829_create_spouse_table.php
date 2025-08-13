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
        Schema::create('spouse', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->date('birthday')->nullable();
            $table->string('idNumber')->nullable();
            $table->string('address')->nullable();
            $table->string('residence')->nullable();
            $table->string('estate')->nullable();
            $table->string('town')->nullable();
            $table->string('county')->nullable();
            $table->string('occupation')->nullable();
            $table->string('gender')->nullable();
            $table->string('phone')->nullable();
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
        Schema::dropIfExists('spouse');
    }
};
