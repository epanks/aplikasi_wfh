<?php

use Illuminate\Database\Seeder;

class KategorilelangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("INSERT INTO `kategori_lelang` (`id`, `nmproseslelang`) VALUES
        (1, 'Sirup'),
        (2, 'Pengiriman Dokumen'),
        (3, 'Tayang'),
        (4, 'Evaluasi'),
        (5, 'Evaluasi Ulang'),
        (6, 'Pengumuman Pemenang'),
        (7, 'Evaluasi'),
        (8, 'Penetapan Pemenang'),
        (9, 'Kontrak'),
        (10, 'Lelang Ulang');");
    }
}
