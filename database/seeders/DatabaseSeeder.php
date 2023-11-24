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
         \App\Models\User::factory()->create([
             'name' => 'Jarir Ahmed',
             'email' => 'jarir1114@gmail.com',
             'password' => bcrypt('123456'),
         ]);
     }

}
