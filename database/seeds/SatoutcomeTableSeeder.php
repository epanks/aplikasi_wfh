<?php

use Illuminate\Database\Seeder;

class SatoutcomeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("INSERT INTO `satoutcome` (`id`, `nmoutcome`) VALUES
        (1, 'lt/dt'),
        (2, 'ha'),
        (3, 'kk'),
        (4, 'jiwa');");
    }
}
