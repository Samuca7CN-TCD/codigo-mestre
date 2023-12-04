<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// use Carbon\Carbon;
// use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        // $now = Carbon::now();
        /*\App\Models\User::factory()->create([
            'name' => 'Administrador',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('codigo-mestre'),
            'profile_photo_path' => 'https://d2gg9evh47fn9z.cloudfront.net/1600px_COLOURBOX9896883.jpg',
            'created_at' => $now,
            'updated_at' => $now
         ]);
         */

         $this->call([
            UserSeeder::class,
            CategoriaSeeder::class,
            CursoSeeder::class,
            AulaSeeder::class,
            CursoUserSeeder::class,
        ]);
    }
}
