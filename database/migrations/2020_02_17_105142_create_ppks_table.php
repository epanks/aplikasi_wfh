<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePpksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ppk', function (Blueprint $table) {
            $table->id();
            $table->string('nmppk', 40);
            $table->string('kdsatker');
            $table->string('phone')->nullable();
            $table->foreignId('wilayah_id')->nullable();
            $table->foreignId('balai_id')->nullable();
            $table->timestamps();

            //$table->foreign('kdsatker')->references('kdsatker')->on('satker');
            $table->foreign('balai_id')->references('id')->on('balai');
            $table->foreign('wilayah_id')->references('id')->on('wilayah');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ppk');
    }
}
