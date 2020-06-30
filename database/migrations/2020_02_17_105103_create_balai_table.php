<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBalaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('balai', function (Blueprint $table) {
            $table->id();
            $table->string('nmbalai', 100);
            $table->foreignId('wilayah_id');
            //$table->foreign('wilayah_id')->references('id')->on('wilayah');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('balai');
    }
}
