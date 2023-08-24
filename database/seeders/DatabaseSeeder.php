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
        $this->users();
        $this->categories();
        $this->insertions();
   
    }

    private function users()
    {
        \App\Models\User::create([
            'name' => 'admin',
            'email' => 'admin@email.com',
            'password' => '12345678',
        ]); 
        \App\Models\User::create([
            'name' => 'Linda',
            'email' => 'linda@email.com',
            'password' => '12345678',

        ]); 
         \App\Models\User::create([
            'name' => 'Pino',
            'email' => 'pino@email.com',
            'password' => '12345678',
        ]); 
        \App\Models\User::create([
            'name' => 'Pablo',
            'email' => 'pablo@email.com',
            'password' => '12345678',
        ]); 
    }
    private function insertions()
    {  
        \App\Models\Insertions::create([
            'title' => 'Iphone X',
            'category_id' => 6,
            'price' => 500,
            'description' => 'Iphone X come nuovo del 2021',
            'user_id' => 2,
        ]); 
        \App\Models\Insertions::create([
            'title' => 'TV Samsung',
            'category_id' => 2,
            'price' => 300,
            'description' => 'TV del 2018 con telecomando',
            'user_id' => 3,
        ]); 

        \App\Models\Insertions::create([
            'title' => 'Fumetto Spiderman',
            'category_id' => 8,
            'price' => 10,
            'description' => 'Fumetto della Marvel del 2002',
            'user_id' => 2,
        ]); 
        \App\Models\Insertions::create([
            'title' => 'Divano',
            'category_id' => 5,
            'price' => 100,
            'description' => 'Divano blu in tessuto tre posti',
            'user_id' => 3,
    
        ]); 
        \App\Models\Insertions::create([
            'title' => 'Fiat 500',
            'category_id' => 1,
            'price' => 3000,
            'description' => 'Fiat 500 benzina Rossa del 2014',
            'user_id' => 2,
        ]); 
        \App\Models\Insertions::create([
            'title' => 'Borsa Louis Vuitton',
            'category_id' => 7,
            'price' => 30,
            'description' => 'Borsa marrone come nuova',
            'user_id' => 3,
        ]); 
        \App\Models\Insertions::create([
            'title' => 'Computer MSI',
            'category_id' => 2,
            'price' => 900,
            'description' => 'Computer portatile da gamming usato come nuovo, nero con tastiera led rossa',
            'user_id' => 2,

        ]); 
        \App\Models\Insertions::create([
            'title' => 'Lavatrice',
            'category_id' => 3,
            'price' => 150,
            'description' => '8kg di capacità',
            'user_id' => 2,
    
        ]); 
    }

    private function categories()
    {
        \App\Models\Category::create(['name' => 'Auto e Moto']);
        \App\Models\Category::create(['name' => 'Elettronica e Informatica']);
        \App\Models\Category::create(['name' => 'Elettrodomestici']);
        \App\Models\Category::create(['name' => 'Sport']);
        \App\Models\Category::create(['name' => 'Arredamento e mobili']);
        \App\Models\Category::create(['name' => 'Telefonia']);
        \App\Models\Category::create(['name' => 'Abbigliamento e accessori']);
        \App\Models\Category::create(['name' => 'Libri e fumetti']);
        \App\Models\Category::create(['name' => 'Animali e accessori']);
        \App\Models\Category::create(['name' => 'Collezionismo']);
    }
};
