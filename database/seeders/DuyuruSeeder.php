<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DuyuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Duyuru::factory(5)->create();
    }
}
