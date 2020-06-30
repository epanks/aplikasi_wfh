<?php

use Illuminate\Database\Seeder;

class ApbnsbsnTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("INSERT INTO `apbnsbsn` (`id`, `nmapbnsbsn`) VALUES
        (1, 'APBN'),
        (2, 'SBSN'),
        (3, 'LOAN');");
    }
}
