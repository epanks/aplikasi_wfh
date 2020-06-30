<?php

use Illuminate\Database\Seeder;

class KodeoutputTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("INSERT INTO `kodeoutput` (`id`, `kdoutput`, `nmoutput`, `abat`, `rehabbangun`, `abjiat`, `atab`) VALUES
        (1, '001', 'Rencana teknis dan dokumen lingkungan hidup untuk konstruksi air tanah dan air baku', 1, 1, 0, 0),
        (2, '002', 'Sumur air tanah untuk air baku yang dibangun', 2, 3, 1, 1),
        (3, '003', 'Embung air baku yang dibangun', 3, 5, 1, 2),
        (4, '004', 'Unit air baku yang dibangun', 3, 5, 1, 2),
        (5, '005', 'Sumur JIAT yang dibangun/ditingkatkan', 2, 3, 2, 1),
        (6, '006', 'Jaringan irigasi air tanah (JIAT) yang dibangun/ditingkatkan', 2, 3, 2, 1),
        (7, '007', 'Sumur air tanah untuk air baku yang direhabilitasi', 2, 2, 1, 1),
        (8, '008', 'Embung air baku yang direhabilitasi', 3, 4, 1, 2),
        (9, '009', 'Unit air baku yang direhabilitasi', 3, 4, 1, 2),
        (10, '010', 'Sumur JIAT yang direhabilitasi', 2, 2, 2, 1),
        (11, '011', 'Jaringan irigasi air tanah (JIAT) yang direhabilitasi', 2, 2, 2, 1),
        (12, '970', 'Layanan Dukungan Manajemen Satker', 4, 6, 0, 0);");
    }
}
