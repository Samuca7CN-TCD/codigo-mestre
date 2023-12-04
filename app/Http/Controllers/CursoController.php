<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Curso;
use App\Models\Aula;
use App\Models\CursoUser;
use Illuminate\Support\Facades\Auth;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'categoria_id' => ['required', 'integer', 'numeric', 'gt:0'],
            'nome' => ['required', 'string'],
            'descricao' => ['required', 'string'],
            'objetivos' => ['required', 'array', 'min:1'],
            'cor' => ['nullable','string'],
            'preco' => ['required', 'numeric', 'gt:0'],
            'img' => ['required', 'file'],
        ]);

        $img = $validated['img']->store('public/cursos');

        $curso = Curso::create([
            'categoria_id' => $validated['categoria_id'],
            'nome' => $validated['nome'],
            'descricao' => $validated['descricao'],
            'objetivos' => json_encode($validated['objetivos']),
            'cor' => $validated['cor'],
            'preco' => $validated['preco'],
            'img' => $img,
        ]);

        $curso->save();

        return back();
    }

    public function comprar(string $id)
    {
        // Obtém o usuário logado
        $user = auth()->user();

        // Obtém o curso pelo ID
        $curso = Curso::find($id);

        $curso = CursoUser::create([
            'curso_id' => $curso->id,
            'user_id' => $user->id,
        ]);

        $curso->save();

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'categoria_id' => ['required', 'integer', 'numeric', 'gt:0'],
            'nome' => ['required', 'string'],
            'descricao' => ['required', 'string'],
            'objetivos' => ['required', 'array', 'min:1'],
            'cor' => ['nullable','string'],
            'preco' => ['required', 'numeric', 'gt:0'],
            'img' => ['required'],
        ]);

        $curso = Curso::find($id);

        if(gettype($validated['img']) !== 'string'){
            Storage::delete($curso->img);
            $img = $validated['img']->store('public/cursos');
        }else{
            $img = $validated['img'];
        }

        $curso->categoria_id = $validated['categoria_id'];
        $curso->nome = $validated['nome'];
        $curso->descricao = $validated['descricao'];
        $curso->objetivos = json_encode($validated['objetivos']);
        $curso->cor = $validated['cor'];
        $curso->preco = $validated['preco'];
        $curso->img = $img;
        $curso->save();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $curso = Curso::find($id);
        Aula::where('curso_id', $curso->id)->delete();
        CursoUser::where('curso_id', $curso->id)->delete();
        $curso->delete();
    }
}
