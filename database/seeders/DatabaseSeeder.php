<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            RolesSeeder::class,
            CategorySeeder::class,
            SubCategorySeeder::class,
            ExaminersSeeder::class,
            SantriSeeder::class,
        ]);
    }
}
