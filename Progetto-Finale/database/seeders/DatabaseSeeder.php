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

        ]);  \App\Models\User::create([
            'name' => 'Pino',
            'email' => 'pino@email.com',
            'password' => '12345678',
        ]); 
    }
    private function insertions()
    {  
        \App\Models\Insertions::create([
            'title' => 'Iphone X',
            'category_id' => 6,
            'price' => 500,
            'description' => 'Iphone X come nuovo',
            'user_id' => 2,
            'body' => 'iphone del 2021'
        ]); 
        \App\Models\Insertions::create([
            'title' => 'TV Samsung',
            'category_id' => 2,
            'price' => 300,
            'description' => 'TV del 2018 ',
            'user_id' => 3,
            'body' => 'TV Samsung con telecomando'
        ]); 

        \App\Models\Insertions::create([
            'title' => 'Fumetto Spiderman',
            'category_id' => 8,
            'price' => 10,
            'description' => 'Fumetto della Marvel',
            'user_id' => 2,
            'body' => 'Fumetto del 2002'
        ]); 
        \App\Models\Insertions::create([
            'title' => 'Divano',
            'category_id' => 5,
            'price' => 100,
            'description' => 'Divano tre posti',
            'user_id' => 3,
            'body' => 'Divano blu in tessuto'
        ]); 
        \App\Models\Insertions::create([
            'title' => 'Fiat 500',
            'category_id' => 1,
            'price' => 3000,
            'description' => 'Fiat 500 benzina',
            'user_id' => 2,
            'body' => 'Fiat 500 Rossa del 2014'
        ]); 
        \App\Models\Insertions::create([
            'title' => 'Borsa Louis Vuitton',
            'category_id' => 7,
            'price' => 30,
            'description' => 'Borsa marrone',
            'user_id' => 3,
            'body' => 'Borsa come nuova'
        ]); 
        \App\Models\Insertions::create([
            'title' => 'Computer MSI',
            'category_id' => 2,
            'price' => 900,
            'description' => 'Nero con tastiera led rossa',
            'user_id' => 2,
            'body' => 'Computer portatile da gamming usato come nuovo'
        ]); 
        \App\Models\Insertions::create([
            'title' => 'Lavatrice',
            'category_id' => 3,
            'price' => 150,
            'description' => '8kg di capacità',
            'user_id' => 2,
            'body' => 'bianca'
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
