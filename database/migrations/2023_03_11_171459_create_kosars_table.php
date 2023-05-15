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
        Schema::create('kosars', function (Blueprint $table) {
            $table->foreignId('user_id')->references('f_azon')->on('users');
            $table->foreignId('termek')->references('termek_id')->on('termeks');
            $table->integer('mennyiseg');
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
        Schema::dropIfExists('kosars');
    }
};
