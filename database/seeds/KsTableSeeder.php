<?php

use Illuminate\Database\Seeder;

class KsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("INSERT INTO `ks` (`id`, `nmks`) VALUES
        (1, 'K'),
        (2, 'S'),
        (3, 'Administrasi');");
    }
}
