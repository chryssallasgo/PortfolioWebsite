<?php

namespace Database\Seeders;

use App\Models\PCPart;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       // PCPart::factory(10)->create();

        $this->call([
            PCPartSeeder::class
        ]);
    }
}
