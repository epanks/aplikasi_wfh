<?php

use Illuminate\Database\Seeder;

class SatoutputTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("INSERT INTO `satoutput` (`id`, `nmsatoutput`) VALUES
        (1, 'Dokumen'),
        (2, 'Titik'),
        (3, 'Buah'),
        (4, 'Km'),
        (5, 'Ha'),
        (6, 'Layanan');");
    }
}
