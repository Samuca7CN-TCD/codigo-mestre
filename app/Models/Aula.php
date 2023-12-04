<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
    use HasFactory;

    protected $fillable = [
        'curso_id',
        'titulo',
        'descricao',
        'video_link',
        'anotacoes',
    ];

    public function curso(){
        return $this->hasOne(Curso::class);
    }

    public function anotacao(){
        return $this->belongsTo(Anotacao::class);
    }
}
