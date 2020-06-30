<?php

use Illuminate\Database\Seeder;

class WilayahTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("INSERT INTO `wilayah` (`id`, `nmwilayah`) VALUES
        (1, 'Wilayah Barat'),
        (2, 'Wilayah Timur');");
    }
}
