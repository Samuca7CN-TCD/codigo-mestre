<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CursoUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();
        DB::table('curso_user')->insert([
            [
                'curso_id' => 1,
                'user_id' => 2,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'curso_id' => 2,
                'user_id' => 2,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'curso_id' => 3,
                'user_id' => 2,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'curso_id' => 1,
                'user_id' => 3,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'curso_id' => 20,
                'user_id' => 3,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'curso_id' => 1,
                'user_id' => 4,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'curso_id' => 2,
                'user_id' => 5,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'curso_id' => 3,
                'user_id' => 6,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'curso_id' => 4,
                'user_id' => 6,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'curso_id' => 5,
                'user_id' => 5,
                'created_at' => $now,
                'updated_at' => $now
            ],
        ]);
    }
}
