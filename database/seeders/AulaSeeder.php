<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AulaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();
        
        $cursos = DB::table('cursos')->select('id')->get();

        foreach ($cursos as $curso) {
            DB::table('aulas')->insert([
                'curso_id' => $curso->id,
                'titulo' => 'Aula Inicial',
                'descricao' => 'Esta é a primeira aula do curso. Bem-vindo!',
                'video_link' => 'https://www.youtube.com/watch?v=lvTA95QRKxE',
                'created_at' => $now,
                'updated_at' => $now
            ]);
            DB::table('aulas')->insert([
                'curso_id' => $curso->id,
                'titulo' => 'Segunda Aula',
                'descricao' => 'Esta é a segunda aula do curso. Bem-vindo!',
                'video_link' => 'https://www.youtube.com/watch?v=lvTA95QRKxE',
                'created_at' => $now,
                'updated_at' => $now
            ]);
            DB::table('aulas')->insert([
                'curso_id' => $curso->id,
                'titulo' => 'Terceira Aula',
                'descricao' => 'Esta é a terça aula do curso. Bem-vindo!',
                'video_link' => 'https://www.youtube.com/watch?v=lvTA95QRKxE',
                'created_at' => $now,
                'updated_at' => $now
            ]);
            DB::table('aulas')->insert([
                'curso_id' => $curso->id,
                'titulo' => 'Quarta Aula',
                'descricao' => 'Esta é a quarta aula do curso. Bem-vindo!',
                'video_link' => 'https://www.youtube.com/watch?v=lvTA95QRKxE',
                'created_at' => $now,
                'updated_at' => $now
            ]);
            DB::table('aulas')->insert([
                'curso_id' => $curso->id,
                'titulo' => 'Quinta Aula',
                'descricao' => 'Esta é a quinta aula do curso. Bem-vindo!',
                'video_link' => 'https://www.youtube.com/watch?v=lvTA95QRKxE',
                'created_at' => $now,
                'updated_at' => $now
            ]);
            DB::table('aulas')->insert([
                'curso_id' => $curso->id,
                'titulo' => 'Sexta Aula',
                'descricao' => 'Esta é a sexta aula do curso. Bem-vindo!',
                'video_link' => 'https://www.youtube.com/watch?v=lvTA95QRKxE',
                'created_at' => $now,
                'updated_at' => $now
            ]);
            DB::table('aulas')->insert([
                'curso_id' => $curso->id,
                'titulo' => 'Sétima Aula',
                'descricao' => 'Esta é a sétima aula do curso. Bem-vindo!',
                'video_link' => 'https://www.youtube.com/watch?v=lvTA95QRKxE',
                'created_at' => $now,
                'updated_at' => $now
            ]);
        }
    }
}
