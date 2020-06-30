<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKabupatensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kabupaten', function (Blueprint $table) {
            $table->id();
            $table->string('kdkabupaten', 4)->unique();
            $table->string('nmkabupaten', 250);
            $table->string('kdprovinsi', 2)->nullable();
            $table->string('kdws', 2)->nullable();
            $table->string('kddas', 2)->nullable();
            $table->string('kdcat', 2)->nullable();

            //$table->foreign('kdprovinsi')->references('kdprovinsi')->on('provinsi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kabupaten');
    }
}
