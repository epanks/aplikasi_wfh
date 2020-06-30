<?php

use Illuminate\Database\Seeder;

class SycmycTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("INSERT INTO `sycmyc` (`id`, `nmsycmyc`) VALUES
        (1, 'SYC'),
        (2, 'MYC'),
        (3, 'MYC Lanjutan');");
    }
}
