<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $fillable = [
        'categoria_id',
        'nome',
        'descricao',
        'objetivos',
        'cor',
        'preco',
        'img',
    ];

    public function users(){
        return $this->hasMany(User::class);
    }

    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }

    public function aulas(){
        return $this->belongsToMany(Aula::class);
    }
}
