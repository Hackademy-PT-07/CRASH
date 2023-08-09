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
        $this->insertions();
        $this->categories();
        $this->users();
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
            'category_id' => 2,
            'price' => 10,
            'description' => 'Fumetto della Marvel',
            'user_id' => 2,
            'body' => 'Fumetto del 2002'
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
        \App\Models\Category::create(['name' => 'Abbigliamento']);
        \App\Models\Category::create(['name' => 'Libri e fumetti']);
        \App\Models\Category::create(['name' => 'Animali e accessori']);
        \App\Models\Category::create(['name' => 'Collezionismo']);
    }
};
