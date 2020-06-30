<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([WilayahTableSeeder::class, BalaiTableSeeder::class, SatkerTableSeeder::class]);
        //$this->call(UsersTableSeeder::class);
        $this->call(KodeoutputTableSeeder::class);
        $this->call(SatoutputTableSeeder::class);
        $this->call(SatoutcomeTableSeeder::class);
        $this->call(FnfTableSeeder::class);
        $this->call(KategorilelangSeeder::class);
        $this->call(KsTableSeeder::class);
        $this->call(ApbnsbsnTableSeeder::class);
        $this->call(SycmycTableSeeder::class);
        $this->call(PaketTableSeeder::class);
        $this->call(ProgresTableSeeder::class);
        $this->call(CatTableSeeder::class);
        $this->call(WsTableSeeder::class);
        $this->call(DasTableSeeder::class);
        $this->call([ProvinsiTableSeeder::class, KabupatenTableSeeder::class, KecamatanTableSeeder::class, DesaTableSeeder::class]);
    }
}
