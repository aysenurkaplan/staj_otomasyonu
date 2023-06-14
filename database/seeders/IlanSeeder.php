<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class IlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\Ilan::factory(10)->create();
    }
}
