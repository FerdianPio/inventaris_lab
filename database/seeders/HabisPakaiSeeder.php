<?php

namespace Database\Seeders;

use App\Models\HabisPakai;
use Illuminate\Database\Seeder;

class HabisPakaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HabisPakai::factory(5)->create();
    }
}
