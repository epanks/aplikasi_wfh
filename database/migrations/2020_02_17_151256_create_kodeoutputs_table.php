<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKodeoutputsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kodeoutput', function (Blueprint $table) {
            $table->id();
            $table->string('kdoutput', 3)->unique();
            $table->string('nmoutput')->nullable();
            $table->string('abat', 1)->nullable();
            $table->string('rehabbangun', 1)->nullable();
            $table->string('abjiat', 1)->nullable();
            $table->string('atab', 1)->nullable();

            //$table->foreign('kdoutput')->references('kdoutput')->on('paket');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kodeoutput');
    }
}
