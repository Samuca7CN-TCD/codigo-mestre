<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();
        DB::table('categorias')->insert([
            [
                'nome' => 'Web',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'nome' => 'Mobile',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'nome' => 'Data Base',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'nome' => 'Automação',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'nome' => 'Low Code & No Code',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'nome' => 'Testes',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'nome' => 'Arduíno',
                'created_at' => $now,
                'updated_at' => $now
            ],
        ]);
    }
}
