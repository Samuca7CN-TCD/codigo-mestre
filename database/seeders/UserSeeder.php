<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();
        DB::table('users')->insert([
            [
                'name' => 'Administrador',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('12345678'),
                'profile_photo_path' => 'https://d2gg9evh47fn9z.cloudfront.net/1600px_COLOURBOX9896883.jpg',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'Samuel Correia Nascimento',
                'email' => 'samuca.7cn@gmail.com',
                'password' => Hash::make('12345678'),
                'profile_photo_path' => 'https://img.freepik.com/fotos-premium/retrato-de-um-homem-jovem-e-feliz-alegre-sorrindo-olhando-para-a-camera-se-divertindo-tiro-na-cabeca-de-um-individuo-do-sexo-masculino-trabalhando-em-casa-no-escritorio_516988-1989.jpg',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name'=> 'Leslie Alexander',
                'email'=> 'leslie.alexander@example.com',
                'password'=> Hash::make('12345678'),
                'profile_photo_path'=> 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
                'created_at'=> $now,
                'updated_at'=> $now
            ],
            [
                'name'=> 'Michael Foster',
                'email'=> 'michael.foster@example.com',
                'password'=> Hash::make('12345678'),
                'profile_photo_path'=> 'https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
                'created_at'=> $now,
                'updated_at'=> $now
            ],
            [
                'name'=> 'Dries Vincent',
                'email'=> 'dries.vincent@example.com',
                'password'=> Hash::make('12345678'),
                'profile_photo_path'=> 'https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
                'created_at'=> $now,
                'updated_at'=> $now
            ],
            [
                'name'=> 'Lindsay Walton',
                'email'=> 'lindsay.walton@example.com',
                'password'=> Hash::make('12345678'),
                'profile_photo_path'=> 'https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
                'created_at'=> $now,
                'updated_at'=> $now
            ],
            [
                'name'=> 'Courtney Henry',
                'email'=> 'courtney.henry@example.com',
                'password'=> Hash::make('12345678'),
                'profile_photo_path'=> 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
                'created_at'=> $now,
                'updated_at'=> $now
            ],
            [
                'name'=> 'Tom Cook',
                'email'=> 'tom.cook@example.com',
                'password'=> Hash::make('12345678'),
                'profile_photo_path'=> 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
                'created_at'=> $now,
                'updated_at'=> $now
            ],

        ]);
    }
}
