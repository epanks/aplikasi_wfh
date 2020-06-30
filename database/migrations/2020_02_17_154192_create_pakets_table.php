<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paket', function (Blueprint $table) {
            $table->id();
            $table->string('nmpaket', 250);
            $table->decimal('pagurmp', 15, 2);
            $table->integer('ta')->default(2020);
            $table->decimal('trgoutput', 8, 2)->nullable();
            $table->foreignId('satoutput_id')->default(1)->nullable();
            $table->decimal('trgoutcome', 8, 2)->nullable();
            $table->foreignId('satoutcome_id')->default(1)->nullable();
            $table->foreignId('ppk_id')->nullable();
            $table->foreignId('balai_id')->nullable();
            $table->string('kdsatker', 8);
            $table->string('kdprovinsi', 2)->nullable();
            $table->string('kdkabupaten', 4)->nullable();
            $table->string('kdkecamatan', 7)->nullable();
            $table->string('kddesa', 10)->nullable();
            $table->string('kdoutput', 3)->nullable();
            $table->foreignId('wilayah_id')->default(2)->nullable();
            $table->foreignId('fnf_id')->default(1)->nullable();
            $table->foreignId('ks_id')->default(1)->nullable();
            $table->foreignId('apbnsbsn_id')->default(1)->nullable();
            $table->foreignId('sycmyc_id')->default(1)->nullable();
            $table->string('slug')->nullable();
            $table->string('keterangan')->nullable();
            $table->timestamps();

            // $table->foreign('satoutput_id')->references('id')->on('satoutput');
            // $table->foreign('satoutcome_id')->references('id')->on('satoutcome');
            // $table->foreign('ppk_id')->references('id')->on('ppk');
            // $table->foreign('balai_id')->references('id')->on('balai');
            // $table->foreign('wilayah_id')->references('id')->on('wilayah');
            // $table->foreign('fnf_id')->references('id')->on('fnf');
            // $table->foreign('ks_id')->references('id')->on('ks');
            // $table->foreign('apbnsbsn_id')->references('id')->on('apbnsbsn');
            // $table->foreign('sycmyc_id')->references('id')->on('sycmyc');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paket');
    }
}
