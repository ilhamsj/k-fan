<?php

use Illuminate\Database\Seeder;
use App\Layanan;

class LayanansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Layanan::class, 100)->create();
    }
}
