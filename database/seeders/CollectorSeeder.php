<?php

namespace Database\Seeders;

use App\Models\Collector;
use Illuminate\Database\Seeder;

class CollectorSeeder extends Seeder
{
    public function run(): void
    {
        Collector::factory(50)->create();
    }
}
