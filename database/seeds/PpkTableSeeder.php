<?php

use Illuminate\Database\Seeder;

class PpkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("INSERT INTO `ppk` (`id`, `nmppk`,'kdsatker','phone','wilayah_id','balai_id',`created_at`, `updated_at`) VALUES
        (1, 'Tes','06498277','081129282921', 2, 25,'','')");
    }
}
