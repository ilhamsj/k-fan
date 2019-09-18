<?php

use Illuminate\Database\Seeder;
use App\Paket;

class PaketsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Paket::class, 3)->create();
    }
}
