<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAtTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('at', function (Blueprint $table) {
            $table->id();
            $table->string('kodefikasi');
            $table->string('nmcat');
            $table->string('nmdas');
            $table->string('nmws');
            $table->string('nmpropinsi');
            $table->string('nmkabupaten');
            $table->string('nmkecamatan');
            $table->string('nmdesa');
            $table->string('ls');
            $table->string('bt');
            $table->string('elvsumur');
            $table->string('statuspekerjaan');
            $table->integer('abjiwa');
            $table->integer('abdebit');
            $table->string('abkecamatan');
            $table->string('abdesa');
            $table->string('jiatawalha');
            $table->string('jiatsaatiniha');
            $table->string('jiatsuplesiawalha');
            $table->string('jiatsuplesisaatini');
            $table->string('jiatkecamatan');
            $table->string('jiatdesa');
            $table->string('nmsumur');
            $table->string('dalamsumur');
            $table->string('jnssumur');
            $table->string('jnspompa');
            $table->integer('headpompa');
            $table->string('tahunpengadaan');
            $table->integer('jnspenggerakpln');
            $table->integer('jnspenggerakgendet');
            $table->integer('jnspenggeraksolarcell');
            $table->string('jenispenggeraklain2');
            $table->integer('debitandalanpemompaan');
            $table->integer('debitawalpemompaan');
            $table->integer('idle');
            $table->string('statustanah');
            $table->integer('luasbangunan');
            $table->integer('jmlhbangunan');
            $table->integer('Column_40');
            $table->integer('Column_41');
            $table->integer('Column_42');
            $table->integer('jiatpanjangjaringan');
            $table->string('Column_44');
            $table->integer('Column_45');
            $table->integer('Column_46');
            $table->integer('Column_47');
            $table->integer('Column_48');
            $table->integer('Column_49');
            $table->string('tahunbangun');
            $table->string('rehabtahun');
            $table->string('Column_52');
            $table->string('Column_53');
            $table->integer('Column_54');
            $table->integer('Column_55');
            $table->integer('Column_56');
            $table->string('Column_57');
            $table->integer('Column_58');
            $table->string('statusserahterima');
            $table->string('statusoperasi');
            $table->string('keterangan');
            $table->string('kondisisumur');
            $table->string('kondisisumurket');
            $table->string('kondisireservoar');
            $table->string('kondisireservoarket');
            $table->string('kondisipompa');
            $table->string('kondisipompaket');
            $table->string('kondisirmhpompa');
            $table->string('kondisirmhpompaket');
            $table->string('kondisihu');
            $table->string('kondisihuket');
            $table->string('kondisisaluranab');
            $table->string('kondisisaluranabket');
            $table->string('kondisisaluranjiat');
            $table->string('kondisisaluranjiatket');
            $table->string('kondisibox');
            $table->string('kondisiboxket');
            $table->string('kondisisplinkerjiat');
            $table->integer('kondisisplinkerjiatket');
            $table->string('kondisipenggerak');
            $table->integer('kondisipenggerakketerangan');
            $table->string('bakumutuair');
            $table->integer('kunduktivitas');
            $table->integer('nilaistorativitas');
            $table->integer('nilaitansmisivitas');
            $table->string('instansipembangun');
            $table->string('sumberdana');
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
        Schema::dropIfExists('at');
    }
}
