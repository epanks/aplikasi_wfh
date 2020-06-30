<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDesasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('desa', function (Blueprint $table) {
            $table->id();
            $table->string('kddesa', 10)->unique();
            $table->string('nmdesa', 250)->nullable();
            $table->string('kdkecamatan', 7)->nullable();
            $table->string('kdkabupaten', 4)->nullable();
            $table->string('kdprovinsi', 2)->nullable();
            $table->string('kdws', 2)->nullable();
            $table->string('kddas', 2)->nullable();
            $table->string('kdcat', 3)->nullable();

            //$table->foreign('kdcat')->references('kdcat')->on('cat');
            //$table->foreign('kdkabupaten')->references('kdkabupaten')->on('kabupaten');
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
        Schema::dropIfExists('desa');
    }
}
