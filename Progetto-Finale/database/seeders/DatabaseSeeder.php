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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
    private function categories()
    {

        \App\Models\Category::create(['name' => 'Auto e Moto']);
        \App\Models\Category::create(['name' => 'Elettronica e Informatica']);
        \App\Models\Category::create(['name' => 'Elettrodomestici']);
        \App\Models\Category::create(['name' => 'Sport']);

    }
};
