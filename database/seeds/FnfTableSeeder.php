<?php

use Illuminate\Database\Seeder;

class FnfTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("INSERT INTO `fnf` (`id`, `nmfnf`) VALUES
        (1, 'Fisik'),
        (2, 'Non Fisik'),
        (3, 'Administrasi');");
    }
}
