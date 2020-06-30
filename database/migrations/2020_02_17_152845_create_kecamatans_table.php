<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKecamatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kecamatan', function (Blueprint $table) {
            $table->id();
            $table->string('kdkecamatan', 7)->unique();
            $table->string('nmkecamatan', 250);
            $table->string('kdkabupaten', 4)->nullable();
            $table->string('kdprovinsi', 2)->nullable();

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
        Schema::dropIfExists('kecamatan');
    }
}
